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
       width: 14.28%;
       padding-bottom: 20.5%;
    }
    .horizontalbox {
       float: left;
       position: relative;
       width: 25%;
       padding-bottom: 17.0%;
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
          padding-bottom: 47%;
       }
       .horizontalbox {
          width: 50%;
          padding-bottom: 34%;
       }
    }
    @media only screen and (max-width : 650px) and (min-width : 481px) {
       .verticalbox {
          width: 25%;
          padding-bottom: 35.8%;
       }
       .horizontalbox {
          width: 33.3%;
          padding-bottom: 23%;
       }
    }
    @media only screen and (max-width : 1050px) and (min-width : 651px) {
       .verticalbox {
          width: 20%;
          padding-bottom: 28.5%;
       }
       .horizontalbox {
          width: 33.3%;
          padding-bottom: 23%;
       }
    }
    @media only screen and (max-width : 1290px) and (min-width : 1051px) {
       .verticalbox {
          width: 16.6%;
          padding-bottom: 24%;
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
                <button class="btn btn-6 btn-6a" style="color: #6b7770;background: #e7eae8;width: 95%;margin-top:30px;">DRIONS-DB</button>
            </div>
             <div class="pure-u-1-4" style="text-align:center;font-family: 'Raleway', sans-serif;">  
                <a href="browse_RIMONE.php"><button class="btn btn-6 btn-6a" style="width: 95%;margin-top:30px;">RIM-ONE-r3</button></a>
            </div>   
        </div>
        
        <div class="pure-g">
            <div class="pure-u-1-1" style="font-family: 'Raleway', sans-serif; margin-top: 30px;margin-left: 0%;margin-right: 0%;">
              <center>List of images from DRIONS test set. Please click on any thumbnail to see all detections on that image.</center>
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
            im_horiz =  ["image_061","image_062","image_063","image_064","image_065","image_066","image_067","image_068","image_069","image_070","image_071","image_072","image_073","image_074","image_075","image_076","image_077","image_078","image_079","image_080","image_081","image_082","image_083","image_084","image_085","image_086","image_087","image_088","image_089","image_090","image_091","image_092","image_093","image_094","image_095","image_096","image_097","image_098","image_099","image_100","image_101","image_102","image_103","image_104","image_105","image_106","image_107","image_108","image_109","image_110"
];
                   
            function show_images(div_id,class_id,im_list)
            {
                for (var i=0; i<im_list.length; i++)
                    document.getElementById(div_id).innerHTML = document.getElementById(div_id).innerHTML + 
                '<div class="'+class_id+'"><div class="boxInner"><a href="one_result.php?database=DRIONS&im_id='+im_list[i]+'"><img src="img/thumbnails/DRIONS/'+ im_list[i] +'_thumb.jpg"/></a><div class="titleBox">'+im_list[i]+'</div></div>'
            }

            // Call the actual code to show the images
            show_images("horiz_container","horizontalbox",im_horiz)
           // show_images("verti_container","verticalbox",im_verti)
        
        </script>
    </div>
</div>





<script src="js/ui.js"></script>
    

</body>

</html>


