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
                    
                    <script type="text/javascript">
                        $(window).load(function(){
							$("#map1").gMap({ 
								markers: [{ 
									latitude: 52.381694, 
									longitude: 9.743659}],

								zoom: 80
								});								
						});
                        </script>
	<h2><?php echo TXT_IMPRESS ?></h2>
    <div class="topimage">              
                    	<div id="map1" class="map frame_box" style="width: 100%; height: 350px; border: 1px solid #ccc; overflow: hidden;"> </div>
    </div>
	
    <div class="header_quote">
    	<p>Kronenstra?e 14, 30161 Hannover</p>
    </div>
    
</div>
<!--/ top Slider/Image -->

</div>

<div class="container">
<!-- middle -->
<div id="middle" class="full_width">
	
    <div class="content" role="main">
    
    	<article class="post-detail">            
			<div class="entry">
            
            	<!-- pricing table -->
                        <ul type="circle">
						<h3>
			<li><strong> <?php echo TXT_NAME ?> :</strong> von Ulmann GmbH </li>
<li><strong><?php echo TXT_ADDR ?> :</strong> Kronenstra&szlig;e 14, 30161 Hannover</li>
<li><strong><?php echo TXT_TELE ?> : </strong><bdo dir="ltr">+49 05 11 &ndash; 390 89 390</li>
<li><strong><?php echo TXT_FAX ?> : </strong><bdo dir="ltr">+49 05 11 - 390 89 392</li> 
<li><strong><?php echo TXT_EMAIL1 ?> : </strong><a href="mailto:info@von-ulmann.com">info@von-ulmann.com</a> </li>
<li><strong><?php echo TXT_INTER ?> :</strong> <a href="http://www.von-ulmann.com">http://www.von-ulmann.com</a> </li>
<li><strong><?php echo TXT_MANAG ?> : </strong>Philipp Markert</li>
<li><strong><?php echo TXT_REGNAME ?> :</strong> Amtsgericht Hannover</li>
<li><strong><?php echo TXT_REGNUM ?> :</strong> HRB 200017</li>
<li><strong>USt. Nr.:</strong> 16/20061098</li>
<li><strong>USt.-Id. Nr.: </strong>DE115050616</li>
<li><strong><?php echo TXT_MANAG1 ?> :</strong> <?php echo TXT_MANAG11 ?></li>
<li><strong><?php echo TXT_MANAG2 ?> : </strong><?php echo TXT_MANAG22 ?></li>
<li><strong><?php echo TXT_MANAG3 ?> : </strong><?php echo TXT_MANAG33 ?></li>
                        </h3>
						</ul>
                        <!--/ pricing table -->
            	
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