<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Menu">
    <meta name="author" content="Dylan Hearn">
    <link rel="shortcut icon" href="images/logo.png">

    <?php

    wp_head();

    ?>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary nav-shadow text-center">
            <div class="container-fluid ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 py-2 px-5 fs-5">
                        <?php

                        wp_nav_menu(
                            array(
                                'topnav' => 'top navbar links',
                                'container' => '',
                                'theme_location' => 'top-nav',
                            )
                        );

                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>