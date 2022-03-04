<section id="aboutus-sidteam" class="section section__aboutus-sidteam">
  <div class="container container__inside">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-12 col-sm-12 col-lg-12 aboutus__titleCol">
        <p class="aboutus__title-intro">SID Team</p>
        <p class="aboutus__text-intro">Von links nach rechts:</p>
      </div>
    </div>
    <div class="row">
      <?php
        if( have_rows('team') ):
        while( have_rows('team') ) : the_row(); ?>
        <div class="col-md-6 col-sm-12 col-lg-4 aboutus__teamCol">
          <img src="<?php echo get_sub_field('team_member_image'); ?>">
          <p class="aboutus__title-team"><?php echo get_sub_field('team_member_name'); ?></p>
          <p class="aboutus__position-team"><?php echo get_sub_field('team_member_position'); ?></p>
          <a class="aboutus__social-team" href="<?php echo get_sub_field('team_member_link'); ?>"><img src="/shs-academy/wp-content/uploads/2022/03/In-Blue-72.png"></a>
        </div>
      <?php endwhile;endif; ?>
    </div>
  </div>
</section>
