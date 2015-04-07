<?php 
include("connexion.php");
include("lang/decide.php");
$country=$_GET['country'];
$req = "SELECT * FROM state where countryid = '$country' ";
        $res=mysqli_query($link,$req);
        //echo "donné : $semestre et $classe ";
echo '<option selected>'.TXT_ALL.'</option>';
        while($row=mysqli_fetch_array($res)){
       
        $ch=utf8_encode($row['EnName']);
        echo '<option value= '.$row['id'] .'>'.$ch.'</option>';
        }
?>