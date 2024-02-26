<?php

get_header();

?>

<section>
    <div class="d-flex vh-100 w-75 m-auto align-items-center overflow-none">
        <div class="d-flex justify-content-around align-items-center flex-wrap text-center z-3">
            <div class="fs-3">
                <h1 class="fw-bold fs-1">
                    <?php the_title() ?>
                </h1>
                <div class="fs-4">
                    <?php the_content(); ?>
                </div>
            </div>
            <div>
                <div class="d-flex mt-5"></div>
                <a class="btn btn-success mb-3 me-3 fs-5 shadow z-99" href="/menu">
                    <?php the_field('green_button_text') ?>
                </a>
                <a class="btn btn-light mb-3 fs-5 shadow z-99" href="#comments">
                    <?php the_field('white_button_text') ?>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-success pt-5 fs-5" id="comments">
        <div class="text-white w-75 m-auto d-flex flex-wrap">

            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 10,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>

                    <article class="comment-article-single">
                        <div class="comment-name-rating">
                            <strong>
                                <?php the_title(); ?>
                            </strong>
                            <div>
                                <?php for ($i = 1; $i <= 5; $i++) {

                                    if ($i > get_field('comment_rating')) {
                                        echo '<i class="fa-regular fa-star me-1"></i>';
                                    } else {
                                        echo '<i class="fa-solid fa-star me-1"></i>';
                                    }

                                } ?>
                            </div>
                        </div>
                        <?php the_content(); ?>
                    </article>

                    <?php

                endwhile;
                wp_reset_postdata();
            else:
                echo 'No comments found.';
            endif;

            ?>
        </div>

        <div class="custom-shape-divider-bottom-1708495749">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>

        </div>
</section>

<?php get_footer(); ?>