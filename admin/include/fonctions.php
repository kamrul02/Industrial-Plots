   

<?php
echo"<link href='css/bootstrap.css' rel='stylesheet'>";
function affichePages($lim,$nb,$page,$total) {
echo"<center>";
$limiteSuivante = $lim + $nb;
$limitePrecedente = $lim - $nb;
        $nbpages=ceil($total/$nb);
        $numeroPages = 1;
        $compteurPages = 1;
        $limite  = 0;
        echo "<div ><ul class='pagination'>";
		if($lim != 0) {
		echo '<li><a href = "'.$page.'?limite='.$limitePrecedente.'"><<</a></li>';}
        while($numeroPages <= $nbpages) {
        echo '<li><a href = "'.$page.'?limite='.$limite.'">'.$numeroPages.'</a></li>';
		
        $limite = $limite + $nb;
        $numeroPages = $numeroPages + 1;
        $compteurPages = $compteurPages + 1;
            if($compteurPages == 10) {
            $compteurPages = 1;
            echo '<br>'."\n";
            }
        }
		if($limiteSuivante < $total) {
		echo '<li><a href = "'.$page.'?limite='.$limiteSuivante.'">>></a></li>';}
       echo"</ul></div></center>"; 
}

  if(isset($_GET['limite'])) 

        $limite=$_GET['limite'];
    else   $limite=0;


function verifLimite($limite,$total,$nombre) {

    // je verifie si limite est un nombre.

    if(is_numeric($limite)) {

        
// si $limite est entre 0 et $total, $limite est ok

        // sinon $limite n'est pas valide.

        if(($limite >=0) && ($limite <= $total) && (($limite%$nombre)==0)) {

            // j'assigne 1 à $valide si $limite est entre 0 et $max

            $valide = 1;

        }    

        else {

            // sinon j'assigne 0 à $valide

            $valide = 0;

        }

    }

    else {

            // si $limite n'est pas numérique j'assigne 0 à $valide

            $valide = 0;

    }

// je renvois $valide

return $valide;

}
function safe($var)
{   
    global $link;
	$var = mysqli_real_escape_string($link,$var);
	$var = addcslashes($var, '%_');
	$var = trim($var);
	/*$var = htmlspecialchars($var);*/
	return $var;
}
?>