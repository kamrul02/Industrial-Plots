<?php include "include/header.inc.php";

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
<!-- top Slider/Image -->
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
<div class="header_image">
	
     <div class="topimage">              
                    	<div id="map1" class="map frame_box" style="width: 100%; height: 350px; border: 1px solid #ccc; overflow: hidden;"> </div>
    </div>
    
</div>
<!--/ top Slider/Image -->

</div>

<div class="container">
<!-- middle -->
<div id="middle" class="cols2 sidebar_left">
	
    <div class="content" role="main">
    
    	<article class="post-item post-detail">
        	        
        	<h1><?php echo TXT_CON ?> </h1>          
			
            
			<div class="entry">
                
            	
                
                <!-- contact form -->

                        <div class="add-comment" id="addcomments">
                            
                            <div class="comment-form">
                            <form action= "#" method="post" id="contactForm" class="ajax_form">
                            <div class="aligncenter" style="display: block;">
                                <div class="row aligncenter infieldlabel" >
        <div class="row alignleft infieldlabel">
                                    <label for="title"><?php echo TXT_TITLE; ?>*</label>
                                    <input type="text" id="title" name="title" size="150" value="" class="inputtext input_middle required" >
                                </div>
                            </div>
                                 <div class="clear"></div> 
                                <div class="row alignleft infieldlabel">
                                    <label for="lname"><?php echo TXT_LAST_NAME; ?>*</label>
                                    <input type="text" id="lname" name="lname" value="" class="inputtext input_middle required">
                                </div>
                                
                                <div class="space"></div>
                                
                                <div class="row alignleft infieldlabel">
                                    <label for="fname"><?php echo TXT_FIRST_NAME; ?>*</label>
                                    <input type="text" id="fname" name="fname" value="" class="inputtext input_middle required">
                                </div>
								
                                <div class="clear"></div>   
                                
                                <div class="row alignleft infieldlabel">
                                    <label for="email"><?php echo TXT_EMAIL; ?></label>
                                    <input type="text" id="email" name="email" value="" class="inputtext input_middle">
                                </div>
                                
                                <div class="space"></div>
                                
                                <div class="row alignleft infieldlabel">
                                    <label for="fax"><?php echo TXT_FAX; ?></label>
                                    <input type="text" id="fax" name="fax" value="" class="inputtext input_middle">
                                </div>
                               
                                <div class="clear"></div> 
                                
                                 <div class="row alignleft infieldlabel">
                                    <label for="phone"><?php echo TXT_PHONE; ?>*</label>
                                    <input type="text" id="phone" name="phone" value="" class="inputtext input_middle required">
                                </div>
                                
                                <div class="space"></div>
                                
                                <div class="row alignleft infieldlabel">
                                    <label for="mobile"><?php echo TXT_MOBILE; ?></label>
                                    <input type="text" id="mobile" name="mobile" value="" class="inputtext input_middle">
                                </div>
                                
                                
                                
                                
                                <div class="clear"></div> 
                                
                                <div class="row alignleft infieldlabel">
                                    <label for="street"><?php echo TXT_STREET; ?></label>
                                    <input type="text" id="street" name="street" value="" class="inputtext input_middle ">
                                </div>
                                
                                <div class="space"></div>
                                
                                <div class="row alignleft infieldlabel">
                                    <label for="zip"><?php echo TXT_ZIP; ?></label>
                                    <input type="text" id="zip" name="zip" value="" class="inputtext input_middle">
                                </div>
                                
                                
                                
                                
                                <div class="clear"></div> 
                                
                                
                                
                                <div class="row infieldlabel">
                                    <textarea id="message" cols="30" rows="10" placeholder="<?php echo TXT_MSG; ?>*" name="msg" class="textarea textarea_middle required"></textarea>
                                </div>
                                 
                                <div class="row rowSubmit">
                                <input type="submit" name="send" id="send" value="<?php echo TXT_SEND; ?>" class="btn-submit">                                
                                <a onClick="document.getElementById('commentForm').reset();return false" href="contact.php?lang=<?php if (isset($_GET['lang'])) echo $_GET['lang']; else echo "en"; ?>" class="link-reset"><?php echo TXT_REST; ?></a>
                              </div>
                            </form>
                            </div>
                        </div>
                <!--/ contact form -->
<?php
                if(isset($_POST['send']))
{	
    if(isset($_POST['title']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['msg']))
	  {
	   if(empty($_POST['street'])) $street=""; else $street=utf8_decode(safe($_POST['street']));
	   if(empty($_POST['mobile'])) $mobile=""; else $mobile=utf8_decode(safe($_POST['mobile']));
	   if(empty($_POST['zip'])) $zip=""; else $zip=utf8_decode(safe($_POST['zip']));
	   if(empty($_POST['mail'])) $mail=""; else $mail=utf8_decode(safe($_POST['mail']));
	   if(empty($_POST['fax'])) $fax=""; else $fax=utf8_decode(safe($_POST['fax']));
	   $title=utf8_decode(safe($_POST['title']));
	   $fname=utf8_decode(safe($_POST['fname']));
	   $lname=utf8_decode(safe($_POST['lname']));
	   $phone=utf8_decode(safe($_POST['phone']));
	   $msg=utf8_decode(safe($_POST['msg']));
	  
	   $req="INSERT INTO contact(title,fn,ln,phone,msg,mail,street,zip,mobile,fax) values('$title','$fname','$lname','$phone','$msg','$mail','$street','$zip','$mobile','$fax')";
	   if(mysqli_query($link,$req)) echo '<div class="sb sb_green">
                        	<div class="box_title">SUCESS</div>                    
                        </div>';
	   else echo '<div class="sb">
                        	<div class="box_title">Fail</div>                    
                        </div>';
	   
	  }
}
?>
           	  	
<div class="clear"></div>
            </div>
		</article>            
            
		</div>

    <!--/ content -->
    
    <!-- sidebar -->
    <div class="sidebar">

    	<!-- widget_contact -->
        <div class="widget-container widget_contact">   
			<h3 class="widget-title"><?php echo TXT_CONTACT; ?> :</h3>
            <div class="inner">   
            	
                <div class="contact-address">
                	<div class="name"><strong>von Ulmann GmbH</strong></div>
					<div class="address">Kronenstra?e 14, 30161 Hannover</div>
					<div class="phone"><em><?php echo TXT_TELE ?></em><span> <bdo dir="ltr">+49 05 11- 390 89 390</span></div>
                    <div class="fax"><em><?php echo TXT_FAX ?>:</em><span><bdo dir="ltr"> +49 05 11 - 390 89 392</span></div>
	                <div class="mail"><em><?php echo TXT_EMAIL1 ?>    :</em> <a href="mailto:info@vonulman.com?Subject=E-mail%20from vonulman.com" target="_top">info@vonulman.com</a></div>
				</div>
	                  
				
                       
			</div>     
		</div>
        <!--/ widget_contact -->
        
                
    </div> 
    <!--/ sidebar -->
           
    <div class="clear"></div>	    
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