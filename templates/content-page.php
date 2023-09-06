<main class="mt-12">
  <div class="container">
    <div class="max-w-6xl mx-auto">
      <div class="flex flex-wrap md:flex-nowrap gap-12">
        <?php if(get_the_post_thumbnail( $post )) { ?>
          <div class="w-full md:w-1/2">
            <?php echo get_the_post_thumbnail($post, 'full', array('class' => 'w-full')); ?>
          </div>
        <?php } ?>

        <div class="space-y-8 w-full md:w-1/2">
          <h1><?php echo \Tofino\Helpers\title(); ?></h1>
          <?php get_template_part('templates/flexible-content'); ?>
        </div>

      </div>
    </div>
  </div>
</main>
