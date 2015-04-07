<?php include_once "include/header.inc.php" ?>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<?php 

$id=$_GET['post'];

$q="SELECT * FROM job WHERE id=$id";
 mysql_query("SET CHARACTER SET 'utf8'", $db);
 mysql_set_charset('utf8');  
mysql_query("set characer set cp1256");
$result=mysqli_query($link,$q);

$l=mysqli_fetch_array($result);

?>





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

									 <label for="title">Title in Dutch</label>

									 <?php echo "<td><input type='text' name='title' value='" . $l['title']  . "'> </td>";  ?>

								</div>

							
										

                                	<div class="row alignleft selectField">

									 <label for="titleEn">Title in English</label>

									 <?php echo "<td><input type='text' name='titleEn' value='" . $l['titleEn']  . "'> </td>";  ?>

								</div>

								<div class="clear"></div> 
                                	<div class="row alignleft selectField">

									 <label for="titleAr">Title in Arabic</label>

									<?php echo "<td><input type='text' name='titleAr' value='" . $l['titleAr']  . "'> </td>";  ?> 

								</div>

								<div class="clear"></div> 
                                	<div class="row alignleft selectField">

									 <label for="titleFr">Title in Franch</label>

									 <?php echo "<td><input type='text' name='titleFr' value='" . $l['titleFr']  . "'> </td>";  ?>

								</div>

								
										

								
                                <div class="clear"></div> 

                                <div class="row alignleft selectField">

								 <label for="descrip">Description in Dutch </label>

									 <textarea name="descrip" rows="10" cols="100"><?php echo $l['contenu'] ?> </textarea>

								</div>

                               

                                <div class="clear"></div> 

                                <div class="row alignleft selectField">

								 <label for="descripEn">Description in English </label>

									 <textarea name="descripEn" rows="10" cols="100"><?php echo $l['contenuEn'] ?> </textarea>

								</div>

										

								

                                <div class="clear"></div>   
<div class="row alignleft selectField">

								 <label for="descripAr">Description in Arabic </label>

									 <textarea name="descripAr" rows="10" cols="100"><?php echo $l['contenuAr'] ?> </textarea>

								</div>

										

								

                                <div class="clear"></div>   
<div class="row alignleft selectField">

								 <label for="descripFr">Description in Franch </label>

									 <textarea name="descripFr" rows="10" cols="100"><?php echo $l['contenuFr'] ?> </textarea>

								</div>

										

								

                                <div class="clear"></div>   
  

                               



  <label for="amount">Investitionsvolumen :</label><br>

  $<input type="text" name="amountd" value=<?php echo $l['investd'] ?> >- $<input type="text" name="amountf" value=<?php echo $l['investf'] ?> >><br>



  

                                

                                <input name="send" type="submit" id="send" value="UPDATE" class="btn-submit">                                

                                </div>

                            </form>

                            </div>

                        </div>

       <?php

       if(isset($_POST['send'])){

 $title=$_POST['title'];
	   $descrip=$_POST['descrip'];
 $titleEn=$_POST['titleEn'];
	   $descripEn=$_POST['descripEn'];
	    $titleAr=$_POST['titleAr'];
	   $descripAr=$_POST['descripAr'];
	    $titleFr=utf8_decode(safe($_POST['titleFr']));
	   $descripFr=utf8_decode(safe($_POST['descripFr']));
       		$amountd=$_POST['amountd'];

       		$amountf=$_POST['amountf'];

       		$sql="UPDATE job SET title='$title',contenu='$descrip',titleEn='$titleEn',contenuEn='$descripEn',titleAr='$titleAr',contenuAr='$descripAr',titleFr='$titleFr',contenuFr='$descripFr',investd=$amountd,investf=$amountf WHERE id=$id";

       		if($query=mysqli_query($link,$sql) or die (mysqli_error($link)))

       					header('Location:index.php');



       		else echo "UPDATE FAILED";

     

       		

       		

       	}

       

       

       ?>

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

