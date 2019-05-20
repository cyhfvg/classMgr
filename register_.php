<?php
include_once(dirname(__FILE__)."/util/util_url.php");
include_once(dirname(__FILE__)."/util/util_curl.php");

$stu_id = $_POST["stu_id"];
$stu_name = $_POST["stu_name"];
$stu_password = $_POST["stu_password"];
$stu_password_ = $_POST["stu_password_"];
$stu_phone = $_POST["stu_phone"];
$stu_email = $_POST["stu_email"];
$stu_sex = $_POST["stu_sex"];
$stu_job = $_POST["stu_job"];
$class_id = $_POST["class_id"];
$stu_address = $_POST["stu_address"];
$stu_age = $_POST["stu_age"];

if ($stu_password != $stu_password_) {
    $url = get_pre_url()."/register.php";
    $post_data = array (
        "register_info" => "两次密码不一致",
    );
    echo do_form_req($url, $post_data);
} else {
    include_once(dirname(__FILE__)."/model/StudentInfo.php");

    // $student = new StudentInfo();
    // $student.set_stu_id($_POST["stu_id"])
    // .set_class_id($_POST["class_id"])
    // .set_stu_name($_POST["stu_name"])
    // .set_stu_sex($_POST["stu_sex"])
    // .set_stu_age($_POST["stu_age"])
    // .set_stu_phone($_POST["stu_phone"])
    // .set_stu_password($_POST["stu_password"])
    // .set_stu_email($_POST["stu_email"])
    // .set_stu_job($_POST["stu_job"])
    // .set_stu_address($_POST["stu_address"]);

    //创建用户信息，存入数据库
    include_once(dirname(__FILE__)."/util/util_mysqli.php");

    $conn = getMysqlConnection();
    $sql = "insert into tb_stu(stu_id,stu_email,stu_phone,stu_name,stu_sex,stu_age,stu_password,stu_job,stu_address,class_id)
    values ('$stu_id','$stu_email', '$stu_phone','$stu_name','$stu_sex',$stu_age,'$stu_password','$stu_job','$stu_address','$class_id');";

    $result = insert_sql($conn,$sql);
    echo $result;
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
        // echo do_form_req($url, $post_data);
    }
}
?>