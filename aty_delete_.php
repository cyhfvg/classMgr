<?php
require_once(dirname(__FILE__).'/identify.php');
require_once(dirname(__FILE__).'/util/util_mysqli.php');
require_once(dirname(__FILE__).'/util/util_url.php');
require_once(dirname(__FILE__).'/util/util_curl.php');

$aty_id = $_POST['aty_id'];
$conn = getMysqlConnection();
$sql = "delete from tb_aty where aty_id='$aty_id';"; 
$result = query_sql($conn, $sql);
$url = get_pre_url().'/all_aty_view.php';
$get_data = array(
    "aty_cur_page"=>"0"
);
echo do_form_req($url, $get_data,'GET');
?>
