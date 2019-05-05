<?php
require_once(dirname(__FILE__).'/identify.php');
require_once(dirname(__FILE__).'/util/util_view.php');
require_once(dirname(__FILE__).'/util/util_mysqli.php');
require_once(dirname(__FILE__).'/util/util_url.php');
require_once(dirname(__FILE__).'/template/header.php');
require_once(dirname(__FILE__).'/template/nav.php');

$conn = getMysqlConnection();

$sql = "select * from tb_aty;";
$result = query_sql($conn, $sql);
if ($result->num_rows > 0) {
    $html_out = array();
    while($row = $result->fetch_assoc()) {
        array_push($html_out,$row);
    }
    $url = get_pre_url().'/all_aty_view.php?aty_cur_page=';
    //进行数据输出
    show_html_out($html_out,$_GET["aty_cur_page"],$url);
    unset($_GET['aty_cur_page']);
} else {
    echo "0 结果";
} 
 $conn->close();
?>
 
