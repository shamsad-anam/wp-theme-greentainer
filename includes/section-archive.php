<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3><?php the_title(); ?></h3>
                    <?php
                    // the_content(); this shows whole content
                    the_excerpt(); //this shows a portion of the content and [...]
                    ?>
                </div>
                <div class="card-footer">
                    <a class="btn btn-info" href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
        </div>



<?php
    endwhile;
endif;
?>