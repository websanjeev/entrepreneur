<?php

function get_partial( $path, $data = [], $output = true ){

    extract( $data );

    $path = trim($path, DIRECTORY_SEPARATOR);
    $path = rtrim($path , '.php');

    if( !$output ){
        ob_start();
    }

    include(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . $path . '.php');

    if( !$output ){
        $content = ob_get_contents();
        ob_clean();
        return $content;
    }

}