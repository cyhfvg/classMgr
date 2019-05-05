<?php
require_once(dirname(__FILE__).'/identify.php');
require(dirname(__FILE__).'/template/header.php');
?>
<div class='container'>
    <!-- 交互信息显示区域 -->
    <?php
    if (empty($_POST['delete_aty_info'])) {
        $div_class = 'alert alert-info';
        $div_show_msg = '请输入活动编号以删除';
        $html_out = '<div class="'.$div_class.' text-center"><strong>'.$div_show_msg.'</strong></div>';
        echo $html_out;
    } else {
        $div_class = 'alert alert-danger';
        $div_show_msg = $_POST['delete_aty_info'];
        $html_out = '<div class="'.$div_class.' text-center"><strong>'.$div_show_msg.'</strong></div>';
        echo $html_out;
    }   
    ?>

    <div class='row' style="margin-top:15%">
        <div class='col'></div>
        <div class='col'>
            <form class="form-group" action='aty_delete_.php' method='post'>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">活动编号</span>
                    </div>
                    <input type='text' class="form-control" name='aty_id'>
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
