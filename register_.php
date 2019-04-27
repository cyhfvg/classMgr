<?php
include_once(dirname(__FILE__)."/util/util_url.php");
include_once(dirname(__FILE__)."/util/util_curl.php");

$user_name = $_POST["username"];
$user_password = $_POST["user_password"];
$user_password_ = $_POST["user_password_"];
$user_age = $_POST["user_age"];
$user_sex = $_POST["user_sex"];

if ($user_password != $user_password_) {
    $url = get_pre_url()."/register.php";
    $post_data = array (
        "register_info" => "两次密码不一致",
    );
    echo do_form_req($url, $post_data);
} else {
    //创建用户信息，存入数据库
    include_once(dirname(__FILE__)."/util/util_mysqli.php");

    $conn = getMysqlConnection();
    $sql = "insert into User (user_name,user_password,user_sex,user_age)
    values ('$user_name',$user_password, '$user_sex',$user_age);";

    $result = insert_sql($conn,$sql);
    $conn->close();

    if ($result === TRUE) {
        $url= get_pre_url()."/login.php";
        $post_data = array (
            "login_info" => "注册成功,请尝试登录"
        );
        echo do_form_req($url, $post_data);
    } else {
        $url= get_pre_url()."/register.php";
        $post_data = array (
            "register_info" => "未知原因，注册失败，请重新尝试!!!"
        );
        echo do_form_req($url, $post_data);
    }
}
?>