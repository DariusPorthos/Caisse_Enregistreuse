<?php
require "view_header_client.php";
?>

</header>
<section class="accueil" id="#accueil">
    <div class="content">
        <span>Bienvenue,</span><span style="padding-left: 40px"><?php echo $_SESSION["prenom"]?></span>
        <h3></h3>
    </div>
</section>
</header>


<?php
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    session_destroy();
}
require "view_end.php";
?>
