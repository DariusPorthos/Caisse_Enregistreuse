<?php require_once "view_header_membre.php" ; ?>

    <div class="titre">
        <h1>Commande en cours</h1>
    </div>


    <div class="container1">

        <div class="bloc">

            <div class="scroll">

                <?php foreach($data as $val) : ?>

                    <div class="produit">
                        <img src=<?= e($val['image']);?> >
                        <p class="nom_prod"><?= e($val['nom_article']);?></p>
                        <p> <?= e($val['informations']); ?> </p>
                        <p class="prix_prod"><strong> <?= e($val['prix'])?>€ </strong></p>

                        <label for="q">Quantité: </label>
                        <select id="quantite" name="q" class="qt">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                        <input type="button" id="abc" value="Ajouter au panier"/>
                    </div>

                <?php endforeach ?>

            </div>

        </div>

        <div class="container2">
            <div class="panier">
                <h3 class="categorie" id="titre-panier" style="text-align: center;">Panier</h3>
                <hr>
            </div>

            <div class="tt">
                <h3 style="text-align: center">Réduction :</h3>
                <br>
                <div class="reduc">
                    <label>Points : </label><input type="number" id="r" value="0" name="r" min="0" max="1000" />
                </div>
                <br/>
                <hr>
                <h3 style="text-align: center">Total</h3>
                <br>
                <div class="total">
                    <p class="pt">Prix total :</p><p class="inserer">0</p><p>&euro;</p>
                </div>
                <br/>
                <hr>
                <div class="mode">
                    <h3 style="text-align: center"> Mode de paiement :</h3>
                    <div class="c">
                        <input type="radio"  id="cb" value="mode1" name="mode"/> <label>CB</label>
                        <input type="radio" id="esp" value="mode2" name="mode"/> <label>Espèces</label>

                        <br/>

                        <div class="calcul_monnaie" style="opacity: 0;">
                            <br/>
                            <label for="argent"> Montant donné:
                                <input type="text" id="argent"  name="argent" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(..*)./g, '$1');"/>
                            </label> <input type="button" value="ok" id="ok"/>
                            <br>
                            <hr>
                            <p>Rendre : </p><p id="rendre"></p>
                        </div>
                    </div>

                </div>


                <div class="valider">
                    <form method="get" action="?controller=commande">
                        <label>ID Client : </label><input type="text" name="id"/>

                        <div class="pan">
                        </div>

                        <input type="hidden" id="cpt" name="compteur" />
                        <input type="submit" id="payer" value="Valider la commande"/>
                    </form>
                    <input type="button" id="vider" value="Annuler commande"/>

                </div>

            </div>

        </div>


    </div>


    <script src="Content/JS/script.js"></script>


    </body>



<?php require_once 'view_end.php'?>