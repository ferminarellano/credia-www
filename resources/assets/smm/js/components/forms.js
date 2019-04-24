import React, { Component } from 'react';
import ReactDOM from 'react-dom'; 

/**
 * I think Im not actually using Formset Component.
 */
 
class FormSet extends Component {
	
	render() {
		return (
			<div className="form-group">
				{this.props.fields}
			</div>
		);
	}
}

class Select extends Component {
	
	constructor(props) {
		super(props);
		this.state = {
			value: 'value' in this.props ? this.props.value : [],
			options: 'options' in this.props ? this.props.options : [],
			chainedSelectLinkClicked : false
		};
	
		this.handleChange = this.handleChange.bind(this);
		this.handleChainedEvent = this.handleChainedEvent.bind(this);
	}
	
	/**
	 *	    L I F E    C Y C L E    F U N C T I O N S
	 */
	
	componentDidMount() {
		if('xhr' in this.props) {
			this.getOptions();
		}
				
		if(this.props.classNames.find(cssClass => cssClass === 'select2')) {
			
			$("#" + this.props.id).select2({
				width: '100%',
				placeholder: "Seleccione.."
			});
			
			$("#" + this.props.id).on('change', this.handleChange);
		}
	}
	
	componentDidUpdate(prevProps) {
		if ('xhr' in this.props && this.props.xhr_param !== prevProps.xhr_param) {
			this.getOptions();
		}
	}
	
	render() {
		const options = this.state.options.map(option => <Option key={option.id} value={option.value} label={option.label} />)
		
		return (
			<div className={this.props.parentState.hidden ? "hidden" : ""}>
				<div className="form-group">
					<label htmlFor={this.props.id}>{this.props.label}</label>
					<select id={this.props.id} className={this.props.classNames.join(' ')} name={this.props.name} onChange={this.handleChange} multiple={this.props.multiple} value={this.state.value}>
						{this.props.nullable ? <Option /> : ""}
						{options}
					</select>
				</div>
				
				{this.props.chained &&
					<div className={"more-info-container " + (this.state.chainedSelectLinkClicked ? "hidden" : "")}>
						<button type="button" className="btn btn-link ver-mas pr-0" onClick={this.handleChainedEvent}>{this.props.chainedNoun}</button>
					</div>
				}
				
			</div>
		);
	}
	
	/**
	 *	    E V E N T    M A N A G E M E N T    F U N C T I O N S
	 */
	
	handleChange(event) {
		let data = false;
		let value = false;
		
		if(this.props.classNames.find(cssClass => cssClass === 'select2')) {
			data = $("#" + this.props.id).select2('data');
			value = data.map(datum => datum.id)
			
			let ctx = {
				name: this.props.chained,
				value: value
			};
			
			this.props.handleFormset('updateChained', ctx);
		}
		else {
			value = event.target.value;
		}
		
		this.setState({
			value: value
		});
	}
	
	handleChainedEvent(event) {
		this.setState({
			chainedSelectLinkClicked: true
		});
		
		this.props.handleFormset('visibility', this.props.chained);
	}
	
	/**
	 *    C U S T O M   F U N C T I O N S
	 */
	 
	getOptions() {
		let that = this;
		let param = this.props.xhr_param ? "/" + this.props.xhr_param : "";
		
		axios.get(this.props.xhr + param)
			.then(function (response) {
				that.setState({
					options: response.data.data
				});
			});
	}
	

}

class Option extends Component {
	
	render() {
		
		return (
			<option value={this.props.value}>{this.props.label}</option>
		);
	}
}

class FormFieldFactory {
	static build(data, parentState, handleFormset) {
		switch(data.type) {
			case "Select":
				return (
					<Select
						key={data.id}
						handleFormset={handleFormset}
						parentState={parentState.formset.filter(x => x.name === data.name).shift()}
						{ ...data }
					/>
				);
				break;
		}
	}
}

export {FormSet, Select, FormFieldFactory}