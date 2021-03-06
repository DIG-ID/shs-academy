<section id="programs-section" class="section section__programs">
  <span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
  <div class="container container__programs">
    
    <div class="row align-items-center justify-content-center">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <?php
        $program_choice_query_args = array(
          'post_type' => 'program',
          'nopaging'  => true,
          'order'     => 'DESC',
          'orderby'   => 'date',
        );
        $program_choice_query = new WP_Query( $program_choice_query_args );
        if ( $program_choice_query->have_posts() ) :
          while ( $program_choice_query->have_posts() ) :
            $program_choice_query->the_post();
        ?>
        <ul class="nav nav-pills mb-3" id="programs__tab" role="tablist">
          <?php
            $i = 1;
              if( have_rows('days') ):
                while( have_rows('days') ) : the_row();
                ?>
              <li class="nav-item" role="presentation">
                <button class="nav-link<?php if($i == 1){echo ' active';} ?>" data-bs-toggle="pill" data-bs-target="#programs__acc-<?php echo $i; ?>" type="button" role="tab" aria-controls="programs__acc-<?php echo $i; ?>" aria-selected="true"><?php echo the_sub_field('tab_title'); ?>
                </button>
              </li>
              <?php $i++;
                endwhile;
               endif;
            ?>
        </ul>
        <div class="tab-content" id="programs__tabContent">
          <?php $e = 1;
          if( have_rows('days') ):
            while( have_rows('days') ) : the_row();
          ?>
          <div class="tab-pane fade <?php if($e == 1){echo ' active show';} ?>" id="programs__acc-<?php echo $e; ?>" role="tabpanel">            
            <?php $u = 1;
            if( have_rows('accordion_repeater') ):
              while( have_rows('accordion_repeater') ) : the_row();
            ?>
            <p class="timeofday__title"><?php echo get_sub_field('block_title'); ?></p>
            <div class="accordion accordion-flush" id="programs__accordion-<?php echo $e;echo $u; ?>">
              <?php $c = 1;
                  if( have_rows('block_repeater') ): 
                      while( have_rows('block_repeater') ) : the_row(); ?>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading-<?php echo $e;echo $c; ?>">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $e;echo $u;echo $c; ?>" aria-expanded="false" aria-controls="flush-collapse-<?php echo $e;echo $u;echo $c; ?>">
                            <span class="programs__acc-time"><?php echo get_sub_field('day-morning-hour'); ?></span><span class="programs__acc-title"><?php echo get_sub_field('day_morning_title'); ?>
                          </button>
                        </h2>
                        <?php if( get_sub_field('day_morning_description') ): ?>
                        <div id="flush-collapse-<?php echo $e;echo $u;echo $c; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?php echo $e;echo $c; ?>" data-bs-parent="#programs__accordion-<?php echo $e;echo $u; ?>">
                          <div class="accordion-body programs__acc-desc"><?php echo get_sub_field('day_morning_description'); ?></div>
                        </div>
                        <?php endif; ?>
                      </div>
                      <?php $c++;
                endwhile;
              endif;
              ?>
            </div>
            <?php $u++;
                endwhile;
              endif;
              ?>
            <a class="main-btn main-btn__red programs__dl-btn" href="<?php echo get_field('program_file'); ?>"><?php esc_html_e( 'Programm downloaden', 'shs-a' ); ?></a>
          </div>
          <?php $e++;
          endwhile;
         endif;
        ?>
        </div>
        <?php
        endwhile;
       endif;
      ?>
      </div>
    </div>
    <?php
		if ( get_field( 'display_info_message_programm', $_SESSION['page_template_id'] ) ) :
			?>
			<div class="row align-items-center justify-content-center py-5">
				<div class="col">
					<p class="text-center text-info-details m-0"><?php the_field( 'info_message_programm', $_SESSION['page_template_id'] ); ?></p>
				</div>
			</div>
			<?php
		endif;
		?>
  </div>
</section>
