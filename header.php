<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template-9
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
        <div class="header-wrapper">
            <div class="site-branding">
                <?php

                if ( $siteIcon = get_site_icon_url() ) : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title" rel="home">
                        <img src="<?php echo $siteIcon ?>" class="site-icon"/>
                    </a>

                <?php
                else :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
                endif;
                ?>
            </div>

            <div class="main-navigation">
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

                <div class="mobile-header">
                    <!-- Hamburger Menu for mobile responsive -->
                    <button
                            class="btn hamburger-btn"
                            type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasExample"
                            aria-controls="offcanvasExample">
                        <i class="bi bi-list"></i>
                    </button>

                    <div class="offcanvas offcanvas-end menu-canvas" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <div class="mobile-site-branding">
                                <?php

                                if ( $siteIcon = get_site_icon_url() ) : ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title" rel="home">
                                        <img src="<?php echo $siteIcon ?>"
                                             class="site-icon"/>
                                    </a>
                                <?php
                                else :
                                    ?>
                                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php
                                endif;
                                ?>
                            </div>

                            <h5 class="offcanvas-title" >
                                <?php
                                echo get_bloginfo( 'name' );
                                ?>
                            </h5>

                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                )
                            );
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
	</header><!-- #masthead -->
