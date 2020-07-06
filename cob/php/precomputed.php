<!doctype html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="images/icon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'> -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300' rel='stylesheet' type='text/css'>
    <meta name="description" content="Jordi Pont-Tuset and Ferran Marques. SEISM, Supervised Evaluation of Image Segmentation Methods.">

    <title>COB &ndash; Convolutional Oriented Boundaries</title>
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
                <li><a href="soa_compare.php" class="pure-menu-link">Benchmark SoA</a></li>
                <li><a href="explore.php" class="pure-menu-link">Explore SoA</a></li>
                <li><a class="pure-menu-link pure-menu-selected">Pre-Computed</a></li>
                <li><a href="code.html" class="pure-menu-link">Code</a></li>
                <li><a href="contact.php" class="pure-menu-link">Contact</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Pre-Computed COB Results</h1>
            <h2>Download COB UCMs, segmented proposals, and box proposals</h2>
        </div>

       
    </div>
</div>

<script src="js/ui.js"></script>
</body>

</html>


