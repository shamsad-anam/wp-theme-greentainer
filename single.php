<?php get_header(); ?>
<div class="container">
  <h5 class="text-muted"><span class="h5 text-info">File: </span>single.php</h5>
</div>
<section class="post">
  <div class="container">
    <?php get_template_part("includes/section", "singlepost"); ?>
    <?php wp_link_pages(); ?> 
  </div>
</section>
<?php get_footer(); ?>