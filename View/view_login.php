<?php ?>
<!--
<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>

<body>
<div style="border-radius: 12px; border: solid 1px black; text-align: center; padding: 10% 10%; width: 50%; margin: auto; margin-top: 10% ">
    <form action="" method="post">
        <label>Identifiant : <input name="identifiant" type="number"></label><br>
        <label>Mot de passe : <input name="mdp" type="password"></label><br>
        <input type="submit" value="LOGIN" style="margin: 15px"><br>
        <span>Pas encore un compte ? <a href="?controller=identification&action=signin">Créer un compte</a></span>
    </form>
</div>
</body>

</html>
-->
<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Content/CSS/style.css">
    <link rel="shortcut icon" href="Content/Images/Logo_BDE_noir.png">
    <title>BDE USPN</title>
</head>
<body>

<div class="container" style="background-color: var(--bleu);display: flex;justify-content: center;height: 120px;position: relative;overflow:auto;">
    <div class="logo" id="logo_login">
        <img src="Content/Images/Logo_BDE_noir.png" alt="Logo BDE" style="height: 100px;width: 100px">
    </div>
</div>


<section class="accueil" style="justify-content: center;">
    <div style="background-color: var(--vert_clair);opacity: 0.95;padding: 20px;border-radius: 30px;width: 40%;">
        <h1 style="text-align: center;margin-bottom: 0px;">CONNEXION</h1>
        <form action="" method="post" style="padding: 50px;text-align: center;">
            <label style="font-size: 25px;margin: 50px;">Identifiant :</label>
            <br>
            <input name="identifiant" type="number" style="width: 300px;height: 30px;border-radius: 20px;margin-top: 5px;margin-bottom: 15px;padding: 0 10px 0 20px;font-size: 15px;">
            <br>
            <label style="font-size: 25px;margin: 50px;">Mot de passe :</label>
            <br>
            <input name="mdp" type="password" style="width: 300px;height: 30px;border-radius: 20px;margin-top: 5px;margin-bottom: 15px;padding: 0 10px 0 20px;font-size: 15px;">
            <br>
            <input type="submit" value="LOGIN" style="padding: 8px;margin: 10px;background-color: var(--bleu);border: 0;border-radius: 20px;width: 200px;"><br>
            <span style="font-size: 15px;">Pas encore de compte ? <a href="?controller=identification&action=signin">Créer un compte</a></span>
        </form>
    </div>
</section>

<?php require_once "view_end.php" ?>
