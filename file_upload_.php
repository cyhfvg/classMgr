<?php
require(dirname(__FILE__).'/identify.php');
$stu_id = $_SESSION['stu_id'];

if ($_FILES['file']['error'] > 0) {
    echo "错误:".$_FILES['file']['error'].'<br/>';
} else {

        //个人目录不存在，则新建
        if(!file_exists('upload/'."$stu_id")) {
            mkdir(dirname(__FILE__)."/upload/$stu_id");
        }
        move_uploaded_file($_FILES['file']['tmp_name'],'upload/'."$stu_id/".$_FILES['file']['name']);
}
header("location:file_view.php");
?>