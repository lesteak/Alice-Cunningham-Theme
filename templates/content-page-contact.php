<main class="mt-12">
  <div class="container">
    <div class="max-w-6xl mx-auto space-y-4">
      <h1><?php echo \Tofino\Helpers\title(); ?></h1>
      
      <?php $address = get_field('address', 'options'); ?>
      <?php $phone_number = get_field('phone_number', 'options'); ?>
      <?php $email = get_field('email', 'options'); ?>

      <div class="content space-y-4">
        <div class="font-bold">
          <?php echo get_bloginfo(); ?>
        </div>
        <?php if($address) { ?>
          <div>
            <?php echo $address; ?>
          </div>
        <?php } ?>
        <?php if($phone_number) { ?>
          <div>
            <a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>
          </div>
        <?php } ?>
        <?php if($email) { ?>
          <div>
            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
</main>
