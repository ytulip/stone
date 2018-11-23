
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>用户注册_乐中乐棋牌</title>
    <link href="/asset/css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/asset/css/login1.css"/>
    <script type="text/javascript" src="/asset/js/jquery-1.9.1.min.js"></script>
    <script language="javascript" src="/asset/js/reg.js"></script>
    <script type="text/javascript" src="/asset/js/setInfo.js"></script>
</head>
<body class="bg">
<div class="B_bg">
    <div class="head"><a href="" class="logo" style="padding:0;"><img
                    src="/asset/images/9527073_logo_31cd9cdc-5cac-44ca-be2f-d0b903352c11_resize_pic.png" width="250" height="80"
                    alt="重庆乐中乐游戏"/></a>
        <ul class="nav">
            <a href="/">首&nbsp;页</a>
            <a href="/qlygw/about/">关于我们</a>
            <a href="/qlygw/product/">游戏介绍</a>
            <a href="/qlygw/server/">游戏下载</a>
            <a href="/qlygw/chongzhi/">充值中心</a>
            <a href="/qlygw/jcjh/">家长监护</a>
            <a href="/qlygw/jrwm/">加入我们</a>
            <a href="/qlygw/register/">用户注册</a>
            <a href="/qlygw/login">用户登录</a>
        </ul>
    </div>
</div>

<div class="reg_con">
    <div class="mt"><span class="extra"><a href="/qlygw/login" class="but_dl">马上登录</a>我已经注册，</span>
        <ul class="tab">
            <li><a href="/"><img src="/asset/images/tab1.jpg" width="169" height="39"/></a></li>
        </ul>
    </div>
    <div class="con">
        <ul class="login1">
            <li><span class="name">用户帐号：</span><input name="loginname" id="loginname" onblur="javascript:ChkUserName();"
                                                      type="text" class="inputtext"/><span class="m_tips yellow"
                                                                                           id="msgloginname">支持6~16位字母、数字和下划线“_”</span>
            </li>
            <li><span class="name">设置密码：</span><input name="psw" id="psw" onblur="javascript:ChkPasWd();"
                                                      type="password" class="inputtext"/><span class="m_tips yellow"
                                                                                               id="msgpsw1">密码长度6-20个字符，字母区分大小写</span>
            </li>
            <li><span class="name">确认密码：</span><input name="psw2" id="psw2" onblur="javascript:ChkPasWd2();"
                                                      type="password" class="inputtext"/><span class="m_tips yellow"
                                                                                               id="msgpsw2">请再输入一次密码</span>
            </li>
            <li><span class="name">电子邮箱：</span><input name="email" id="email" onblur="javascript:ChkEmail();"
                                                      type="text" class="inputtext"/><span class="m_tips yellow"
                                                                                           id="msgemail">请输入您的邮箱!这是找回密码的唯一方式，请正确填写</span>
            </li>
        </ul>
        <input type="hidden" name="act" id="act" value="reg">
        <div class="login2">
            <p>
                <i>防沉迷认证：</i>根据2010年8月1日实施的《网络游戏管理暂行办法》，网络游戏用户需使用有效身份证件进行实名注册。为保证流畅游戏体验，享受健康游戏生活，请广大游戏玩家尽快实名注册。
            </p>
            <ul>
                <li>
                    <span class="name">真实姓名：</span>
                    <input name="truename" id="truename" onblur="javascript:chkname();" type="text" class="inputtext"/>
                    <span class="m_tips yellow" id="msgname">请输入你的姓名,如:王五</span>
                </li>
                <li>
                    <span class="name">身份证号：</span>
                    <input name="idcard" id="idcard" onblur="javascript:chkidcard();" type="text" class="inputtext"/>
                    <span class="m_tips yellow" id="msgsfz">请输入你的身份证号,如:320812198011111110</span>
                </li>
            </ul>
            <div class="xieyi">
                <input name="" checked type="checkbox" value="" id="agree_protocol" class="checkbox"/>我已阅读并同意
                <a href="/asset/xieyi.html" target="_blank">《重庆千里眼用户注册协议》</a>
            </div>
            <div class="reg_but"><a href="###" onclick="javascript:form_submit();">完成注册</a></div>
        </div>
    </div>
</div>
<div class="footerbar" style="background: #333333;">
    <div class="footer">
        <p style="text-align: center; color: #999; font-family: 微软雅黑;"><span
                    style="color: rgb(255, 255, 255);">健康游戏公告：<span class="jkyxgg"></span></span></p>
        <p style="text-align: center; color: #999; font-family: 微软雅黑;"><span style="color: rgb(255, 255, 255);"><span
                        class="wcnzs"></span></span></p>
        <p style="text-align: center; color: #999; font-family: 微软雅黑;"><span style="color: rgb(255, 255, 255);"><span class="icp"></span>   &nbsp;&nbsp;&nbsp;<span class="companyName"></span>    &nbsp;&nbsp;&nbsp;地址：<span class="address"></span>  &nbsp;&nbsp;&nbsp;电话：<sapn
                        class="phone"></sapn></span></p>
        <!--<p style="text-align: center; color: #999; font-family: 微软雅黑;"><span-->
        <!--style="color: rgb(255, 255, 255);">联系邮箱地址：<span class="email"></span></span></p>-->
        <div style="width: 40px;height: 40px;margin: auto;">
            <a href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/toDetail/6056babc9717476f8c907e163fded732" target="_blank"><img src="/asset/images/wenhuajingying.png" alt="" style="width: 100%;height: 100%;" ></a>
        </div>
    </div>
</div>
</body>
</html>