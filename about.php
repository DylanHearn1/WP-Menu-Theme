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
        <div class="bg-success text-white rounded-5 p-5 my-5">
            <strong class="fs-1">
                <?php the_field("about_title_one"); ?>
            </strong>
            <div class="my-3">
                <?php echo get_field('about_section_one') ?>
            </div>
        </div>
        <div class="bg-success text-white rounded-5 p-5 mx-2 my-5">
            <strong class="fs-1">
                <?php the_field("about_title_two"); ?>
            </strong>
            <div class="my-3">
                <?php echo get_field('about_section_two') ?>
            </div>
        </div>
        <div class="bg-success text-white rounded-5 p-5 mx-2 my-5">
            <strong class="fs-1">
                <?php the_field("about_title_three"); ?>
            </strong>
            <div class="my-3">
                <?php echo get_field('about_section_three') ?>
            </div>
        </div>
    </div>

</section>


<?php


get_footer();
?>