<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/452826394c.js"></script>
</head>
<body>
    <div>
        <h1 style="color:red;" align="center">
            <?php
             if (empty($_POST["login_info"]))
             ;else {
                echo $_POST["login_info"];
             }
            ?>
        </h1>
    </div>
    <div>
        <form action="login_.php" method="post">
            <table>
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="user_name"></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="reset" value="重置"></td>
                    <td><input type="submit" value="提交"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a type="button" href="register.php">注册</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>