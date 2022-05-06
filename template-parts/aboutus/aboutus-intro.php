<section id="aboutus-intro" class="section section__aboutus-intro">
  <span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
  <div class="container container__inside">
    <div class="row align-items-center justify-content-center">
      <?php $aboutus_introSection = get_field('about_us_top_section');
      if( $aboutus_introSection ): ?>
      <div class="col-md-6 col-sm-12 col-lg-6">
        <img class="w-100" src="<?php echo $aboutus_introSection['about_us_section_image']; ?>">
      </div>
      <div class="col-md-6 col-sm-12 col-lg-6 aboutus__leftCol">
        <p class="aboutus__title-intro"><?php echo $aboutus_introSection['about_us_section_title']; ?></p>
        <p class="aboutus__subtitle-intro"><?php echo $aboutus_introSection['about_us_section_tsubtitle']; ?></p>
        <p class="aboutus__text-intro"><?php echo $aboutus_introSection['about_us_section_description']; ?></p>
      </div>
      <?php endif; ?>
		</div>
  </div>
</section>
