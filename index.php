<?php

require_once 'model/gallery.php';

$files	= scandir( 'images' );
$images	= array_values(
	array_filter( $files, function( $f ){
		return ( is_file( "images/$f" ) && checkImageExtension( $f ) );
	} )
);
?>

<div class="gallery">
	<?php
	foreach( $images as $img ){
		?>
		<div class="gallery-item" style="width: 100px; margin-bottom: 10px">
			<img
				style="width: 100%; height: auto" src="images/<?=$img?>"
				alt="<?php echo getFileNameWithoutExtension( $img ) ?>"
			/>
		</div>
		<?php
	}
	?>
</div>

