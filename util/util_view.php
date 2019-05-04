<?php
function show_html_out(array $html_out,$cur_page,$url) {
    $table_h = <<<EOF
    <div class=".container">
    <table class="table table-striped">
        <thead>    
EOF;

    echo $table_h;
    //intval 取整
    $page_num = count($html_out)%10==0?count($html_out)/10:(intval(count($html_out)/10))+1;
    //输出表头 thead
    echo "<tr>";
     foreach($html_out[0] as $k=>$v) {
         if ($k != "stu_password") {
            echo "<td>".$k."</td>";
         }
    }
    echo "</tr>";
    echo "</thead><tbody>";
    $print_array = array(); 
    //最后一页
    if((int)($cur_page+1) == (int)$page_num) {
        $print_array = array_slice($html_out,$cur_page*10,true);
    } else {
        $print_array = array_slice($html_out,$cur_page*10,10,true);
    }
    //输出表体 tbody
    echo "<tr>";
    foreach($print_array as $k=>$v) {
            foreach($v as $k_in=>$v_in) {
                if($k_in != "stu_password") {
                    echo "<td>".$v_in."</td>";
                }
        }

    }
    echo "</tr>";

    $table_t = <<<EOF
    </tbody>
    </table>
    </div>

EOF;

    echo $table_t;

    //输出分页
    echo "<div class='container' style='width:auto;margin-bottom:0'><ul class='pagination'>";
    for($i=0;$i<$page_num;$i++) {
        if($i==$cur_page) {
            echo "<li class='page-item disabled' style='margin:0'><a class='page-link' href='".$url."?stu_cur_page=".$i."'>".$i."</li>";
        } else {
            echo "<li class='page-item' style='margin:0'><a class='page-link' href='".$url."?stu_cur_page=".$i."'>".$i."</li>";
        }
    }
    echo "</ul></div>";
}
?>