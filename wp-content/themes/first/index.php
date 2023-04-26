<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KK
 */
get_header();

$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');

?>

<?php if (is_home()): ?>
    <h1>
        <?php single_post_title(); ?>
    </h1>
<?php endif; ?>

<div class="container">
    <div class="row">
        <?php 
            $args = array(
                'post_type'     => 'post',
                'category_name' => 'advice',
                // 'cat'           => 4,
                // 'category__in'  => 4,
                'post_per_page' =>  9,
            );
        $query = new WP_Query($args);
        while ($query->have_posts()): $query->the_post(); ?>
        <?php if (have_posts()): ?>
                <div class="col-md-4">
                    <div class="post">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="blog-post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <!-- <img src="<?php echo $featured_image[0]; ?>" alt=""> -->
                                    <?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid' ) ); ?>
                                </a>
                            </div>
                         <?php endif; ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Czytaj więcej'); ?></a>
                    </div>
                </div>
            
        <?php else: ?>
            <p>
                <?php _e('Nie znaleziono żadnego wpisu', 'first') ?>
            </p>
        <?php endif ?>
        <?php endwhile; ?>

        <div class="col-md-4">

        </div>

    </div>
</div>





<?php get_footer(); ?>