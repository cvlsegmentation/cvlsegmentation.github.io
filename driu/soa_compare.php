<!doctype html>
<html lang="en">
<head>
	 <link rel="shortcut icon" href="images/icon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'> -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300' rel='stylesheet' type='text/css'>
    <meta name="description" content="Jordi Pont-Tuset and Ferran Marques. SEISM, Supervised Evaluation of Image Segmentation Methods.">

    <title>Vessel Segmentation SoA</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
    
    <!--Includes-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- load the d3.js library -->    
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <style type="text/css">
        .axis path{
            fill: none;
            stroke: black;
            stroke-width: 2;
            shape-rendering: crispEdges;
        }

        .axis line {
            fill: none;
            stroke: black;
            stroke-width: 1;
            shape-rendering: crispEdges;
        }
    </style>
</head>


<body>
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">

            <ul class="pure-menu-list">
                <li><a href="index.html" class="pure-menu-link">Home</a></li>
                <li><a class="pure-menu-link pure-menu-selected">Benchmark SoA</a></li>
                <li><a href="browse_DRIVE.php" class="pure-menu-link">Explore SoA</a></li>
                <li><a href="downloads.html" class="pure-menu-link">Downloads</a></li>
                <li><a href="contact.php" class="pure-menu-link">Contact</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Benchmark Vessel and Optic Disc Detection</h1>
            <h2>Quantitatively compare state-of-the-art retinal vessel and optic disc segmentation techniques</h2>
        </div>

        <div style="margin: auto;max-width: 1200px;">
            <div style="font-family: 'Raleway', sans-serif;margin-left:15px;margin-right:10px;margin-bottom:15mm;">
                <h3 style="margin-top:30px;margin-bottom:10px;">Region Precision-Recall Frameworks - Retinal Vessel Segmentation</h3>
                <div class="pure-g">
                    <div id="plot_fr_DRIVE" class="pure-u-1-2" style="font-family: 'Raleway', sans-serif; margin-bottom: 0mm;">
                    </div>
                    <div id="plot_fr_STARE" class="pure-u-1-2" style="font-family: 'Raleway', sans-serif; margin-bottom: 0mm;">
                    </div>
                </div>
                <!-- <h3 style="margin-top:30px;margin-bottom:10px;">F-measure Comparison Tables - BSDS500 test set</h3> -->
            </div>
        </div>
        <div style="margin: auto;max-width: 1200px;">
            <div style="font-family: 'Raleway', sans-serif;margin-left:15px;margin-right:10px;margin-bottom:15mm;">
                <h3 style="margin-top:30px;margin-bottom:10px;">Region Precision-Recall Frameworks - Optic Disc Detection</h3>
                <div class="pure-g">
                    <div id="plot_fr_DRIONS" class="pure-u-1-2" style="font-family: 'Raleway', sans-serif; margin-bottom: 0mm;">
                    </div>
                    <div id="plot_fr_RIMONE" class="pure-u-1-2" style="font-family: 'Raleway', sans-serif; margin-bottom: 0mm;">
                    </div>
                </div>
                <!-- <h3 style="margin-top:30px;margin-bottom:10px;">F-measure Comparison Tables - BSDS500 test set</h3> -->

                <h3 style="margin-top:30px;margin-bottom:1px;">Legend</h3>
                <ul id="legend_text">
                </ul>
                Is your technique missing although it's published and the results are public? <a href="contact.php">Let us know</a> and we'll add it.
            </div>
        </div>
    </div>
</div>
<script>
    var measure_show_names_short = {"fr": "Fr", "fop": "Fop"}; 
    var measure_show_names_long = {"fr": "Precision-Recall for Regions", "fop": "Precision-Recall for Objects and Parts (Fop)"}; 


    // ***************************************************************************************************************
    // To add a new technique, modify the variables 'techniques', 'techn_plot_styles', and 'techn_papers';
    // and add the two files in 'data/pr_curves' (fop_technique.txt and fb_technique.txt)
    // ***************************************************************************************************************
    var techniques_DRIVE = ["Human", "DRIU", "N4_fields", "Kernel_Boost", "HED", "DeepVessel", "CRFs", "Wavelets", "Ricci_Line", "SE"]; //, "SMaps"
    var techniques_STARE = ["Human", "DRIU","HED", "DeepVessel", "Wavelets", "Ricci_Line"]; //, "SMaps"
    var techniques_DRIONS = ["Human", "DRIU"]; //, "SMaps"
    var techniques_RIMONE = ["Human", "DRIU"]; //, "SMaps"

    // Plot styles
    techn_plot_styles =
                {"DRIU":{"legend_name": "DRIU",
                        "color": "black",
                        "type" : "line",
                        "style": "solid"},
                  "N4_fields":{"legend_name": "N4 fields",
                            "color": "blue",
                            "type" : "line",
                            "style": "solid"},
                  "Kernel_Boost": {"legend_name": "Kernel Boost",
                            "color": "orangered",
                            "type" : "line",
                            "style": "solid"}, 
                  "HED": {"legend_name": "HED",
                            "color": "cyan",
                            "type" : "line",
                            "style": "solid"}, 
                  "DeepVessel": {"legend_name": "DeepVessel",
                            "color": "orange",
                            "type" : "line",
                            "style": "solid"}, 
                  "CRFs":  {"legend_name": "CRFs",
                            "color": "gray",
                            "type" : "marker",
                            "marker_type" : "circle",
                            "marker_size" : 45},
                  "Wavelets":   {"legend_name": "Wavelets",
                            "color": "magenta",
                            "type" : "line",
                            "style": "solid"}, 
                  "Ricci_Line":	{"legend_name": "Line Detectors",
                            "color": "limegreen",
                            "type" : "line",
                            "style": "solid"}, 
                  "SE": {"legend_name": "SE",
                            "color": "chocolate",
                            "type" : "line",
                            "style": "solid"}, 
                  "Human":   {"legend_name": "Human",
                              "color": "magenta",
                              "type" : "marker",
                              "marker_type" : "circle",
                              "marker_size" : 45}, 
                          };

        techn_papers = 
                {"DRIU":{"authors": ["K.K. Maninis","J. Pont-Tuset","P. Arbeláez","Luc Van Gool"],
                        "title" : "Deep Retinal Image Understanding",
                        "conference": "MICCAI 2016"},
                 "DeepVessel":{"authors": ["H. Fu","Y. Xu","S. Lin","D. Wong","J. Liu"],
                        "title" : "DeepVessel: Retinal Vessel Segmentation via Deep Learning and Conditional Random Field",
                        "conference": "MICCAI 2016"},
                 "N4_fields" :{"authors": ["Y. Ganin","V. Lempitsky"],
                            "title" : "N^4 fields: Neural Network Nearest Neighbor Fields for Image Transforms",
                            "conference": "ACCV 2014"},
                  "Kernel_Boost": {"authors": ["C. Becker", "R. Rigamonti", "V. Lepetit", "P. Fua"],
                            "title" : "Supervised Feature Learning for Curvilinear Structure Segmentation",
                            "conference": "MICCAI 2013"},
                  "HED": {"authors": ["S. Xie","Z. Tu"],
                            "title" : "Holistically Nested Edge Detection",
                            "conference": "ICCV 2015"},
                  "CRFs":  {"authors": ["J.I. Orlando","M. Blaschko"],
                            "title" : "Learning Fully-Connected CRFs for Blood Vessel Segmentation in Retinal Images",
                            "conference": "MICCAI 2014"},
                  "Wavelets":  {"authors": ["J. Soares","J. Leandro","R. Cesar","H. Jelinek","M. Cree"],
                            "title" : "Retinal Vessel Segmentation Using the 2-D Morlet Wavelet and Supervised Classification",
                            "conference": "IEEE T-MI 2006"},
                  "Ricci_Line":   {"authors": ["E. Ricci", "R. Perfetti"],
                            "title" : "Retinal Blood Vessel Segmentation Using Line Operators and Support Vector Classification",
                            "conference": "IEEE T-MI 2007"},
                  "SE":{"authors": ["P. Dollár", "C.L Zitnick"],
                            "title" : "Fast Edge Detection Using Structured Forests",
                            "conference": "IEEE TPAMI 2015"},
                  "Human":   {"title" : "Performance of the second human annotator evaluated against the first.",
                              "authors": []},
                          };


    function do_one_plot(div_id, measure_name, database, gt_set,techniques,x_limit,y_limit)
    {
        function plot_one(svg_canvas, technique, database, gt_set,x_limit,y_limit)
        {
            var filename = "data/pr_curves/"+database+"_"+gt_set+"_"+measure_name+"_"+technique+".txt";
            d3.tsv(filename, function(error, data2)
            {
                // Get the ODS
                var data = [];
                best_f = 0;
                for (var ii = 0; ii < data2.length; ii++)
                {
                	  if((data2[ii].Precision>=y_limit)&&(data2[ii].Recall>=x_limit))
                	  {
                	  	data.push({Precision:  data2[ii].Precision, Recall: data2[ii].Recall});
                	  }
                }
                
                for (var ii = 0; ii < data.length; ii++)
                {
                    var curr_f = 2*parseFloat(data[ii].Precision)*parseFloat(data[ii].Recall)/(parseFloat(data[ii].Precision)+parseFloat(data[ii].Recall));
                    if (best_f<curr_f)
                    {
                        best_pr = data[ii];
                        best_f  = curr_f;
                    }
                }
              
                // Put the best F in the legend
                d3.select("#"+measure_name+"_"+database+"_"+technique+"_F").text("["+parseFloat(best_f).toFixed(3)+"]");

                // Actual plotting
                var plot_style = techn_plot_styles[technique];
                if (plot_style.type == "line")
                { 
                    // Add the line
                    if (plot_style.style=="dashed")
                    {
                        svg_canvas.append("path")
                                  .attr("class", "line")
                                  .attr("d", valueline(data))
                                  .style("stroke", plot_style.color)
                                  .style("stroke-width", 2)
                                  .style("fill", "none")
                                  .style("stroke-dasharray", "5,5");
                    }
                    else
                    {
                        svg_canvas.append("path")
                                  .attr("class", "line")
                                  .attr("d", valueline(data))
                                  .style("stroke", plot_style.color)
                                  .style("stroke-width", 2)
                                  .style("fill", "none");
                    }

                    // Add the marker at ODS
                    svg_canvas.selectAll(".point")
                              .data([best_pr])
                              .enter().append("path")
                              .attr("d", d3.svg.symbol().type("cricle").size("20"))
                              .attr("transform", function(d) { return "translate(" + x(d.Recall) + "," + y(d.Precision) + ")"; })
                              .style("stroke", plot_style.color)
                              .style("fill", plot_style.color);
                }
                else
                {
                    svg_canvas.selectAll(".point")
                              .data(data)
                              .enter().append("path")
                              .attr("d", d3.svg.symbol().type(plot_style.marker_type).size(plot_style.marker_size))
                              .attr("transform", function(d) { return "translate(" + x(d.Recall) + "," + y(d.Precision) + ")"; })
                              .style("stroke", plot_style.color)
                              .style("stroke-width", 1.5)
                              .style("fill", "white");
                }
            });
        }

        // Set the dimensions of the canvas / graph
        var margin = {top: 30, right: 20, bottom: 35, left: 58},
            width  = parseInt(d3.select(div_id).style('width')),
            width  = width - margin.left - margin.right,
            height = width+70,
            height = height - margin.top - margin.bottom;
        
        // Set the ranges
        var x = d3.scale.linear().range([0, width]);
        var y = d3.scale.linear().range([height, 0]);

        // Define the axes
        var xAxis = d3.svg.axis().scale(x)
                      .innerTickSize(-height)
                      .outerTickSize(0)
                      .tickPadding(23)
                      .orient("bottom").ticks(10); // Labels down the line

        var x2Axis = d3.svg.axis().scale(x)
                       .orient("bottom")
                       .innerTickSize(5)
                       .outerTickSize(5)
                       .tickFormat("");

        var x3Axis = d3.svg.axis().scale(x)
                       .innerTickSize(height)
                       .outerTickSize(0)
                       .tickFormat("")
                       .orient("bottom").ticks(50);

        var yAxis = d3.svg.axis().scale(y)
                      .innerTickSize(-width)
                      .outerTickSize(0)
                      .tickPadding(25)
                      .orient("left").ticks(10);


        var y2Axis = d3.svg.axis().scale(y)
                       .innerTickSize(5)
                       .outerTickSize(5)
                       .tickFormat("")
                       .orient("left").ticks(10);

        var y3Axis = d3.svg.axis().scale(y)
                       .innerTickSize(-width)
                       .outerTickSize(0)
                       .tickFormat("")
                       .orient("left").ticks(50);


        // Define the line
        var valueline = d3.svg.line()
                          .x(function(d) { return x(d.Recall); })
                          .y(function(d) { return y(d.Precision); });

        // Clear previous plot (if any)
        d3.select(div_id)
          .selectAll("svg")
          .remove();

        // Adds the svg canvas
        var svg = d3.select(div_id)
                    .append("svg")
                    .attr("width", width + margin.left + margin.right)
                    .attr("height", height + margin.top + margin.bottom)
                    .append("g")
                    .attr("transform","translate(" + margin.left + "," + margin.top + ")");

        // Adapt the domain of the data (limits)
        //var x_limit = 0.3;
        //var y_limit = 0.3;
        x.domain([x_limit, 1]);
        y.domain([y_limit, 1]);

        // Add the X Axis
        svg.append("g")
            .attr("class", "x axis")
            .attr("transform", "translate(0," + height + ")")
            .call(xAxis)
           .append("text")
            .attr("x", width)
            .attr("dx", -1)
            .attr("dy", 11)
            .style("text-anchor", "end")
            .style("font-size", "small")
            .text("Recall");
          
        svg.selectAll("g.x.axis line")
           .style("stroke-dasharray", "1,1")
           .style("stroke", "black")
           .style("opacity", 0.2)

        svg.append("g")
           .attr("class", "x axis")
           .call(x3Axis)
           .style("stroke-dasharray", "1,1")
           .style("opacity", 0.2)
           .style("stroke-width", 1);

        svg.selectAll("g.x.axis path")
           .style("display", "none")


        // Add the Y Axis
        svg.append("g")
           .attr("class", "y axis")
           .call(y3Axis)
           .style("stroke-dasharray", "1,1");

        svg.append("g")
            .attr("class", "y axis")
            .call(yAxis)
           .append("text")
            .attr("transform", "rotate(-90)")
            .attr("y", 6)
            .attr("dy", "-10")
            .style("text-anchor", "end")
            .style("font-size", "small")
            .text("Precision");

        svg.selectAll("g.y.axis g.tick line")
           .style("stroke", "#D0D0D0")





        svg.selectAll("g.y.axis path")
           .style("display", "none")

        svg.append("g")
           .attr("class", "x axis")
           .attr("transform", "translate(0," + (height+15) + ")")
           .call(x2Axis);

        svg.append("g")
           .attr("class", "y axis")
           .attr("transform", "translate(-17,0)")
           .call(y2Axis);


        // Small text
        svg.selectAll("g.y.axis text")
           .style("font-size","small");

        svg.selectAll("g.x.axis text")
           .style("font-size","small");

        // Get the data
        for (var ii = 0; ii < techniques.length; ii++)
            plot_one(svg, techniques[ii], database, gt_set,x_limit,y_limit);

		function plot_one_iso_f_line(svg_canvas, F_value,x_limit,y_limit)
		{
	        var data = []
		  	var n = 100
			var line22 = d3.svg.line()
			    .x(function(d) { return x(d.x); })
			    .y(function(d) { return y(d.y); });

			x0 = F_value/(2-F_value);
			x1 = 1;
			for (var k = 0; k < n; k++) {
				curr_x = x0+(x1-x0)/n*k;
				if (curr_x>x_limit){
					curr_y = (F_value*curr_x)/(2*curr_x-F_value);
			    	if (curr_y>y_limit) {data.push({x:  curr_x, y: curr_y});}
			    }
			}

	        svg.append("path")
		       .attr("class", "line")
		       .attr("d", line22(data))
	           .style("stroke", "lightgreen")
		       .style("stroke-width", 0.5)
		       .style("fill", "none");  
		}

        // Plot the iso-F lines
		for (var F = 0.1; F < 1; F+=0.1) {
			plot_one_iso_f_line(svg,F,x_limit,y_limit);
		}



        // ************ Static Legend ************
        leg_styles =
                {"fr_DRIVE": {"x":    0,
                        "y":     height-90,
                        "nrows" : 5
                        },
                 "fr_STARE": {"x":    0,
                        "y":     height-90,
                        "nrows" : 5
                        },
                 "fr_DRIONS": {"x":    0,
                        "y":     height-50,
                        "nrows" : 5
                        },
                 "fr_RIMONE": {"x":    0,
                        "y":     height-50,
                        "nrows" : 5
                        },
                }
        var legend = svg.append("g")
                        .attr("transform", "translate("+ leg_styles[measure_name+"_"+database].x +","+ leg_styles[measure_name+"_"+database].y +")")
                        .attr("id", "legend")
        var ncols = Math.ceil(techniques.length/leg_styles[measure_name+"_"+database].nrows);
        var nrows;
        if (techniques.length>leg_styles[measure_name+"_"+database].nrows)
            nrows = leg_styles[measure_name+"_"+database].nrows;
        else
            nrows = techniques.length;

        var col_width = 180;
        var col_sep   = 15;
        legend.append("rect")
              .attr("width", col_width*ncols + col_sep*(ncols-1) )
              .attr("height", 15 + 15*nrows)
              .style("fill","white")
              .style("opacity",0.95)
              .style("stroke","black")
              .attr("id", "legend_rect");

        for (var ii = 0; ii < techniques.length; ii++)
        { 
            var curr_col = Math.floor(ii/leg_styles[measure_name+"_"+database].nrows);
            var curr_row = ii-curr_col*nrows;
            if (techn_plot_styles[techniques[ii]].type == "marker")
            {  
                legend.append("circle")
                    .attr("r", 3.5)
                    .attr("cx", 22 + col_width*curr_col + col_sep*(curr_col))
                    .attr("cy", (curr_row+1)*15)
                    .style("stroke", techn_plot_styles[techniques[ii]].color)
                    .style("stroke-width", 1.5)
                    .style("fill", "white");
            }
            else
            {  
                // Add the valueline path.
                if (techn_plot_styles[techniques[ii]].style=="dashed")
                {
                	legend.append("rect")
	                    .attr("width", 5)
	                    .attr("height", 1)
	                    .attr("x", 12 + col_width*curr_col + col_sep*(curr_col))
	                    .attr("y", (curr_row+1)*15)
	                    .style("stroke", techn_plot_styles[techniques[ii]].color)
	                    .style("stroke-width", 1);

                	legend.append("rect")
	                    .attr("width", 5)
	                    .attr("height", 1)
	                    .attr("x", 19.5 + col_width*curr_col + col_sep*(curr_col))
	                    .attr("y", (curr_row+1)*15)
	                    .style("stroke", techn_plot_styles[techniques[ii]].color)
	                    .style("stroke-width", 1);
	                    
                	legend.append("rect")
	                    .attr("width", 5)
	                    .attr("height", 1)
	                    .attr("x", 27 + col_width*curr_col + col_sep*(curr_col))
	                    .attr("y", (curr_row+1)*15)
	                    .style("stroke", techn_plot_styles[techniques[ii]].color)
	                    .style("stroke-width", 1);    
                }
                else
                {
                	legend.append("rect")
	                    .attr("width", 20)
	                    .attr("height", 1)
	                    .attr("x", 12 + col_width*curr_col + col_sep*(curr_col))
	                    .attr("y", (curr_row+1)*15)
	                    .style("stroke", techn_plot_styles[techniques[ii]].color)
	                    .style("stroke-width", 1);
                }

            }

            legend.append("text")
                  .attr("x", 42 + col_width*curr_col + col_sep*(curr_col))
                  .attr("y", (curr_row+1)*15)
                  .attr("dy", ".35em")
                  .attr("id",measure_name+"_"+database+"_"+techniques[ii]+"_F")
                  .style("font-size", "small");
            legend.append("text")
                  .attr("x", 90 + col_width*curr_col + col_sep*(curr_col))
                  .attr("y", (curr_row+1)*15)
                  .attr("dy", ".35em")
                  .text(techn_plot_styles[techniques[ii]].legend_name)
                  .style("font-size", "small");
        }

        // Title
        svg.append("text")
            .attr("x", (width / 2))             
            .attr("y", 0 - (margin.top / 4))
            .attr("text-anchor", "middle")  
            .style("font-size", "15px") 
            .text(measure_show_names_long[measure_name]+" - "+database); 
    }

    do_one_plot("#plot_fr_DRIVE" , "fr" , "DRIVE", "test",techniques_DRIVE,0.3,0.3)
    do_one_plot("#plot_fr_STARE" , "fr" , "STARE", "test",techniques_STARE,0.3,0.3)
    do_one_plot("#plot_fr_DRIONS" , "fr" , "DRIONS", "test",techniques_DRIONS,0.8,0.8)
    do_one_plot("#plot_fr_RIMONE" , "fr" , "RIMONE", "test",techniques_RIMONE,0.8,0.8)

    // Create the text of the legend
    var leg_text = "";
    for(var i = 0; i < techniques_DRIVE.length; i++)
    {
        leg_text = leg_text + "<li><b>" + techn_plot_styles[techniques_DRIVE[i]].legend_name + "</b>: " + 
                                          techn_papers[techniques_DRIVE[i]].title
        for(var j = 0; j < techn_papers[techniques_DRIVE[i]].authors.length; j++)
            leg_text = leg_text + ", <i>" + techn_papers[techniques_DRIVE[i]].authors[j] + "</i>"
        if ('conference' in techn_papers[techniques_DRIVE[i]])
            leg_text = leg_text + ", " + techn_papers[techniques_DRIVE[i]].conference
        leg_text = leg_text + ".</li>"

    }
    
    // Fill legend
    document.getElementById("legend_text").innerHTML = leg_text;

</script>



<script src="js/ui.js"></script>


</body>

</html>


