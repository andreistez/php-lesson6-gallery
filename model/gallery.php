<?php

function checkImageExtension( string $file_name ): bool
{
	if( ! $file_name ) return false;

	return !! preg_match( '/^.*\.(png|jpg|jpeg|gif|webp|avif|svg)$/i', $file_name );
}

function getFileExtension( string $file_name ): ?string
{
	if( ! $file_name ) return null;

	$parts = explode( '.', $file_name );

	return end( $parts );
}

function getFileNameWithoutExtension( string $file_name ): ?string
{
	if( ! $file_name ) return null;

	return preg_replace( '/\.[^.]+$/', '', $file_name );
}

