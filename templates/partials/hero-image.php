<?php if(get_the_post_thumbnail( $post )) { ?>
  <div class="container">
    <?php echo get_the_post_thumbnail($post, 'full', array('class' => 'w-full')); ?>
  </div>
<?php } ?>

