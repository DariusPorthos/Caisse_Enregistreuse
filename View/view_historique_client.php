<?php

require_once 'view_header_client.php';
?>

    <section class="accueil" id="accueil">
        <div>
            <table class="tab_historique">
                <tr>
                    <th>Article</th>
                    <th>Date d'achat</th>
                    <th>Heure d'achat</th>
                    <th>Moyen de paiement</th>
                </tr>

                <?php foreach ($data as $valeur) : ?>
                    <tr>
                        <td> <?= e($valeur['nom_article']) ?> </td>
                        <td> <?= e($valeur['date_achat']) ?> </td>
                        <td> <?= e($valeur['heure_achat']) ?> </td>
                        <td> <?= e($valeur['moyen_payement']) ?> </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </section>

<?php require_once 'view_end.php'; ?>
