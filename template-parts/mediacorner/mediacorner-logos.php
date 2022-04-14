<section id="page-mediacorner-logos" class="section section__pagelogos">
  <div class="container container__inside">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15">
        <p class="mediacorner__title"><?php echo get_field('logos_title'); ?></p>
      </div>
      <div class="d-flex col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15 justify-content-xl-end">
        <p class="text-xl-left"><a class="main-btn main-btn__red" href="<?php echo get_field('download_all_logos_link'); ?>"><?php esc_html_e( 'Alle Logos herunterladen', 'shs-a' ); ?></a></p>
      </div>
    </div>
    <div class="row row__logos">
      <?php
        $logosImages = get_field('logos_images');
        if( $logosImages ): ?>
          <?php foreach( $logosImages as $logosImage ): ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-2 align-items-center">
              <?php $logo_url = wp_get_attachment_image_url( $logosImage, 'full' ); ?>
              <a href="<?php echo esc_url( $logo_url ); ?>" data-fancybox="logos">
                <?php echo wp_get_attachment_image( $logosImage, 'media-corner-logos-thumb' ); ?>
              </a>
            </div>
          <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
