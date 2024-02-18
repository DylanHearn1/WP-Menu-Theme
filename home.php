<?php

get_header();

?>
<h1 class="fw-bold text-center mt-5">
    <?php wp_title() ?>
</h1>

<?php

the_content();

?>


<div class="d-flex flex-wrap justify-content-center gap-5 w-75 w-md-75 m-auto my-5">


    <?php

    $args = array(
        'post_type' => 'meal',
        'posts_per_page' => 10,
    );

    $meal_query = new WP_Query($args);


    if ($meal_query->have_posts()) {
        while ($meal_query->have_posts()) {
            $meal_query->the_post();
            ?>

            <div class="card overflow-hidden" style="width: 21rem;">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="height: 15rem;">
                <div class=" card-body justify-content-between d-flex flex-column">
                    <h5 class="card-title fw-bold">
                        <?php the_title(); ?>
                    </h5>

                    <?php the_excerpt(); ?>
                    <div class="my-4">
                        <h5>Ingredients</h5>
                        <?php the_field('ingredients') ?>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between">
                            <h5>Difficulty</h5>
                            <?php

                            $difficulty = get_field('difficulty');

                            if ($difficulty <= 30) {
                                echo "Easy";
                            } elseif ($difficulty > 30 && $difficulty <= 60) {
                                echo "Medium";
                            } else {
                                echo "Hard";
                            }

                            ?>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-bar text-bg-success" style="width: <?php the_field('difficulty') ?>%"></div>
                        </div>
                    </div>
                    <a href="<?php the_permalink() ?>" class="btn btn-success mt-3">View Dish</a>
                </div>
            </div>



            <?php
        }
        echo '</div>';
    }

    get_footer();
    ?>