<?php
/**
 * 此页面用来提供身份验证功能。
 * 若未登录用户，通过url直接访问指定目录，不予通过
 */
session_start();
require_once(dirname(__FILE__)."/util/util_url.php");
require_once(dirname(__FILE__)."/util/util_curl.php");
if (!isset($_SESSION['stu_id']) || !isset($_SESSION["stu_name"])) {
    $url = get_pre_url()."/login.php";
    $post_data = array(
        "login_info"=>"无权访问请求页面，请登录!!!"
    );
    echo do_form_req($url, $post_data);
}
?>