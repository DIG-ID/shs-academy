<section id="page-intro-section" class="section section__pageintro">
  <div class="container-fluid">
    <div class="row">
      <?php $partnerTopSection = get_field('partners_top_section');
      if( $partnerTopSection ): ?>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 px-15 partners__left-bg">
                <p class="partners__topsection-title"><?php echo $partnerTopSection['partners_top_section_title']; ?></p>
              </div>
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 px-15 partners__left-bg">
                <div class="partners__market-content">
                  <p class="partners__topsection-text"><?php echo $partnerTopSection['partners_top_section_description']; ?></p>
                  <a class="main-btn main-btn__white" target="_blank" href="<?php echo $partnerTopSection['partners_top_section_button_link']; ?>"><?php esc_html_e( 'Mehr erfahren', 'shs-a' ); ?></a>
                </div>
                <img class="partners__topsection-img" src="<?php echo $partnerTopSection['partners_top_section_image']['url']; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
