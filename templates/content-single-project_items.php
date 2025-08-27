<?php while (have_posts()) : the_post(); ?>
  <?php $video_file = get_field('lead_media_video_file'); ?>
  <?php if($video_file && $video_file['type'] === 'video') { ?>
    <div class="w-full h-0 pt-1/3 relative overflow-hidden">
      <video autoplay muted class="absolute inset-0 w-full h-full object-cover">
        <source src="<?php echo $video_file['url']; ?>" type="video/mp4">
      </video>
    </div>
  <?php } ?>

  <?php /// TODO: ADD IMAGES! ?>

  <main class="mt-12">
    <div class="container">
      <div class="max-w-6xl mx-auto space-y-8">
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
  </main>

<?php endwhile; ?>

