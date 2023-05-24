<?php

$files = scandir( 'images' );

echo '<pre>' . print_r( $files, 1 ) . '</pre>';

