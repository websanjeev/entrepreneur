<?php

function get_input( $name, $data = null )
{
    if( $data != null ){
        if( isset( $data[ $name ] ) )
        {
            return $data[ $name ];
        }
        return '';
    }
    if( isset( $_POST[ $name ] ) )
    {
        return $_POST[ $name ];
    }
    if( isset( $_GET[ $name ] ) )
    {
        return $_GET[ $name ];
    }
    return '';
}