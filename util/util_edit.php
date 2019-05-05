<?php
function show_info_edit(array $data,$action) {
    echo "
    <div class='row'>
        <div class='col'></div>
        <div class='col'>
            <form action='$action' method='POST'>
    ";
    foreach($data as $k=>$v) {
        if ($k != 'stu_password') {
            echo "
            <div class='input-group mb-3'>
                <div class='input-group-prepend'>
                    <span class='input-group-text'>'$k'</span>
                </div>
                <input type='text' class='form-control' name='$k' value='$v'>
            </div>
            ";
        }
    }
    echo "
                <button type='submit' class='btn btn-primary'>提交</button> 
            </form>
        </div>
        <div class='col'></div>
    </div>";
}
?>
