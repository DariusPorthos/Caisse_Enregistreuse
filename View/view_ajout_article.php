<?php
require_once "../Model/Model.php";
$m = Model::getModel();
?>


    <!Doctype html>
    <head>
        <title>Ajout d'un article</title>
        <meta charset="utf8">
        <link href="styles/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
    <form action="" method="get">
        <label>Ajout d'un article</label><br>
        <label>Nom de l'article: <input type="text" name="nom"></label><br>
        <label>Prix : <input type="text" name="prix"></label><br>
        <label>Informations du produit :<br> <textarea  name="informations"></textarea> </label><br>
        <label for="selection">Catégorie :</label>
        <br>
        <br>
        <select name="categorie">
            <option value="">- Choisissez une catégorie -</option>
            <option value="snack">Snack</option>
            <option value="boisson">Boisson</option>
        </select>
        <br>
        <br>
        <label>Stock initial : <input type="number" name="nbArticle" min="1" max="10000"></label>
        <br>
        <input type="submit">
    </form>


    </body>

<?php
$ida = $m->getNbArticle()+1;
$nom = $_GET["nom"];
$prix = $_GET["prix"];
$categorie = $_GET["categorie"];
$informations = $_GET["informations"];
$nbArticle = $_GET["nbArticle"];
$m->ajouterArticle($ida,$nom,$prix,$categorie,$informations,$nbArticle);
?>
