<?php $image = get_sub_field('image'); ?>
<div class="space-y-1">
  <?php echo wp_get_attachment_image($image['id'], 'full', null, array('class' => 'w-full')); ?>
  <?php if($image['caption']) { ?>
    <div class="text-gray-800">
      <?php echo $image['caption']; ?>
    </div>
  <?php } ?>
</div>
