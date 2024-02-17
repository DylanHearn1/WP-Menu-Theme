<div class="post mb-5">
				    <div class="media">
                        <?php the_post_thumbnail(); ?>
					    <div class="media-body">
						    <h3 class="title mb-1"><?php  the_title(); ?></h3>
						    <div class="meta mb-1"><span class="date"><?php the_date(); ?></span> <span class="comment"><?php comments_number(); ?></span></div>
                            <?php

                                the_excerpt();

                            ?>
						    <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>


</div>