<?php

function get_csrf_token_session_name(){
    $session_name = get_config( 'session_prefix' ) . 'csrf_token';
    return $session_name;
}

function set_csrf_token(){
    $session_name = get_csrf_token_session_name();
    $_SESSION[ $session_name ] = str_random( 30 );

}

function get_csrf_token(){
    $session_name = get_csrf_token_session_name();
    return $_SESSION[ $session_name ];
}

function csrf_token(){

    set_csrf_token();
    return get_csrf_token();

}

function is_valid_csrf_token( $csrf_token ){

    $valid_csrf_token = get_csrf_token();
    return $csrf_token == $valid_csrf_token;

}

function has_valid_csrf_token_header(){

    $headers = getallheaders();
    if( isset( $headers[ 'X-Csrf-Token' ] ) )
    {
        $csrf_token = $headers[ 'X-Csrf-Token' ];
        return is_valid_csrf_token( $csrf_token );
    }
    elseif( isset( $headers[ 'X-CSRF-TOKEN' ] ) )
    {
        $csrf_token = $headers[ 'X-CSRF-TOKEN' ];
        return is_valid_csrf_token( $csrf_token );
    }

    return false;

}