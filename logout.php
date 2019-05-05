<?php
require(dirname(__FILE__).'/identify.php');
unset($_SESSION['stu_id']);
unset($_SESSION['stu_name']);
header("location:login.php");
?>