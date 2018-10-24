<?php
/**
 * @desc Created by PhpStorm.
 * @author: lhl
 * @since: 18-10-24 上午11:01
 */
function test_helper(){
    return 'OK';
}
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}