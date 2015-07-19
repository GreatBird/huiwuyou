<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>注册页面</title>
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="css/login.css" type="text/css" />
    <link rel="stylesheet" href="css/login.css" type="text/css" />
    <script src="js/jquery-2.1.3.min.js"></script>
</head>
<body>
    <div class="header-wrapper">
    <?php include "headerbar.php" ?>
    <?php include "headerposition.php" ?>
    </div>
    <div class="login-wrapper">
        <div class="login-content-wrapper">
            <div class="login-content">
                <div class="login">
                    <form>
                        <div class="login-caption">
                            <h4>登录某某</h4>
                            <p>忘记密码？<a href="#" class="login-find-passwd">找回密码</a></p>
                        </div>
                        <div class="login-inp login-name">
                            <input type="text" placeholder="请输入邮箱或手机号码" name="phone_email" />
                        </div>
                        <div class="login-inp login-passwd">
                            <input type="text" placeholder="请输入密码" name="password" />
                        </div>
                        <div class="login-sub">
                            <input type="submit" value="登录" />
                        </div>
                        <div class="login-option">
                            <p>
                                <a href="#"><img src="resource/connect_sina_weibo.png" alt="weibo" title="weibo" /><span>微博登录</span></a>
                                <a href="#"><img src="resource/connect_qq.png" alt="qq" title="qq" /><span>QQ登录</span></a>
                                <span>如果还没有账号？<a class="direct-register" href="#">立即注册</a></span>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>
</html>