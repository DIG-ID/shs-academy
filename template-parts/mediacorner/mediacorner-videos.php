<section id="page-mediacorner-videos" class="section section__pagevideos">
  <div class="container container__inside">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15">
        <p class="mediacorner__title"><?php echo get_field('videos_title'); ?></p>
      </div>
      <div class="d-flex col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15 justify-content-xl-end">
        <p class="text-xl-left"><a class="main-btn main-btn__red" href="<?php echo get_field('download_all_videos_link'); ?>"><?php esc_html_e( 'Alle Videos herunterladen', 'shs-a' ); ?></a></p>
      </div>
    </div>
  </div>
</section>
