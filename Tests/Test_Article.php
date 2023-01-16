<?php
require_once "../Model/Model.php";
$m = Model::getModel();
$id = 10111213;
$role = $m->getRole($id);
$nom = $m->getNom($id);
$prenom = $m->getPrenom($id);
?>


<!Doctype html>
<head>
    <title>Test Article</title>
    <meta charset="utf8">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<h1>Bonjour <?php echo($role)?><?php echo($nom)?><?php echo($prenom)?></h1>

<form action="" method="get">
    <label>Formulaire de modification d'un article</label><br>
    <label>Id de l'article à modifier : <input type="text" name="ida"></label><br>
    <label>Nouveau nom de l'article: <input type="text" name="nom"></label><br>
    <label>Nouveau prix : <input type="text" name="prix"></label><br>
    <label>Nouvelles infos :<br> <textarea id="msg" name="info"></textarea> </label><br>
     <!--<legend>Modifier la categorie:</legend>

        <div>
            <input type="radio" id="eau" name="cate" value="eau" checked>
            <label for="eau">Eau</label>
        </div>

        <div>
            <input type="radio" id="eau" name="cate" value="sirop">
            <label for="sirop">Sirop</label>
        </div>

        <div>
            <input type="radio" id="soda" name="cate" value="soda">
            <label for="soda">Soda</label>
        </div>


        <div>
            <input type="radio" id="boisson" name="cate" value="boisson">
            <label for="boisson">Boisson</label>
        </div>

        <div>
            <input type="radio" id="snack" name="cate" value="snack">
            <label for="snack">Snack</label>
        </div> --!>

    <label for="pet-select">Nouvelle catégorie :</label>
    <br>
    <br>
    <select name="cate" id="pet-select">
        <option value="">- Choisissez une catégorie -</option>
        <option value="snack">Snack</option>
        <option value="boisson">Boisson</option>
    </select>
    <br>
    <br>
    <input type="submit">
</form>


</body>

<?php
$m->setNomArticle($_GET["ida"], $_GET["nom"]);
$m->setPrix($_GET["ida"], $_GET["prix"]);
$m->setCategorie($_GET["ida"], $_GET["cate"]);
$m->setInformations($_GET["ida"], $_GET["info"]);
?>
