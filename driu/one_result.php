<!doctype html>
<html lang="en">
<head>
	 <link rel="shortcut icon" href="images/icon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'> -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300' rel='stylesheet' type='text/css'>
    <meta name="description" content="Deep Retinal Image Understanding">

    <title>Deep Retinal Image Understanding</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
    
    <!--Includes-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	 
    <style type="text/css">
		
		html,body {
		 width: 100%;
		 height: 100%;
		 margin: 0px;
		 padding: 0px;
		 overflow-x: hidden; 
	 }
	 
      .boxTitle {
        font-size: 90%;
        margin-top: 15px;
        margin-bottom: 2px;
      }

      .boxInner img {
        width: 95%;
      }

      .boxInnerBorder img {
        width: 95%;
        outline: 1px solid black;
        outline-offset: -1px;
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
                <li><a class="pure-menu-link pure-menu-selected">Explore SoA</a></li>
                <li><a href="downloads.html" class="pure-menu-link">Downloads</a></li>
                <li><a href="contact.php" class="pure-menu-link">Contact</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Explore the State of the Art</h1>
            <h2>Browse segmentations from all studied techniques</h2>
        </div>

        <div class="pure-g"  style="margin-left:2%;margin-right:2%;">
            <div class="pure-u-1-1" style="font-family: 'Raleway', sans-serif; margin-top: 30px;margin-left: 0%;margin-right: 0%;">
              <center>Segmentations from all studied techniques. Softmax results are shown where possible. <a id="back_link" href="browse_DRIVE.php">To go back, click here.</a></center>
            </div>
          </div>
        <div class="pure-g" id="im_and_gt" style="margin-left:2%;margin-right:2%;">

        </div>
			 <div  class="pure-g" id="res_container"  style="margin-left:2%;margin-right:2%;">

			 </div>
        


        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script type="text/javascript">
        $(function(){
             // See if this is a touch device
             if ('ontouchstart' in window)
             {
                // Set the correct body class
                $('body').removeClass('no-touch').addClass('touch');
               
                // Add the touch toggle to show text
                $('div.boxInner img').click(function(){
                   $(this).closest('.boxInner').toggleClass('touchFocus');
                });
             }
        });
        </script>
        
			<script type="text/javascript">
				function getUrlVars() {
					var vars = {};
					var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
					vars[key] = value;
					});
					return vars;
				}
			</script>

        <script type="text/javascript">
        		var database = getUrlVars()["database"];
        		if(database === "DRIVE") {
		         var techniques = [{name:"human", 		displayname:"Ground Truth", 			mysqlname: "human"},
		                           {name:"DRIU", 			displayname:"DRIU", 						mysqlname: "DRIU"},
		         						{name:"Human_2", 		displayname:"Second Human Expert", 	mysqlname: "Human_2"},
		         						{name:"N4_Fields", 	displayname:"N4 fields", 				mysqlname: "N4fields"},
		                           {name:"Kernel_Boost",displayname:"Kernel Boost", 			mysqlname: "Kernel_Boost"},
		                           {name:"HED", 			displayname:"HED",						mysqlname: "HED"},
		                           {name:"DeepVessel",  displayname:"DeepVessel",				mysqlname: "DeepVessel"},
		                           {name:"CRFs", 			displayname:"CRFs",						mysqlname: "CRFs"},
		                           {name:"Wavelets", 	displayname:"Wavelets",					mysqlname: "Wavelets"},
		                           {name:"LineDetector",displayname:"Line Detectors", 		mysqlname: "LineDetector"},
		                           {name:"SE", 			displayname:"SE", 						mysqlname: "SE"}];
		      }             
		      else if(database === "STARE") {
		      	var techniques = [{name:"human", 		displayname:"Ground Truth", 			mysqlname: "human"},
		                           {name:"DRIU", 			displayname:"DRIU", 						mysqlname: "DRIU"},
		      							{name:"Human_2", 		displayname:"Second Human Expert", 	mysqlname: "Human_2"},
		                           {name:"HED", 			displayname:"HED", 						mysqlname: "HED"},
		                           {name:"DeepVessel",  displayname:"DeepVessel",				mysqlname: "DeepVessel"},
		                           {name:"Wavelets", 	displayname:"Wavelets",					mysqlname: "Wavelets"},
		                           {name:"LineDetector",displayname:"Line Detectors", 		mysqlname: "LineDetector"}];
		      }
		      else if(database === "DRIONS") {
		      	var techniques = [{name:"human", 		displayname:"Ground Truth", 			mysqlname: "human"},
		                           {name:"DRIU", 			displayname:"DRIU", 						mysqlname: "DRIU"},
		                           {name:"Human_2", 		displayname:"Second Human Expert", 	mysqlname: "Human_2"}];
		      }
		      else if(database === "RIMONE") {
		      	var techniques = [{name:"human", 		displayname:"Ground Truth", 			mysqlname: "human"},
		                           {name:"DRIU", 			displayname:"DRIU", 						mysqlname: "DRIU"},
		                           {name:"Human_2", 		displayname:"Second Human Expert", 	mysqlname: "Human_2"}];
		      }

            function show_header_result(im_id,database)
            {
              // if (im_horiz.indexOf(im_id) > -1)
		            document.getElementById("im_and_gt").innerHTML = '<div class="pure-u-1-2" style="font-family: Raleway, sans-serif; display: inline-block;"><center><div class="boxTitle">Id '+im_id+'</div><div class="boxInner" ><img id="or_img" src="https://data.vision.ee.ethz.ch/kmaninis/share/DRIU/Images/'+ database +'/'+ im_id +'.png"/></div></center></div><div class="pure-u-1-2" style="font-family: Raleway, sans-serif; display: inline-block;"><center><div class="boxTitle">Ground Truth</div><div class="boxInner" "><img id="GT" onclick="changeImage(`GT`)" src="https://data.vision.ee.ethz.ch/kmaninis/share/DRIU/Results/'+database+'/Human_1/'+ im_id +'.png"/></div></center></div>';

                document.getElementById("back_link").href = "browse_" + database + ".php";
            }

            function show_one_result(techn)
            {
              // Show the images
		           document.getElementById("res_container").innerHTML = document.getElementById("res_container").innerHTML +
		            `<div class="pure-u-1-2" style="font-family: 'Raleway', sans-serif; display: inline-block;">
                       <center>
		                   <div class="boxTitle">`+techn.displayname+`</div>
		                   <div class="boxInner"><img  id="`+techn.name+`" onclick="changeImage('`+techn.name+`')" src="https://data.vision.ee.ethz.ch/kmaninis/share/DRIU/Results/`+ database + `/`+ techn.name + `/`+ im_id +`.png"/></div>
                       </center>
		            </div>`;
            }



            // Get image id from the PHP url if set
            var im_id = getUrlVars()["im_id"];
            var database = getUrlVars()["database"];

            // Display the header
            show_header_result(im_id,database)

            // Call the actual code to show the images            
            for (var i=1; i<techniques.length; i++)
            {
          		show_one_result(techniques[i],im_id,database);
            }
        </script>
    </div>
</div>

<script src='js/jquery-2.1.1.js'></script>
<script src='js/jquery.elevatezoom.js'></script>

<script type="text/javascript">
function changeImage(ids,im_id) {
    var image = document.getElementById(ids);
    if (image.src.match("Results")) 
    {
    	  image.temp = image.src;
        image.src = image.src.replace("Results","Overlay");
        //image.dataset["zoomImage"] = document.getElementById("or_img").src;  
    } 
    else 
    {
    	  image.src=image.temp; 
    }
    //$("#"+ids).elevateZoom({ zoomType	: "lens", lensShape : "round", lensSize : 200, zoomLevel: 2 });  
}

</script>


<script src="js/ui.js"></script>
    

</body>

</html>


