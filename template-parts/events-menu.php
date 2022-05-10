<div id="opener__eventsmenu" class="closed">
	<div class="container menu__event-container">
		<div class="row">
			<a class="col-6 col-md-6 col-sm-12 px-15 menu__event-link" href="<?php echo get_permalink( get_page_by_path( 'tickets' ) ) ?>">
					<p class="menu__event-title"><?php  echo get_the_title( get_page_by_path( 'tickets' ) ); ?></p>
					<p class="menu__event-text">Sichere Dir Deinen Platz am #SID22 mit attraktiven Vergünstigungen.</p>
					<p class="menu__event-button">MEHR ERFAHREN</p>
			</a>
			<a class="col-6 col-md-6 col-sm-12 px-15 menu__event-link btn disabled disabled-menu-item" href="<?php echo get_permalink( get_page_by_path( 'program' ) ) ?>">
				<p class="menu__event-title"><?php  echo get_the_title( get_page_by_path( 'program' ) ); ?></p>
				<p class="menu__event-text">Coming soon</p>
				<p class="menu__event-text" style="display:none;">Mit dem Motto «ReDefining Hospitality» dreht sich alles um Talente, Nachhaltigkeit und Hoteltechnologie.</p>
				<p class="menu__event-button">MEHR ERFAHREN</p>
			</a>
		</div>
		<div class="row">
			<a class="col-6 col-md-6 col-sm-12 px-15 menu__event-link" href="<?php echo get_permalink( get_page_by_path( 'speakers' ) ) ?>">
					<p class="menu__event-title"><?php  echo get_the_title( get_page_by_path( 'speakers' ) ); ?></p>
					<p class="menu__event-text">Entdecke die hochkarätigen Speaker des persönlichen Schweizer Hospitality Events.</p>
					<p class="menu__event-button">MEHR ERFAHREN</p>
			</a>
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
