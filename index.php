<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
    <?php wp_head() ?>
</head>
<body>
    <header>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/brain.png" alt="brain">
        <h1><?php bloginfo("name") ?></h1>
    </header>

    <div class="quote">"A clever person solves a problem. A wise person avoids it."</div>
    <div class="author">- Albert Einstein</div>

    <div class="quote">"I am so clever that sometimes I don't understand a single word of what I am saying."</div>
    <div class="author">- Oscar Wilde</div>

    <?php wp_footer() ?>
</body>
</html>