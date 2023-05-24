<?php

$files	= scandir( 'images' );
$images	= [];

foreach( $files as $f ){
	if( is_file( "images/$f" ) && preg_match( '/^.*\.(png|jpg|jpeg|gif|webp|avif|svg)$/i', $f ) ) $images[] = $f;
}

echo '<pre>' . print_r( $images, 1 ) . '</pre>';

