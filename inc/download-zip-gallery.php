<?php

function formatSizeUnits( $bytes ) {
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
}

// Check the gallery field (created with ACF PRO) for images
function shs_download_files( $field_name ) {

	$field_type = get_field( $field_name );

	$zip_file_section_name = 'media';

	if ( 'logos_images' === $field_name ) :
		$zip_file_section_name = 'shs-media-logos';
	elseif ( 'photos' === $field_name ) :
		$zip_file_section_name = 'shs-media-photos';
	elseif ( 'press_article_file' === $field_name ) :
		$zip_file_section_name = 'shs-media-press';
	endif;

	if ( $field_type ) :

		// Create variable for download file
		$destination = 'downloads/' . $zip_file_section_name . '.zip';
		//$zip = new ZipArchive( $destination, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE );

		if ( file_exists( $destination ) ) :
			$zip = new ZipArchive();
			$zip->open( $destination );
			$ria_num_zip_files = $zip->numFiles;

			$files = array();
			foreach ( $field_type as $item ) :
				// create an array of the image files in the gallery
				$files[] = get_attached_file( $item );
			endforeach;

			$ria_new_gallery_images = count( $files );

			if ( $ria_num_zip_files != $ria_new_gallery_images ) :
				unlink( $destination );
				$zip->open( $destination, ZipArchive::CREATE | ZIPARCHIVE::OVERWRITE );
				foreach ( $files as $file ) :
					// for every file in the array
					if ( file_exists( $file ) ) :
						// if the file actually exists, add it to the zip file
						$new_filename = substr( $file, strrpos( $file, '/' ) + 1 );
						$zip->addFile( $file, $new_filename );
					endif;
				endforeach;
				// Once you've got all the files, close out the zip
				$zip->close();
			endif;

			echo '<a href="' . esc_url( home_url( '/' ) ) . $destination . '" class="main-btn main-btn__red download-link" download>' . esc_html__( 'Alle Logos herunterladen', 'shs-a' ) . '</a>';

			clearstatcache();
			$rai_zip_fileize = filesize( realpath( $destination ) );
	
			echo '<p>Size: ' . esc_html( formatSizeUnits( $rai_zip_fileize ) ) . '</p>';
		else :
			// If the file doesn't already exist, create the file
			$files = array();
			foreach ( $field_type as $item ) :
				// create an array of the image files in the gallery
				$files[] = get_attached_file( $item );
			endforeach;

			if ( count( $files ) ) :
				// Check if there are files in the array (files exist)
				// If there are files, create a zip file in the location specified
				$zip = new ZipArchive();
				$zip->open( $destination, ZipArchive::CREATE );

				foreach ( $files as $file ) :
					// for every file in the array
					if ( file_exists( $file ) ) :
						// if the file actually exists, add it to the zip file
						$new_filename = substr( $file, strrpos( $file, '/' ) + 1 );
						$zip->addFile( $file, $new_filename );
					endif;
				endforeach;

				// Once you've got all the files, close out the zip
				$zip->close();

				// Then link to the file you just created
				echo '<a href="' . esc_url( home_url( '/' ) ) . $destination . '" class="main-btn main-btn__red download-link" download>' . esc_html__( 'Alle Logos herunterladen', 'shs-a' ) . '</a>';
			endif;

		endif;
	endif;

}





// Check the gallery field (created with ACF PRO) for images
$images = get_field('logos_images');
if( $images ) :
// If it does have images:
	// Create variable for download file
	// This uses a /downloads/ directory and the page title as the file name
	$destination = 'downloads/' . sanitize_title( get_the_title() ) . '.zip';
	
	// Check if the file already exists (see tutorial for a cautionary note)
	if ( file_exists( $destination ) ) {
		// If it exists, print the download link
		echo '<a href="' . esc_url( home_url( '/' ) ) . $destination . '" class="download-link" download>DOWNLOAD ALL</a>';
	} else {
		
		// If the file doesn't already exist, create the file
		$files = array();
		foreach( $images as $singlefile ) {
			// create an array of the image files in the gallery
			$files[] = get_attached_file( $singlefile['ID'] );
		}
		
		if( count( $files ) ) {
			// Check if there are files in the array (files exist)
			// If there are files, create a zip file in the location specified
			$zip = new ZipArchive();
			$zip->open( $destination, ZipArchive::CREATE );
			
			foreach( $files as $file ) {
				// for every file in the array
				if ( file_exists($file) ) {
					// if the file actually exists, add it to the zip file
					$new_filename = substr($file,strrpos($file,'/') + 1);
					$zip->addFile( $file, $new_filename );
				}
			}
			
			// Once you've got all the files, close out the zip
			$zip->close();
			
			// Then link to the file you just created
			echo '<a href="' . esc_url( home_url( '/' ) ) . $destination . '" class="download-link" download>DOWNLOAD ALL</a>';
		} else {
			// No images are found, display an error message
			echo 'no files found';
		}
	} ?>

	<!-- Next, display the on-page gallery -->
	<div class="gallery-grid">
        <?php foreach( $images as $image ) : 
        	// For every image in the gallery, display the thumbnail linked to a larger image for a lightbox ?>
        	<a href="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" rel="gallery">
           		<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
           	</a>
        <?php endforeach; ?>
    </div><!-- / .gallery-grid -->
    
<?php else : 
// If the gallery field is empty: ?>
	
	<p>No images found.</p>
	
<?php endif; ?>