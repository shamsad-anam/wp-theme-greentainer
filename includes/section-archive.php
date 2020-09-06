<!-- This is my custom archive loop for any categroy -->

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div class="col-md-4 mb-4">
            <div class="card">
            <?php 
          if(has_post_thumbnail()):
          ?>
              <img src="<?php the_post_thumbnail_url("post-small") ?>" alt="<?php the_title()?>" class="card-img-top">
          <?php
          endif;
         ?>
              <div class="card-body">
                  <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
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