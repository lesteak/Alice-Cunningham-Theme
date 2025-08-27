<?php $args = array(
  'post_type' => 'portfolio_items',
  'posts_per_page' => -1,
); ?>

<?php $posts = get_posts($args); ?>

<?php if($posts) { ?>
  <div class="container mt-12 space-y-16 text-center">
    <h1><?php echo \Tofino\Helpers\title(); ?></h1>
    
    <div class="grid grid-cols-4 gap-6">
      <?php foreach($posts as $post) { ?>
        <?php setup_postdata( $post ); ?>
        <?php $thumb = get_field('portfolio_thumb'); ?>
        <?php $caption = get_caption($post); ?>
          <?php if ($thumb['caption']) {
            $caption[] = $thumb['caption'];
          } ?>
        <a href="<?php echo $thumb['url']; ?>" class="block h-0 pt-1/1 relative overflow-hidden" data-fancybox="<?php echo $post->post_name; ?>" data-caption="<?php echo implode(' - ' , $caption); ?>">
          <img src="<?php echo $thumb['sizes']['thumbnail']; ?>" alt="" class="w-full h-full object-cover absolute inset-0" />
        </a>

        <div class="hidden">
          <?php $gallery_images = get_field('portfolio_images'); ?>
          <?php foreach($gallery_images as $key => $gallery_image) { ?>
            
            <?php echo wp_get_attachment_image($gallery_image['id'], 'large', false, array('data-fancybox' => $post->post_name, 'data-caption' => implode(' - ', $caption))); ?> 
          <?php } ?>
        </div>
      <?php } ?>
      <?php wp_reset_postdata(  ); ?>
    </div>
  </div>
<?php } ?>
