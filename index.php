<?php

$files	= scandir( 'images' );
$images	= array_values(
	array_filter( $files, function( $f ){
		return ( is_file( "images/$f" ) && preg_match( '/^.*\.(png|jpg|jpeg|gif|webp|avif|svg)$/i', $f ) );
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
				alt="<?php echo preg_replace( '/\.[^.]+$/', '', $img ) ?>"
			/>
		</div>
		<?php
	}
	?>
</div>

