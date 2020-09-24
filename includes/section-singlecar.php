<!-- This loop is for single posts -->
<h5 class="text-muted"><span class="h5 text-info">File: </span>section-singlecar.php</h5>

<?php 
  if(have_posts()):
    while(have_posts()):
      the_post();
     ?>
      <div class="row">
        <div class="col-md-8">
         <h2 class="post__title">
           <?php the_title(); ?>
         </h2>
         <?php 
          if(has_post_thumbnail()):
          ?>
          <img src="<?php the_post_thumbnail_url("post-large") ?>" alt="<?php the_title()?>" class="img-fluid img-thumbnail">
          <?php
          endif;
         ?>
         <p class="post__info">
           <h5 class="post__author">
             Posted by: <?php echo get_the_author_meta("first_name")." ".get_the_author_meta("last_name");?>
           </h5>
           <div class="post__time">
             Created on: <?php echo get_the_date("D m,Y h:i"); ?>
           </div>
         </p>
         <p class="post__content">
           <?php the_content(); ?>
         </p>

         <?php 
          // DEPRICATED. This displays comments
          // comments_template();
         ?>
        </div>
        <div class="col-md-4">
          <h3>Related Categories</h3>
            <?php 
            $cats = get_the_category();
          if($cats):?>
            <ul class="navbar-nav">
              <?php foreach($cats as $cat):?>
                <li class="nav-item">
                  <a href="<?php echo get_category_link($cat->term_id)?>" class="nav-link"><?php echo $cat->name; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <h3>Related Tags</h3>
          <ul class="navbar-nav">
          <?php 
            $tags = get_the_tags();
            if($tags) :
            foreach($tags as $tag):?>
              <li class="nav-item">
                <a href="<?php echo get_tag_link($tag->term_id)?>" class="nav-link"><?php echo $tag->name; ?></a>
              </li>
            <?php endforeach; endif;?>
          </ul>
        </div>
      </div>
     <?php
    endwhile;
  endif;
?>