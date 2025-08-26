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
          <?php } ?>
          <?php if(get_post_type($highlight) === 'project_items') { ?>
            <?php $title = get_field('project_preview_title', $highlight); ?>
            <?php $image = get_field('project_preview_image', $highlight); ?>
          <?php } ?>

          <?php if(is_array($image)) {
            $image_id = $image['id'];
          } else { 
            $image_id = $image;
          } ?>
          
          <div class="space-y-2">
            <?php echo wp_get_attachment_image( $image_id, 'medium' ); ?>
            <div class="font-base text-center">
              <?php echo $title; ?>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="container"></div>
  </section>
<?php } ?>
