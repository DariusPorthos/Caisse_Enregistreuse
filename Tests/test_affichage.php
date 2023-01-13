<?php
require_once "../Model/Model.php";

$m = Model::getModel();
$identifiant = $m->getIdentifiant("buzura");
$mail = $m->getMail(3);
$nom = $m->getNom(3);
$mdp = $m->getMotDePasse(3);
?>
<ul>
    <li><?= $nom ?></li>
    <li><?= $mail ?></li>
    <li><?= $identifiant ?></li>
    <li><?= $mdp ?></li>
</ul>
