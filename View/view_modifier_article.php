<?php
require_once "../Model/Model.php";
$m = Model::getModel();
?>


<!Doctype html>

<head>
        <title>Test Article</title>
        <meta charset="utf8">
        <link href="../Content/CSS/4.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php require 'view_header_membre.php'?>

    <section class="accueil" style="justify-content: center;">
        <div class="form">
            <h1> Modifier un article</h1>
            <hr>
            <form action="" method="get">
                <br/>
                <label>Id article : <?php ?></label><br/>
                <label for="nom">Nom de l'article:</label>
                <input class="input_form" type="text" name="nom" value="<?php ?>"/><br/>
                <label for="prix">Prix :</label><input class="input_form"  type="text" name="prix" value="<?php ?>"/><br/>
                <label for="informations">Infos supplémentaires :</label><textarea  class="input_form"  name="informations"></textarea><br/>
                <label for="categorie">Catégorie :</label>
                <select name="categorie" class="input_form">
                    <option value="">- choisir -</option>
                    <option value="snack">Snack</option>
                    <option value="boisson">Boisson</option>
                </select><br/>

                <label for="nbArticle">Nouveau Stock : </label><input class="input_form" type="number" name="nbArticle" min="1" max="10000"><br/>

                <div class="submit_modif">
                    <input type="submit" value ="Modifier">
                </div>

            </form>
        </div>

        </div>

    </section>

    </body>

<?php
$m->setNomArticle($_GET["ida"], $_GET["nom"]);
$m->setPrix($_GET["ida"], $_GET["prix"]);
$m->setCategorie($_GET["ida"], $_GET["categorie"]);
$m->setInformations($_GET["ida"], $_GET["informations"]);
$m->setNbArticle($_GET["ida"], $_GET["nbArticle"]);
?>

<?php require 'view_end.php'?>
