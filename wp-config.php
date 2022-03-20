<?php

$wpconfig = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'wp-config-local.php';
if ( !file_exists( $wpconfig ) ) $wpconfig = 'wp-config-prod.php';
include( $wpconfig );

?>