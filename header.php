<?php
use \Tofino\ThemeOptions\Menu as m;
use \Tofino\ThemeOptions\Notifications as n; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  
  <?php get_template_part('/templates/partials/favicon'); ?>

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
  />
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php n\notification('top'); ?>

<?php
$locations = get_nav_menu_locations();
$menu = get_term( $locations['primary_navigation'], 'nav_menu' );
$menu_items = wp_get_nav_menu_items($menu);
$this_item = dx_get_current_nav_item();
?>

<header class="bg-white <?php echo m\menu_sticky(); ?>">
  <nav class="w-full py-4 justify-between flex container">
      <div class="flex-shrink-0 flex items-center">
        <a href="<?php echo home_url(); ?>" class="font-header no-underline text-2xl md:text-4xl font-bold tracking-wider uppercase"><?php echo get_bloginfo(); ?></a>
      </div>

    <button class="flex items-center md:hidden js-menu-toggle z-50" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <!-- Hamburger Icon -->
      <span class="w-6 h-6">
        <?php echo svg(['sprite' => 'icon-hamburger', 'class' => 'w-full h-full toggle-icons']); ?>
        <?php echo svg(['sprite' => 'icon-close', 'class' => 'w-full h-full hidden toggle-icons']); ?>
      </span>
      <span class="sr-only"><?php _e('Toggle Navigation Button', 'tofino'); ?></span>

    </button>

    <div class="fixed inset-0 hidden w-full h-screen bg-white md:h-auto md:relative md:w-auto md:flex md:items-center z-20" id="main-menu">
      <?php
      if (has_nav_menu('header_navigation')) :
        wp_nav_menu([
          'menu'            => 'nav_menu',
          'theme_location'  => 'header_navigation',
          'depth'           => 3,
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'navbar-nav flex justify-center items-center w-full h-full md:space-x-6 flex-col md:flex-row text-center px-4 md:px-0',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ]);
      endif; ?>
    </div>
  </nav>
</header>

<?php if (get_theme_mod('footer_sticky') === 'enabled') : ?>
  <div class="wrapper">
<?php endif; ?>
