<section id="page-mediacorner-photos" class="section section__pagephotos">
  <div class="container container__inside">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15">
        <p class="mediacorner__title"><?php echo get_field('photos_title'); ?></p>
      </div>
      <div class="d-flex col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15 justify-content-xl-end">
        <p class="text-xl-left"><a class="main-btn main-btn__red" href="<?php echo get_field('download_all_photos_link'); ?>"><?php esc_html_e( 'Download all fotos', 'shs-a' ); ?></a></p>
      </div>
    </div>
    <div class="row row__photos">
      <?php
        $photosImages = get_field('photos');
        if( $photosImages ): ?>
          <?php foreach( $photosImages as $photosImage ): ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
              <a href="<?php echo esc_url($photosImage); ?>" data-fancybox="photos">
                <img src="<?php echo esc_url($photosImage); ?>" alt="" />
              </a>
            </div>
          <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
