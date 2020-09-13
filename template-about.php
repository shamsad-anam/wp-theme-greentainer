<?php
/*
Template Name: About Us Page
*/
get_header();

?>

<div class="container">
    <div class="row">
      <div class="col-md-9">
      <h1><?php the_title(); ?></h1>
    <?php
    get_template_part("includes/section", "content");
    ?>
      </div>
      <div class="col-md-3">
        <?php 
          if(is_active_sidebar("page-sidebar")):
            dynamic_sidebar("page-sidebar");
          endif;
        ?>
      </div>
    </div>
</div>
 
<?php
get_footer();
?>