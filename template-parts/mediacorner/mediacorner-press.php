<section id="page-mediacorner-press" class="section section__pagepress">
  <div class="container container__inside">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15">
        <p class="mediacorner__title"><?php echo get_field('press_title'); ?></p>
      </div>
      <div class="d-flex col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15 justify-content-xl-end">
        <p class="text-xl-left"><a class="main-btn main-btn__red" href="<?php echo get_field('download_all_press_link'); ?>"><?php esc_html_e( 'Download all press', 'shs-a' ); ?></a></p>
      </div>
    </div>
    <div class="row row__press">
      <?php
        $pressImages = get_field('press_images');
        if( $pressImages ): ?>
          <?php foreach( $pressImages as $pressImage ): ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
              <a href="<?php echo esc_url($pressImage); ?>" data-fancybox="press">
                <img src="<?php echo esc_url($pressImage); ?>" alt="" />
              </a>
            </div>
          <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
