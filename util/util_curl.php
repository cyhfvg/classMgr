<?php
/**
 * 通过使用curl模块，模拟post方式跳转页面，
 * 并可以传输参数数据。
 * 此函数跳转之后，url地址并不变化
 * @param string $url 跳转至url
 * @param array $post_data 需要post传输的数据
 * @return mixed $response 执行post请求后，获得的回复
 * 
 */
function doCurlPostReq($url, array $post_data) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    //设置请求为post类型
    curl_setopt($ch, CURLOPT_POST, 1);
    //添加post数据到请求中
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

    //执行post请求，获得回复
    $response = curl_exec($ch);
    curl_close($ch);
    echo $response;
    return $response;
}

/**
 * 通过使用curl模块提供，模拟get方式进行跳转
 * !方法有问题 不要使用
 * @param string $url 跳转至url
 * @param mixed $data get方式携带的参数值对
 * @return mixed $response 执行get请求后，获得的回复
 */
function doCurlGetReq($url, $data) {
    if (empty($data))
        $url = $url;
    else
        $url = $url . '?' . http_build_query($data);
    $con = curl_init($url);
    curl_setopt($con, CURLOPT_HEADER, false);
    curl_setopt($con, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($con);
    curl_close($con);
    return $response;
}

/**
 * 通过建立一个html表单元素进行数据提交，post/get
 * @param string $url 提交至url
 * @param array $data 提交的参数数组
 * @param string $method 提交的方式 post/get 默认post
 * @return string 提交表单的HTML文本
 */
function do_form_req($url, $data, $method = 'POST') {
    $sHtml = "<form id='requestForm' name='requestForm' action='".$url."' method='".$method."'>";
    // 将参数信息 写入input中 name=key，value=value
    while (list ($key, $val) = each ($data)) {
        $sHtml.="<input type='hidden' name='".$key."' value='".$val."' />";
    }
    //写一个提交按钮
    $sHtml = $sHtml."<input type='submit' value='确定' style='display:none;'></form>";
    //写一个script 自动提交表单
    // $sHtml = $sHtml."<script>document.forms['requestForm'].submit();</script>";
    $sHtml = $sHtml."<script>document.getElementById('requestForm').submit();</script>";
    return $sHtml;
}
?>