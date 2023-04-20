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

<?php while ( have_posts() ): ?>
    <?php the_post(); ?>
        <div class="content">
            <?php the_content() ?>
        </div>
<?php endwhile; ?>



 <?php get_footer(); ?>