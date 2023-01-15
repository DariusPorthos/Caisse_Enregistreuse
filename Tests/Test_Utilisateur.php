<?php
require_once "../Model/Model.php";
$m = Model::getModel();
$id = 30051017;
$role = $m->getRole($id);
$mail = $m->getMail($id);
$nom = $m->getNom($id);
$prenom = $m->getPrenom($id);
$mdp = $m->getMotDePasse($id)
?>

<!Doctype html>
<head>
    <title>Test Utilisateur</title>
    <meta charset="utf8">
</head>
<body>

    <ul>
        <li>Role = <?= $role ?></li>
        <li>Mail = <?= $mail?></li>
        <li>Nom = <?= $nom?></li>
        <li>Prenom = <?= $prenom?></li>
        <li>Mdp = <?= $mdp?></li>
    </ul>
    <form action="" method="get">
        <label>Nouveau nom : <input type="text" name="nom"></label><br>
        <label>Nouveau Prenom : <input type="text" name="prenom"></label><br>
        <label>Nouveau Mail : <input type="text" name="mail"></label><br>
        <label>Nouveau Role : <input type="text" name="role"></label><br>
        <label>Nouveau Point de fidelité : <input type="number" name="points"></label><br>
        <input type="submit">
    </form>
</body>
<?php
$m->setNom($id, $_GET["nom"]);
$m->setPrenom($id, $_GET["prenom"]);
$m->setMail($id, $_GET["mail"]);
$m->setRole($id, $_GET["role"]);
$m->setPointsFid($id, $_GET["points"]);
    ?>