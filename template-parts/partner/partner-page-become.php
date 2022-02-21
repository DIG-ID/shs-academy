<section id="page-become-section" class="section section__partner-become">
  <div class="container container__inside">
    <div class="row">
      <div class="col-md-12 col-sm-12 px-15">
        <?php $partnerBecome = get_field('become_a_partner_section');
        if( $partnerBecome ): ?>
        <p class="partners__become-title"><?php echo $partnerBecome['become_a_partner_section_title']; ?></p>
        <p class="partners__become-text"><?php echo $partnerBecome['become_a_partner_section_description']; ?></p>
        <?php endif; ?>
      </div>
    </div>
    <div id="become_a_member">
      <?php echo do_shortcode( '[contact-form-7 id="458" title="Become a partner"]' ); ?>
    </div>
  </div>
</section>
