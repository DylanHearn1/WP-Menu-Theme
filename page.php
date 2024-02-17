<?php

    get_header();

?>

    <header class="d-flex justify-content-center vh-100 align-items-center">
        <div class="text-center fs-4 px-5">
            <h1 class="fw-bold fs-1">Home Chef</h1>
            <div>
                <?php the_content(); ?>
            </div>
            <div>
            <?php
            
            wp_nav_menu(array(
                'front-page-button' => 'top navbar links',
                'container' => '',
                'theme_location' => 'front-page-button',
            ));

                    ?>
            </div>
        </div>

    </header>


    <?php


        get_footer();
    ?>



