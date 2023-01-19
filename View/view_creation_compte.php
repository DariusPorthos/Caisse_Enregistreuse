<?php
require_once "../Model/Model.php";
$m = Model::getModel();
?>

<!Doctype html>
<html>
<head>
    <title>BDE Creation Compte</title>
    <meta charset="utf-8">
    <link href="../Content/CSS/4.css" rel="stylesheet" type="text/css">
</head>

<?php require 'view_header_membre.php' ?>

<body>
<section class="accueil" style="justify-content: center;">
    <div class="form">
        <h1> Créer votre compte :</h1>
        <hr>
        <form action="" method="get">
            <br/>
            <label for="identifiant">Identifiant : </label>
            <input name="identifiant" type="text"/><br/>

            <label for="nom">Nom :</label>
            <input name="nom" type="text"/><br/>

            <label for="prenom">Prenom :</label>
            <input name="prenom" type="text"/><br/>

            <label for="email">Mail : </label>
            <input name="mail" type="email"><br/>

            <label for="mdp">Mot de passe :</label>
            <input name="mdp" type="password"><br/>

            <div class="submit_creer">
                <input type="submit" value="Créer"/>
            </div>

    </form>
    </div>
</section>

</body>

<?php require 'view_end.php'?>

<?php
//$id_c = $m->getNbUtilisateur()+1;
//$identifiant = $_GET["identifiant"];
//$nom = $_GET["nom"];
//$prenom = $_GET["prenom"];
//$mail = $_GET["mail"];
//$mdp = $_GET["mdp"];
//$role="client";
//$date_crea=null;
//$date_connexion=null;
//$m->ajouterCompte($id_c,$nom,$prenom,$mail,$mdp,$role,$date_crea,$date_connexion,0);
?>
