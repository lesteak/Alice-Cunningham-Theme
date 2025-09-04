<?php $image = get_sub_field('image'); ?>
<?php $content = get_sub_field('content'); ?>
<?php $image_pos = get_sub_field('image_position'); ?>
<div class="grid grid-cols-12 lg:gap-12">
  <div class="col-span-12 lg:col-span-6 xl:col-span-4 flex items-center min-w-0 <?php echo ($image_pos === 'left' ? 'order-first' : 'order-last'); ?>">
    <?php echo wp_get_attachment_image( $image['id'], 'full', null, array('class' => '')); ?>
  </div>
  <div class="col-span-12 lg:col-span-6 xl:col-span-8 flex items-center min-w-0">
    <div class="space-y-16 content">
      <?php if($content) { ?>
        <?php if($post->post_name === 'contact')  { ?>
          <?php $content = str_replace('#email#', '<a href="mailto:' . get_field('email', 'option') . '">' . get_field('email', 'option') . '</a>', $content); ?>
          <div class="text-center space-y-6">
            <?php if(get_row_index() === 1 && get_field('title_visibility') === 'col') { ?>
            <h1><?php echo \Tofino\Helpers\title(); ?></h1>
          <?php } ?>
            <?php echo $content; ?>
          </div>
          <div>
            <?php get_template_part('templates/partials/mailing-list-signup'); ?>
          </div>
        <?php } else { ?>
          <div class="space-y-6">
            <?php if(get_row_index() === 1 && get_field('title_visibility') === 'col') { ?>
              <h1><?php echo \Tofino\Helpers\title(); ?></h1>
            <?php } ?>
            <div><?php echo $content; ?></div>
          </div>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
</div>
