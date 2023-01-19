<?php
include 'Utils/function.php';
require_once 'view_header_membre.php';
?>

    <section class="accueil" id="accueil">
        <div class="tab_historique">
            <table>
                <tr>
                    <th>Identifiant Article</th>
                    <th>Article</th>
                    <th>Date d'achat</th>
                    <th>Heure d'achat</th>
                    <th>Moyen de paiement</th>
                    <th>Identifiant Client</th>
                </tr>

                <?php foreach ($data as $valeur) : ?>
                    <tr>
                        <td> <?= $valeur['id_article'] ?> </td>
                        <td> <?= $valeur['nom_article'] ?> </td>
                        <td> <?= $valeur['date_achat'] ?> </td>
                        <td> <?= $valeur['heure_achat'] ?> </td>
                        <td> <?= $valeur['moyen_payement'] ?> </td>
                        <td> <?= $valeur['id_utilisateur']?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </section>

<?php require_once 'view_end.php'; ?>