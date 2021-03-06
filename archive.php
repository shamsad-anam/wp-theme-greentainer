<?php get_header("secondary"); ?>
<div class="container">
    <h5 class="text-muted">From Default Archive Template</h5>

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