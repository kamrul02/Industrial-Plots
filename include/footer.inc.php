<style type="text/css">
.container .col.col_2_5 .inner .widget-container.newsletterBox #addcomments .comment-form form {
	font-size: small;
}
.container .col.col_2_5 .inner .widget-container.newsletterBox #addcomments .comment-form {
	font-size: smaller;
	background-image: none;
}
</style>
<footer>
<?php
  if ($_GET['lang']=='ar') {  
        
	  header ('Content-Type: text/html; charset=UTF-8'); 
   
  // Declare encoding META tag, it causes browser to load the UTF-8 charset before displaying the page. 
  echo '<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />'; 
   

    }
    ?>
<div class="container">

  <div class="fcol f_col_1">
    
    	<!-- widget contacts -->
		<div class="widget-container widget_contact">                    
			<h3><?php echo TXT_CONTACT; ?> : </h3>     
			<div class="contact-address">
				<div class="address">Kronenstraße 14, 30161 Hannover</div>
				<div class="phone"><em><?php echo TXT_TELE ?>   :</em> <span><bdo dir="ltr">(+49 05 11- 390 89 390)</span></div>
                    <div class="fax"><em><?php echo TXT_FAX ?>:</em> <span><bdo dir="ltr">(+49 05 11 - 390 89 392)</span></div>
	                <div class="mail"><em><?php echo TXT_EMAIL1 ?>      :</em> <a href="mailto:info@vonulman.com?Subject=E-mail%20from vonulman.com" target="_top"> info@industrialplotsww.com</a></div>
				
                 	</div>    
		</div>
		<!--/ widget contacts -->  
          
    
		
					
		<!--/ widget contacts -->  
          
    </div>
    <!--/ f_col_1 -->
    
    <div class="fcol f_col_2">
    
    	<!-- widget widget_nav_menu -->
		<div class="widget-container widget_nav_menu">
			<h3 class="widget-title"><?php echo strtoupper(TXT_ABOUT) ?> : </h3>
			<ul>
			        <li><a href="impressum.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><span><?php echo TXT_IMPRESS ?></span></a></li>  
				<li><a href="china.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><span><?php echo TXT_NIEC ?></span></a></li>                            
				<li><a href="Deutschland.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><span><?php echo TXT_NIED ?></span></a></li>                        	
				
			</ul>
		</div>
        <!-- widget widget_nav_menu -->
        
    </div>
    <!--/ f_col_2 -->
    
   <div class="col col_2_5">
                    	<div class="inner">
    
    	<!-- widget widget_nav_menu -->
			<div class="widget-container newsletterBox">
									<h3>Newsletter :<span class="comment-form">
									  <input type="hidden" name="lang" value="en" />
									  <span class="add-comment">
                                      <?php
       if(isset($_POST['send'])){
	    $title=$_POST['email2'];
	   $descrip=$_POST['descrip'];
       		
			
			$sql="INSERT INTO `newsletter`( `email`, `no`) VALUES('$title','$descrip')";
			
       		if($query=mysqli_query($link,$sql) or die (mysqli_error($link)))
       			echo 'OK';

       		else echo "hinzuf端gen ausf辰llt";
     
       		
       		
       	}
       
       
       ?>
                                    </span>									</span></h3>   
                                    <div class="add-comment" id="addcomments">
                            
                           
                            <form action= "#" method="post" id="contactForm" name="f" >
                            <form action="#" method="get" dir="rtl" lang="ar">
                              <input type="text" value="" name="email2" class="inputField" placeholder="<?php echo (TXT_EE) ?>"/>
              <input name="send" type="submit" id="send" value="JOIN" class="btn-submit" />
</form>
							</form>
                            </div>
              </div>
                            
                        </div>
		</div>
        <!-- widget widget_nav_menu -->

  
    <!--/ f_col_3 -->
    
    
    
    
    <div class="divider_space_thin"></div>

       
    <div class="copyright">
    	<p>copyright 2014 </p>
    </div>
    
</div>
</footer>

</div>
<script src="js/jquery.infieldlabel.min.js"></script>
</body>
</html>