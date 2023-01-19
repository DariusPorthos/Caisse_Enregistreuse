<?php
require_once "view_header_client.php"; ?>

<main class="accueil">

    <ul>
        <li>Identifiant : <input name="identifaint" value="<?= $_SESSION["identifiant"] ?>"></li>
        <li>Nom : <input name="identifaint" value="<?= $_SESSION["nom"] ?>"></li>
        <li>Prenom : <input name="identifaint" value="<?= $_SESSION["prenom"] ?>"></li>
        <li>Mail : <input name="identifaint" value="<?= $_SESSION["mail"] ?>"></li>
    </ul>

    <form>

    </form>
</main>

<?php
require_once "view_end.php" ?>