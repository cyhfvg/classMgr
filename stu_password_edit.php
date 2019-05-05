<?php
include("identify.php");
require_once(dirname(__FILE__).'/template/header.php');
require_once(dirname(__FILE__).'/template/nav.php');
require_once(dirname(__FILE__).'/util/util_curl.php');
require_once(dirname(__FILE__).'/util/util_url.php');
?>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="stu_password_edit_.php" method="POST">
                <div class="form-group">
                <label for="origin_password">原密码</label>
                <input type="text" name="stu_password" id="origin_password" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                <label for="new_password">新密码</label>
                <input type="text" name="new_password" id="new_password" class="form-control" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">提交</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
<?php
include(dirname(__FILE__).'/template/footer.php');
?>
