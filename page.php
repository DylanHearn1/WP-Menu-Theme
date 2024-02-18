<?php

get_header();

?>

<header class="d-flex justify-content-center vh-100 w-75 m-auto align-items-center">
    <div class="text-center fs-4">
        <h1 class="fw-bold fs-1">
            <?php the_title() ?>
        </h1>
        <div class="mb-5">
            <?php the_content(); ?>
        </div>
        <div>
            <?php

            wp_nav_menu(
                array(
                    'front-page-button' => 'top navbar links',
                    'container' => '',
                    'theme_location' => 'front-page-button',
                )
            );

            ?>
        </div>
    </div>

</header>


<?php


get_footer();
?>