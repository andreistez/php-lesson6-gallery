<?php

require_once 'model/gallery.php';

$isSent	= false;
$err	= '';

if( $_SERVER['REQUEST_METHOD'] === 'POST' ){
	$image = $_FILES['image'] ?? null;

	if( ! $image || ! $image['name'] ){
		$err = 'Image was not sent.';
	}	else if( ! $image['size'] ){
		$err = 'File is too large or incorrect.';
	}	else if( ! checkImageExtension( $image['name'] ) ){
		$err = 'Extension not allowed.';
	}	else{
		$ext		= getFileExtension( $image['name'] );
		$tmp_name	= time() . '_' . mt_rand( 1, 100000000 ) . '_' . mt_rand( 1, 100000000 ) . ".$ext";
		copy( $image['tmp_name'], "images/$tmp_name" );
		$isSent = true;
	}
}

if( $isSent ){
	echo '<h2>Thank you! We will back to you as soon as possible.</h2>';
}	else{
	?>
	<form method="post" enctype="multipart/form-data">
		<fieldset>
			<label for="image">
				<input type="file" name="image" id="image" />
			</label>
		</fieldset>

		<button>Upload</button>
	</form>

	<?php
	echo $err;
}

