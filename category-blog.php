<?php get_header(); ?>
<div class="container">
    <h6 class="text-muted"><span class="h6 text-info">File: </span>category-blog.php</h6>
    <h6 class="badge badge-info py-2">
        Category : Blog
    </h6>
    <div class="row">
        <!-- this template part contains the loop  -->
        <?php get_template_part("includes/section", "archive"); ?>
    </div>

    <!-- the pagination - previous and next -->

    <?php echo the_posts_pagination(array(
        "screen_reader_text" => "Navigation for posts",
        "class" => "c-pagination"
    )); ?>
</div>
<?php get_footer(); ?>