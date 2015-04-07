<?php 
include("connexion.php");
include("lang/decide.php");
$state=$_GET['state'];
$req = "SELECT * FROM city where stateid = '$state' ";
        $res=mysqli_query($link,$req);
        //echo "donné : $semestre et $classe ";
echo '<option selected>'.TXT_ALL.'</option>';
        while($row=mysqli_fetch_array($res)){
        $ch=utf8_encode($row['Name']);
        echo '<option value= '.$row['id'] .'>'.$ch.'</option>';
        }
?>