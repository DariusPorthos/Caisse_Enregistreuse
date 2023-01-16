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
    <label>Nouvelles infos :<br> <textarea  name="info"></textarea> </label><br>

    <label for="pet-select">Nouvelle catégorie :</label>
    <br>
    <br>
    <select name="cate">
        <option value="">- Choisissez une catégorie -</option>
        <option value="snack">Snack</option>
        <option value="boisson">Boisson</option>
    </select>
    <br>
    <br>
    <label>Nouveau Stock : <input type="number" name="stock" min="1" max="10000"></label>
    <br>
    <input type="submit">
</form>


</body>

<?php
$m->setNomArticle($_GET["ida"], $_GET["nom"]);
$m->setPrix($_GET["ida"], $_GET["prix"]);
$m->setCategorie($_GET["ida"], $_GET["cate"]);
$m->setInformations($_GET["ida"], $_GET["info"]);
$m->setNbArticle($_GET["ida"], $_GET["stock"]);
?>
