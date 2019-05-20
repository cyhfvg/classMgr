<?php
/**
 * 获取当前url地址的去尾地址
 * @return string url
 * 
 */
function get_pre_url() {
    $uri = $_SERVER['PHP_SELF'];
    $url = explode("/", $uri);
    array_pop($url);
    return "http://".$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].implode("/", $url);
}

function get_base_url() {
    $uri = $_SERVER['REQUEST_URI'];
    $project = explode('/', $uri)[1];
    $url = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/'.$project;
    return $url;
}
?>