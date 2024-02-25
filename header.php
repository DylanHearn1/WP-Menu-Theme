<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Hello Chef | Explore our selection of hand-picked meals delivered straight to your door.">
    <meta name="author" content="Dylan Hearn">
    <title>Hello Chef</title>
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri() . "/images/logo.svg" ?>" />

    <?php

    wp_head();

    ?>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
            <div class="container-fluid w-75">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri() . "/images/logonew.png" ?>" style="width: 90px"
                        alt="hello chef logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li>
                            <?php

                            wp_nav_menu(
                                array(
                                    'topnav' => 'top navbar links',
                                    'container' => '',
                                    'theme_location' => 'top-nav',
                                )
                            );

                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>