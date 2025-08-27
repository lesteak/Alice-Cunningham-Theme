<?php $gallery = get_field('gallery'); ?>
<?php if($gallery) { ?>
  <div class="container">
    <div id="masonry-grid" class="grid grid-cols-3">
      <?php foreach($gallery as $item) { ?>
        <a href="<?php echo $item['url']; ?>" data-fancybox="gallery" class="masonry-item">
          <img src="<?php echo $item['sizes']['thumbnail']; ?>" alt="" class="">
        </a>
      <?php } ?>
    </div>
  </div>
<?php } ?>
