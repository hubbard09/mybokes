<html>
<head>
    <link rel="stylesheet" href="css/logo.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body class="login">
<div class="sss"><a href="index.php"> 返回首页</a></div>
<div id="login">
    <h1>
        <a href="index.php"></a><img class="ss" src="images/9.jpg" title="由我所领">
    </h1>

    <form name="loginform" id="loginform" action="enroll.php" method="post">
        <p>
            <label>
                用户名
                <br>
                <input type="text" name="log" id="user_login" class="imput" value size="20" tabindex="10">
            </label>
        </p>
        <p>
            密码
            <br>
            <input type="password" name="pwd" id="user_pass" class="imput" value size="20" tabindex="10">
            </label>
        </p>
        <input type="radio" name="sex" value="男" /> 男 &nbsp;
        <input type="radio" name="sex" value="女" /> 女
        <p class="submit">
            <input type="submit" name="submit" id="enroll" value="注册" tabindex="100">&nbsp;&nbsp;&nbsp;&nbsp;
        </p>
    </form>
</div>

</body>
</html>