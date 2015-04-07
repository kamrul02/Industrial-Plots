<?php include "include/header.inc.php" ?>
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
									latitude: 36.060487, 
									longitude: 120.3785124}],
								zoom: 30
								});								
						});
                        </script>
	<h2><?php echo TXT_NIEC ?></h2>
    <div class="topimage">              
                    	<div id="map1" class="map frame_box" style="width: 100%; height: 350px; border: 1px solid #ccc; overflow: hidden;"> </div>
    </div>
	
    <div class="header_quote">
    	<p>807, No.21, Donghai West Road 266071 Qingdao P.R.China</p>
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
                          <li><strong><?php echo TXT_ADDR ?></strong> 807, No.21, Donghai West Road 266071 Qingdao P.R.China</li>
                          <li><strong><?php echo TXT_TELE ?></strong><bdo dir="ltr"> 0086 532 8389 2129</li>
                          <li><strong><?php echo TXT_FAX ?></strong><bdo dir="ltr"> 0086 532 8388 8196</li>
                          <li><strong><?php echo TXT_EMAIL1 ?> </strong> <a href="mailto:china@von-ulmann.com">china@von-ulmann.com</a></li>
						  <li><strong><?php echo TXT_INTER ?></strong> <a href="http://www.von-ulmann.com/"> http://www.von-ulmann.com</a></li>
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