<?php
/*
 * Template Name: About Page
 */

?>
<?php

get_header();

?>

<section class="fs-4">
    <div class="text-center d-flex justify-content-center vh-100 align-items-center w-75 m-auto">
        <div>
            <strong class="fs-1">
                <?php the_title(); ?>
            </strong>
            <?php the_content(); ?>
        </div>
    </div>
    <div class="about-container bg-success py-5">

        <?php

        $args = array(
            'post_type' => 'about',
            'posts_per_page' => 10,
        );

        $about_query = new WP_Query($args);

        if ($about_query->have_posts()) {
            while ($about_query->have_posts()) {
                $about_query->the_post();
                ?>

                <div class="border border-white rounded-3 p-4 my-4 shadow w-75 m-auto bg-white" id="about-single">

                    <strong>
                        <?php the_title() ?>
                    </strong>
                    <?php
                    the_content();
                    ?>
                </div>
                <?php
            }
            wp_reset_postdata();
        }
        ?>


    </div>

</section>


<?php
get_footer();
?>