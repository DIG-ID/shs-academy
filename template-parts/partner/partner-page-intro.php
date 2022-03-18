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
                <p class="partners__topsection-open"><?php esc_html_e( 'OPEN', 'shs-a' ); ?></p>
              </div>
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 px-15 partners__left-bg partners__left-content">
                <div class="partners__market-content">
                  <img src="<?php echo $partnerTopSection['partners_top_section_image']['url']; ?>">
                  <p class="partners__topsection-text"><?php echo $partnerTopSection['partners_top_section_description']; ?></p>
                  <a class="main-btn main-btn__white" target="_blank" href="<?php echo $partnerTopSection['partners_top_section_button_link']; ?>"><?php esc_html_e( 'Mehr erfahren', 'shs-a' ); ?></a>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6 px-15 partners__right-content">
                <?php
                $partners_query_args = array(
                  'post_type'      => 'partners',
                  'posts_per_page' => '9',
                  'nopaging'       => false,
                  'order'          => 'ASC',
                  'orderby'        => 'date',
                );
                $partners_query = new WP_Query( $partners_query_args );
                if ( $partners_query->have_posts() ) :
                  while ( $partners_query->have_posts() ) :
                    $partners_query->the_post();
                    ?>
                      <a class="partners__right-list-item" href="<?php echo the_field('partner_link'); ?>" target="_blank"><?php the_title(); ?></a>
                    <?php
                    endwhile;
                   endif;
                  wp_reset_postdata();
                 ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
