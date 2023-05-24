<?php

$files	= scandir( 'images' );
$images	= array_values(
	array_filter( $files, function( $f ){
		return ( is_file( "images/$f" ) && preg_match( '/^.*\.(png|jpg|jpeg|gif|webp|avif|svg)$/i', $f ) );
	} )
);

