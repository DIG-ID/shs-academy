<section id="page-intro-section" class="section section__pageintro">
  <div class="container-fluid">
    <div class="row">
      <?php $partnerTopSection = get_field('partners_top_section');
      if( $partnerTopSection ): ?>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 px-15 partners__left-bg partners__left-tab">
                <p class="partners__topsection-title"><?php echo $partnerTopSection['partners_top_section_title']; ?></p>
              </div>
              <div class="col-md-6 col-sm-12 px-15">

              </div>
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 px-15 partners__left-bg partners__left-content">
                <div class="partners__market-content">
                  <img src="<?php echo $partnerTopSection['partners_top_section_image']['url']; ?>">
                  <p class="partners__topsection-text"><?php echo $partnerTopSection['partners_top_section_description']; ?></p>
                  <a class="main-btn main-btn__white" target="_blank" href="<?php echo $partnerTopSection['partners_top_section_button_link']; ?>">Mehr erfahren</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 px-15">

              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
