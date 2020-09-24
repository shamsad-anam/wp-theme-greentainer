<?php get_header(); ?>
<div class="container">
<h6 class="text-muted"><span class="h6 text-info">File: </span>archive-cars.php</h6>

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