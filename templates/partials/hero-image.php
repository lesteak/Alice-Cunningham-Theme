<?php if(get_the_post_thumbnail( $post )) { ?>
  <div class="w-full h-0 pt-1/2 relative block overflow-hidden">
    <?php echo get_the_post_thumbnail($post, 'full', array('class' => 'w-full h-full object-cover absolute inset-0')); ?>
  </div>
<?php } ?>
