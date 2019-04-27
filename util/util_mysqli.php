<?php

/**
 * 对指定mysql连接，执行sql(功能)语句
 * @param object $conn mysql连接对象
 * @param string $sql 需要执行的sql语句
 * @return bool 返回其他操作的true/false
 */
function insert_sql($conn, $sql) {
    $result = $conn->query($sql);
    if ($result === TRUE) {
    //    echo "新记录插入成功";
    } else {
        echo "Error:" . $sql . "<br/>" . $conn->error;
    }
    return $result;
}

/**
 * 对指定mysql连接，执行sql(查询)语句
 * @param object $conn mysql连接对象
 * @param string $sql 需要执行的sql语句
 * @return object 查询信息的结果object
 */
function query_sql($conn, $sql) {
    $result =$conn->query($sql);
    return $result;
}

/**
 *提供参数，获取指定的mysql数据库的一个连接
 * @param string $server_name 数据库服务器地址
 * @param string $user_name 数据库用户名
 * @param string $password 数据库用户名对应密码
 * @param string $db_name 数据库的名字
 * @param string $port 数据库监听端口
 * @return object $conn mysql连接对象
 * 
 */
function getMysqlConn($server_name, $username, $password, $dbname, $port) {
    $conn = mysqli_connect($server_name, $username, $password, $dbname, $port);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        mysqli_set_charset($conn, 'utf8');
        // echo "链接成功";
    }
    return $conn;
}

/**
 * 从配置文件中，获取指定的mysql数据库的一个连接
 * 配置文件位于[Project_Site]/config/mysql_info.php
 * @return object $conn mysql连接对象
 */
function getMysqlConnection() {
    include_once(dirname(__FILE__)."/../config/mysql_info.php");

    $mysql_info = new Mysql_info();

    $server_name = $mysql_info->db_server_name;
    $user_name = $mysql_info->db_user_name;
    $password = $mysql_info->db_password;
    $db_name = $mysql_info->db_name;
    $port = $mysql_info->port;

    $conn = getMysqlConn($server_name, $user_name, $password, $db_name, $port);
    return $conn;
}
?>