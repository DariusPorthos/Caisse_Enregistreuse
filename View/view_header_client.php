<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Content/CSS/style.css">
    <link rel="shortcut icon" href="Content/Images/Logo_BDE_noir.png">
    <title>BDE USPN</title>
</head>
<body>

<header>
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href=""><img src="Content/Images/Logo_BDE_noir.png" alt="Logo BDE"></a>
        </div>
        <!-- Barre de navigation -->
        <nav>
            <ul class="navigation">
                <!-- Côté gauche de la barre de navigation -->
                <ul class="menuL">
                    <li style="padding-bottom: 2.6%">
                        <a href="?controller=accueil&action=client">Accueil</a>
                    </li>
                    <li style="padding-bottom: 2.6%">
                        <a href="?controller=historique&action=client">Mes Achats</a>
                    </li>
                    <li> Mes points : <?= $_SESSION["points"]?> points</li>
                    <?php //if( isset($_SESSION['connecte']) && $_SESSION['connecte'] !== null ) : ?>
                    <li id="droite"><a href="?logout=1">Se déconnecter</a></li>
                    <?php //endif;?>

                </ul>
                <!-- Côté droit de la barre de navigation -->
                <ul class="menuR">
                    <li style="width : 20px"><a href=""><img src="Content/Images/cloche.png"></a></li>
                    <li style="width : 20px"><a href="?controller=identification&action=compte"><img src="Content/Images/icone.png"></a></li>
                    <li style="width : 20px"><a href=""><img src="Content/Images/drapeau" style="margin-bottom : 25%"></a></li>
                </ul>
            </ul>
        </nav>
    </div>
</header>
