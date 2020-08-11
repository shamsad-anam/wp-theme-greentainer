<?php get_header(); ?>
<div class="container">
    <h1>
        <?php echo the_title(); ?>
    </h1>
    <p>
        <?php get_template_part("includes/section", "content"); ?>
    </p>
</div>
<?php get_footer(); ?>