<?php get_header(); ?>
<div class="container">
    <h5 class="text-muted">From serach.php file</h5>
    <div class="d-flex justify-content-center">
      <?php get_search_form(); ?>
    </div>
    <h4>Showing search results for "<?php echo get_search_query(); ?>"</h4>
    <div class="row">
        <!-- this template part contains the loop  -->
        <?php get_template_part("includes/section", "archive"); ?>
    </div>

    <!-- the pagination - previous and next -->
    <div class="text-right py-2">
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>
</div>
<?php get_footer(); ?>