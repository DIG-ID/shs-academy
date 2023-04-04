<section id="tickets-intro" class="section section__tickets-intro p-5">
<span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
  <div class="container container__inside p-5">
    <div class="row">
      <div class="col-md-12 col-sm-12 px-15">
        <p class="getintouch__ante-title"><span><?php echo esc_html_e( 'Tickets', 'shs' ) ?></span></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <p class="getintouch__title"><?php the_field('page_title'); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-lg-5 py-5">
        <p class="aboutus__text-intro"><?php the_field('description'); ?></p>
      </div>
    </div>
    <?php $tickets_form = get_field( 'contact_form_shortcode' );?>
	<?php echo do_shortcode( $tickets_form ); ?>
  </div>
</section>
