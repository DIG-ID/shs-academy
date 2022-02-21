<section id="page-partners-section" class="section section__partners">
  <div class="container container__inside">
    <p class="partners__topsection-title">Partners</p>
    <div class="row">
      <div class="col-md-6 col-sm-12 px-15 partners__column">
        <p class="partners__catTitle">Institutional Partner</p>
        <?php
        $institutional_query_args = array(
    			'post_type' => 'partners',
    			'nopaging'  => true,
    			'order'     => 'ASC',
    			'orderby'   => 'date',
          'category_name'  => 'institutional',
    		);
    		$institutional_query = new WP_Query( $institutional_query_args );
    		if ( $institutional_query->have_posts() ) :
    			while ( $institutional_query->have_posts() ) :
    				$institutional_query->the_post();
    				?>
            <a href="#" target="_blank"><?php the_post_thumbnail('full'); ?></a>
            <?php
            endwhile;
           endif;
          wp_reset_postdata();
         ?>
      </div>
      <div class="col-md-6 col-sm-12 px-15 partners__column">
        <p class="partners__catTitle">Culinary Partner</p>
        <?php
        $culinary_query_args = array(
    			'post_type' => 'partners',
    			'nopaging'  => true,
    			'order'     => 'ASC',
    			'orderby'   => 'date',
          'category_name'  => 'culinary',
    		);
    		$culinary_query = new WP_Query( $culinary_query_args );
    		if ( $culinary_query->have_posts() ) :
    			while ( $culinary_query->have_posts() ) :
    				$culinary_query->the_post();
    				?>
              <a href="#" target="_blank"><?php the_post_thumbnail('full'); ?></a>
            <?php
            endwhile;
           endif;
          wp_reset_postdata();
         ?>
      </div>
    </div>
    <div class="row">
      <p class="partners__catTitle">Innovation Partner</p>
      <div class="col-md-12 col-sm-12 px-15 partners__column">
        <?php
        $innovation_query_args = array(
          'post_type' => 'partners',
          'nopaging'  => true,
          'order'     => 'ASC',
          'orderby'   => 'date',
          'category_name'  => 'innovation',
        );
        $innovation_query = new WP_Query( $innovation_query_args );
        if ( $innovation_query->have_posts() ) :
          while ( $innovation_query->have_posts() ) :
            $innovation_query->the_post();
            ?>
              <a href="#" target="_blank"><?php the_post_thumbnail('full'); ?></a>
            <?php
            endwhile;
           endif;
          wp_reset_postdata();
         ?>
      </div>
    </div>
  </div>
</section>
