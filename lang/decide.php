<?php
if(!isset($_GET['lang'])) include('lang/de-lang.php');
else {
if ($_GET['lang']=='en') {          
 	 include('lang/en-lang.php');
 	 } 
 	 
 	 else if ($_GET['lang']=='de') {     
  	 include('lang/de-lang.php');
 	 }
	 
	 else if ($_GET['lang']=='ar') {     
  	 include('lang/ar-lang.php');
	 
 	 }
	 else if ($_GET['lang']=='fr') {     
  	 include('lang/fr-lang.php');
	 
 	 }
	 
 	 else {                      
	 include('lang/de-lang.php');
 	 }
	} 
 	 
?>