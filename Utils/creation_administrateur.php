<?php

require_once "../Model/Model.php";
$m = Model::getModel();

try {
    if (isset($_POST["identifiant"]) and isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["mail"]) and isset($_POST["mdp"]) ) {
        $identifianttt = (int)$_POST["identifiant"];
        $nom = $_POST["nom"];
        echo "hello 1 ";
        $prenom = $_POST["prenom"];
        echo "hello 2 ";
        $mail = $_POST["mail"];
        echo "hello 3 ";
        $mdp = $_POST["mdp"];
        $m->ajoutCompteAdministrateur($identifianttt, $nom, $prenom, $mail, $mdp);
        header("Location:test.php");
    }

}catch (Exception $exception){
    die('Erreur : ' . $exception->getMessage());
}

?>
