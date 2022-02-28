<section id="tickets-offers" class="section section__tickets-offers">
  <span class="section-about-us__bg-img-2"></span>
  <div class="container container__inside container__offers">
    <div class="row align-items-center justify-content-center">
      <p class="offers__section-title"><?php esc_html_e( 'Hotel Offers', 'shs-a' ); ?></p>
    </div>
    <div class="row align-items-center justify-content-center">
      <?php if( have_rows('hotels_offers') ):
          while( have_rows('hotels_offers') ) : the_row(); ?>
              <div class="col-md-6 col-sm-12 col-lg-4 block__offers">
                <img src="<?php echo get_sub_field('hotel_offer_image'); ?>" alt="offer thumbnail">
                <p class="offers__subtitle"><?php echo get_sub_field('hotel_offer_subtitle'); ?></p>
                <p class="offers__title"><?php echo get_sub_field('hotel_offer_title'); ?></p>
                <p class="offers__desc"><?php echo get_sub_field('hotel_offer_description'); ?></p>
                <?php if( get_field('hotel_offer_link') ): ?>
                <a href="<?php echo get_sub_field('hotel_offer_link'); ?>" class="btn button__tickets"><?php esc_html_e( 'Purchase Now', 'shs-a' ); ?></a>
                <?php endif; ?>
              </div>
          <?php
          endwhile;
      endif; ?>
		</div>

    <div class="row align-items-center justify-content-center">
      <p class="offers__section-title"><?php esc_html_e( 'Partners Offers', 'shs-a' ); ?></p>
    </div>
    <div class="row align-items-center justify-content-center">
      <?php if( have_rows('partners_offers') ):
          while( have_rows('partners_offers') ) : the_row(); ?>
              <div class="col-md-6 col-sm-12 col-lg-4 block__offers">
                <img src="<?php echo get_sub_field('partner_offer_image'); ?>" alt="offer thumbnail">
                <p class="offers__subtitle"><?php echo get_sub_field('partner_offer_subtitle'); ?></p>
                <p class="offers__title"><?php echo get_sub_field('partner_offer_title'); ?></p>
                <p class="offers__desc"><?php echo get_sub_field('partner_offer_description'); ?></p>
                <?php if( get_field('partner_offer_link') ): ?>
                <a href="<?php echo get_sub_field('partner_offer_link'); ?>" class="btn button__tickets"><?php esc_html_e( 'Purchase Now', 'shs-a' ); ?></a>
                <?php endif; ?>
              </div>
          <?php
          endwhile;
      endif; ?>
		</div>
  </div>
</section>
