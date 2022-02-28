<section id="tickets-intro" class="section section__tickets-intro">
  <div class="container container__inside">
    <div class="row align-items-center justify-content-center">
      <?php
        if( have_rows('tickets') ):
            while( have_rows('tickets') ) : the_row(); ?>
                <div class="col-md-6 col-sm-12 col-lg-3 block__tickets">
                  <p class="tickets__title"><?php echo get_sub_field('ticket_title'); ?></p>
                  <p class="tickets__price"><span>€</span><?php echo get_sub_field('ticket_price'); ?></p>
                  <p class="tickets__price-desc"><?php echo get_sub_field('ticket_price_description'); ?></p>
                  <div class="tickets__sep-line"></div>
                  <p class="tickets__desc"><?php echo get_sub_field('ticket_description'); ?></p>
                  <a href="<?php echo get_sub_field('ticket_link'); ?>" class="btn button__tickets"><?php esc_html_e( 'Purchase Now', 'shs-a' ); ?></a>
                </div>
            <?php
            endwhile;
        endif; ?>
		</div>
  </div>
</section>
