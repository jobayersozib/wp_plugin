<?php
/*
Plugin Name: capitalize-title
Description:Capitalize post title
Version:     0.0.1
Author:     jobayersozib

*/
function capitalize_title( $title, $id=null ) {

    $my_title=ucwords(strtolower($title)); 
    return $my_title;
}
add_filter( 'the_title', 'capitalize_title');