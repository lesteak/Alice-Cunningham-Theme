<?php $image = get_sub_field('image'); ?>
<?php $content = get_sub_field('content'); ?>
<?php $image_pos = get_sub_field('image_position'); ?>
<div class="grid grid-cols-1 md:grid-cols-2 gap-24">
  <div class="flex items-center <?php echo ($image_pos === 'left' ? 'order-first' : 'order-last'); ?>">
    <?php echo wp_get_attachment_image( $image['id'], 'full', null, array('class' => '')); ?>
  </div>
  <div class="flex items-center">
    <div class="space-y-16">
      <?php if($content) { ?>
        <?php if($post->post_name === 'contact')  { ?>
          <?php $content = str_replace('#email#', '<a href="mailto:' . get_field('email', 'option') . '">' . get_field('email', 'option') . '</a>', $content); ?>
          <div class="text-center space-y-6">
            <?php if(get_row_index() === 1 && !is_single()) { ?>
            <h1><?php echo \Tofino\Helpers\title(); ?></h1>
          <?php } ?>
            <?php echo $content; ?>
          </div>
          <div>
            <?php get_template_part('templates/partials/mailing-list-signup'); ?>
          </div>
        <?php } else { ?>
          <div class="space-y-6">
            <?php if(get_row_index() === 1 && !is_single()) { ?>
              <h1><?php echo \Tofino\Helpers\title(); ?></h1>
            <?php } ?>
            <div><?php echo $content; ?></div>
          </div>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
</div>
