<header class="banner navbar-default" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand col-sm-3" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <nav id="nav" class="navbar-collapse collapse" data-spy="affix" data-offset-top="0" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav navbar']);
      endif;
      ?>
    </nav>
  </div>
</header>
<?php
  if (has_nav_menu('secondary_navigation') && is_page() && !is_front_page()) :
	wp_nav_menu(['menu' => 'Secondary Menu', 'walker' => new wp_bootstrap_navwalker(), 'container_class' => 'container secondary-nav', 'menu_id' => 'secondary-nav', 'menu_class' => 'navbar-nav']);
  endif;
?>
