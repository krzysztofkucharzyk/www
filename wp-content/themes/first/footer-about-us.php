<footer id="site-footer">
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