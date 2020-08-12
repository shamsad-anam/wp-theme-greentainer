<?php
/*
    Template Name: Contact Us
*/
?>

<?php get_header(); ?>
<div class="container">
    <div class="text-center">
        <h1><?php the_title(); ?></h1>
        <?php
        get_template_part("includes/section", "content");
        ?>
    </div>
    <div class="w-75 mx-auto">
        <form action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="msg">Message</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Enter Your Message Here"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary">Send Message</button>
            </div>
        </form>
    </div>
</div>

<?php get_footer(); ?>