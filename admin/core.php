<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
<?php
require_once('../connexion.php');
function page_name(){
	$t=explode("/",$_SERVER['PHP_SELF']);
	$l=explode(".",$t);
	$e=$l[0];
	return $e;	
}
?>
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

<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="../screen.css">
<!-- custom CSS -->
<link rel="stylesheet" href="../custom.css">

<!-- All JavaScript at the bottom, except this Modernizr build.  -->
<script src="../js/libs/modernizr-2.5.3.min.js"></script>
<script src="../js/libs/respond.min.js"></script>					 

<!-- Grab Google CDN''s jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="../js/libs/jquery.min.js"></script>

<!-- scripts  -->
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/general.js"></script>
<!-- carousel -->
<script src="js/jquery.jcarousel.min.js"></script>

<!-- sliders -->
<script src="../js/slides.min.jquery.js"></script>
<!--/ sliders -->
  
</head>
 

<div class="container">
 
			                                    
<!-- middle -->
<div id="middle" class="full_width">
	
    <div class="content" role="main">
    
    	<article class="post-detail">            
			<div class="entry">
            
            	<!-- pricing table -->
    <div class="add-comment" id="addcomments">
                            
                            <div class="comment-form">
                            <form action= "#" method="post" id="contactForm" name="f" class="ajax_form">
                                <input type="hidden" name="lang" value="en" >
								<div class="row alignleft selectField">
									 <label for="title">Title</label>
									 <input name="title"  type="text" size="50">
								</div>
								<div class="clear"></div>   
								<div class="row alignleft selectField">
								 <label for="descrip">Description</label>
									 <textarea name="descrip" rows="10" cols="100"></textarea>
								</div>
								<div class="clear"></div>  
                                <div class="row alignleft selectField">
                                 <label for="continent">Kontinent</label> 
                                    <select class="select_styled" name="continent" id="continent" title="Select Job Opening" onChange="showcountry(this.value,f.lang.value); document.getElementById('state').options.length=0;document.getElementById('city').options.length=0;">
			                        		<option value="">All</option>
			                              <?php 
			                               $req="Select * From continent";
			                               $res=mysqli_query($link,$req);
			                               while($row=mysqli_fetch_array($res)){
			                               $continentname=$row['EnName'];			                          
			                                echo '<option value ='. $row['id'].' >'.utf8_encode($continentname).'</option>';
			                               }
			                                 ?>
			                        </select>
			                       
                                </div>				
                                <div class="clear"></div> 
                                  
                                
                                     <div class="row alignleft selectField" >
                                      <label for="country">Country</label> 
                                     <select class="select_styled" name="country"  title="Select Job Opening" id="country" onChange="showstate(this.value);document.getElementById('city').options.length=0;">
			                        		
			                        		</select>
                                   
                                </div>
                                				
                                <div class="clear"></div>   
                                     <div class="row alignleft selectField">
                                     <label for="state">State</label> 
                                    <select class="select_styled" name="state" id="state" title="Select Job Opening" onChange="showcity(this.value)">
			                        		
			                     
			                        </select>
			                      
                                </div>
                                				
                                <div class="clear"></div>   
                                     <div class="row alignleft selectField">
                                      <label for="city">City</label> 
                                    <select class="select_styled" name="city" id="city" title="Select Job Opening">
			                        		
			                               
			                        </select>
                                </div>
                                				
                                <div class="clear"></div> 
                                 
                                     <div class="row alignleft selectField">
                                      <label for="job_opening">Property Type</label> 
                                    <select class="select_styled" name="job_opening" id="job_opening" title="Select Job Opening">
			                        		<option value="0">All</option>
			                        		<option>Office Building</option>
			                        		<option>Shopping Mall</option>
			                        		<option>Hotel</option>
			                        		<option>Multi-Family House</option>
			                        		<option>Portfolio (Office)</option>		                        					                       
			                                	<option>Portfolio (Living)</option>
			                                	<option>Office Park</option>
			                                	<option>Living Quarters</option>
			                                	
			                        </select>
                                </div>
                                
                                <div class="space"></div>
                                
                                
								
                                <div class="clear"></div>   
                               

   <label for="amount">Total Investment :</label><br>
  $<input type="text" name="amountd">- $<input type="text" name="amountf"><br>

  
                                
                                <input name="send" type="submit" id="send" value="ADD" class="btn-submit">                                
                                </div>
                            </form>
                            </div>
                        </div>
       <?php
       if(isset($_POST['send'])){
	   $title=$_POST['title'];
	   $descrip=$_POST['descrip'];
       		$job=$_POST['job_opening'];
       		$country=$_POST['country'];
       		$state=$_POST['state'];
       		$city=$_POST['city'];	
       		$continent=$_POST['continent'];
       		$amountd=$_POST['amountd'];
       		$amountf=$_POST['amountf'];
       		
			$sql="INSERT INTO `job`( `title`, `contenu`, `type`, `continent`, `country`, `state`, `city`, `property`, `investd`, `investf`) VALUES('$title','$descrip','core','$continent','$country','$state','$city','$job',$amountd,$amountf)";
       		if($query=mysqli_query($link,$sql) or die (mysqli_error($link)))
       			echo 'success';

       		else echo "Fail";
     
       		
       		
       	}
       
       
       ?>
                        <!--/ pricing table -->
                        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script>                      
function showcountry(continent,lang)
{
var xmlhttp;

if (continent.length==0)
  { 
  document.getElementById("country").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("country").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","../getcountry.php?continent="+continent+"&lang="+lang,true);
xmlhttp.send();
}
function showstate(country)
{
var xmlhttp;

if (country.length==0)
  { 
  document.getElementById("state").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("state").innerHTML=xmlhttp.responseText;
    }
  }

xmlhttp.open("GET","../getstate.php?country="+country,true);
xmlhttp.send();

}
function showcity(state)
{
var xmlhttp;

if (state.length==0)
  { 
  document.getElementById("city").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("city").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","../getcity.php?state="+state,true);
xmlhttp.send();
}
  
 

  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1000000,
      values: [ 10000, 100000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });

</script>
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
<script src="../js/jquery.infieldlabel.min.js"></script>