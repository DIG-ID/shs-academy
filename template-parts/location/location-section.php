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
