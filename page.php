<?php

get_header();

?>

<section>
    <div class="d-flex vh-100 w-75 m-auto align-items-center overflow-none" id="home-page">
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
</section>

<?php get_footer(); ?>