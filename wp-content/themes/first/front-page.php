<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package KK
 */

 get_header();

 ?>

<?php if ( have_posts()): while (have_posts()): the_post(); ?>
        <div class="content">
            <?php the_content() ?>
        </div>
<?php endwhile; else: endif; ?>


<<<<<<< HEAD
<?php get_footer(); ?>
=======

 <?php get_footer(); ?>
>>>>>>> 908ac8cb40dfefc2aa26626f2d4afa792ab90bc1
