<?php
include("identify.php");
require_once(dirname(__FILE__).'/util/util_url.php');
require_once(dirname(__FILE__).'/util/util_curl.php');
require_once(dirname(__FILE__).'/util/util_mysqli.php');

$stu_id = $_POST['stu_id'];
$stu_name = $_POST['stu_name'];
$stu_sex = $_POST['stu_sex'];
$stu_age = $_POST['stu_age'];
$stu_phone = $_POST['stu_phone'];
$stu_email = $_POST['stu_email'];
$stu_job = $_POST['stu_job'];
$stu_address = $_POST['stu_address'];

$conn = getMysqlConnection();
$sql = "update tb_stu set 
stu_id='$stu_id',
stu_name='$stu_name',
stu_sex='$stu_sex',
stu_age='$stu_age',
stu_phone='$stu_phone',
stu_email='$stu_email',
stu_job='$stu_job',
stu_address='$stu_address' 
where stu_id='$stu_id';";
$result = query_sql($conn, $sql);
$conn->close();


$url = get_pre_url().'/stuInfo_view.php';
$get_data = array(
    "stu_cur_page"=>"0"
);
echo do_form_req($url,$get_data,'GET');


;
?>