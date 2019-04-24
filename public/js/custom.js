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
	
	chart.data = globalData.map(x=>(
		{
			country: x.zona_geografica.nombre,
			visits: x.valor
		}
	));
	
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

				// Create series
				var series = chart.series.push(new am4charts.ColumnSeries());
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

				
				
				
				
				