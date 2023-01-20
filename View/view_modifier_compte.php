<?php require 'view_header_membre.php'?>

    <section class="accueil" style="justify-content: center;">
        <div class="form">

            <h1> <?= $nom .' ' .$prenom; ?></h1>
            <hr>
            <form action="?controller=compte&action=modifier_compte" method="post">
                <br>
                <label>Identifiant : <?= $id_utilisateur ?> </label>
                <input type="hidden" name="id_utilisateur" value="<?= $id_utilisateur ?>">
                <br>

                <label>Nom :</label>
                <input class="input_form" type="text" name="nom" value="<?= $nom ?>">
                <br>

                <label>Prénom</label>
                <input class="input_form" type="text" name="prenom" value="<?= $prenom ?>"/>
                <br>

                <label>Rôle :</label>
                <select name="role" class="input_form">
                    <option value="<?= $role; ?>">-Choisissez la catégorie-</option>
                    <option value="admin">Administrateur</option>
                    <option value="super-admin">Super-Administrateur</option>
                    <option value="client">Client</option>
                </select>
                <br>

                <div class="submit_modif">
                    <input type="submit" value="Modifier compte">
                </div>

            </form>
        </div>
        </div>

    </section>

<?php require 'view_end.php'?>