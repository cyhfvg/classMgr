<?php
require_once(dirname(__FILE__).'/identify.php');
require(dirname(__FILE__).'/template/header.php');
?>
<div class='container'>
    <!-- 交互信息显示区域 -->
    <?php
    if (empty($_POST['create_aty_info'])) {
        $div_class = 'alert alert-info';
        $div_show_msg = '请输入活动信息';
        $html_out = '<div class="'.$div_class.' text-center"><strong>'.$div_show_msg.'</strong></div>';
        echo $html_out;
    } else {
        $div_class = 'alert alert-danger';
        $div_show_msg = $_POST['create_aty_info'];
        $html_out = '<div class="'.$div_class.' text-center"><strong>'.$div_show_msg.'</strong></div>';
        echo $html_out;
    }   
    ?>

    <div class='row' style="margin-top:15%">
        <div class='col'></div>
        <div class='col'>
            <form class="form-group" action='aty_create_.php' method='post'>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">班级号</span>
                    </div>
                    <input type='text' class="form-control" name='class_id'>
                </div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">活动简介</span>
                    </div>
                    <input type='text' class="form-control" name='aty_des'>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">活动地址</span>
                    </div>
                    <input type='text' class="form-control" name='aty_address'>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">活动时间</span>
                    </div>
                    <input type="date" name="aty_date" class="form-control" />
                </div>

                <div class="btn-group row">
                    <div class="col">
                        <input type="reset" class="btn" value="重置">
                    </div>
                    <div class="col">
                        <input type="submit" class="btn btn-primary" value="提交">
                    </div>
                </div>
            </form>
        </div>
        <div class='col'></div>
    </div>
</div>
>
<?php
require(dirname(__FILE__).'/template/footer.php');
?>
