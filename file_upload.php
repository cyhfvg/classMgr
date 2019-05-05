<?php
include("identify.php");
require(dirname(__FILE__).'/template/header.php');
require_once(dirname(__FILE__).'/template/nav.php');
?>
<div class='container'>
    <div class='row' style="margin-top:15%">
        <div class='col'></div>
        <div class='col'>
            <form class="form-group" action='file_upload_.php' method='post' enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">选择文件</span>
                    </div>
                    <input type='file' class="form-control" name='file'>
                </div>

                <div class="btn-group row">
                    <div class="col">
                        <input type="reset" class="btn" value="重置">
                    </div>
                    <div class="col">
                        <input type="submit" class="btn btn-primary" value="提交">
                    </div>
                    <div class="col">
                        <a type="button" href='register.php' class="btn btn-link">注册</a>
                    </div>
                </div>
            </form>
        </div>
        <div class='col'></div>
    </div>
</div>
<?php
require(dirname(__FILE__).'/template/footer.php');
?>
