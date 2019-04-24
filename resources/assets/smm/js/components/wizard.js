import React, { Component } from 'react';
import ReactDOM from 'react-dom'; 

import {FormSet, Select, FormFieldFactory} from './forms'

class Wizard extends Component {
	
	constructor(props) {
		super(props)
		this.state = {
			activePanel: 1,
			stepCount: this.props.steps.length
		}
		
		this.handleSubmit = this.handleSubmit.bind(this);
		this.handler = this.handler.bind(this);
		this.prev = this.prev.bind(this);
		this.next = this.next.bind(this);
	}
	
	handleSubmit(event) {
		event.preventDefault();
		
		const formData = new FormData(event.target);
		
		var form_data = {};
		
		formData.forEach((value, key) => {
			if(form_data[key]) {
				form_data[key].push(value);
			}
			else {
				form_data[key] = [value];
			}
		});
		
		axios.get(this.props.action, {
				params: form_data
			})
			.then(function (response) {
				console.log(response.data.data);
			});		
	}
	
	handler(active) {
		this.setState(prevState => {
			return {
				activePanel: active
			}
		});
	}
	
	prev(event) {
		if(!event.target.classList.contains('disabled')) {
			this.setState(prevState => {
				return {
					activePanel: (prevState.activePanel - 1) > 0 ? (prevState.activePanel -1) : 1
				}
			});
		}
	}
	
	next(event) {
		if(!event.target.classList.contains('disabled')) {
			this.setState(prevState => {
				return {
					activePanel: (prevState.activePanel + 1) < prevState.stepCount ? (prevState.activePanel + 1) : 3
				}
			});
		}
	}
	
	render() {
		return (
			<div id="wizardContainer" className="row">
				<div className="col-md-12">
					<form onSubmit={this.handleSubmit} method="get">
						<div className="row">
							<WizardStepsContainer steps={this.props.steps} activePanel={this.state.activePanel} handler={this.handler} />
							<WizardPaneContainer steps={this.props.steps} activePanel={this.state.activePanel} handler={this.handler} />
						</div>
						<div className="row">
							<div className="col">
								<div className="wizard-controls text-right">
									<button type="button" className={"btn btn-default wizard-control-btn prev " + (this.state.activePanel == 1 ? "disabled" : "")} onClick={this.prev}>Anterior</button>
									<button type="button" className={"btn btn-primary wizard-control-btn next " + (this.state.activePanel == this.state.stepCount ? "disabled hidden" : "")} onClick={this.next}>Siguiente</button>
									<button type="submit" className={"btn btn-success wizard-control-btn search " + (this.state.activePanel == this.state.stepCount ? "" : "hidden")} onClick={this.next}><i className="fas fa-search"></i> Buscar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		);
	}
}

class WizardStepsContainer extends Component {
	
	constructor(props) {
		super(props)
	}
	
	render() {
		
		const steps = this.props.steps.map(step => <WizardStep key={step.id} step={step} handler={this.props.handler} activePanel={this.props.activePanel} />)
		
		return (
			<div className="d-none d-sm-block col-xl-3 col-lg-4 col-md-12">
				<div className="steps-container">
					<div className="row">
						{steps}
					</div>
				</div>
			</div>
		);
	}
}

class WizardStep extends Component {
	
	constructor(props) {
		super(props)
		this.stepClicked = this.stepClicked.bind(this)
	}
	
	stepClicked() {
		this.props.handler(this.props.step.id)
	}
	
	render() {
		return (
			<div className="col col-lg-12 col-md col-sm">
				<div className={"wizard-step " + (this.props.activePanel == this.props.step.id ? "active" : "")} onClick={this.stepClicked}>
					<div className="row">
						<div className="col-lg-4 col-md-4 pr-md-0 col-sm-12">
							<div className="wizard-step-number d-flex align-items-center justify-content-center">
								{this.props.step.id}
							</div>
						</div>
						
						<div className="col-lg-8 pl-lg-0 col-md-8 d-none d-md-block">
							<div className="wizard-step-name">
								{this.props.step.name} 
							</div>
						</div>
					</div>
					
				</div>
			</div>
		);
	}
}

class WizardPaneContainer extends Component {
	
	constructor(props) {
		super(props)
	}
	
	render() {
		
		const panes = this.props.steps.map(step => <WizardPane key={step.id} step={step} activePanel={this.props.activePanel} />)
		
		return (
			<div className="col-xl-9 col-lg-8 col-md-12">
				<div className="panes-container">
					{panes}
				</div>
			</div>
		);
	}
}

class WizardPane extends Component {
	
	constructor(props) {
		super(props);
		this.state = {
			formset: this.props.step.formset
		};
		
		this.handleFormset = this.handleFormset.bind(this);
		this.toggleVisibility = this.toggleVisibility.bind(this);
	}
	
	handleFormset(option, data) {
		
		switch(option) {
			
			case 'visibility':
				this.toggleVisibility(data);
				break;
				
			case 'updateChained':
				this.updateOptions(data);
				break;
		}
	}
	
	updateOptions(data) {
		/**
		/*  Encontrar el data.name en state.formset y modificar el xhr
		*/
		
		this.setState((state, props) => {
			
			let new_formset = state.formset.map(x => {
				if(x.name === data.name)
				{
					x.xhr_param = data.value.join(";");
				}
				return x;
			});
			
			return {
				formset: new_formset
			};
			
		});
	}
	
	toggleVisibility(element) {
		
		this.setState((state, props) => {
			
			let new_formset = state.formset.map(x => {
				if(x.name === element)
				{
					x.hidden = !x.hidden;
				}
				return x;
			});
			
			return {
				formset: new_formset
			};
			
		});
	}
	
	render() {
		const formset = this.props.step.formset.map((formfield) => FormFieldFactory.build(formfield, this.state, this.handleFormset));
		
		return (
			<div className={"wizard-pane " + (this.props.activePanel != this.props.step.id ? "hidden" : "")}>
				
				<div className="wizard-pane-header">
					<span className="wizard-pane-header-title">{this.props.step.title}</span><br />
					<span className="wizard-pane-header-instructions">{this.props.step.helptext}</span>
					<hr />
				</div>
				
				<div className="wizard-pane-body">
					{formset}
				</div>
				
				<div className="wizard-pane-footer"></div>
				
			</div>
		);
	}
}

export default Wizard