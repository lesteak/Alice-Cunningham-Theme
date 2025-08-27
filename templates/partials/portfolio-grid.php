<?php $args = array(
  'post_type' => 'portfolio_items',
  'posts_per_page' => -1,
  'orderby' => 'menu_order',
);

//help from https://fancyapps.com/fancybox/plugins/images/

$posts = get_posts($args);
if($posts) { ?>
  <div class="container mt-12">
    <div class="max-w-7xl mx-auto">
      <div id="masonry-grid" class="flex flex-wrap">
        <?php foreach($posts as $post) { ?>
          <?php $thumb = get_field('portfolio_thumb'); ?>
          <?php $thumb_id = is_array($thumb) ? $thumb['id'] : $thumb; ?>
          <?php $caption = get_caption($post); ?>
          <?php if ($thumb['caption']) {
            $caption[] = $thumb['caption'];
          } ?>
          <div class="w-1/2 md:w-1/3 masonry-item p-0.5 relative">
            <a href="<?php echo $thumb['url']; ?>" data-fancybox="<?php echo $post->post_name; ?>" data-caption="<?php echo implode(' - ' , $caption); ?>" class="relative block">
              <?php echo wp_get_attachment_image($thumb_id, 'large'); ?>
              <div class="absolute inset-0 flex justify-center items-center text-black bg-white no-underline bg-opacity-80 opacity-0 hover:opacity-100 transition-opacity dx-caps p-4">
                <?php echo get_the_title(); ?>
              </div>
            </a>
          </div>

          <div class="hidden">
            <?php $gallery_images = get_field('portfolio_images'); ?>
            <?php foreach($gallery_images as $key => $gallery_image) { ?>
             
              <?php echo wp_get_attachment_image($gallery_image['id'], 'large', false, array('data-fancybox' => $post->post_name, 'data-caption' => implode(' - ', $caption))); ?> 
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php } ?>
