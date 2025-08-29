<div class="bg-black text-white">
  <div class="align-right px-8">
    <?php if (has_nav_menu('top_nav')) { ?>
      <nav id="top-nav">
        <?php $args = array(
          'theme_location' => 'top_nav'
        ); ?>
        <?php wp_nav_menu($args); ?>
      </nav>
    <?php } ?>
  </div>
</div>
