<?php

function get_partial( $path, $data = [] ){

    extract( $data );

    $path = trim($path, DIRECTORY_SEPARATOR);
    $path = rtrim($path , '.php');
    include(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . $path . '.php');

}