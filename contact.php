<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/cours.css">
    <link rel="stylesheet" href="css/contact.css">
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>

      <!-- Open graph -->
      <meta property="og:title" content="Contact">
      <meta property="og:description" content="Letecode est une grandes communauté">
      <meta property="og:type" content="website">
      <meta property="og:image" content="image/logo-trans copy.png">
      <meta property="og:url" content="https://bennysms.github.io/tp2/">
      <meta property="og:title" content="Letcode - tp">
</head>
<body>
        <!-- header- start -->
        <?php
            include "header.php";
        ?>
        <!-- header- end -->


        <!--contact- start-->
        <section class="contact">
            <div class="container">
                <h2>Nous contacter</h2>
                <p>Remplissez ce formulaire pour nous laisser un message</p>
                <form id="form" action="traitement.php" method="POST">
                    <div class="text">
                        <label for="name">Nom</label>
                        <input type="text" name="nom" id="name">
                    </div>
                    <div class="text">
                        <label for="pays">Pays</label>
                        <select id="pays" name="pays">
                            <option>Choisir</option>
                            <option value="rdc">Rdc</option>
                            <option value="tunisie">Tunisie</option>
                            <option value="congo">Congo</option>
                            <option value="angola">Angola</option>
                        </select>
                    </div>
                    <div class="text">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="text">
                        <label for="obj">Objectif</label>
                        <input type="text" name="obj" id="obj">
                    </div>
                    <div class="text">
                        <label for="texta">Message</label>
                        <textarea cols="30" name="message" rows="10" id="texta"></textarea>
                    </div>
                    <div class="vide"></div>
                    <input type="submit" value="Envoyer le message">
                </form>
            </div>
        </section>
        <!-- contact- end -->

    
    <!-- content- start -->

    <?php include "abonnement.php"; ?>    
    
     <!-- content- end -->
    

    <!-- footer- start -->
    <?php
        include "footer.php";
    ?>
    <!-- footer- end -->

    <script src="inde.js"></script>
</body>