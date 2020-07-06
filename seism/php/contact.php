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

    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- <link rel="stylesheet" href="css/reset.css"> --> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr --> 

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

 <style media="screen" type="text/css">
span.square {
    display:inline-block;
    border-radius: 4px;
    border: 2px solid #ccc;
    font-size: 40px;
    line-height: 50px;
    background-color:none;
    color:#ccc;
    width: 55px;
    height: 55px;
    text-align: center;
    vertical-align: bottom;
    margin:6px;
}


span.square:hover {
  border: 2px solid #42a2e1;
  color: #42a2e1;
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
                <li><a href="browse.php" class="pure-menu-link">Explore SoA</a></li>
                <li><a href="code.html" class="pure-menu-link">Code</a></li>
                <li><a class="pure-menu-link pure-menu-selected">Contact</a></li>            
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Get in touch!</h1>
            <h2>Feel free to get in touch to tell us what you think about this work,<br>to ask about any doubts, or suggest improvements.</h2>
        </div>

        <div class="content">
        <div class="pure-g">
        <div class="pure-u-1-1">
        <div style="text-align:center;color:#777;">
        <br><br>
        You can reach us in:
        <br>
        <a href="mailto:jponttuset@vision.ee.ethz.ch"><span class="square"><i class="fa fa-envelope"></i></span></a>
        <a href="https://twitter.com/intent/tweet?screen_name=jponttuset"><span class="square"><i class="fa fa-twitter"></i></span></a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        <a href="http://linkedin.com/in/jponttuset" target="_blank"><span class="square"><i class="fa fa-linkedin"></i></span></a>
        <br><br>
        Or use the contact form below:
        </div>

            <form class="cd-form floating-labels"  action="formmail.php" style="padding-left:5px;margin-top:-50px;">
            <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
            <input type="hidden" name="recipients" value="jpont01@gmail.com" />
            <input type="hidden" name="required" value="EmailAddr:Your email address" />
            <input type="hidden" name="subject" value="SEISM Feedback" />
            <input type="hidden" name="derive_fields" value="email=EmailAddr" />
            <input type="hidden" name="mail_options" value="Exclude=email" />
            <input type="hidden" name="good_url" value="thanks.html" />
            <input type="hidden" name="bad_url" value="error.html" />
        <fieldset style="border:none;">

<!--             <legend>Account Info</legend>

            <div class="error-message">
                <p>Please enter a valid email address</p>
            </div>
 -->
<!--             <div class="icon">
                <label class="cd-label" for="cd-name">Name</label>
                <input class="user" type="text" name="cd-name" id="cd-name" required>
            </div> 

            <div class="icon">
                <label class="cd-label" for="cd-company">Company</label>
                <input class="company" type="text" name="cd-company" id="cd-company">
            </div> 
 -->
<!--             <div class="icon">
                <label class="cd-label" for="cd-email">Email</label>
                <input class="email error" type="email" name="cd-email" id="cd-email" required>
            </div> -->
            <div class="icon">
                <label class="cd-label" for="cd-email">Email</label>
                <input class="email" type="email" name="EmailAddr" id="cd-email">
            </div>
                    <div class="icon">
                <label class="cd-label" for="cd-textarea"  style="font-family: 'Raleway', sans-serif;">Tell us what you think</label>
                <textarea class="message" name="Message" id="cd-textarea"></textarea>
            </div>

            <div>
                <input type="submit" value="Send Message">
            </div>
        </fieldset>

<!--         <fieldset>
            <legend>Project Info</legend>

            <div>
                <h4>Budget</h4>

                <p class="cd-select icon">
                    <select class="budget">
                        <option value="0">Select Budget</option>
                        <option value="1">&lt; $5000</option>
                        <option value="2">$5000 - $10000</option>
                        <option value="3">&gt; $10000</option>
                    </select>
                </p>
            </div> 

            <div>
                <h4>Project type</h4>

                <ul class="cd-form-list">
                    <li>
                        <input type="radio" name="radio-button" id="cd-radio-1" checked>
                        <label for="cd-radio-1">Choice 1</label>
                    </li>
                        
                    <li>
                        <input type="radio" name="radio-button" id="cd-radio-2">
                        <label for="cd-radio-2">Choice 2</label>
                    </li>

                    <li>
                        <input type="radio" name="radio-button" id="cd-radio-3">
                        <label for="cd-radio-3">Choice 3</label>
                    </li>
                </ul>
            </div>

            <div>
                <h4>Features</h4>

                <ul class="cd-form-list">
                    <li>
                        <input type="checkbox" id="cd-checkbox-1">
                        <label for="cd-checkbox-1">Option 1</label>
                    </li>

                    <li>
                        <input type="checkbox" id="cd-checkbox-2">
                        <label for="cd-checkbox-2">Option 2</label>
                    </li>

                    <li>
                        <input type="checkbox" id="cd-checkbox-3">
                        <label for="cd-checkbox-3">Option 3</label>
                    </li>
                </ul>
            </div>

            <div class="icon">
                <label class="cd-label" for="cd-textarea">Project description</label>
                <textarea class="message" name="cd-textarea" id="cd-textarea" required></textarea>
            </div>

            <div>
                <input type="submit" value="Send Message">
            </div>
        </fieldset> -->
    </form>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
        </div>
        </div>
        </div>
    </div>
</div>





<script src="js/ui.js"></script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

</body>

</html>


