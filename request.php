 <?php include("include/header.inc.php"); ?>

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
			
			                                
			                                
					$q="SELECT title,contenu,continent.EnName,country.EnName,state.EnName,city.Name,property,investd,investf,job.id FROM job,continent,country,state,city WHERE job.id=$id AND job.country=country.id AND job.continent=continent.id AND job.state=state.id AND job.city=city.id ";
$result=mysqli_query($link,$q);
$l=mysqli_fetch_array($result) or die(mysqli_error($link));
				?>
    <div class="add-comment" id="addcomments">
                            <input type="hidden" name="lang" value="en" >
                            <div class="comment-form">
								<strong><?php echo TXT_TITLE ?> : </strong><?php echo $l['title'] ?> 
							</div>
							<div class="clear"></div>
							<div class="comment-form">
								<strong>Description : </strong><textarea cols=10 rows=5 disabled><?php echo $l['contenu'] ?> </textarea>
							</div>
							
							<div class="comment-form">
								<strong><?php echo TXT_CONT ?> : </strong><?php echo $l[2] ?> 
							</div>
							
							<div class="comment-form">
								<strong><?php echo TXT_COUNT ?> : </strong><?php echo $l[3] ?> 
							</div>
							
							<div class="comment-form">
								<strong><?php echo TXT_FS ?> : </strong><?php echo $l[4] ?> 
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
                                <a href="contact.php"><input type="submit" name="send" id="send" value="Contact US" class="btn-submit"></a>                              
                             
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