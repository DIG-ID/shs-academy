<section id="aboutus-sidteam" class="section section__aboutus-sidteam">
  <div class="container container__inside">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-12 col-sm-12 col-lg-12 aboutus__titleCol">
        <h2 class="aboutus__title-intro">SID Team</h2>
        <p class="aboutus__text-intro"  style="display:none;">Von links nach rechts:</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php
        if( have_rows('team') ):
        while( have_rows('team') ) : the_row(); ?>
        <div class="col-md-6 col-sm-12 col-lg-4 aboutus__teamCol">
          <img src="<?php echo get_sub_field('team_member_image'); ?>">
          <p class="aboutus__title-team"><?php echo get_sub_field('team_member_name'); ?></p>
          <p class="aboutus__position-team"><?php echo get_sub_field('team_member_position'); ?></p>
          <a class="aboutus__social-team" href="<?php echo get_sub_field('team_member_link'); ?>"><img src="/wp-content/uploads/In-Blue-72.png"></a>
        </div>
      <?php endwhile;endif; ?>
    </div>
  </div>
</section>
