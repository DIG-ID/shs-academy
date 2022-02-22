<section id="intro-links" class="section section__introlinks">
  <span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
  <div class="container container__inside">
    <div class="row links__row">
      <?php $contactDetails = get_field('contact_details');
      if( $contactDetails ): ?>
        <div class="col-md-3 col-sm-12 px-15 links__col">
          <?php $phone_svg= wp_get_attachment_image_src(463, 'full');  ?>
          <img src="<?php echo $phone_svg[0]; ?>" alt="phone icon">
          <p class="links__title">Phone Number</p>
          <p class="links__details"><?php echo $contactDetails['phone_number']; ?></p>
        </div>
        <div class="col-md-3 col-sm-12 px-15 links__col">
          <?php $email_svg= wp_get_attachment_image_src(461, 'full');  ?>
          <img src="<?php echo $email_svg[0]; ?>" alt="email icon">
          <p class="links__title">Email Address</p>
          <p class="links__details"><?php echo $contactDetails['email_address']; ?></p>
        </div>
        <div class="col-md-3 col-sm-12 px-15 links__col">
          <?php $location_svg= wp_get_attachment_image_src(462, 'full');  ?>
          <img src="<?php echo $location_svg[0]; ?>" alt="location icon">
          <p class="links__title">Location</p>
          <p class="links__details"><?php echo $contactDetails['location']; ?></p>
        </div>
        <div class="col-md-3 col-sm-12 px-15 links__col">
          <?php $socials_svg= wp_get_attachment_image_src(464, 'full');  ?>
          <img src="<?php echo $socials_svg[0]; ?>" alt="socials icon">
          <p class="links__title">Social Network</p>
          <p class="links__details">fb.com/example</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
