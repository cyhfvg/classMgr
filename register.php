<?php
require(dirname(__FILE__).'/template/header.php');
?>
<div class="container">
    <!-- 交互信息显示区域 -->
    <?php
    if (empty($_POST['register_info'])) {
        $div_class = 'alert alert-info';
        $div_show_msg = '请输入注册信息';
        $html_out = '<div class="'.$div_class.' text-center"><strong>'.$div_show_msg.'</strong></div>';
        echo $html_out;
    } else {
        $div_class = 'alert alert-danger';
        $div_show_msg = $_POST['register_info'];
        $html_out = '<div class="'.$div_class.' text-center"><strong>'.$div_show_msg.'</strong></div>';
        echo $html_out;
    }   
    ?>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form class="form-group" action="register_.php" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">学号</span>
                    </div>
                    <input type="text" class="form-control" name="stu_id" require="true">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">姓名</span>
                    </div>
                    <input type="text" class="form-control" name="stu_name">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">密码</span>
                    </div>
                    <input type="password" class="form-control" name="stu_password" require="true">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">确认密码</span>
                    </div>
                    <input type="text" class="form-control" name="stu_password_" require="true">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">联系电话</span>
                    </div>
                    <input type="text" class="form-control" name="stu_phone">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">电子邮箱</span>
                    </div>
                    <input type="text" class="form-control" name="stu_email">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">性别</span>
                    </div>
                    <div class="form-control">
                        <label class="radio-inline"><input type="radio" name="stu_sex" value="男" checked="checked">男 </label>
                        <label class="radio-inline"><input type="radio" name="stu_sex" value="女">女 </label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">职务</span>
                    </div>
                    <div class="form-control">
                        <label class="radio-inline"><input type="radio" name="stu_job" value="学生" checked="checked">学生</label>
                        <label class="radio-inline"><input type="radio" name="stu_job" value="班长">班长</label>
                        <label class="radio-inline"><input type="radio" name="stu_job" value="团支书">团支书</label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">班级编号</span>
                    </div>
                    <input type="text" class="form-control" name="class_id">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">通信地址</span>
                    </div>
                    <input type="text" class="form-control" name="stu_address">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">年龄</span>
                    </div>
                    <input type="text" class="form-control" name="stu_age">
                </div>
                <div class="btn-group row">
                    <div class="col">
                        <input type="reset" class="btn" value="重置">
                    </div> 
                    <div class="col">
                        <input type="submit" class="btn btn-primary" value="提交">
                    </div>
                    <div class="col">
                        <a type="button" class="btn btn-link" href="login.php">登录</a>
                    </div>
                </div>
           </form> 
        </div>
        <div class="col"></div>
    </div>
</div>
<?php
require(dirname(__FILE__).'/template/footer.php');
?>