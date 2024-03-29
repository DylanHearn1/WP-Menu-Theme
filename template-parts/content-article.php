<article>
    <div class="w-75 m-auto fs-4">
        <div class="d-flex align-items-center justify-content-center mb-5 vh-100 gap-5" id="single-container">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="rounded shadow my-5"
                id="single-image">
            <div>
                <strong class="fs-1">
                    <?php the_title() ?>
                </strong>
                <?php the_content() ?>
            </div>
        </div>
        <div class="mb-5">
            <h1 class="fw-bold">Directions</h1>
            <ul>
                <li>
                    <?php the_field('step_1') ?>
                </li>
                <li>
                    <?php the_field('step_2') ?>
                </li>
                <li>
                    <?php the_field('step_3') ?>
                </li>
            </ul>
        </div>



    </div>

</article>