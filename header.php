<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
    <header>
        <div class="container">
            <a href="/" aria-label="Logo da WF">
                <img src="http://localhost/wordpress/wp-content/themes/wfstore/src/images/Logotop.png" alt="Logo da WF" width="70px">
            </a>
            <div class="header-menu">
                <nav class="desktop-menu">
                    <?php

						wp_nav_menu(array(
							'theme_location' => 'top-menu',
							'container' => false,
						));

					?>
                </nav>
                <button class="button_mobile mobile-nav-close"></button>
                   <button class="button_mobile" id="MobileMenuBTN" aria-label="Toggle Menu" aria-expanded="false"
                   aria-controls="mobileMenu">
                          <img src="http://localhost/wordpress/wp-content/themes/wfstore/src/images/menu.svg" alt="Menu Móvel" width="16">
                      </button>
            </div>
        </div>
    </header>

