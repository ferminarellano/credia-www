$(".visual-table").click(function(e){
	$(".visualPanel").hide();
	$(".datatable-container").show();
});

$(".visual-bargraph").click(function(e){
	$(".visualPanel").hide();
	$(".bargraph-container").show();
	
	if(!window.barchart) {
		initBarGraph();
	}
});

$(".visual-linegraph").click(function(e){
	$(".visualPanel").hide();
	$(".linegraph-container").show();
});

$(".visual-piegraph").click(function(e){
	$(".visualPanel").hide();
	$(".piegraph-container").show();
	
	if(!window.piechart) {
		initPieGraph();
	}
});


function initBarGraph() {
	am4core.useTheme(am4themes_animated);
	window.barchart = true;
	window.barchart = am4core.create("chartdiv", am4charts.XYChart);
	
	let chart = window.barchart;
	let indicadores = [...new Set(globalData.map(x => x.indicador.nombre))];
	let periodos = [...new Set(globalData.map(x => x.fecha_inicio))];
	let zonas = [...new Set(globalData.map(x => x.zona_geografica.nombre))];
	
	if(periodos.length > 1 && zonas.length == 1 )
	{
		chart.data = globalData.map(x=>(
			{
				country: x.fecha_inicio.split("-")[0],
				visits: x.valor
			}
		));
		
		bargraph1(chart);
	}
	else if(zonas.length > 1 && periodos.length == 1)
	{
		chart.data = globalData.map(x=>(
			{
				country: x.zona_geografica.nombre,
				visits: x.valor
			}
		));
		
		bargraph1(chart);
	}
	else if(zonas.length > 1 && periodos.length > 1)
	{
		// chart.data = dataCase3(periodos);
		bargraph2(chart, periodos,zonas);
	}
	else
	{
		chart.data = globalData.map(x=>(
			{
				country: x.zona_geografica.nombre,
				visits: x.valor
			}
		));
		
		bargraph1(chart);
	}
	
	
	
	
	
	// if(zonas.length > 1 && periodos.length > 1) {
		
		// zonas.forEach(function(item, index) {
			// createSeries(item, item);
		// });   
		
	// }
	// else {
		
	// }
	
	
				
				
				
	

	
	
}

function bargraph1(chart) {
	var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
	categoryAxis.dataFields.category = "country";
	categoryAxis.renderer.grid.template.location = 0;
	categoryAxis.renderer.minGridDistance = 30;

	categoryAxis.renderer.labels.template.adapter.add("dy", function(dy, target) {
	  if (target.dataItem && target.dataItem.index & 2 == 2) {
		return dy + 25;
	  }
	  return dy;
	});

	var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
	
	series = chart.series.push(new am4charts.ColumnSeries());
		series.dataFields.valueY = "visits";
		series.dataFields.categoryX = "country";
		series.name = "Visits";
		series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";
		series.columns.template.fillOpacity = .8;
		
	series.columns.template.adapter.add("fill", function(fill, target) {
	  return chart.colors.getIndex(target.dataItem.index);
	});
	
	var columnTemplate = series.columns.template;
	columnTemplate.strokeWidth = 2;
	columnTemplate.strokeOpacity = 1;
	
	chart.exporting.menu = new am4core.ExportMenu();
}

function bargraph2(chart, periodos, zonas) {
	
chart.data = dataCase3(periodos);

// Create axes
var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "periodo";
categoryAxis.numberFormatter.numberFormat = "#";
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.cellStartLocation = 0.1;
categoryAxis.renderer.cellEndLocation = 0.9;

var  valueAxis = chart.xAxes.push(new am4charts.ValueAxis()); 
valueAxis.renderer.opposite = true;

// Create series
function createSeries(field, name) {
  var series = chart.series.push(new am4charts.ColumnSeries());
  series.dataFields.valueX = field;
  series.dataFields.categoryY = "periodo";
  series.name = name;
  series.columns.template.tooltipText = "{name}: [bold]{valueX}[/]";
  series.columns.template.height = am4core.percent(100);
  series.sequencedInterpolation = true;

  var valueLabel = series.bullets.push(new am4charts.LabelBullet());
  valueLabel.label.text = "{valueX}";
  valueLabel.label.horizontalCenter = "left";
  valueLabel.label.dx = 10;
  valueLabel.label.hideOversized = false;
  valueLabel.label.truncate = false;

  var categoryLabel = series.bullets.push(new am4charts.LabelBullet());
  categoryLabel.label.text = "{name}";
  categoryLabel.label.horizontalCenter = "right";
  categoryLabel.label.dx = -10;
  categoryLabel.label.fill = am4core.color("#fff");
  categoryLabel.label.hideOversized = false;
  categoryLabel.label.truncate = false;
}

zonas.forEach(function(item, index) {
			createSeries(item, item);
		});   
}

function initPieGraph() {
	am4core.useTheme(am4themes_animated);
	
	window.piechart = true;
	window.piechart = am4core.create("piechartdiv", am4charts.PieChart);
	let chart = window.piechart;
	
	var pieSeries = chart.series.push(new am4charts.PieSeries());
	pieSeries.dataFields.value = "litres";
	pieSeries.dataFields.category = "country";
	
	chart.innerRadius = am4core.percent(30);
	
	pieSeries.slices.template.stroke = am4core.color("#fff");
	pieSeries.slices.template.strokeWidth = 2;
	pieSeries.slices.template.strokeOpacity = 1;
	pieSeries.slices.template
	  // change the cursor on hover to make it apparent the object can be interacted with
	  .cursorOverStyle = [
		{
		  "property": "cursor",
		  "value": "pointer"
		}
	  ];
	  
	pieSeries.alignLabels = false;
	pieSeries.labels.template.bent = true;
	pieSeries.labels.template.radius = 3;
	pieSeries.labels.template.padding(0,0,0,0);

	pieSeries.ticks.template.disabled = true;
	
	var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
	shadow.opacity = 0;


	// Create hover state
	var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

	// Slightly shift the shadow and make it more prominent on hover
	var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
	hoverShadow.opacity = 0.7;
	hoverShadow.blur = 5;

	// Add a legend
	chart.legend = new am4charts.Legend();
	
	chart.data = globalData.map(x=>(
		{
			country: x.zona_geografica.nombre,
			litres: x.valor
		}
	));
	
}

function dataCase3(periodos){
	let groupByDate = [];
	
	periodos.forEach(function(item, index) {
		data_period = globalData.filter(x => x.fecha_inicio == item);
		
		let result = data_period.reduce((accumulator, currentValue, currentIndex) => {
			if(currentIndex==0)
			{
				accumulator['periodo'] = currentValue.fecha_inicio.split("-")[0];
			}
			accumulator[currentValue.zona_geografica.nombre] = parseFloat(currentValue.valor);
			return accumulator;
		},{});
		
		groupByDate.push(result);
		
	});
	
	console.log(groupByDate);
	return groupByDate;
}
				
				
				
				
				