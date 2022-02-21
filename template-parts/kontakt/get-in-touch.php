<section id="get-in-touch" class="section section__getintouch">
  <div class="container container__inside">
    <div class="row">
      <div class="col-md-12 col-sm-12 px-15">
        <p class="getintouch__ante-title"><span>Get in Touch</span></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-12 px-15">
        <?php $formDetails = get_field('form_details');
        if( $formDetails ): ?>
          <p class="getintouch__title"><?php echo $formDetails['contact_form_title']; ?></p>
        <?php endif; ?>
        <?php echo do_shortcode( '[contact-form-7 id="452" title="Contact Page Form"]' ); ?>
      </div>
      <div class="col-md-6 col-sm-12 px-15">
        <?php $contact_form_image = get_field('contact_form_image'); $contact_form_image_size = 'full'; ?>
        <?php if( $contact_form_image ) {
          echo wp_get_attachment_image( $contact_form_image, $contact_form_image_size );
        } ?>
      </div>
    </div>
  </div>
</section>
