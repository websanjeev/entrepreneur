<?php

function set_content_type( $contentType )
{
    header( 'Content-Type: ' . $contentType );
}

function set_http_status( $status )
{
    header( 'HTTP/1.0 ' . $status );
}