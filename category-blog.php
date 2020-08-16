<?php get_header(""); ?>
<div class="container">
    <h5 class="text-muted">From Category Blog Template</h5>
    <h6 class="bg-warning my-2 p-2">
        Category : Blog
    </h6>
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