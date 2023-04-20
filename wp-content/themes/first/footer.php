<footer id="site-footer">
    <?php if (is_active_sidebar('footer-one')): ?>
        <div class="footer_one">
            <?php dynamic_sidebar('footer-one'); ?>
        </div>
    <?php endif; ?>
    <?php if (is_active_sidebar('footer-two')): ?>
        <div class="footer-two">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php dynamic_sidebar( 'footer-two' ); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="copyright-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="copyright">
                        <p><?php printf( __( '%s. All right reserved &copy; %s', 'nd_dosth' ), get_bloginfo('name'), date_i18n( 'Y' ) ); ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="footer-links">
                        <?php 
                            wp_nav_menu(
                                array(
                                    'theme-location' => 'footer',
                                )
                            );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



</footer>






<?php wp_footer(); ?>


</body>

</html>