<!doctype html>
<html lang="en">
<head>
	 <link rel="shortcut icon" href="images/icon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'> -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300' rel='stylesheet' type='text/css'>
    <meta name="description" content="Deep Retinal Image Understanding.">
	<!-- Buttons -->
    <link rel="stylesheet" type="text/css" href="css/buttons/component.css" />
    
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
	 
    .wrap {
       overflow: hidden;
       margin: 10px;
    }
    .verticalbox {
       float: left;
       position: relative;
       width: 20%;
       padding-bottom: 26.0%;
    }
    .horizontalbox {
       float: left;
       position: relative;
       width: 25%;
       padding-bottom: 18.5%;
    }
    .boxInner {
       position: absolute;
       left: 10px;
       right: 10px;
       top: 10px;
       bottom: 10px;
       overflow: hidden;
    }
    .boxInner img {
       width: 100%;
    }
    .boxInner .titleBox {
       position: absolute;
       bottom: 0;
       left: 0;
       right: 0;
       margin-bottom: -50px;
       background: #000;
       background: rgba(0, 0, 0, 0.5);
       color: #FFF;
       padding: 10px;
       font-size: 90%;
       text-align: center;
       font-family: 'Raleway', sans-serif;
       -webkit-transition: all 0.3s ease-out;
       -moz-transition: all 0.3s ease-out;
       -o-transition: all 0.3s ease-out;
       transition: all 0.3s ease-out;
    }
    .no-touch .boxInner:hover .titleBox, .touch .boxInner.touchFocus .titleBox {
       margin-bottom: 0;
    }
    @media only screen and (max-width : 480px) {
       .verticalbox {
          width: 33.3%;
          padding-bottom: 43%;
       }
       .horizontalbox {
          width: 50%;
          padding-bottom: 32%;
       }
    }
    @media only screen and (max-width : 650px) and (min-width : 481px) {
       .verticalbox {
          width: 25%;
          padding-bottom: 32%;
       }
       .horizontalbox {
          width: 33.3%;
          padding-bottom: 23%;
       }
    }
    @media only screen and (max-width : 1050px) and (min-width : 651px) {
       .verticalbox {
          width: 20%;
          padding-bottom: 25%;
       }
       .horizontalbox {
          width: 33.3%;
          padding-bottom: 23%;
       }
    }
    @media only screen and (min-width : 1051px) {
       .verticalbox {
          width: 16.6%;
          padding-bottom: 21.5%;
       }
       .horizontalbox {
          width: 25%;
          padding-bottom: 17%;
       }

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

			<!-- Buttons  -->
        <div class="pure-g">
            <div class="pure-u-1-4" style="text-align:center;font-family: 'Raleway', sans-serif;">
               <a href="browse_DRIVE.php"><button class="btn btn-6 btn-6a" style="width: 95%;margin-top:30px;">DRIVE</button></a>
                
            </div>
            <div class="pure-u-1-4" style="text-align:center;font-family: 'Raleway', sans-serif;">  
                <a href="browse_STARE.php"><button class="btn btn-6 btn-6a" style="width: 95%;margin-top:30px;">STARE</button></a>
            </div>
             <div class="pure-u-1-4" style="text-align:center;font-family: 'Raleway', sans-serif;">  
                <a href="browse_DRIONS.php"><button class="btn btn-6 btn-6a" style="width: 95%;margin-top:30px;">DRIONS-DB</button></a>
            </div>
            <div class="pure-u-1-4" style="text-align:center;font-family: 'Raleway', sans-serif;">  
                <button class="btn btn-6 btn-6a" style="color: #6b7770;background: #e7eae8;width: 95%;margin-top:30px;">RIM-ONE-r3</button>
            </div>   
        </div>
        
        <div class="pure-g">
            <div class="pure-u-1-1" style="font-family: 'Raleway', sans-serif; margin-top: 30px;margin-left: 0%;margin-right: 0%;">
              <center>List of images from RIM-ONE-r3 test set. Please click on any thumbnail to see all detections on that image.</center>
            </div>
        </div>
        
        <div class="no-touch"> 
            <div id="horiz_container" class="wrap">
    
            </div>
            <div id="verti_container" class="wrap">
    
            </div>
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
            im_verti =  ["G-2-R","G-22-L","G-23-R","G-24-L","G-25-L","G-26-R","G-27-R","G-28-L","G-29-R","G-30-L","G-31-R","N-1-L","N-17-L","N-18-R","N-2-R","N-20-R","N-21-L","N-22-R","N-23-L","N-28-R","N-29-L","N-3-L","N-30-R","N-31-L","N-32-R","N-33-L","N-34-R","N-35-L","N-36-R","N-37-L","N-38-R","N-39-L","N-4-R","N-40-R","N-41-L","N-42-R","N-43-L","N-44-R","N-46-R","N-47-L","N-48-R","N-49-L","N-50-R","N-51-L","N-78-R","S-2-L","S-29-R","S-3-R","S-30-L","S-31-L","S-32-L","S-33-R","S-34-L","S-35-R","S-4-L","S-5-L","S-6-R","S-7-L","S-8-R","S-9-L"];
                   
            function show_images(div_id,class_id,im_list)
            {
                for (var i=0; i<im_list.length; i++)
                    document.getElementById(div_id).innerHTML = document.getElementById(div_id).innerHTML + 
                '<div class="'+class_id+'"><div class="boxInner"><a href="one_result.php?database=RIMONE&im_id='+im_list[i]+'"><img src="img/thumbnails/RIMONE/'+ im_list[i]+'_thumb.jpg"/></a><div class="titleBox">'+im_list[i]+'</div></div>'
            }

            // Call the actual code to show the images
            //show_images("horiz_container","horizontalbox",im_horiz)
            show_images("verti_container","verticalbox",im_verti)
        
        </script>
    </div>
</div>





<script src="js/ui.js"></script>
    

</body>

</html>


