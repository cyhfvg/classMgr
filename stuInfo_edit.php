<?php
include("identify.php");
require_once(dirname(__FILE__).'/template/header.php');
require_once(dirname(__FILE__).'/template/nav.php');
require_once(dirname(__FILE__).'/util/util_curl.php');
require_once(dirname(__FILE__).'/util/util_url.php');
require_once(dirname(__FILE__).'/util/util_edit.php');
require_once(dirname(__FILE__).'/util/util_mysqli.php');
?>
<div class="container">
<?php
$stu_id = $_SESSION['stu_id'];
$conn = getMysqlConnection();
$sql = "select * from tb_stu where stu_id='$stu_id';";
$result = query_sql($conn, $sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $conn->close();
    show_info_edit($row, 'stuInfo_edit_.php');
}
?>
</div>
<?php
include(dirname(__FILE__).'/template/footer.php');
?>
