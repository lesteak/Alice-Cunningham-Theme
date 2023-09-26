<?php
use \Tofino\ThemeOptions\Notifications as n;

if (get_theme_mod('footer_sticky') === 'enabled') : ?>
  </div>
<?php endif; ?>

<?php $social = get_field('social_networks', 'options'); ?>

<div class="mt-20">
  <div>
    <?php get_template_part('templates/partials/mailing-list-signup'); ?>
  </div>
  
  <?php if($social) { ?>
    <div class="bg-white">
      <div class="container py-4">
        <div class="flex justify-center space-x-2">
          <?php foreach($social as $item) { ?>
            <a href="<?php echo $item['url']; ?>" target="_blank"><?php echo svg(array('sprite' => $item['network'], 'class' => 'text-gray-800 hover:text-gray-900')); ?></a>
          <?php } ?>
        </div>
      </div>
    </div>
  <?php } ?>
  
  <footer class="bg-black text-white mt-0">
    <div class="container py-5 text-center">
      <?php if(get_field('footer_text', 'options')) { ?>
        <?php $content = str_replace('#year#', date('Y'), get_field('footer_text', 'options')); ?>
        <?php echo $content; ?>
      <?php } ?>
    </div>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script
  src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
  integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
  crossorigin="anonymous"></script>

<?php wp_footer(); ?>

<?php n\notification('bottom'); ?>

</body>
</html>
