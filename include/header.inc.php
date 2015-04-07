<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
<?php include('lang/decide.php');
include('connexion.php');
include_once("admin/include/fonctions.php");
function page_name(){
	$t=explode("/",$_SERVER['PHP_SELF']);
	$l=explode(".",$t);
	$e=$l[0];
	return $e;	
}
?>
<meta content="text/html; charset=windows-1256" http-equiv="Content-Type" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Industrial Plots Worldwide</title>
<meta name="description" content="">
<meta name="keywords" content="">

<link href="http://fonts.googleapis.com/css?family=Cardo:400italic,400|Lato:400,400italic,700" rel="stylesheet">

<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- favicon.ico and apple-touch-icon.png -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon-57x57-iphone.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72-ipad.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114-iphone4.png">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="screen.css">


<?php
  if ($_GET['lang']=='ar') {  
        echo '<link rel="stylesheet" href="custom.css">';
	
    }
    ?>

<!-- All JavaScript at the bottom, except this Modernizr build.  -->
<script src="js/libs/modernizr-2.5.3.min.js"></script>
<script src="js/libs/respond.min.js"></script>					 

<!-- Grab Google CDN''s jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="js/libs/jquery.min.js"></script>

<!-- scripts  -->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/general.js"></script>
<!-- carousel -->
<script src="js/jquery.jcarousel.min.js"></script>

<!-- sliders -->
<script src="js/slides.min.jquery.js"></script>
<!--/ sliders -->
  
</head>
<body style="background-color:#dadada; background-image:url(images/pattern_1.png)">  
<div class="body_wrap">

<div class="header_container">
	<header>
	<div class="lang">
		 <a class="brand" href="?lang=de"><img src="icon/d.png" align="right"/></a>
		 <a class="brand" href="?lang=en"><img src="icon/b.png" align="right"/></a>
         <a class="brand" href="?lang=fr"><img src="icon/f.png" align="right"/></a>
         <a class="brand" href="?lang=ar"><img src="icon/a.png" align="right"/></a>
</div>

        <div class="header_left">
		   	<div class="logo">
           <center>
			<a href="index.php"><img src="images/logo.jpg" alt=""><img src="images/logo2.gif" alt="">
			
            <!-- <h6><?php echo TXT_FOUNDED ?></h6> -->
			
            </a>
            </center>
            </div>
        </div>
        
        <div class="header_right" style="padding-top:30px">
        	<nav id="topmenu">            
	            <ul class="dropdown">
	           
	               <li><a   href="index.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en";?>"><span><?php echo TXT_HOME1 ?></span></a></li>
                   
          		 <li><a  href="hotel.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><span><?php echo TXT_HOTEL ?></span></a></li>
                 <li><a  href="core.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><span><?php echo TXT_CORE ?></span></a></li>
         		 
                 <!--
                 <li><a  href="office.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><span><?php echo TXT_OFFICE ?></span></a></li>
         		 <li><a  href="shop.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><span><?php echo TXT_SHOP ?></span></a></li>
         		 -->
                 
                 <li><a  href="contact.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><span><?php echo TXT_CONTACT; ?></span></a></li>
	           
	            </ul>                
			</nav>
        	<!--/ topmenu -->
        </div>
       
       
       
       
       
       
       
      <div class="clear"></div>
      
      
      
      
<!-- vonulman --><div class="clear"></div>
	</header>