<?php

/*function formatSizeUnits( $bytes ) {
	if ( $bytes >= 1073741824 ) :
		$bytes = number_format( $bytes / 1073741824, 2 ) . ' GB';
	elseif ( $bytes >= 1048576 ) :
		$bytes = number_format( $bytes / 1048576, 2 ) . ' MB';
	elseif ( $bytes >= 1024 ) :
		$bytes = number_format( $bytes / 1024, 2 ) . ' KB';
	elseif ( $bytes > 1 ) :
		$bytes = $bytes . ' bytes';
	elseif ( $bytes == 1 ) :
		$bytes = $bytes . ' byte';
	else :
		$bytes = '0 bytes';
	endif;
	return $bytes;
}*/

/**
 * Get ACF Gallery and create a zip file for the download.
 *
 * @param [type] $field_name
 * @return void
 */
function shs_download_files( $field_name ) {

	if ( 'logos_images' === $field_name ) :
		$zip_file_section_name = 'shs-media-logos';
		$download_btn_text = 'Alle Logos herunterladen';
	elseif ( 'banners_images' === $field_name ) :
		$zip_file_section_name = 'shs-media-banners';
		$download_btn_text = 'Alle Banner herunterladen';
	elseif ( 'photos' === $field_name ) :
		$zip_file_section_name = 'shs-media-photos';
		$download_btn_text = 'Alle Fotos herunterladen';
	elseif ( 'wrap_up_gallery' === $field_name ) :
		$zip_file_section_name = 'shs-wrapup-photos';
		$download_btn_text = 'Alle Fotos herunterladen';
	endif;

	$field_type = get_field( $field_name );

	if ( $field_type ) :

		$destination = 'downloads/' . $zip_file_section_name . '.zip';

		$files = array();
		foreach ( $field_type as $item ) :
			// create an array of the image files in the gallery
			$files[] = get_attached_file( $item );
		endforeach;

		if ( file_exists( $destination ) ) :
			$zip = new ZipArchive();
			$zip->open( $destination );
			$ria_num_zip_files = $zip->numFiles;
			$ria_new_gallery_images = count( $files );
			if ( $ria_num_zip_files != $ria_new_gallery_images ) :
				unlink( $destination );
				$zip->open( $destination, ZipArchive::CREATE | ZIPARCHIVE::OVERWRITE );
				foreach ( $files as $file ) :
					if ( file_exists( $file ) ) :
						$new_filename = substr( $file, strrpos( $file, '/' ) + 1 );
						$zip->addFile( $file, $new_filename );
					endif;
				endforeach;
				$zip->close();
			endif;
			echo '<a href="' . esc_url( home_url( '/' ) ) . $destination . '" class="main-btn main-btn__red download-link" download><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z"/></svg>' . esc_html__( $download_btn_text, 'shs-a' ) . '</a>';
			clearstatcache();
			//$rai_zip_fileize = filesize( realpath( $destination ) );
			//echo '<p>Size: ' . esc_html( formatSizeUnits( $rai_zip_fileize ) ) . '</p>';
		else :
			if ( count( $files ) ) :
				$zip = new ZipArchive();
				$zip->open( $destination, ZipArchive::CREATE );
				foreach ( $files as $file ) :
					if ( file_exists( $file ) ) :
						$new_filename = substr( $file, strrpos( $file, '/' ) + 1 );
						$zip->addFile( $file, $new_filename );
					endif;
				endforeach;
				$zip->close();
				echo '<a href="' . esc_url( home_url( '/' ) ) . $destination . '" class="main-btn main-btn__red download-link" download><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z"/></svg>' . esc_html__( $download_btn_text, 'shs-a' ) . '</a>';
			endif;
		endif;
	else :
		echo '<p>' . esc_html( 'Invalid field type.' ) . '</p>';
	endif;
}


/**
 * Create a zip file containing images from an ACF gallery and offer it for download.
 *
 * @param string $field_name The name of the ACF gallery field.
 * @param string $zip_file_name The name of the zip file.
 * @param string $download_btn_text The text to display on the download button.
 * @return void
 */
function shs_create_zip_file_from_gallery( $field_name, $zip_file_name, $download_btn_text ) {

	if ( ! isset( $_GET['download_zip_file'] ) || ! wp_verify_nonce( wp_kses_post( $_GET['download_zip_file'] ), 'download_zip_file' ) ) :
		console_log( "Nonce not working!" );
		//wp_die( 'Invalid nonce' );
	endif;

	// Get the images from the ACF gallery field.
	$field_type = get_field( $field_name );
	//console_log($field_type);

	// If the field is empty, do nothing.
	if ( empty( $field_type ) ) :
		console_log( "Field empty or invalid!" );
		return;
	endif;

	// Create an array of the image files in the gallery.
	$files = array();
	foreach ( $field_type as $item ) :
		if ( ! is_array( $item ) ) :
			$file = get_attached_file( $item );
			if ( file_exists( $file ) ) :
				$files[] = $file;
			endif;
		else :
			$file = get_attached_file( $item['ID'] );
			if ( file_exists( $file ) ) :
				$files[] = $file;
			endif;
		endif;

	endforeach;

	// Check if there are any valid files in the gallery.
	if ( empty( $files ) ) :
		console_log( "No valid files in the field!" );
		return;
	endif;

	// Count the number of files in the array.
	$file_count = count( $files );
	//console_log( "We count {$file_count} files" );

	// Define the file destination.
	$destination = 'downloads/' . $zip_file_name . '.zip';

	// Check if the zip file destination already exists, if not create the file and add the images.
	if ( ! file_exists( $destination ) ) :
		//console_log( "We dont' have that zip file! Will create that now!" );
		// Create the zip file and add the images to it.
		$zip = new ZipArchive();
		$zip->open( $destination, ZipArchive::CREATE | ZipArchive::OVERWRITE );
		foreach ( $files as $file ) :
			if ( file_exists( $file ) ) :
				$new_filename = basename( $file );
				$zip->addFile( $file, $new_filename );
			endif;
		endforeach;
		$zip->close();
	else :
		//console_log( "We have that zip file! Will check if is the same files inside!" );
		$zip = new ZipArchive();
		$zip->open( $destination );

		// Check if the number of files in the existing zip file matches the number of files in the gallery field. If yes we compare the files names in the zip file if they aren't the same name, create a new zip file and add the new images.
		if ( $file_count === $zip->numFiles ) :
			$same_files = true;
			//console_log( "The zip file have the same number of files, lets check their names!" );

			// Check if the file names or content of each file matches.
			for ( $i = 0; $i < $file_count; $i++ ) :
				$existing_file_name = $zip->getNameIndex( $i );
				$new_file_name      = basename( $files[ $i ] );
				if ( $existing_file_name !== $new_file_name || md5( $zip->getFromIndex( $i ) ) !== md5_file( $files[ $i ] ) ) :
					//console_log( "This file doesn't have the same name!" );
					$same_files = false;
					break;
				endif;
			endfor;

			// If the zip file contains the same images, do nothing. Otherwhise create and add the new files to the zip file.
			if ( ! $same_files ) :
				//console_log( "The zip files aren't extacly the same, let's create a new zip file!" );
				// Create a new zip file and add the new images to it.
				$zip->open( $destination, ZipArchive::CREATE | ZipArchive::OVERWRITE );
				for ( $i = 0; $i < $file_count; $i++ ) :
					if ( file_exists( $files[ $i ] ) ) :
						$new_filename = basename( $files[ $i ] );
						$zip->addFile( $files[ $i ], $new_filename );
					endif;
				endfor;
			//else :
				//console_log( "The zip files are extacly the same!" );
			endif;
		else :
			//console_log( "The zip file do not have the same number of files, lets create new one?" );
			$zip->open( $destination, ZipArchive::CREATE | ZipArchive::OVERWRITE );
			for ( $i = 0; $i < $file_count; $i++ ) :
				if ( file_exists( $files[ $i ] ) ) :
					$new_filename = basename( $files[ $i ] );
					$zip->addFile( $files[ $i ], $new_filename );
				endif;
			endfor;

		endif;

		// Close the existing zip file.
		$zip->close();
	endif;

	//console_log( "Let's give the download link" );
	// Offer the zip file for download.
	$download_url   = esc_url( home_url( '/' ) ) . $destination;
	$download_nonce = wp_create_nonce( 'dzf' );
	$download_link  = add_query_arg( 'dzf', $download_nonce, $download_url );

	echo '<a href="' . esc_url( $download_link ) . '" class="main-btn main-btn__red download-link" download><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z"/></svg>' . esc_html__( $download_btn_text, 'shs-a' ) . '</a>';
	clearstatcache();

}
