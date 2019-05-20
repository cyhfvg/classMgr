<?php
require_once(dirname(__FILE__).'/identify.php');
require(dirname(__FILE__).'/template/header.php');

?>
<div class='container'>
    <!-- 交互信息显示区域 -->
    <?php
    if (empty($_POST['create_class_info'])) {
        $div_class = 'alert alert-info';
        $div_show_msg = '请输入班级信息';
        $html_out = '<div class="'.$div_class.' text-center"><strong>'.$div_show_msg.'</strong></div>';
        echo $html_out;
    } else {
        $div_class = 'alert alert-danger';
        $div_show_msg = $_POST['create_class_info'];
        $html_out = '<div class="'.$div_class.' text-center"><strong>'.$div_show_msg.'</strong></div>';
        echo $html_out;
    }   
    // * admin页面处理
    if (!empty($_POST['class_id_create']) 
        && !empty($_POST['class_name_create'])) {
            $class_id = $_POST['class_id_create'];
            $class_name = $_POST['class_name_create'];

            include_once(dirname(__FILE__).'/util/util_mysqli.php');
            include_once(dirname(__FILE__).'/util/util_url.php');
            include_once(dirname(__FILE__).'/util/util_curl.php');

            $conn = getMysqlConnection();
            $sql = "insert into tb_class (class_id, class_name)
            values('$class_id', '$class_name');";
            $result = query_sql($conn, $sql);
            $url = get_pre_url().'/class_create.php';
            $post_data = array(
                "create_class_info" => "班级创建成功"
            );
            echo do_form_req($url, $post_data, 'POST');
        }
    ?>

    <div class='row' style="margin-top:15%">
        <div class='col'></div>
        <div class='col'>
            <form class="form-group" action='#' method='post'>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">班级号</span>
                    </div>
                    <input type='text' class="form-control" name='class_id_create'>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">班级名称</span>
                    </div>
                    <input type='text' class="form-control" name='class_name_create'>
                </div>

                <div class="btn-group row">
                    <div class="col">
                        <input type="reset" class="btn" value="重置">
                    </div>
                    <div class="col">
                        <input type="submit" class="btn btn-primary" value="提交">
                    </div>
                    <div class="col">
                        <a type="button" class="btn btn-primary" href="all_aty_view.php?aty_cur_page=0">取消</a>
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
