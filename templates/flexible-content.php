<?php if(get_field('intro_text_block')) { ?>
  <div class="text-xl">
    <?php echo get_field('intro_text_block'); ?>
  </div>
<?php } ?>

<?php if(have_rows('flexible_content')) {?>

      <?php while(have_rows('flexible_content') ) : the_row();  ?>
        <?php //var_dump(get_row_layout()); ?>
        <?php get_template_part('templates/flexible-content/' . get_row_layout()); ?>
      <?php endwhile; ?>

  <?php } ?>
