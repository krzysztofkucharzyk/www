<?php
/**
 * Template Name: About-us
 */
?>

<?php get_header('about-us'); ?>

<?php if ( have_posts()): while (have_posts()): the_post(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1><?php echo the_title(); ?></h1>
        </div>
    </div>
</div>
        <div class="content">
            <?php the_content() ?>
        </div>
<?php endwhile; else: endif; ?>


<?php get_footer('about-us'); ?>
