<!DOCTYPE html>
<html lang="ar" dir="rtl" class="client-nojs">
<head>
<meta charset="UTF-8" />
<?php 
    // Sets the value of a configuration option 
    // string ini_set ( string $varname , string $newvalue ) 
    ini_set('default_charset','UTF-8'); 
?>

<?php
  if ($_GET['lang']=='ar') {  
        echo '<link rel="stylesheet" href="custom.css">';
	  header ('Content-Type: text/html; charset=UTF-8'); 
   
  // Declare encoding META tag, it causes browser to load the UTF-8 charset before displaying the page. 
  echo '<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />'; 
   
  // Right to Left issue 
  echo '<body dir="rtl">'; 
    }
    ?>
 <?php
			                                
		 
										   if ($_GET["lang"]=='ar')
 $lang="ar";
?>
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

<title>von Ulmann </title>
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
			<h6><?php echo TXT_FOUNDED ?></h6>
			</a>
            </center>
            </div>
        </div>
        
        <div class="header_right" style="padding-top:30px">
        	<nav id="topmenu">            
	            <ul class="dropdown">
	           
	               <li><a   href="index.php?lang=ar"><span><?php echo TXT_HOME1 ?></span></a></li>
                   
          		 <li><a  href="hotel.php?lang=ar"><span><?php echo TXT_HOTEL ?></span></a></li>
                 <li><a  href="core.php?lang=<ar"><span><?php echo TXT_CORE ?></span></a></li>
         		 <li><a  href="office.php?lang=ar"><span><?php echo TXT_OFFICE ?></span></a></li>
         		 <li><a  href="shop.php?lang=ar"><span><?php echo TXT_SHOP ?></span></a></li>
         		 <li><a  href="contact.php?lang=ar"><span><?php echo TXT_CONTACT; ?></span></a></li>
	           
	            </ul>                
			</nav>
        	<!--/ topmenu -->
        </div>
       
       
       
       
       
       
       
      <div class="clear"></div>
      
      
      
      
<!-- vonulman --><div class="clear"></div>
	</header> ?>

<!-- top Slider/Image -->
<div class="header_image">
			 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
					<script type="text/javascript" src="js/jquery.gmap.min.js"></script>
                    
                
	<h2>Informations</h2>
  
	

    
</div>
<!--/ top Slider/Image -->

</div>

<div class="container">
 <?php
			                                
			                               if (isset($_GET['lang'])) 
			                                    if( $_GET['lang']=="en") $lang="en";
												 if( $_GET['lang']=="ar") $lang="ar";
												  if( $_GET['lang']=="fr") $lang="fr";
			                                    
?>
			                                    
<!-- middle -->
<div id="middle" class="full_width">
	
    <div class="content" role="main">
    
    	<article class="post-detail">            
			<div class="entry">
            
            	<!-- pricing table -->
				
				<?php
					$id=safe($_GET['id']);
			
			                                
			                                
					$q="SELECT titleAr,contenuAr,continent.EnName,country.EnName,state.EnName,city.Name,property,investd,investf,job.id FROM job,continent,country,state,city WHERE job.id=$id AND job.country=country.id AND job.continent=continent.id AND job.state=state.id AND job.city=city.id ";
$result=mysqli_query($link,$q);
$l=mysqli_fetch_array($result) or die(mysqli_error($link));
				?>
    <div class="add-comment" id="addcomments">
                            <input type="hidden" name="lang" value="en" >
                            <div class="comment-form">
								<strong>Title: </strong><?php echo $l['titleAr'] ?> 
							</div>
							<div class="clear"></div>
							<div class="comment-form">
								<strong>Description : </strong><textarea cols=10 rows=5 disabled><?php echo $l['contenuAr'] ?> </textarea>
							</div>
							
							<div class="comment-form">
								<strong>Continent : </strong><?php echo $l[2] ?> 
							</div>
							
							<div class="comment-form">
								<strong>Country : </strong><?php echo $l[3] ?> 
							</div>
							
							<div class="comment-form">
								<strong>Federal State : </strong><?php echo $l[4] ?> 
							</div>
						
							<div class="comment-form">
								<strong><?php echo TXT_CITY ?> : </strong>

							</div>
						
							<div class="comment-form">
								<strong>Property : </strong><?php echo $l['property'] ?> 
							</div>
							
							<div class="comment-form">
								<strong>Investment : </strong><?php echo $l['investd'].'$-'.$l['investf'].'$' ?> 
							</div>
							
						
                                 
                                <div class="row rowSubmit">
                                <a href="contact.php?lang=ar"><input type="submit" name="send" id="send" value="Contact US" class="btn-submit"></a>                              
                             
                              </div>
                            </form>
                        </div>
						<?php
                if(isset($_POST['send']))
{	
    if(isset($_POST['title']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['msg']))
	  {
	   if(empty($_POST['street'])) $street=""; else $street=utf8_decode(safe($_POST['street'],$link));
	   if(empty($_POST['mobile'])) $mobile=""; else $mobile=utf8_decode(safe($_POST['mobile'],$link));
	   if(empty($_POST['zip'])) $zip=""; else $zip=utf8_decode(safe($_POST['zip'],$link));
	   if(empty($_POST['mail'])) $mail=""; else $mail=utf8_decode(safe($_POST['mail'],$link));
	   if(empty($_POST['fax'])) $fax=""; else $fax=utf8_decode(safe($_POST['fax'],$link));
	   $title=utf8_decode(safe($_POST['title'],$link));
	   $fname=utf8_decode(safe($_POST['fname'],$link));
	   $lname=utf8_decode(safe($_POST['lname'],$link));
	   $phone=utf8_decode(safe($_POST['phone'],$link));
	   $msg=utf8_decode(safe($_POST['msg'],$link));
	  
	   $req="INSERT INTO contact(title,fn,ln,phone,msg,mail,street,zip,mobile,fax) values('$title','$fname','$lname','$phone','$msg','$mail','$street','$zip','$mobile','$fax')";
	   if(mysqli_query($link,$req)) echo '<div class="sb sb_green">
                        	<div class="box_title">OK</div>                    
                        </div>';
	   else echo '<div class="sb">
                        	<div class="box_title">WRONG MADAFAKA</div>                    
                        </div>';
	   
	  }
}
?>
                        <!--/ pricing table -->
                        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

                <div class="divider_space"></div>
                
                
                <div class="clear"></div>
            </div>
		</article>
	</div>
    <!--/ content -->
    	
</div>
<!--/ middle --> 
</div>
<!--/ container -->

     <?php
       
 	 include('include/footerar.inc.php');
 	
 ?>