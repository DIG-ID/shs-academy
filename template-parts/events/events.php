<?php
$events_query_args = array(
	'post_type' => 'events',
	'order'     => 'DESC',
);

$events_query = new WP_Query( $events_query_args );
?>
<main id="events-section" class="section section__events">
	<?php if ( $events_query->have_posts() ) :
		?>
		<div class="container container__inside container__events-links">
			<div class="row">
				<div class="col-12">
					<ul class="events-links">
						<?php
						while ( $events_query->have_posts() ) :
							$events_query->the_post();
							$unixtimestamp = strtotime( get_field( 'event_duration_event_start_date' ) );
							?>
								<li class="events-links__link-wrapper"><a class="events-links__link" href="#<?php echo esc_html( date_i18n( 'Y', $unixtimestamp ) ); ?>"><?php echo esc_html( date_i18n( 'Y', $unixtimestamp ) ); ?></a></li>
							<?php
						endwhile;
						?>
					</ul>
				</div>
			</div>
		</div>
		<?php
	endif;
	rewind_posts();
	while ( $events_query->have_posts() ) :
		$events_query->the_post();
		$event_start_date = get_field( 'event_duration_event_start_date' );
		$unixtimestamp    = strtotime( $event_start_date );
		?>
		<article id="<?php echo esc_html( date_i18n( 'Y', $unixtimestamp ) ); ?>" <?php post_class(); ?> itemscope itemtype="https://schema.org/Event">
			<header class="container container__inside">
				<div class="row">
					<div class="col-10 col-lg-8">
						<h2 itemprop="name" class="event-title"><?php the_title(); ?><br><span class="event-subtitle"><?php the_field( 'event_subtitle' ); ?></span></h2>
						<div itemprop="description" class="event-description"><?php the_content(); ?></div>
						<meta itemprop="startDate" content="<?php echo $event_start_date; ?>">
					</div>
				</div>
			</header>
			<?php get_template_part( 'template-parts/events/testimonials' ); ?>
			<?php get_template_part( 'template-parts/events/gallery' ); ?>
			<span class="event-background rellax" data-rellax-speed="-5" data-rellax-percentage="0.5"></span>
		</article>
		<?php
	endwhile;
	?>
</main>
