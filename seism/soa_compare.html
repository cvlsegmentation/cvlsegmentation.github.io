<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'> -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300' rel='stylesheet' type='text/css'>
    <meta name="description" content="Jordi Pont-Tuset and Ferran Marques. SEISM, Supervised Evaluation of Image Segmentation Methods.">

    <title>SEISM &ndash; Supervised Evaluation of Image Segmentation Methods</title>
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
                <li><a href="browse.html" class="pure-menu-link">Explore SoA</a></li>
                <li><a href="code.html" class="pure-menu-link">Code</a></li>
                <li><a href="contact.html" class="pure-menu-link">Contact</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Benchmark Image Segmentation</h1>
            <h2>Quantitatively compare state-of-the-art image segmentation techniques</h2>
        </div>

        <div style="margin: auto;max-width: 1200px;">
            <div style="font-family: 'Raleway', sans-serif;margin-left:15px;margin-right:10px;margin-bottom:15mm;">
                <h3 style="margin-top:30px;margin-bottom:10px;">Precision-Recall Frameworks - BSDS500 test set</h3>
                <div class="pure-g" style="margin-bottom:20px">
                    <div id="plot_fb" class="pure-u-1-2" style="font-family: 'Raleway', sans-serif; margin-bottom: 0mm;">
                    </div>
                    <div id="plot_fop" class="pure-u-1-2" style="font-family: 'Raleway', sans-serif; margin-bottom: 0mm;">
                    </div>
                </div>
                <i>For an updated comparison on PASCAL Context, visit the <a href="http://www.vision.ee.ethz.ch/~cvlsegmentation/cob/soa_compare.html" target="_blank">COB website</a>.</i>

                <h3 style="margin-top:30px;margin-bottom:1px;">Legend</h3>
                <ul id="legend_text">
                </ul>
                Is your technique missing although it's published and the code is public? <a href="contact.html">Let us know</a> and we'll add it.
            </div>
        </div>
    </div>
</div>
<script>
    var measure_show_names_short = {"fb": "Fb", "fop": "Fop"}; 
    var measure_show_names_long = {"fb": "Precision-Recall for Boundaries (Fb)", "fop": "Precision-Recall for Objects and Parts (Fop)"}; 


    // ***************************************************************************************************************
    // To add a new technique, modify the variables 'techniques', 'techn_plot_styles', and 'techn_papers';
    // and add the two files in 'data/pr_curves' (fop_technique.txt and fb_technique.txt)
    // ***************************************************************************************************************
    var techniques = ["human", "COB", "LEP", "MCG", "gPb-UCM", "ISCRA", "NCut", "EGB", "MShift", "IIDKL", "NWMC","QuadTree", "human_diff"]; //, "SMaps" 

    // Plot styles
    techn_plot_styles =
                {"COB":{"legend_name": "COB",
                        "color": "black",
                        "type" : "line",
                        "style": "solid"},
                 "LEP":{"legend_name": "LEP",
                        "color": "orange",
                        "type" : "line",
                        "style": "solid"},
                  "MCG":{"legend_name": "MCG",
                            "color": "red",
                            "type" : "line",
                            "style": "solid"},
                  "ISCRA": {"legend_name": "ISCRA",
                            "color": "gray",
                            "type" : "line",
                            "style": "solid"}, 
                  "gPb-UCM": {"legend_name": "gPb-UCM",
                            "color": "cyan",
                            "type" : "line",
                            "style": "solid"}, 
                  "NWMC":  {"legend_name": "NWMC",
                            "color": "blue",
                            "type" : "line",
                            "style": "solid"},
                  "EGB":   {"legend_name": "EGB",
                            "color": "magenta",
                            "type" : "line",
                            "style": "solid"}, 
                  "MShift":{"legend_name": "MShift",
                            "color": "limegreen",
                            "type" : "line",
                            "style": "solid"}, 
                  "NCut": {"legend_name": "NCut",
                            "color": "chocolate",
                            "type" : "line",
                            "style": "solid"}, 
                  "IIDKL": {"legend_name": "IIDKL",
                            "color": "lightskyblue",
                            "type" : "line",
                            "style": "solid"}, 
                  "SMaps":  {"legend_name": "SMaps",
                             "color": "rebeccapurple",
                             "type" : "line",
                             "style": "solid"}, 
                  "QuadTree": {"legend_name": "QuadTree",
                               "color": "grey",
                               "type" : "line",
                               "style": "dashed"},
                  "human":   {"legend_name": "Human",
                              "color": "magenta",
                              "type" : "marker",
                              "marker_type" : "circle",
                              "marker_size" : 45}, 
                  "human_diff": {"legend_name": "HumanDiff",
                                 "color": "magenta",
                                 "type" : "marker",
                                 "marker_type" : "circle",
                                 "marker_size" : 45}, 
                          };

        techn_papers = 
                {"COB":{"authors": ["K.K. Maninis", "J. Pont-Tuset","P. Arbeláez", "L. Van Gool"],
                            "title" : "Convolutional Oriented Boundaries",
                            "conference": "ECCV 2016"},
                "LEP":{"authors": ["Q. Zhao"],
                        "title" : "Segmenting Natural Images with the Least Effort as Humans",
                        "conference": "BMVC 2015"},
                 "MCG" :{"authors": ["P. Arbeláez","J. Pont-Tuset","J. Barron", "F. Marques", "J. Malik"],
                            "title" : "Multiscale combinatorial grouping",
                            "conference": "CVPR 2014"},
                  "ISCRA": {"authors": ["Z. Ren", "G. Shakhnarovich"],
                            "title" : "Image segmentation by cascaded region agglomeration",
                            "conference": "CVPR 2013"},
                  "gPb-UCM": {"authors": ["P. Arbeláez","M. Maire","C.C. Fowlkes", "J. Malik"],
                            "title" : "Contour Detection and Hierarchical Image Segmentation",
                            "conference": "IEEE TPAMI 2011"},
                  "NWMC":  {"authors": ["V. Vilaplana","F. Marques", "P. Salembier"],
                            "title" : "Binary partition trees for object detection",
                            "conference": "IEEE TIP 2008"},
                  "NCut":  {"authors": ["J. Shi","J. Malik"],
                            "title" : "Normalized cuts and image segmentation",
                            "conference": "IEEE TPAMI 2000"},
                  "EGB":   {"authors": ["P.F. Felzenszwalb", "D.P. Huttenlocher"],
                            "title" : "Efficient graph-based image segmentation",
                            "conference": "IJCV 2004"},
                  "MShift":{"authors": ["D. Comaniciu", "P. Meer"],
                            "title" : "Mean shift: A robust approach toward feature space analysis",
                            "conference": "IEEE TPAMI 2002"},
                  "IIDKL": {"authors": ["F. Calderero", "F. Marques"],
                            "title" : "Region Merging Techniques Using Information Theory Statistical Measures",
                            "conference": "IEEE TIP 2010"},
                  "SMaps":  {"authors": ["L. Najman", "M. Schmitt"],
                            "title" : "Geodesic saliency of watershed contours and hierarchical segmentation",
                            "conference": "IEEE TPAMI 1996"},
                  "QuadTree": {"authors": [],
                            "title" : "Baseline technique consisting of a rectangular pyramid, regardless of the image content"},
                  "human":   {"title" : "Performance evaluated from ground-truth partitions against other ground-truth partitions of the same image",
                              "authors": []},
                  "human_diff": {"title" : "Performance evaluated from ground-truth partitions against other ground-truth partitions of <i>another<\i> image",
                              "authors": []},
                          };


    function do_one_plot(div_id, measure_name, database, gt_set)
    {

        function plot_one(svg_canvas, technique, database, gt_set)
        {
            var filename = "data/pr_curves/BSDS500_test_"+measure_name+"_"+technique+".txt";
            d3.tsv(filename, function(error, data)
            {
                // Get the ODS
                best_f = 0;
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
                d3.select("#"+measure_name+"_"+technique+"_F").text("["+parseFloat(best_f).toFixed(3)+"]");

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
        var margin = {top: 30, right: 10, bottom: 35, left: 48},
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
        x.domain([0, 1]);
        y.domain([0, 1]);

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
            plot_one(svg, techniques[ii], database, gt_set);

		function plot_one_iso_f_line(svg_canvas, F_value)
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
			    data.push({x:  curr_x, y: (F_value*curr_x)/(2*curr_x-F_value)});
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
			plot_one_iso_f_line(svg,F);
		}



        // ************ Static Legend ************
        leg_styles =
                {"fb": {"x":    5,
                        "y":     height-125,
                        "nrows" : 7
                        },
                 "fop": {"x":    width-160,
                        "y":     5,
                        "nrows" : 100
                        }
                }
        var legend = svg.append("g")
                        .attr("transform", "translate("+ leg_styles[measure_name].x +","+ leg_styles[measure_name].y +")")
                        .attr("id", "legend")
        var ncols = Math.ceil(techniques.length/leg_styles[measure_name].nrows);
        var nrows;
        if (techniques.length>leg_styles[measure_name].nrows)
            nrows = leg_styles[measure_name].nrows;
        else
            nrows = techniques.length;

        var col_width = 155;
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
            var curr_col = Math.floor(ii/leg_styles[measure_name].nrows);
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
                  .text(techn_plot_styles[techniques[ii]].legend_name)
                  .style("font-size", "small");
            legend.append("text")
                  .attr("x", 110 + col_width*curr_col + col_sep*(curr_col))
                  .attr("y", (curr_row+1)*15)
                  .attr("dy", ".35em")
                  .attr("id",measure_name+"_"+techniques[ii]+"_F")
                  .style("font-size", "small");
        }

        // Title
        svg.append("text")
            .attr("x", (width / 2))             
            .attr("y", 0 - (margin.top / 4))
            .attr("text-anchor", "middle")  
            .style("font-size", "15px") 
            .text(measure_show_names_long[measure_name]); 
    }

    do_one_plot("#plot_fb" , "fb" , "BSDS", "test")
    do_one_plot("#plot_fop", "fop", "BSDS", "test")

    // Create the text of the legend
    var leg_text = "";
    for(var i = 0; i < techniques.length; i++)
    {
        leg_text = leg_text + "<li><b>" + techn_plot_styles[techniques[i]].legend_name + "</b>: " + 
                                          techn_papers[techniques[i]].title
        for(var j = 0; j < techn_papers[techniques[i]].authors.length; j++)
            leg_text = leg_text + ", <i>" + techn_papers[techniques[i]].authors[j] + "</i>"
        if ('conference' in techn_papers[techniques[i]])
            leg_text = leg_text + ", " + techn_papers[techniques[i]].conference
        leg_text = leg_text + ".</li>"

    }
    
    // Fill legend
    document.getElementById("legend_text").innerHTML = leg_text;

</script>



<script src="js/ui.js"></script>


</body>

</html>


