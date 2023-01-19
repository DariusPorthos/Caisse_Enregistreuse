<?php
?>

<!Doctype html>
<html>
<head>
    <title>BDE Creation Compte</title>
    <meta charset="utf-8">
    <link href="Content/CSS/style.css" rel="stylesheet">
</head>

<div class="container" style="background-color: var(--bleu);display: flex;justify-content: center;height: 120px;position: relative;overflow:auto;">
    <div class="logo" id="logo_login">
        <img src="Content/Images/Logo_BDE_noir.png" alt="Logo BDE" style="height: 100px;width: 100px">
    </div>
</div>

<section class="accueil" style="justify-content: center;">
    <div class="form" style="background-color: var(--vert_clair);opacity: 0.95;padding: 20px;border-radius: 30px;width: 40%;">
        <h1 style="text-align: center;margin-bottom: 0px;"> Créer votre compte :</h1>
        <hr>
        <form action="" method="post" style="padding: 50px;text-align: center;">
            <br/>
            <label style="font-size: 25px;margin: 50px;">Identifiant : </label>
            <input name="identifiant" type="text" style="width: 300px;height: 30px;border-radius: 20px;margin-top: 5px;margin-bottom: 15px;padding: 0 10px 0 20px;font-size: 15px;"/><br/>

            <label style="font-size: 25px;margin: 50px;">Nom :</label>
            <input name="nom" type="text" style="width: 300px;height: 30px;border-radius: 20px;margin-top: 5px;margin-bottom: 15px;padding: 0 10px 0 20px;font-size: 15px;"/><br/>

            <label style="font-size: 25px;margin: 50px;">Prenom :</label>
            <input name="prenom" type="text" style="width: 300px;height: 30px;border-radius: 20px;margin-top: 5px;margin-bottom: 15px;padding: 0 10px 0 20px;font-size: 15px;"/><br/>

            <label style="font-size: 25px;margin: 50px;">Mail : </label>
            <input name="mail" type="email" style="width: 300px;height: 30px;border-radius: 20px;margin-top: 5px;margin-bottom: 15px;padding: 0 10px 0 20px;font-size: 15px;"><br/>

            <label style="font-size: 25px;margin: 50px;">Mot de passe :</label>
            <input name="mdp" type="password" style="width: 300px;height: 30px;border-radius: 20px;margin-top: 5px;margin-bottom: 15px;padding: 0 10px 0 20px;font-size: 15px;"><br/>


                <input type="submit" value="Créer" style="padding: 8px;margin: 10px;background-color: var(--bleu);border: 0;border-radius: 20px;width: 200px;"/><br>

            <span style="font-size: 15px;">Déja un compte ? <a href="?controller=identification&action=login">Me connecter</a></span>
        </form>
    </div>
</section>

</body>

</html>
