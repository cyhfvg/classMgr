<?php
require_once(dirname(__FILE__).'/identify.php');
require_once(dirname(__FILE__).'/util/util_mysqli.php');
require_once(dirname(__FILE__).'/util/util_url.php');
require_once(dirname(__FILE__).'/util/util_curl.php');
$stu_password_ = $_POST['stu_password'];
$stu_password;
$new_password = $_POST['new_password'];
$stu_id = $_SESSION['stu_id'];

$conn = getMysqlConnection();
$sql = "select stu_password from tb_stu where stu_id='$stu_id';";
$result = query_sql($conn, $sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $stu_password = $row['stu_password'];
}

$post_data = array();
//修改密码
if ($stu_password == $stu_password_) {
    $sql = "update tb_stu set stu_password='$new_password' where stu_id='$stu_id';";
    query_sql($conn, $sql);
    $post_data['login_info'] = "密码修改成功，重新登录";
} else {
    $post_data['login_info'] = "密码验证错误，重新登录";
}
$conn->close();
//无论密码是否都修改成功，移除身份，重新登录
unset($_SESSION['stu_id']);
unset($_SESSION['stu_name']);
$url = get_pre_url().'/login.php';
echo do_form_req($url, $post_data)
?>