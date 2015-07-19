<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>注册页面</title>
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="css/register.css" type="text/css" />
</head>
<body>
    <div class="header-wrapper">
        <?php include "headerbar.php" ?>
        <?php include "headerposition.php" ?>
    </div>
    <div class="register-container">
        <div class="register-content-container">
            <p class="goto-login">
                已有该网站账户?
                <a href="login.php"><input type="button" value="立即登录" /></a>
            </p>
            <div>
                <div class="register-content">
                    <div class="register-content-left">
                        <div class="register-step">
                            <div class="step">
                                <i class="step-circle circle-completed"><span>1</span></i>
                                <span>
                                    设置账号
                                </span>
                            </div>
                            <span class="register-line line-completed"></span>
                            <div class="step">
                                 <i class="step-circle"><span>2</span></i>
                                 <span>
                                    设置密码
                                 </span>
                            </div>
                            <span class="register-line"></span>
                            <div class="step">
                                 <i class="step-circle"><span>3</span></i>
                                 <span>
                                    注册成功
                                 </span>
                            </div>
                        </div>
                        <div class="register-step-form register-step-one" style="display:none;">
                            <form>
                                <div class="phone-box">
                                    <label>手机号码：</label><input type="text" name="register-phonenumber" />
                                </div>
                                <div class="checkcode-box">
                                    <label>校验码：</label><input type="text" name="register-checkcode" />
                                    <img id="authcode" src="" alt="" title="" class="anthcode-img" />
                                </div>
                                <div class="receivecode-box">
                                    <label>验证码：</label><input type="text" name="register-receivecode" />
                                    <input type="button" value="获取短信验证码" />
                                </div>
                                <p class="agree-item">
                                    <input type="checkbox" name="agree" id="agree" />
                                    <label for="agree">已经阅读并同意<a href="#">《某某协议》</a></label>
                                </p>
                                <input class="submit-btn" type="submit" value="下一步" />
                            </form>
                        </div>
                        <div class="register-step-form register-step-two">
                            <form>
                                <div class="password-box">
                                    <label>登录密码：</label><input type="password" name="register-password" />
                                </div>
                                <div class="repassword-box">
                                    <label>确认密码：</label><input type="password" name="register-repassword" />
                                </div>
                                <input class="submit-btn" type="submit" value="完成注册" />
                            </form>
                        </div>
                        <div class="register-step-form register-step-three">

                        </div>
                    </div>
                    <div class="register-content-right">
                        <h2>让会议聚会变得更轻松</h2>
                        <ul class="benefits">
                            <li>
                                <i></i>
                                <p>预定会场立减40%～50%</p>
                            </li>
                            <li>
                                <i></i>
                                <p>超低价精选会议套餐</p>
                            </li>
                            <li>
                                <i></i>
                                <p>专业会议顾问给您提供免费方案</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>
</html>