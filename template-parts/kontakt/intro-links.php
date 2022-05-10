<section id="intro-links" class="section section__introlinks">
  <span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
  <div class="container container__inside">
    <div class="row links__row">
      <?php $contactDetails = get_field('contact_details');
      if( $contactDetails ): ?>
        <div class="col-md-3 col-sm-12 px-15 links__col">
          <?php $phone_svg= wp_get_attachment_image_src(463, 'full');  ?>
          <img src="<?php echo $phone_svg[0]; ?>" alt="phone icon">
          <h3 class="links__title">Telefonnummer</h3>
          <p class="links__details"><a href="tel:<?php echo $contactDetails['phone_number']; ?>"><?php echo $contactDetails['phone_number']; ?></a></p>
        </div>
        <div class="col-md-3 col-sm-12 px-15 links__col">
          <?php $email_svg= wp_get_attachment_image_src(461, 'full');  ?>
          <img src="<?php echo $email_svg[0]; ?>" alt="email icon">
          <h3 class="links__title">Email Adresse</h3>
          <p class="links__details"><a href="mailto:<?php echo $contactDetails['email_address']; ?>"><?php echo $contactDetails['email_address']; ?></a></p>
        </div>
        <div class="col-md-3 col-sm-12 px-15 links__col">
          <?php $location_svg= wp_get_attachment_image_src(462, 'full');  ?>
          <img src="<?php echo $location_svg[0]; ?>" alt="location icon">
          <h3 class="links__title">Location</h3>
          <p class="links__details"><?php echo $contactDetails['location']; ?></p>
        </div>
        <div class="col-md-3 col-sm-12 px-15 links__col">
          <?php $socials_svg= wp_get_attachment_image_src(464, 'full');  ?>
          <img src="<?php echo $socials_svg[0]; ?>" alt="socials icon">
          <h3 class="links__title">Social Network</h3>
          <p class="links__details"><a href="https://www.linkedin.com/company/shs-academy-switzerland/" target="_blank"><?php echo $contactDetails['social_network']; ?></a></p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
