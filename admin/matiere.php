<?php include_once "include/header.inc.php" ?>

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
                                <input type="hidden" name="lang" value="<?php echo $lang ?>" >
                                <div class="row alignleft selectField">
                                 <label for="continent">Kontinent</label> 
                                    <select class="select_styled" name="continent" id="continent" title="Select Job Opening" onChange="showcountry(this.value,f.lang.value); document.getElementById('state').options.length=0;document.getElementById('city').options.length=0;">
			                        		<option value="">Alle</option>
			                              <?php 
			                               $req="Select * From continent";
			                               $res=mysqli_query($link,$req);
			                               while($row=mysqli_fetch_array($res)){
			                               $continentname=$row['DeName'];			                          
			                                echo '<option value ='. $row['id'].' >'.utf8_encode($continentname).'</option>';
			                               }
			                                 ?>
			                        </select>
			                       
                                </div>				
                                <div class="clear"></div> 
                                  
                                
                                     <div class="row alignleft selectField" >
                                      <label for="country">Staat</label> 
                                     <select class="select_styled" name="country"  title="Select Job Opening" id="country" onChange="showstate(this.value);document.getElementById('city').options.length=0;">
			                        		
			                        		</select>
                                   
                                </div>
                                				
                                <div class="clear"></div>   
                                     <div class="row alignleft selectField">
                                     <label for="state">Bundesland</label> 
                                    <select class="select_styled" name="state" id="state" title="Select Job Opening" onChange="showcity(this.value)">
			                        		
			                     
			                        </select>
			                      
                                </div>
                                				
                                <div class="clear"></div>   
                                     <div class="row alignleft selectField">
                                      <label for="city">Stadt</label> 
                                    <select class="select_styled" name="city" id="city" title="Select Job Opening">
			                        		
			                               
			                        </select>
                                </div>
                                				
                                <div class="clear"></div> 
                                 
                                     <div class="row alignleft selectField">
                                      <label for="job_opening">Objektart</label> 
                                    <select class="select_styled" name="job_opening" id="job_opening" title="Select Job Opening">
			                        		<option value="0">Alle</option>
			                        		<option>*</option>
			                        		<option>**</option>
			                        		<option>***</option>
			                        		<option>****</option>
			                        		<option>*****</option>		                        					                       
			                                	<option>Betreiberfrei</option>
			                                	<option>Opportunistic</option>
			                                	<option>Value Add</option>
			                                	<option>Portfolio</option>
			                                	
			                        </select>
                                </div>
                                
                                <div class="space"></div>
                                
                                
								
                                <div class="clear"></div>   
                               

  <label for="amount">Investitionsvolumen :</label><br>
  $<input type="text" name="amountd">- $<input type="text" name="amountf"><br>

  
                                
                                <input name="send" type="submit" id="send" value="hinzufügen" class="btn-submit">                                
                                </div>
                            </form>
                            </div>
                        </div>
       <?php
       if(isset($_POST['send'])){
       		$job=$_POST['job_opening'];
       		$country=$_POST['country'];
       		$state=$_POST['state'];
       		$city=$_POST['city'];	
       		$continent=$_POST['continent'];
       		$amountd=$_POST['amountd'];
       		$amountf=$_POST['amountf'];
       		$sql="INSERT INTO job VALUES('','shop','$continent','$country','$state','$city','$job',$amountd,$amountf)";
       		if($query=mysqli_query($link,$sql) or die (mysqli_error($link)))
       			echo 'erfolgreich Hinzufügen';

       		else echo "hinzufügen ausfällt";
     
       		
       		
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
include_once "include/footer.inc.php" ?>