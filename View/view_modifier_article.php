<?php require 'view_header_membre.php'?>

    <section class="accueil" style="justify-content: center;">
        <div class="form">

            <h1> Modifier l'article : <?= $nom_article ?></h1>
            <hr>
            <form action="?controller=article&action=modifier_article" method="post">
                <br>
                <label>Id article : <?= $id_article ?> </label>
                <input type="hidden" name="id_article" value="<?= $id_article ?>">
                <br>

                <label>Nom de l'article:</label>
                <input class="input_form" type="text" name="nom_article" value="<?= $nom_article ?>">
                <br>

                <label>Prix :</label>
                <input class="input_form" type="text" name="prix" value="<?= $prix ?>"/>
                <br>

                <label>Informations du produit :</label>
                <textarea class="input_form" name="informations" value=""><?= $informations ?></textarea>
                <br>

                <label>Catégorie :</label>
                <select name="categorie" class="input_form">
                    <option value="<?= $categorie ?>">-Choisissez la catégorie-</option>
                    <option value="snack">Snack</option>
                    <option value="boisson">Boisson</option>
                </select>
                <br>

                <label>Nouveau Stock :</label>
                <input class="input_form" type="number" name="nb_article" min="1" max="10000" value="<?= $nb_article ?>">
                <br>

                <div class="submit_modif">
                    <input type="submit" value="Modifier l'article">
                </div>

            </form>
        </div>
        </div>

    </section>

<?php require 'view_end.php'?>
