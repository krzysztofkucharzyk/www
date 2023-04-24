<?php
/**
 * The template for displaying all static pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package KK
 */

$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'large');

get_header();
?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <div class="content-container">
        <h1><?php the_title(); ?></h1>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-sm-4">
                        <div class="featured-image">
                            <?php if(has_post_thumbnail()): ?>
                                <img src="<?php echo $featured_image[0]; ?>" alt="Featured image" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

    </div>


<?php endwhile; else: endif; ?>

<?php get_footer(); ?>