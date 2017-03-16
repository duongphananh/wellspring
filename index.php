<?php
/**
 * Application Shell
 *
 * This is the main and only template. Everything else is rendered by React.
 *
 * @package WordPress
 * @subpackage Wellspring
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Manifest & Icons -->
    <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/manifest.json">
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>//icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>//icons/favicon-16x16.png" sizes="16x16">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>//icons/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>//icons/apple-touch-icon.png">
    <link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>//icons/safari-pinned-tab.svg" color="#1d3545">
    <meta name="msapplication-config" content="<?php echo esc_url( get_template_directory_uri() ); ?>/browserconfig.xml">
    <meta name="theme-color" content="#1d3545">
	<?php wp_head(); ?>
</head>
<body>
    <div id="app"></div>

    <!-- Old Navigation -->
    <nav class="oldnav">
	    <div class="container">
            <header class="oldnav__header">
                <a class="oldnav__title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
                <button class="oldnav__toggle">
                    <span>
                        <div class="oldnav__toggle__text">Menu</div>
                        <div class="oldnav__toggle__icon">
                            <span class="iconbar"></span>
                            <span class="iconbar"></span>
                            <span class="iconbar"></span>
                        </div>
                    </span>
                </button>
            </header>
            <ul class="oldnav__menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main_nav',
                    'depth'          => 1,
                    'container'		 => 0,
                    'items_wrap'     => '%3$s',
                ));
                ?>
            </ul>
        </div>
    </nav>

    <!-- Old Off-Canvas Toggle Control -->
    <script>
        var toggle = document.querySelector('.oldnav__toggle');
        var body = document.querySelector('body');
        toggle.addEventListener('click', function(e) {
            toggle.classList.toggle('close');
            body.classList.toggle('oldnav-opened');
            e.preventDefault();
        }, false);
    </script>
    <?php wp_footer() ?>
</body>
</html>
