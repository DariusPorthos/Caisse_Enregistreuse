<?php ?>
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