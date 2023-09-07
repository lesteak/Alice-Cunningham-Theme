<div class="space-y-4 py-12">
  <div>
    <h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
    <?php get_template_part('templates/partials/post-meta'); ?>
  </div>
  <div>
    <?php if(get_field('intro_text_block')) { ?>
      <?php echo get_field('intro_text_block'); ?>
    <?php } ?>
  </div>
  <div>
    <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary">Read more</a>
  </div>
</div>
