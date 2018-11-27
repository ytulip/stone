
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>充值中心-乐中乐棋牌</title>
    <link rel="stylesheet" href="/asset/css/1265_zh-CN.css" type="text/css"/>
    <link rel="stylesheet" href="/asset/lib/layui/css/layui.css" type="text/css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="/asset/js/dd_belatedpng_0.0.8a.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/asset/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/asset/lib/layui/layui.all.js"></script>
    <script type="text/javascript" src="/asset/js/setInfo.js"></script>

    <style>
        body {
            min-width: 1000px;
            min-height: 700px;
        }

        hr {
            border-top: 1px dotted #8f8f8f;
        }

        .chongzhi {
            width: 65%;
            margin: auto;
            border: 1px #8f8f8f dotted;
        }

        .chongzhi > div {
            width: 100%;
            height: 50px;
        }

        .d1 > * {
            float: left;
        }

        .d1 input {
            width: 150px;
            height: 30px;
            margin-top: 10px;
            margin-left: 10px;
        }

        .d2 > * {
            float: left;
        }

        .d2 > div {
            width: 100px;
            height: 40px;
            margin-top: 5px;
            margin-left: 10px;
            font-size: 20px;
            line-height: 40px;
            text-align: center;
            border: 2px #8f8f8f solid;
            cursor: pointer;
        }

        .d3 > * {
            float: left;
        }

        .d3 > div {
            width: 100px;
            height: 40px;
            margin-top: 5px;
            margin-left: 10px;
            font-size: 20px;
            line-height: 40px;
            text-align: center;
            border: 2px #8f8f8f solid;
            cursor: pointer;
        }

        .d3 > input {
            width: 100px;
            height: 40px;
            margin-top: 5px;
            margin-left: 10px;
            font-size: 20px;
            line-height: 40px;
            text-align: center;
            border: 2px #8f8f8f solid;
        }

        .d4 > * {
            float: left;
        }

        .d4 > div {
            width: 100px;
            height: 40px;
            margin-top: 5px;
            margin-left: 10px;
            font-size: 20px;
            line-height: 40px;
            text-align: center;
            cursor: pointer;
        }

        .chongzhi span {
            display: block;
            width: 150px;
            height: 50px;
            line-height: 50px;
            font-size: 20px;
            text-align: right;
        }

        .checkeds {
            border: 2px red solid;
        }
    </style>

</head>
<body>
<!--Top-->
<div style="*z-index:11;*position:relative;width:100%;height:150px;margin-left:auto;margin-right:auto;">
    <style type="text/css"> .header, .main-wrap .main, .footer {
            position: relative;
            clear: both;
            margin: 0 auto;
            padding: 0;
        }</style>
    <div class="header page_header yibuLayout_tempPanel" style="width:1000px;">
        <div class="runTimeflowsmartView">
            <div id="view_image_3_843" class="yibuSmartViewMargin absPos">
                <div class="yibuFrameContent overflow_hidden image_Style1_Item0 view_image_3_843_Style1_Item0"
                     style="height:48px;width:127px;border-style:none;">
                    <div class="megwh" style="height:100%; width:100%;">
                        <a id="autosize_view_image_3_843" href="/qlygw/" target="_self">
                            <img src="/asset/images/9527073_logo_31cd9cdc-5cac-44ca-be2f-d0b903352c11_resize_picture.png"
                                 alt="" style="border:none; position:relative;">
                        </a>
                    </div>
                </div>
            </div>
            <div id="view_navigator_8_843" class="yibuSmartViewMargin absPos" style="z-index: 999999;">
                <div class="yibuFrameContent navigator_Style3_Item0 view_navigator_8_843_Style3_Item0"
                     style="border-style: none; overflow: visible;"><!--nav-->
                    @include('segment.banner',['target'=>'charge'])

                    <!--/nav-->

                </div>
            </div>
        </div>
    </div>


</div>
<!--Top End-->
<!--Main-->
<div style="width: 1200px;margin:auto">
    <div class="chongzhi">
        <div style="text-align: center;font-size: 30px;">充值中心</div>
        <br>
        <div class="d1">
            <span>充值账号:</span>
            <div><input type="text" id="zhanghao"></div>
        </div>
        <br>
        <div class="d1">
            <span>充值方式:</span>
            <div class="d2">
                <div>支付宝</div>
                <div>微 信</div>
            </div>
        </div>
        <br>
        <div class="d1">
            <span>充值金额:</span>
            <div class="d3">
                <div>30</div>
                <div>50</div>
                <div>100</div>
                <div>300</div>
                <input id="qtje" type="text" value="其他金额" onfocus="qtjehqjd()" onblur="qitajinge()">
            </div>
        </div>
        <br>
        <div class="d1">
            <span>应付金额:</span>
            <div class="d4">
                <div id="showMoney">0元</div>
            </div>
        </div>
        <br>
        <div class="d1">
            <span>获得钻石:</span>
            <div class="d4">
                <div id="showZuanshi">0钻石</div>
            </div>
        </div>
        <br>
        <div style="text-align: center;font-size: 15px;color: red;">
            注：充值比例为 1RMB=10钻石;请输入整数倍的金额。
        </div>
        <br>
        <div style="text-align: center;font-size: 30px;">
            <button class="layui-btn" onclick="tijiao()">立即充值</button>
        </div>
    </div>
</div>

<script>
    var num = "";
    var type = "";
    var money = "";
    //充值比例
    var bili = 10;

    $(".d2 > div").click(function (e) {
        if ($(e.target).css("border") != "2px solid rgb(143, 143, 143)") {
            $(e.target).css("border", "2px #8f8f8f solid");
            type = "";
        } else {
            $(e.target).css("border", "2px red solid");
            type = $(e.target).html();
        }
        $(e.target).siblings("div").css("border", "2px #8f8f8f solid");
    });


    $(".d3 > div").click(function (e) {
        if ($(e.target).css("border") != "2px solid rgb(143, 143, 143)") {
            $(e.target).css("border", "2px #8f8f8f solid");
            money = "";
            showMoneys(0);
        } else {
            $(e.target).css("border", "2px red solid");
            money = $(e.target).html();
            showMoneys(money);
        }

        $(e.target).siblings("div").css("border", "2px #8f8f8f solid");
        $(e.target).siblings("input").css("border", "2px #8f8f8f solid");
        $(e.target).siblings("input").val("其他金额");
    });

    function qtjehqjd() {
        var m = $("#qtje").val();
        if (m == "其他金额") {
            $("#qtje").val("");
        }
        showMoneys(0);
        $("#qtje").siblings("div").css("border", "2px #8f8f8f solid");
        $("#qtje").css("border", "2px red solid");
    }

    function showMoneys(m) {
        $("#showMoney").html(m + "元");
        $("#showZuanshi").html(m * bili + "钻石")
    }

    function qitajinge() {
        var val = $("#qtje").val();
        if (val == "") {
            $("#qtje").val("其他金额");
            $("#qtje").css("border", "2px #8f8f8f solid");
            return;
        }
        if (isZhengshu(val)) {
            money = val;
            showMoneys(val);
        } else {
            money = "";
            showMoneys(0);
            $("#qtje").val("其他金额");
            layer.msg("充值金额请输入正整数");
        }
    }

    function isZhengshu(str) {
        var r = /^\+?[1-9][0-9]*$/;　　//正整数
        var flag = r.test(str);
        return flag;
    }

    function tijiao() {
        num = $("#zhanghao").val();
        if (num == "") {
            layer.msg("充值账号不能为空");
            return;
        }

        if (type == "") {
            layer.msg("充值类型不能为空");
            return;
        }

        if (money == "") {
            layer.msg("充值金额不能为空");
            return;
        }

        layer.msg("充值接口正在升级中....");
    }
</script>


<!--Main End-->
<div style="width:100%;height:160px;background-color:#333333;margin:0 auto;position: fixed;bottom: 0px;font-size: 10px;">
    <div class="footer page_footer yibuLayout_tempPanel" style="width:1000px;height:31px;background-color:#333333;;">
        <div class='runTimeflowsmartView'>
            <div id="view_text_7_843" class="yibuSmartViewMargin absPos">
                <div class='yibuFrameContent overflow_hidden text_Style1_Item0 view_text_7_843_Style1_Item0'
                     style='width:969px;border-style:none;'>
                    <style type="text/css">
                        #view_text_7_843_txt ul {
                            padding-left: 20px;
                        }
                    </style>
                    <div id='view_text_7_843_txt' style="cursor:default; height:100%; width:100%;">
                        <div class="editableContent " style="line-height:1.5;">
                            <br>
                            <p style="text-align: center; color: #999;"><span style="color: rgb(255, 255, 255);">健康游戏公告：<span
                                            class="jkyxgg"></span></span></p>
                            <p style="text-align: center; color: #999;"><span style="color: rgb(255, 255, 255);"
                                                                              class="wcnzs"></span></p>
                            <p style="text-align: center; color: #999;"><span style="color: rgb(255, 255, 255);"><span class="icp"></span>   &nbsp;&nbsp;&nbsp;<span class="companyName"></span>    &nbsp;&nbsp;&nbsp;地址：<span
                                            class="address"></span>  &nbsp;&nbsp;&nbsp;电话：<sapn class="phone"></sapn></span></p>
                            <!--<p style="text-align: center; color: #999;"><span style="color: rgb(255, 255, 255);">联系邮箱地址：<span-->
                            <!--class="email"></span></span></p>-->
                            <div style="width: 40px;height: 40px;margin: auto;">
                                <a href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/toDetail/6056babc9717476f8c907e163fded732" target="_blank"><img src="/asset/images/wenhuajingying.png" alt="" style="width: 100%;height: 100%;" ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</body>
</html>