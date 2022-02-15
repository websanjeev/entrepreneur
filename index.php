<?php

(!defined('APP_PATH')) ? define( 'APP_PATH', dirname( __FILE__ ) ) : null;
(!defined('CORE_PATH')) ? define( 'CORE_PATH', APP_PATH . DIRECTORY_SEPARATOR . 'core' ) : null;

require_once('core/bootstrap.php');
require_once('core/config.php');
require_once('core/request.php');
require_once('core/header.php');
require_once('core/string.php');
require_once('core/session.php');
require_once('core/url.php');
require_once('core/menu.php');
require_once('core/partial.php');
require_once('core/mail.php');

$page_folder_path = APP_PATH . DIRECTORY_SEPARATOR . 'pages';
$page_path = get_request_page_path($page_folder_path);
if(!$page_path){
    $index_path = $page_folder_path . DIRECTORY_SEPARATOR . 'index.php';
    if(file_exists($index_path)){
        require_once($index_path);
        exit;
    }else{
        abort_404();
    }
}
else{
    if(file_exists($page_path)){
        require_once($page_path);
        exit;
    }
    else{
        abort_404();
    }
}

