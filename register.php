<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
            <?php
                if(empty($_POST["register_info"]))
                ;else {
                    $msg = $_POST["register_info"];
                    echo "<div><h1 style='color:red' align='center'>$msg</h1></div>";
                }
            ?>
   <form action="register_.php" method="post">
        <table>
            <tr>
                <td><h1>注册</h1></td>
                <td></td>
            </tr>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input type="password" name="user_password"></td>
            </tr>
            <tr>
                <td>确认密码</td>
                <td><input type="password" name="user_password_"></td>
            </tr>
            
            <tr>
                <td>年龄</td>
                <td><input type="text" name="user_age"></td>
            </tr>
            <tr>
                <td>性别</td>
                <td>
                    <input type="radio" name="user_sex" value="男" checked="checked">男
                    <input type="radio" name="user_sex" value="女">女
                </td>
            </tr>
            <tr>
                <td><input type="reset" value="重置"></td>
                <td><input type="submit" value="提交"></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="login.php">登录</a></td>
            </tr>
        </table>
   </form> 
</body>

</html>