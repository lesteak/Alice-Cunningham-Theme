<?php $image = get_sub_field('image'); ?>
<?php $content = get_sub_field('content'); ?>
<?php $image_pos = get_sub_field('image_position'); ?>
<div class="grid grid-cols-1 md:grid-cols-2 gap-24">
  <div class="flex items-center <?php echo ($image_pos === 'left' ? 'order-first' : 'order-last'); ?>">
    <?php echo wp_get_attachment_image( $image['id'], 'full', null, array('class' => '')); ?>
  </div>
  <div class="flex items-center">
    <div class="space-y-6">
      <?php if(get_row_index() === 1 && !is_single()) { ?>
        <h1><?php echo \Tofino\Helpers\title(); ?></h1>
      <?php } ?>
      <?php if($content) { ?>
        <div class="content">
          <?php echo $content; ?>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
