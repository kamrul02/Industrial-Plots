<?php include "include/header.inc.php" ?>

   
<!-- top Slider/Image -->
<div class="header_slider">
	
    <div class="header_quote">
    	<p><?php echo TXT_EXP ?></p>
    </div>
    
	<!-- header slider -->
	<div class="top_slider">        	
		<div class="slides_container">

			<div class="slide">
			
				<a href="#"><img src="images/slide/hotel.jpg" alt=""></a>
				<div class="caption">
					<p><span><?php echo TXT_HOTEL1 ?></span> <a href="hotel.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>" class="link-more"><?php echo TXT_SERVICE ?></a></p>
				</div>
			</div>
            
            <!--
            
            <div class="slide">
				<a href="shop.php"><img src="images/slide/centre-commercial.jpg" alt=""></a>
				<div class="caption">
					<p><span><?php echo strtoupper(TXT_SHOP) ?></span> <a href="shop.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>" class="link-more"><?php echo TXT_SERVICE ?></a></p>
				</div>
			</div>

            -->
            
          
            <div class="slide">
				<a href="shop.php"><img src="images/slide/office-buildings.jpg" alt=""></a>
				<div class="caption">
					<p><span><?php echo strtoupper(TXT_CORE) ?></span> <a href="core.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>" class="link-more"><?php echo TXT_SERVICE ?></a></p>
				</div>
			</div>
        </div>              
    </div>
            
	<script>
		jQuery(document).ready(function($) {
			$('.top_slider').slides({
				play: 7000,
				pause: 7000,
				rtl: true,
				hoverPause: true,
				generateNextPrev: true,
				effect: 'slide',
				fadeSpeed: 250,
				slideSpeed: 700,
				slideEasing: 'easeInOutExpo',
				preloadImage: 'images/loading.gif'
			});
			$(document).ready(
    function(){
        $('#slider').click(
            function(){
                $(this).hide('slide',{direction:'left'},1000);

            });
    });
			// Pagination item width
			var pageItem = $('.top_slider .pagination li');
			var pageItemWidth = 100 / pageItem.length;
			pageItem.css("width",""+ pageItemWidth + "%");		
		});
	</script>        

</div>
<!--/ top Slider/Image -->
</div>

<div class="container">
<!-- middle -->
<div id="middle" class="full_width">
	
    <div class="content" role="main">
    
    	<article class="post-detail">            
			<div class="entry">
            	
                <!-- 2/5 + 3 x 1/5 columns -->
            	<div class="row">                    
                    <div class="col col_2_5">
                    	<div class="inner">
                        	
 
                            	<div class="inner">
		                        	<div class="quote-text"> </div>               
                                	<div class="quote-author"></div>
                                </div>
		                	</div> 
                        	
                    
                    </div>
                    
                    
                    
                    <div class="col col_1_5">
                    	<div class="inner">
                        	
                            <div class="wp-caption alignnone">
                            <a href="china.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><img src="images/chine.png" alt="Niederlassung China"></a>
                            
                            <p class="wp-caption-text"><br><?php echo TXT_NIEC ?></p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col col_1_5">
                    	<div class="inner">
                        	
                            <div class="wp-caption alignnone">
                            <a href="Deutschland.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><img src="images/ger.png" alt="Niederlassung Deutschland"></a>
                            <p class="wp-caption-text"><?php echo TXT_NIED ?></p>
                            </div>
                            
                        </div>
                    </div>
                      <div class="col col_1_5">
                    	<div class="inner">
                        	
                            <div class="wp-caption alignnone">
                            <a href="impressum.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><img src="images/impressum2.png" alt="<?php echo TXT_IMPRESS ?>"></a>
                            <p class="wp-caption-text"><?php echo TXT_IMPRESS ?></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <!-- 2/5 + 3 x 1/5 columns -->                             
                
             
            
                <!--/ latest news line -->
                
                
                
                <!--  postlist / 1 article -->
                <div class="postlist">
                
	     
	                	<div class="quoteBox">
                            	<div class="inner">
		                        	<div class="quote-text"><?php echo TXT_HOME ?> </div>               
                                	<div class="quote-author"><span>Von Ulmann</span></div>
                                </div>
		                	</div> 
                            
                      	</div>
	               
                
                </div>
                

                
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