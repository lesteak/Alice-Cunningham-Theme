<?php while (have_posts()) : the_post(); ?>
  <?php $video_file = get_field('lead_media_video_file'); ?>
  <?php if($video_file && $video_file['type'] === 'video') { ?>
    <div class="w-full h-0 pt-1/3 relative overflow-hidden">
      <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover">
        <source src="<?php echo $video_file['url']; ?>" type="video/mp4">
      </video>
    </div>
  <?php } ?>

  <?php $image = get_field('lead_media_image'); ?>
  <?php if($image) { ?>
    <div class="w-full h-0 pt-1/3 relative block overflow-hidden">
      <?php echo wp_get_attachment_image( $image['id'], 'full', null, array('class' => 'w-full h-full object-cover absolute inset-0')); ?>
    </div>
  <?php } ?>

  <?php /// TODO: ADD IMAGES! ?>

  <main class="mt-12">
    <div class="container">
      <div class="max-w-7xl mx-auto space-y-8">
        <div class="text-center">
          <h1><?php echo \Tofino\Helpers\title(); ?></h1>
        </div>
  
        <div class="space-y-16">
          <?php if(get_field('intro_text_block')) { ?>
            <div class="text-xl text-center">
              <?php echo get_field('intro_text_block'); ?>
            </div>
          <?php } ?>

          <?php while(have_rows('flexible_content') ) : the_row();  ?>
            <?php //var_dump(get_row_layout()); ?>
            <?php get_template_part('templates/flexible-content/' . get_row_layout()); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>

    <?php if(get_field('pdf_enable')) { ?>
      <section class="bg-brand-background py-24 mt-24">
        <div class="container text-center space-y-12">
          <h2>Find out more</h2>
          <?php $file = get_field('pdf_file'); ?>
          <?php if($file) { ?>
            <div class="space-y-6">
              <a href="<?php echo $file['url']; ?>" download>
                <?php echo wp_get_attachment_image($file['id'],'medium', null, array('class' => 'mx-auto')); ?>
              </a>
              <h3><a href="<?php echo $file['url']; ?>" download class="underline">Download PDF</a></h3>
            </div>

          <?php } ?>
        </div>
      </section>
    <?php } ?>
    <section class="bg-brand-background">
      <?php
      $next_post = get_next_post();
      $previous_post = get_previous_post(); ?>

      <div class="container grid grid-cols-2 py-8 text-xl">
        <div>
          <?php if ($previous_post) : ?>
          <a href="<?php echo get_permalink($previous_post->ID); ?>" class="no-underline hover:underline">
            &laquo;&nbsp;<?php echo get_the_title($previous_post->ID); ?>
          </a>
          <?php endif; ?>
        </div>
        <div class="text-right">
          <?php if ($next_post) : ?>
            <a href="<?php echo get_permalink($next_post->ID); ?>" class="no-underline hover:underline">
              <?php echo get_the_title($next_post->ID); ?>&nbsp;&raquo;
            </a>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>

<?php endwhile; ?>

