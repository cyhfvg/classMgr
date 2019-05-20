<?php
require_once(dirname(__FILE__).'/identify.php');
require_once(dirname(__FILE__).'/util/util_mysqli.php');
require_once(dirname(__FILE__).'/util/util_url.php');
require_once(dirname(__FILE__).'/util/util_curl.php');
$class_id = $_POST['class_id'];
$aty_des = $_POST['aty_des'];
$aty_address = $_POST['aty_address'];
$aty_date = $_POST['aty_date'];

$conn = getMysqlConnection();
$sql = "insert into tb_aty (class_id,aty_des,aty_address,aty_date)
values('$class_id','$aty_des','$aty_address','$aty_date');"; 
$result = query_sql($conn, $sql);
$url = get_pre_url().'/aty_create.php';
$get_data = array(
    "class_aty_cur_page"=>"0"
);
echo do_form_req($url, $get_data,'GET');
?>
