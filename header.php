<header class="header">
        <div class="container">
            <a href="index.php" class="logo">
                <img src="./image/logo-trans copy.png" alt="logo">
                <span>Letecode</span>
            </a>

            <?php $page =basename($_SERVER["PHP_SELF"]);?>

            <ul class="navlist">
                <li><a href="index.php" class="<?php if($page == "index.php"): echo "active"; endif; ?>">Accueil</a></li>
                <li><a href="communaute.php" class="<?php if($page == "communaute.php"): echo "active"; endif; ?>">Communauté</a></li>
                <li><a href="cours.php" class="<?php if($page == "cours.php"): echo "active"; endif; ?>">Cours</a></li>
                <li><a href="contact.php" class="<?php if($page == "contact.php"): echo "active"; endif; ?>">Contact</a></li>
            </ul>
            <ion-icon name="menu-outline" class="icon"></ion-icon>
            
        </div>
</header>