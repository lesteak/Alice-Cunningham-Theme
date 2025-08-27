<?php $gallery = get_sub_field('gallery'); ?>
<?php if($gallery) { ?>
  <div id="masonry-grid" class="flex flex-wrap -m-6">
    <?php foreach($gallery as $item) { ?>
      <a href="<?php echo $item['url']; ?>" data-fancybox="gallery" class="w-1/2 md:w-1/3 masonry-item p-6 relative">
        <img src="<?php echo $item['sizes']['thumbnail']; ?>" alt="">
      </a>
    <?php } ?>
  </div>
<?php } ?>
