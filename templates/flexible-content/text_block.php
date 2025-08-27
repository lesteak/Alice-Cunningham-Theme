  <div class="text-center">
    <?php if(get_sub_field('title')) { ?>
      <?php if(get_sub_field('make_title_h1')) { ?>
        <h1 class="h2"><?php echo get_sub_field('title'); ?></h1>
      <?php } else { ?>
        <h2><?php echo get_sub_field('title'); ?></h2>
      <?php } ?>
    <?php } ?>
    <?php if(get_sub_field('text')) { ?>
      <div class="content <?php echo get_sub_field('title') ? 'pt-8' : null; ?>">
        <?php echo get_sub_field('text'); ?>
      </div>
    <?php } ?>
  </div>
