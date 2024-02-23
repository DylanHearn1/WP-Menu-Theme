<?php
/*
 * Template Name: About Page
 */

?>
<?php

get_header();

?>

<section class="fs-4 w-75 m-auto mb-5">
    <div class="text-center d-flex justify-content-center vh-100 align-items-center">
        <div>
            <strong class="fs-1">
                <?php the_title(); ?>
            </strong>
            <?php the_content(); ?>
        </div>
    </div>
    <div class="about-container">

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

                <div class="border bg-success bg-opacity-10 border-success rounded-5 p-4 my-3 shadow" id="about-single">

                    <strong class="py-5">
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