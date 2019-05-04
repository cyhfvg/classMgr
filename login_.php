<?php
/**
 * 此页面用来提供用户登录，逻辑判断功能
 * 接收login页面提交的数据，
 * 查询数据库，若能够验证登录身份，跳转至home页面，
 * 若不能狗验证登录身份，回到login页面，显示交互信息
 */
require_once(dirname(__FILE__)."/util/util_curl.php");
require_once(dirname(__FILE__)."/util/util_mysqli.php");
require_once(dirname(__FILE__)."/util/util_url.php");

$user_name = $_POST["user_name"];
$user_password = $_POST["password"];

//获取mysql连接
$conn = getMysqlConnection();
$sql = "select * from User where user_name='$user_name' and user_password='$user_password';";

$result = query_sql($conn, $sql);
if ($result->num_rows > 0) {
    // 查询用户，用户存在 输出数据
    $row = $result->fetch_assoc();
    //关闭数据库连接
    $conn->close();

    //开启session功能
    session_start();
    //登录成功创建session身份
    $_SESSION["user_name"] = $row["user_name"];

    $url = get_pre_url()."/home.php";

    $post_data = array(
        "success"=>"success"
    );

    //页面跳转
    echo do_form_req($url, $post_data);
} else {
    //用户不存在 等交互
    $url = get_pre_url()."/login.php";
    $post_data = array(
        "login_info"=>"用户不存在，或密码错误，请重新登录!"
    );
    $result = do_form_req($url, $post_data);
    echo $result;
}
?>