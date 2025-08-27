<?php 
$title = get_field('intro_title');
$content = get_field('intro_content');
$button = get_field('intro_button'); ?>

<section class="bg-brand-background py-24">
  <div class="container max-w-7xl">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-24">
      <div class="flex items-center">
        <?php if($title) { ?>
          <h2 class="h1 lg:pr-24">
            <?php echo $title; ?>
          </h2>
        <?php } ?>
      </div>
      <div class="flex items-center">
        <div class="space-y-6">
          <?php if($content) { ?>
            <div class="content">
              <?php echo $content; ?>
            </div>
          <?php } ?>
          <?php if($button) { ?>
            <div class="content">
              <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
