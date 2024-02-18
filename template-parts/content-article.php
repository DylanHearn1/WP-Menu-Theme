<article>
    <div class="w-75 m-auto text-center">
        <h1 class="fs-1 fw-bold mb-2">
            <?php the_title() ?>
        </h1>


        <div class="d-flex align-items-center justify-content-center gap-5 mb-5 flex-wrap">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="height: 15rem;"
                class="rounded shadow my-5">
            <div>
                <?php the_content() ?>
            </div>
        </div>
        <div class="mb-5">
            <h1>Directions</h1>
            <?php the_field('directions') ?>
        </div>



    </div>

</article>

<?php

comments_template();

?>