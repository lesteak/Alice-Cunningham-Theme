<main class="mt-12 space-y-12">
  <div class="custom-container">
    <div class="space-y-8 w-full">
      <h1><?php echo \Tofino\Helpers\title(); ?></h1>
      <?php get_template_part('templates/flexible-content'); ?>
    </div>
  </div>
  <?php $args = array(
    'post_type' => 'project_items',
    'posts_per_page' => -1,
  ); ?>
  <?php $posts = get_posts($args); ?>

  <div class="custom-container grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <?php foreach($posts as $post) { ?>
      <?php setup_postdata( $post ); ?>
      <?php $image = get_field('project_preview_image'); ?>
      <?php $title = get_field('project_preview_title'); ?>
      <div class="space-y-2">
        <a class="w-full h-0 pt-1/1 relative block overflow-hidden" href="<?php echo get_the_permalink(); ?>">
          <?php echo wp_get_attachment_image( $image['id'], 'full', null, array('class' => 'w-full h-full object-cover absolute inset-0')); ?>
          <div class="project-item-overlay inset-0 absolute bg-white opacity-0 bg-opacity-0 z-10 flex items-center justify-center text-center">
            <div class="p-12 text-xl"> 
              <?php echo $title; ?>
            </div>
          </div>
        </a>
        <a class="text-xl text-center block md:hidden no-underline" href="<?php echo get_the_permalink(); ?>">
          <?php echo $title; ?>
        </a>
      </div>
    <?php } ?>
  </div>
  <?php wp_reset_postdata(  ); ?>
</main>
