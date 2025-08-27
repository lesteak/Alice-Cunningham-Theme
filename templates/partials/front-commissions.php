<?php $commissions = get_field('commissions'); ?>
<?php 
$title = get_field('commissions_title');
$image = get_field('commissions_image');
$content = get_field('commissions_content');
$button = get_field('commissions_button'); ?>

<?php if ($commissions) { ?>
  <section class="py-24">
    <div class="container max-w-7xl">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="z-10 md:-mr-24 md:mt-6">
          <div class="space-y-6 bg-brand-background py-20 px-8">
            <?php if($title) { ?>
              <h2 class="h1 lg:pr-24">
                <?php echo $title; ?>
              </h2>
            <?php } ?>
            <div class="content">
              <?php echo $content; ?>
            </div>
            <?php if($button) { ?>
              <div class="content">
                <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="w-full h-0 pt-1/1 relative block overflow-hidden">
          <?php echo wp_get_attachment_image( $image['id'], 'full', null, array('class' => 'w-full h-full object-cover absolute inset-0')); ?>
        </div>
      </div>
    </div>
  </section>
<?php } ?>
