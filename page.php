<?php get_header("secondary"); ?>
<div class="container">
    <h5 class="text-muted">From Default Page Template</h5>
    <h1>
        <?php echo the_title(); ?>
    </h1>
    <p>
        <?php get_template_part("includes/section", "content"); ?>
    </p>
</div>
<?php get_footer(); ?>