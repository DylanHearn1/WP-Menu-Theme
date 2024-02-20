<?php

get_header();

?>

<section>
    <div class="d-flex vh-100 w-75 m-auto align-items-center overflow-none">
        <div class="custom-shape-divider-bottom-1708319073">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" class="shape-fill"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" class="shape-fill"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <div class="d-flex justify-content-around align-items-center flex-wrap text-center">
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
                <a class="btn btn-success mb-3 me-3 fs-5 shadow">
                    <?php the_field('green_button_text') ?>
                </a>
                <a class="btn btn-light mb-3 fs-5 shadow" href="#comments">
                    <?php the_field('white_button_text') ?>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-success py-5 fs-5" id="comments">
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

                    <article class="w-50 mb-5 px-5">
                        <div class="d-flex justify-content-between mb-2">
                            <strong>
                                <?php the_title(); ?>
                            </strong>
                            <div>
                                <?php for ($i = 1; $i <= 5; $i++) {

                                    if ($i > get_field('comment_rating')) {
                                        echo '<i class="fa-regular fa-star"></i>';
                                    } else {
                                        echo '<i class="fa-solid fa-star me-1 shadow"></i>';
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
                echo 'No posts found.';
            endif;

            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>