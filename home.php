<?php
include("identify.php");
require_once(dirname(__FILE__).'/template/header.php');
require_once(dirname(__FILE__).'/template/nav.php');
require_once(dirname(__FILE__).'/util/util_curl.php');
require_once(dirname(__FILE__).'/util/util_url.php');
?>
<div class="container">
<?php
if (isset($_GET['stu_cur_page'])) {
    include_once(dirname(__FILE__).'/stuInfo_view.php');
} else {
    $url = get_pre_url().'/stuInfo_view.php';
    $get_data = array(
        "stu_cur_page"=>"0"
    );
    echo do_form_req($url,$get_data,'GET');

}
?>
</div>
<?php
include(dirname(__FILE__).'/template/footer.php');
?>