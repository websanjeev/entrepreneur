<?php

function get_server_protocol(){
    return $_SERVER['SERVER_PROTOCOL'];
}

function get_host(){
    return $_SERVER['HTTP_HOST'];
}

function get_request_uri(){
    return $_SERVER['REQUEST_URI'];
}

function get_script_name(){
    return $_SERVER['SCRIPT_NAME'];
}

function get_base_uri(){
    $script_name = get_script_name();
    $index_pos = strpos($script_name, 'index.php');
    if($index_pos === false)
        throw new Exception('Error at base uri');

    return str_replace('index.php', '', $script_name);
}

function get_request_page_path($append_to = ''){

    $base_uri = get_base_uri();
    $base_uri = rtrim($base_uri, '/');
    $request_uri = get_request_uri();
    if(!empty($base_uri)){
        $base_uri_pos = strpos($request_uri, $base_uri);
    }else{
        $base_uri_pos = false;
    }
    if($base_uri_pos !== false){
        $page_path = str_replace($base_uri, '', $request_uri);
    }else{
        $page_path = $request_uri;
    }
    $page_path = ltrim($page_path, '/');
    if(empty($page_path))
        return false;
    $page_path = str_replace('/', DIRECTORY_SEPARATOR, $page_path);
    return rtrim($append_to, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $page_path . '.php';
}

function abort_404(){

    $page404_path = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . '404.php';
    if(file_exists($page404_path)) {
        require_once($page404_path);
        exit;
    }else{
        die('Page not found!');
    }
}