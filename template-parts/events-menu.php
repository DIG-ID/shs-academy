<div id="opener__eventsmenu" class="closed">
	<div class="container menu__event-container">
		<div class="row">
			<a class="col-6 col-md-6 col-sm-12 px-15 menu__event-link" href="<?php echo get_permalink( get_page_by_path( 'tickets' ) ) ?>">
				<p class="menu__event-title"><?php  echo get_the_title( get_page_by_path( 'tickets' ) ); ?></p>
				<p class="menu__event-text">Sichere Dir Deinen Platz am #SID22 mit attraktiven Vergünstigungen.</p>
				<p class="menu__event-button">MEHR ERFAHREN</p>
			</a>
			<a class="col-6 col-md-6 col-sm-12 px-15 menu__event-link" href="<?php echo get_permalink( get_page_by_path( 'programm' ) ) ?>">
				<p class="menu__event-title"><?php  echo get_the_title( get_page_by_path( 'programm' ) ); ?></p>
				<p class="menu__event-text">Unter dem Motto „The Future of Pricing“ werfen wir einen Blick hinter die Kulissen der psychologischen Entscheidungen, die bei Preisstrategien getroffen werden.</p>
				<p class="menu__event-button">MEHR ERFAHREN</p>
			</a>
		</div>
		<div class="row">
			<div class="col-6 col-md-6 col-sm-12 px-15 menu__event-link disabled-menu-item" href="<?php echo get_permalink( get_page_by_path( 'speakers' ) ) ?>">
					<p class="menu__event-title"><?php  echo get_the_title( get_page_by_path( 'speakers' ) ); ?></p>
					<p class="menu__event-text">Entdecke die hochkarätigen Speaker des persönlichen Schweizer Hospitality Events.</p>
					<p class="menu__event-button">MEHR ERFAHREN</p>
			</div>
			<a class="col-6 col-md-6 col-sm-12 px-15 menu__event-link" href="<?php echo get_permalink( get_page_by_path( 'location' ) ) ?>">
					<p class="menu__event-title"><?php  echo get_the_title( get_page_by_path( 'location' ) ); ?></p>
					<p class="menu__event-text">Eine einzigartige und topmoderne Event Location ist der ideale Austragungsort für den Branchen-Event.</p>
					<p class="menu__event-button">MEHR ERFAHREN</p>
			</a>
		</div>
		<div class="row menu__event-footer">
			<div class="col-6 col-md-6 col-sm-12 px-15">
				<img class="menu__event-img" src="<?php echo wp_upload_dir()['url'] . '/FooterMenu_SHS.svg' ?>" width="210" height="64">
			</div>
		</div>
	</div>
</div>
