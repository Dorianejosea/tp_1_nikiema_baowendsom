<?php
require_once("fonction.php");

var_dump($_POST);


//message d'alerte dans le cas ou une case est vide
if ($_POST) {
    $lPrenom = $_POST['prenom'];
    $lNom = $_POST['nom'];
    $modp = $_POST['mdp'];
    if (empty($modp)){
        echo "</br> Le mot de passe est vide";
    }
    else{
        echo "</br> Le mot de passe est :" . $modp;
    }
echo '</br>';
$saltedMdp = addSalt($_POST['mdp']);
var_dump($saltedMdp);

$encodeMdp = encodeMdp($saltedMdp);
echo'</br>';
echo $encodeMdp;
}

?>
<a href="./index.php">retour</a>