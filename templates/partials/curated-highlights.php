<?php $highlights = get_field('curated_highlights'); ?>

<?php if($highlights) { ?>
  <section class="py-24">
    <div class="container space-y-12">
      <h2 class="h1 text-center">Curated Highlights</h2>
      <div class="grid gap-12 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <?php foreach($highlights as $highlight) { ?>
          <?php if(get_post_type($highlight) === 'portfolio_items') { ?>
            <?php $title = get_the_title($highlight); ?>
            <?php $image = get_field('portfolio_thumb', $highlight); ?>
            <?php $image_id = (is_array($image)) ? $image['id'] : $image; ?>
            <?php $caption = get_caption($highlight); ?>
            
            <a class="space-y-2 block" href="<?php echo $image['url']; ?>" data-fancybox="<?php echo $highlight->post_name . '-' . $highlight->ID ?>" data-caption="<?php echo implode(' - ' , $caption); ?>">
              <?php echo wp_get_attachment_image( $image_id, 'medium' ); ?>
              <div class="font-base text-center">
                 <?php echo $title; ?>
              </div>
            </a>
            
            <?php $gallery_images = get_field('portfolio_images', $highlight); ?>
            <?php if($gallery_images) { ?>
              <div class="hidden">
                <?php foreach($gallery_images as $key => $gallery_image) { ?>
                  <?php echo wp_get_attachment_image($gallery_image['id'], 'large', false, array('data-fancybox' => $highlight->post_name . '-' . $highlight->ID, 'data-caption' => implode(' - ', $caption))); ?> 
                <?php } ?>
              </div>
            <?php } ?>
          <?php } ?>
          
          <?php if(get_post_type($highlight) === 'project_items') { ?>
            <?php $title = get_field('project_preview_title', $highlight); ?>
            <?php $image = get_field('project_preview_image', $highlight); ?>
            <?php $image_id = (is_array($image)) ? $image['id'] : $image; ?>
            
            <div class="space-y-2">
              <a href="<?php echo get_the_permalink($highlight); ?>">
                <?php echo wp_get_attachment_image( $image_id, 'medium' ); ?>
              </a>
              <div class="font-base text-center">
                <a href="<?php echo get_the_permalink($highlight); ?>"><?php echo $title; ?></a>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
  </section>
<?php } ?>
