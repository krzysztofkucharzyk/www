<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>

<body <?php body_class('no-js'); ?> id="site-container">

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <?php if (has_custom_logo()): ?>
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $custom_logo_data = wp_get_attachment_image_src($custom_logo_id, 'full');
                            $custom_logo_url = $custom_logo_data[0];
                            ?>

                            <a href="<?php echo esc_url(home_url('/')); ?>"
                                title="<?php echo esc_attr(get_bloginfo('name')); ?>" rel="home">
                                <img src="<?php echo esc_url($custom_logo_url); ?>"
                                    alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            </a>
                        <?php else: ?>
                            <div class="site-name">
                                <?php bloginfo('name'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-8">
                    <a href="javascript:history.go(-1)">Go Back</a> 
                </div>
            </div>
        </div>
    </header>