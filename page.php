<?php get_header("secondary"); ?>
<div class="container">
    <h5 class="text-muted">From Default Page Template</h5>
    <div class="row">
      <div class="col-md-9">
        <h1>
          <?php echo the_title(); ?>
        </h1>
        <p>
            <?php get_template_part("includes/section", "content"); ?>
        </p>
      </div>
      <div class="col-md-3">
        <p>Hello</p>
        <?php 
          if(is_active_sidebar("page-sidebar")):
            dynamic_sidebar("page-sidebar");
          endif;
        ?>
      </div>
    </div>
</div>
<?php get_footer(); ?>