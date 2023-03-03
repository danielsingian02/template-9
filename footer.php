<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template-9
 */

?>

    <footer id="colophon" class="site-footer">
        <div class="footer-content">
            <div class="site-footer-icon">
                <?php
                if ( $siteIcon = get_site_icon_url() ) : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-footer-title" rel="home">
                        <img src="<?php echo $siteIcon ?>"
                             class="site-footer-icon"/>
                    </a>
                <?php
                else :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
                endif;
                ?>
            </div>
            <div class="footer-text-content">
                <nav id="site-navigation" class="">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                </nav><!-- #site-navigation -->
            </div>
            <div class="copyright">
                <p>
                    <?php
                    echo get_option("footer_copyright") ?? "© Copyright 2021 HOA Management Name Here";
                    ?>
                </p>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
