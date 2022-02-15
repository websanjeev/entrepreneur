<?php

function get_config( $key = '' ) {

    $configs = include( APP_PATH . DIRECTORY_SEPARATOR . 'config.php' );
    if( empty( $key ) ) {
        return $configs;
    }else {
        return $configs[ $key ];
    }

}