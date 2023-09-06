<?php $args = array(
  'post_type' => 'portfolio_items',
  'posts_per_page' => -1,
  'orderby' => 'order'
);

$posts = get_posts($args);
if($posts) { ?>
  <div class="container mt-12">
    <div class="max-w-7xl mx-auto">
      <div id="masonry-grid" class="flex flex-wrap">
        <?php foreach($posts as $post) { ?>
          <?php $thumb = get_field('portfolio_thumb'); ?>
          <?php $thumb_id = is_array($thumb) ? $thumb['id'] : $thumb; ?>
          <div class="w-1/2 md:w-1/3 masonry-item p-0.5 relative">
            <?php echo wp_get_attachment_image($thumb_id, 'large'); ?>
  
            <?php $gallery_images = get_field('portfolio_images'); ?>
            <?php if($gallery_images) { ?>
              
              <div class="masonry-item-title inset-0 absolute flex justify-center items-center text-black bg-white no-underline m-0.5 bg-opacity-80 opacity-0 transition-opacity dx-caps p-4">
                <?php foreach($gallery_images as $key => $gallery_image) { ?>
                    <a href="<?php echo $gallery_image['url']; ?>" data-fancybox="<?php echo $post->post_name; ?>" data-caption="<?php echo $gallery_image['caption']; ?>" class="absolute inset-0 <?php echo($key > 0) ? 'hidden' : null; ?>">
                      <?php echo wp_get_attachment_image($gallery_image['id'], 'large', null, array('class' => 'hidden')); ?> 
                    </a>
                <?php } ?>
                <div class="p-2 text-center">
                  <?php echo get_the_title(); ?>
                </div>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php } ?>
