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
        <?php if (have_posts()): ?>
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                // 'category_name' => 'advice',
                // 'cat'           => 4,
                // 'category__in'  => 4,
                'posts_per_page' => 3,
                'paged' => $paged,

            );
            $query = new WP_Query($args);
            while ($query->have_posts()):
                $query->the_post(); ?>

                <div class="col-md-4">
                    <div class="post">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="blog-post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <!-- <img src="<?php echo $featured_image[0]; ?>" alt=""> -->
                                    <?php the_post_thumbnail('new_size_300x250', array('class' => 'img-fluid')); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php $categories = get_the_category(); ?>
                        <?php if (!empty($categories)): ?>
                            <div class="posted-in">
                                <span>
                                    <?php _e('Posted In', 'nd_dosth'); ?>
                                </span>
                                <span>
                                    <a href="<?php echo get_category_link($categories[0]->term_id); ?>"><?php echo $categories[0]->name; ?></a>
                                </span>
                            </div>
                        <?php endif; ?>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Czytaj więcej'); ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php the_posts_pagination(
                array(
                    'prev_text' => __('Older Articles', 'textdomain'),
                    'next_text' => __('Newer Articles', 'textdomain'),
                )
            ); ?>
        <?php else: ?>
            <p>
                <?php _e('Nie znaleziono żadnego wpisu', 'first') ?>
            </p>
        <?php endif ?>
    </div>
</div>



<?php get_footer(); ?>