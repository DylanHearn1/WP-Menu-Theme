<?php 

get_header();

?>


<article>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php the_content(); ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</article>

<?php

    comments_template();

?>