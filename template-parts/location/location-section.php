<section id="location-section" class="section section__location">
  <span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
  <div class="container container__inside">
    <div class="row location__row">
      <div class="col-md-6 col-sm-12 px-15 location__block-img-top">
        <?php $top_block_image = get_field('location_block_image'); $top_block_image_size = 'full'; ?>
        <?php if( $top_block_image ) {
          echo wp_get_attachment_image( $top_block_image, $top_block_image_size );
        } ?>
      </div>
      <div class="col-md-6 col-sm-12 px-15 location__blocktext">
        <h2 class="location__title"><?php echo the_field('location_top_block_title'); ?></h2>
        <?php echo the_field('location_top_block_description'); ?>
      </div>
    </div>
  </div>
  <div class="container-fluid promo-code__top">
    <div class="container promo-code__container">
      <div class="row promo-code__title-row">
        <div class="col-md-12 col-lg-6">
          <h2 class="promo-code__title"><?php echo the_field('promo_section_title'); ?></h2>
        </div>
        <div class="col-md-12 col-lg-6">
          <p class="promo-code__desc"><?php echo the_field('promo_section_desc'); ?></p>
          <p class="promo-code__current-code"><?php echo the_field('promo_code'); ?></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid promo-code__bottom">
    <div class="container promo-code__container">
      <div class="row promo-code__row">
        <?php
          if( have_rows('hotel_rooms_with_promo') ):
            while( have_rows('hotel_rooms_with_promo') ) : the_row();
        ?>
        <div class="col-md-12 col-lg-6 promo-code__wrapper-cols">
          <img src="<?php echo the_sub_field('image'); ?>" title="" alt="">
          <div class="promo-code__wrapper-hotels">
            <p class="promo-code__hotel-title"><?php echo the_sub_field('title'); ?><span class="promo-code__hotel-stars"><?php echo the_sub_field('stars'); ?></span></p>
            <div class="promo-code__hotel-desc"><?php echo the_sub_field('description'); ?></div>
            <a href="<?php echo the_sub_field('website_link'); ?>" class="promo-code__button-website main-btn main-btn__red main-btn__mob-centered">Übernachtung buchen</a>
          </div>
        </div>
        <?php 
              endwhile;
          endif;
        ?>
      </div>
    </div>
  </div>
  <div class="container container__inside">
    <div class="row location__row">
      <div class="col-md-6 col-sm-12 px-15 location__blocktext--sec">
        <h2 class="location__title"><?php echo the_field('location_bottom_block_title'); ?></h2>
        <?php echo the_field('location_bottom_block_description'); ?>
      </div>
      <div class="col-md-6 col-sm-12 px-15">
        <?php $bottom_block_image = get_field('location_block_bottom_image'); $bottom_block_image_size = 'full'; ?>
        <?php if( $bottom_block_image ) {
          echo wp_get_attachment_image( $bottom_block_image, $bottom_block_image_size );
        } ?>
      </div>
    </div>
  </div>
</section>
