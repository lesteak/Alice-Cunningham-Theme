<?php $quote = get_field('quote'); ?>
<?php if($quote) { ?>
  <section class="bg-brand-background py-36">
    <div class="container text-xl text-center">
      <?php echo $quote; ?>
    </div>
  </section>
<?php } ?>
