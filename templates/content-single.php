<?php while (have_posts()) : the_post(); ?>
  <main class="mt-12">
    <div class="container">
      <div class="max-w-6xl mx-auto space-y-8">
        <div>
          <h1><?php echo \Tofino\Helpers\title(); ?></h1>
          <?php get_template_part('templates/partials/post-meta'); ?>
        </div>
  
        <div class="space-y-8">
          <?php if(get_field('intro_text_block')) { ?>
            <div class="text-xl">
              <?php echo get_field('intro_text_block'); ?>
            </div>
          <?php } ?>

          <?php while(have_rows('flexible_content') ) : the_row();  ?>
            <?php //var_dump(get_row_layout()); ?>
            <?php get_template_part('templates/flexible-content/' . get_row_layout()); ?>
          <?php endwhile; ?>
        </div>

        <div>
          <a href="<?php echo home_url(); ?>" class="btn btn-primary">&laquo;&nbsp;Return to news</a>
        </div>
      </div>
    </div>
  </main>

<?php endwhile; ?>

