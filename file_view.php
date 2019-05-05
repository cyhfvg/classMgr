<?php
require_once(dirname(__FILE__).'/identify.php');
require_once(dirname(__FILE__).'/template/header.php');
require_once(dirname(__FILE__).'/template/nav.php');
require_once(dirname(__FILE__).'/util/util_url.php');
?>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <table class="table">
<?php
$stu_id = $_SESSION['stu_id'];
$dir = dirname(__FILE__)."/upload"."/$stu_id";
if (file_exists($dir)) {
    $url = get_pre_url();
    if($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if($file != "." && $file != "..") {
                $url = $url."/upload"."/$stu_id"."/$file";
                echo "
                <tr>
                    <td><a href='$url'>$file</a></td>
                </tr>
                ";
            }
        }
    }
}
?>
            </table>
        </div>
        <div class="col"></div>
    </div>
</div>

<?php
include_once(dirname(__FILE__).'/template/footer.php');
?>
