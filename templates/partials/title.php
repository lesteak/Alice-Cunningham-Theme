<?php $title_pos = get_field('title_visibility'); ?>
<?php if($title_pos === 'on') { ?>
  <h1><?php echo \Tofino\Helpers\title(); ?></h1>
<?php } ?>
