<?php 
include("connexion.php");
include("lang/decide.php");
$continent=$_GET['continent'];
$req = "SELECT * FROM country where continent = '$continent' ";
        $res=mysqli_query($link,$req);
        //echo "donné : $semestre et $classe ";

echo '<option selected>'.TXT_ALL.'</option>';
        while($row=mysqli_fetch_array($res)){
        $ch=utf8_encode($row['DeName']);
        if($_GET['lang'] == "en")
        $ch=utf8_encode($row['EnName']);
        echo '<option value= '.$row['id'] .'>'.$ch.'</option>';
        }
?>