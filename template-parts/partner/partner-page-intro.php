<section id="page-intro-section" class="section section__pageintro">
  <div class="container container__inside">
    <div class="row">
      <div class="col-md-6 col-sm-12 px-15">
        <?php $partnerTopSection = get_field('partners_top_section');
        if( $partnerTopSection ): ?>
          <p class="partners__topsection-title"><?php echo $partnerTopSection['partners_top_section_title']; ?></p>
          <img src="<?php echo $partnerTopSection['partners_top_section_image']['url']; ?>">
          <p class="partners__topsection-text"><?php echo $partnerTopSection['partners_top_section_description']; ?></p>
          <a class="main-btn main-btn__red" href="<?php echo $partnerTopSection['partners_top_section_button_link']; ?>">Button</a>
        <?php endif; ?>
      </div>
      <div class="col-md-6 col-sm-12 px-15">

      </div>
    </div>
  </div>
</section>
