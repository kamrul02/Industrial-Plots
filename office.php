 <?php include("include/header.inc.php"); ?>
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
<!-- top Slider/Image -->
<div class="header_image">
			 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
					<script type="text/javascript" src="js/jquery.gmap.min.js"></script>
                    
                
	<h2><?php echo TXT_OFFICE ?></h2>
    <div class="topimage">              
                    	<img src="images/slide/office-buildings.jpg" alt="">
    </div>
	
    <div class="header_quote">
    	<p><?php echo TXT_DETAIL ?></p>
    </div>
    
</div>
<!--/ top Slider/Image -->

</div>

<div class="container">
 <?php
			                                
			                                $lang="de";
			                               if (isset($_GET['lang'])) 
			                                    if( $_GET['lang']=="en") $lang="en"; ?>
			                                    
<!-- middle -->
<div id="middle" class="full_width">
	
    <div class="content" role="main">
    
    	<article class="post-detail">            
			<div class="entry">
            
            	<!-- pricing table -->
    <div class="add-comment" id="addcomments">
                            
                            <div class="comment-form">

                            <table method="post" border="1">
								<tr>
								
                                <th><?php echo TXT_TITLE ?></th>
								<th><?php echo TXT_CONT ?></th>
									<th><?php echo TXT_COUNT ?></th>
									<th><?php echo TXT_FS ?></th>
									<th><?php echo TXT_CITY ?></th>
									<th><?php echo TXT_VIEW ?></th>
							
								</tr>
                                <?php
if(!isset($_GET['lang'])) {$q="SELECT title,type,continent.EnName,country.EnName,state.EnName,city.Name,property,investd,investf,job.id FROM job,country,state,continent,city WHERE job.type='Officebuildings' AND job.country=country.id AND job.continent=continent.id AND job.state=state.id AND job.city=city.id ";

$result=mysqli_query($link,$q);
while($l=mysqli_fetch_array($result))
	echo"<tr><td>".$l['title']."</td><td>".$l[2]."</td><td>".$l[3]."</td><td>".utf8_encode($l[4])."</td><td>".$l[5]."</td><td><a href='request.php?id=".$l['id']."' >View</a></td></tr>"; 
	
}
else {
if ($_GET['lang']=='ar') {          
echo '<body dir="rtl">';  	
$q="SELECT titleAr,type,continent.ArName,country.EnName,state.EnName,city.Name,property,investd,investf,job.id FROM job,country,state,continent,city WHERE job.type='Officebuildings' AND job.country=country.id AND job.continent=continent.id AND job.state=state.id AND job.city=city.id ";
mysql_query("SET NAMES 'utf8'"); 
mysql_query('SET CHARACTER SET utf8'); 
$result=mysqli_query($link,$q);
while($l=mysqli_fetch_array($result))
	echo"<tr><td>".$l['titleAr']."</td><td>".utf8_encode($l[2])."</td><td>".$l[3]."</td><td>".utf8_encode($l[4])."</td><td>".$l[5]."</td><td><a href='requestAr.php?id=".$l['id']."' >View</a></td></tr>"; 
	 

}

	 else if ($_GET['lang']=='de') {     
  	

$q="SELECT title,type,continent.DeName,country.DeName,state.DeName,city.Name,property,investd,investf,job.id FROM job,country,state,continent,city WHERE job.type='Officebuildings' AND job.country=country.id AND job.continent=continent.id AND job.state=state.id AND job.city=city.id ";

$result=mysqli_query($link,$q);
while($l=mysqli_fetch_array($result))
	echo"<tr><td>".$l['title']."</td><td>".$l[2]."</td><td>".$l[3]."</td><td>".utf8_encode($l[4])."</td><td>".$l[5]."</td><td><a href='request.php?id=".$l['id']."' >View</a></td></tr>"; 
	

 	 }
	 
	 else if ($_GET['lang']=='en') {     
  	          
 	
$q="SELECT titleEn,type,continent.EnName,country.EnName,state.EnName,city.Name,property,investd,investf,job.id FROM job,country,state,continent,city WHERE job.type='Officebuildings' AND job.country=country.id AND job.continent=continent.id AND job.state=state.id AND job.city=city.id ";

$result=mysqli_query($link,$q);
while($l=mysqli_fetch_array($result))
	echo"<tr><td>".$l['titleEn']."</td><td>".$l[2]."</td><td>".$l[3]."</td><td>".utf8_encode($l[4])."</td><td>".$l[5]."</td><td><a href='requestEn.php?id=".$l['id']."' >View</a></td></tr>"; 
	


	 
 	 }
	 else if ($_GET['lang']=='fr') {     
  	

$q="SELECT titleFr,type,continent.EnName,country.EnName,state.EnName,city.Name,property,investd,investf,job.id FROM job,country,state,continent,city WHERE job.type='Officebuildings' AND job.country=country.id AND job.continent=continent.id AND job.state=state.id AND job.city=city.id ";

$result=mysqli_query($link,$q);
while($l=mysqli_fetch_array($result))
	echo"<tr><td>".utf8_encode($l['titleFr'])."</td><td>".$l[2]."</td><td>".$l[3]."</td><td>".utf8_encode($l[4])."</td><td>".$l[5]."</td><td><a href='requestFr.php?id=".$l['id']."' >View</a></td></tr>"; 
	

	 }

	 
 	 }
 ?>
								
</table>
                            </div>
                            </form>
                            </div>
                        </div>
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
xmlhttp.open("GET","getcountry.php?continent="+continent+"&lang="+lang,true);
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

xmlhttp.open("GET","getstate.php?country="+country,true);
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
xmlhttp.open("GET","getcity.php?state="+state,true);
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
 
     <?php
if(!isset($_GET['lang'])) include('include/footer.inc.php');
else {
if ($_GET['lang']=='ar') {          
 	 include('include/footerar.inc.php');
 	 }
	 else if ($_GET['lang']=='de') {     
  	 include('include/footer.inc.php');
 	 }
	 
	 else if ($_GET['lang']=='en') {     
  	 include('include/footer.inc.php');
	 
 	 }
	 else if ($_GET['lang']=='fr') {     
  	 include('include/footer.inc.php');
	 
 	 }
	 } ?>