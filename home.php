<?php

    get_header();

?>
        <h1 class="fw-bold">Our menu</h1>


        <div class="d-flex flex-wrap justify-content-center gap-5">
            

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

                <div class="card overflow-hidden" style="width: 25rem;">
                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_content(); ?></p>
                        <ul>
                            <li>beef</li>
                            <li>beef</li>
                            <li>beef</li>
                        </ul>
                    </div>
                </div>

                

                <?php 
            }
           echo '</div>';
        }

        get_footer();
    ?>




