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

      <style type="text/css">
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
       width: 20%;
       padding-bottom: 13.5%;
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
                <li><a href="code.html" class="pure-menu-link">Code</a></li>
                <li><a href="contact.php" class="pure-menu-link">Contact</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Explore the State of the Art</h1>
            <h2>Browse all partitions from the studied techniques</h2>
        </div>
        <div class="pure-g">
            <div class="pure-u-1-1" style="font-family: 'Raleway', sans-serif; margin-top: 30px;margin-left: 15%;margin-right: 15%;">
              <center>List of images from BSDS500 test set. Please click on any thumbnail to see all partitions on that image.</center>
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
            im_horiz = ["100007","100039","100099","10081","101027","102062","103006","103029","103078","105027","106005","106047","107014","107045","107072","108004","108036","108069","109055","112056","112090","118015","118031","118072","120003","120093","123057","128035","130066","134049","14085","14092","141012","141048","145059","145079","146074","147080","15011","15062","157032","157087","159022","160006","16004","160067","16068","161045","168084","175083","176051","179084","183066","185092","187058","187099","188025","189096","196062","196088","201080","202000","206062","206097","207038","207049","208078","209021","217090","220003","223060","226022","226033","228076","232076","235098","247003","247012","253016","258089","268048","277053","28083","285022","288024","290035","29030","296028","296058","306052","3063","309040","317043","326025","335088","335094","344010","346016","35028","35049","36046","368037","376086","384022","385022","393035","41006","41029","41085","41096","43033","43051","45000","48017","48025","49024","5096","51084","69000","69007","69022","70011","71099","77062","78098","79073","80085","8068","81066","81095","87015","92014","94095","97010"];
            im_verti = ["101084","104010","104055","117025","130014","134067","140006","140088","147077","156054","159002","163004","163096","164046","17067","181021","189006","189013","189029","196027","196040","198087","20069","2018","217013","223004","225022","226043","226060","230063","230098","23050","238025","243095","246009","249021","250047","250087","253092","257098","259060","267036","268074","279005","281017","289011","302022","306051","326085","33044","334025","347031","365072","372019","384089","388006","388018","388067","6046","61034","64061","65084","70090","71076","80090","81090"];
        
            function show_images(div_id,class_id,im_list)
            {
                for (var i=0; i<im_list.length; i++)
                    document.getElementById(div_id).innerHTML = document.getElementById(div_id).innerHTML + 
                '<div class="'+class_id+'"><div class="boxInner"><a href="one_result.php?im_id='+im_list[i]+'"><img src="data/bsds500/'+ im_list[i] +'.jpg"/></a><div class="titleBox">'+im_list[i]+'</div></div>'
            }

            // Call the actual code to show the images
            show_images("horiz_container","horizontalbox",im_horiz)
            show_images("verti_container","verticalbox",im_verti)
        
        </script>
    </div>
</div>





<script src="js/ui.js"></script>
    

</body>

</html>


