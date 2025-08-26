<?php $items = get_field('frontpage_items'); ?>
<?php if($items) { ?>
  <section class="bg-brand-background py-24">
    <div class="container">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-24">
        <?php foreach($items as $item) { ?>
          <div class="space-y-4 text-center">
            <div class="w-full h-0 pt-2/3 relative block overflow-hidden">
              <?php echo wp_get_attachment_image( $item['image']['id'], 'medium', null, array('class' => 'w-full h-full object-cover absolute inset-0')); ?>
            </div>
            <div class="text-2xl">
              <?php echo $item['title']; ?>
            </div>
            <div class="content">
              <?php echo $item['content']; ?>
            </div>
            <div class="content">
              <a href="<?php echo $item['link']['url']; ?>" target="<?php echo $item['link']['target']; ?>"><?php echo $item['link']['title']; ?></a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
<?php } ?>
