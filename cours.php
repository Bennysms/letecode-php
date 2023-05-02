
<?php 
    $cours = [
        [
            "nom" => "Git et GitHub",
            "time" => 4,
            "image" => "image/git.png",
        ],
        [
            "nom" => "HTML",
            "time" => 5,
            "image" => "image/html.png",
        ],
        [
            "nom" => "Css",
            "time" => 5,
            "image" => "image/css.png",
        ],
        [
            "nom" => "FlexBox",
            "time" => 1,
            "image" => "image/flex.png",
        ],
        [
            "nom" => "Responsive",
            "time" => 3,
            "image" => "image/resp.png",
        ],
        [
            "nom" => "Animation",
            "time" => 2,
            "image" => "image/anima.png",
        ],
    ]
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/cours.css">
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>

        <!-- Open graph -->
        <meta property="og:title" content="Cours">
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

        <!-- cours- start -->

            <section class="cours">
                <div class="container">
                    <h2>Les cours</h2>
                    <div class="cours-box">
                        <?php foreach($cours as $cour) : ?>
                            <div class="box">
                                <div class="img">
                                    <img src="<?php echo "{$cour["image"]}";?>">
                                </div>
                                <div class="text">
                                    <h3><?php echo "{$cour["nom"]}";?></h3>
                                    <p><?php echo "{$cour["time"]}";?></p>
                                </div>
                            </div> 
                        <?php endforeach?>
                      
                    </div>
                </div>
            </section>

        <!-- cours- end -->


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
</html>