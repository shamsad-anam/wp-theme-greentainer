<?php get_header(); ?>
<div class="w-50 mx-auto">
  <?php get_search_form(); ?>
</div>
<div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="row">
      <div class="col-md-12">
        <?php get_template_part("includes/section", "content"); ?>
      </div>
    </div>
</div>
<?php get_footer(); ?>