<style type="text/css">
.container .col.col_2_5 .inner .widget-container.newsletterBox form {
}
</style>
<<footer>
<?php
  if ($_GET['lang']=='ar') {  
        echo '<link rel="stylesheet" href="custom.css">';
	  header ('Content-Type: text/html; charset=UTF-8'); 
   
  // Declare encoding META tag, it causes browser to load the UTF-8 charset before displaying the page. 
  echo '<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />'; 
   

    }
    ?>
<div class="container">

	<div class="fcol f_col_1">
    
    	<!-- widget contacts -->
		<div class="widget-container widget_contact">                    
			<p dir="ltr"><h3><p dir="RTL">أتصل بنا : </h3> &nbsp;<br>    
			<div class="contact-address">
				<div class="address">
				  <p dir="RTL"><span dir="LTR"><p dir="RTL">Kronenstraße 14</span><span dir="RTL"> </span><span dir="RTL"> </span><span dir="RTL"> </span><span dir="RTL"> </span>، <span dir="LTR"> </span><span dir="LTR"> </span><span dir="LTR"><span dir="LTR"> </span><span dir="LTR"> </span>30161</span><span dir="RTL"> </span><span dir="RTL"> </span><span dir="RTL"> </span><span dir="RTL"> </span> هانوفر </p>
				</div>
				<div class="phone">
				  <p dir="RTL">هاتف:&nbsp<bdo dir="ltr">+49 05 11-390 89 390&nbsp;<br>
                  </div>
                  <div class="fax">
				  <p dir="RTL">فاكس:&nbsp<bdo dir="ltr">+49 05 11-390 89 392&nbsp;<br>
				   </p>
				</div>
                <div class="mail">
                  <p dir="RTL">البريد الإلكتروني:&nbsp;<a href="mailto:info@vonulman.com?Subject=E-mail%20from vonulman.com" target="_top">info@vonulman.com</a></p>
                </div>
			</div>    
		</div>
		<!--/ widget contacts -->  
          
    </div>
    <!--/ f_col_1 -->
    
    <div class="fcol f_col_2">
    
    	<!-- widget widget_nav_menu -->
		<div class="widget-container widget_nav_menu">
			<h3 class="widget-title"><p dir="RTL">معلومات عنا: </h3>
			<ul>
			        <li><a href="impressum.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><span><p dir="RTL">الالمركز الرئيسي</span></a></li>  
				<li><a href="china.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><span><p dir="RTL">فرع الصين</span></a></li>                            
				<li><a href="Deutschland.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>"><span><p dir="RTL">فرع المانيا</span></a></li>                        	
				
			</ul>
		</div>
        <!-- widget widget_nav_menu -->
        
    </div>
    <!--/ f_col_2 -->
    
   <div class="col col_2_5">
                    	<div class="inner">
    
    	<!-- widget widget_nav_menu -->
			<div class="widget-container newsletterBox">
							<h3><p dir="RTL">النشرة الاخبارية :<span class="comment-form">
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
                              <input type="text" value="" name="email2" class="inputField" placeholder="ادخل بريدك الالكتروني" />
              <input name="send" type="submit" id="send" value="أشترك" class="btn-submit" />
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
    	<p>حقوق الطبع والنشر 2014 </p>
    </div>
    
</div>
</footer>