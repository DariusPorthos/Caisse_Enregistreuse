<?php
require "view_header_client.php";
?>

</header>
<section class="accueil" id="#accueil">
    <div class="content">
        <span>Bienvenue</span>
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
