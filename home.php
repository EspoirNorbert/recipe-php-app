<?php session_start(); // $_SESSION ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link
        href="../css/bootstrap.min.css" 
        rel="stylesheet"
    >
    <link rel="stylesheet" href="../css/index.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
    <?php include_once('header.php'); ?>

    <!-- Formulaire de connexion -->

    <?php include_once('login.php'); ?>

    <!-- Fin du Formulaire de connexion -->

        <h1>Site de Recettes !</h1>
        <!-- Plus facile à lire -->
        <?php foreach(get_recipes($recipes, $limit) as $recipe) : ?>
            <article>
                <h3> <a href="detail_recette.php?id=<?= $recipe['recipe_id'] ?>"><?php echo $recipe['title'];?></a></h3>  
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo  $recipe['author']; ?></i>
            </article>
        <?php endforeach ?>
    </div>

    <?php include_once('footer.php'); ?>
</body>
</html>