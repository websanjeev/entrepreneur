<?php

function set_active( $value, $match, $class = 'active' ) {

    if( $value == $match ) {
        return $class;
    }else {
        return '';
    }

}