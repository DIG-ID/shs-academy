<section id="page-partners-section" class="section section__partners">
  <div class="container container__inside">
    <div class="row">
      <div class="col-6 col-md-6 col-sm-12 px-15 partners__col">
        <p>Institutional Partner</p>
        <?php
        $institutional_query_args = array(
    			'post_type' => 'partners',
    			'nopaging'  => true,
    			'order'     => 'DESC',
    			'orderby'   => 'date',
          'category_name'  => 'institutional',
    		);
    		$institutional_query = new WP_Query( $institutional_query_args );
    		if ( $institutional_query->have_posts() ) :
    			while ( $institutional_query->have_posts() ) :
    				$institutional_query->the_post();
    				?>
            <a href="#"><?php the_post_thumbnail('thumbnail'); ?></a>
            <?php
            endwhile;
           endif;
          wp_reset_postdata();
         ?>
      </div>
      <div class="col-6 col-md-6 col-sm-12 px-15 partners__col">
        <p>Culinary Partner</p>
        <?php
        $culinary_query_args = array(
    			'post_type' => 'partners',
    			'nopaging'  => true,
    			'order'     => 'DESC',
    			'orderby'   => 'date',
          'category_name'  => 'culinary',
    		);
    		$culinary_query = new WP_Query( $culinary_query_args );
    		if ( $culinary_query->have_posts() ) :
    			while ( $culinary_query->have_posts() ) :
    				$culinary_query->the_post();
    				?>
              <a href="#"><?php the_post_thumbnail('thumbnail'); ?></a>
            <?php
            endwhile;
           endif;
          wp_reset_postdata();
         ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 col-sm-12 px-15 partners__col">
        <p>Innovation Partner</p>
        <?php
        $innovation_query_args = array(
          'post_type' => 'partners',
          'nopaging'  => true,
          'order'     => 'DESC',
          'orderby'   => 'date',
          'category_name'  => 'innovation',
        );
        $innovation_query = new WP_Query( $innovation_query_args );
        if ( $innovation_query->have_posts() ) :
          while ( $innovation_query->have_posts() ) :
            $innovation_query->the_post();
            ?>
              <a href="#"><?php the_post_thumbnail('thumbnail'); ?></a>
            <?php
            endwhile;
           endif;
          wp_reset_postdata();
         ?>
      </div>
    </div>
  </div>
</section>
