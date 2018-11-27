
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no, email=no"/>
    <title>乐中乐棋牌</title>
    <link rel="stylesheet" href="/asset/css/base.pc.css" type="text/css"/>
    <link href="/asset/css/pager.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/asset/css/1265_zh-CN.css" type="text/css"/>
    <link rel="stylesheet" href="/asset/css/277551619_zh-CN.css" type="text/css"/>
    <script type="text/javascript" src="/asset/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/asset/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/asset/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/asset/js/public.common.min.js"></script>
    <script type="text/javascript" src="/asset/js/jquery.lazyload.min.js"></script>
    <script src="/asset/js/kino.razor.min.js"></script>
    <script type="text/javascript" src="/asset/js/underscore-min.js"></script>
    <script type="text/javascript" src="/asset/js/jquery.slider.js"></script>
    <script type="text/javascript" src="/asset/js/jquery.color.js"></script>
    <script language='javascript' type='text/javascript' id='yibuHeaderScript'></script>
    <script type="text/javascript" src="/asset/js/velocity.min.js"></script>
    <script type="text/javascript" src="/asset/js/velocity.ui.min.js"></script>
    <script type="text/javascript" src="/asset/js/jquery.validatestar.min.js"></script>
    <script type="text/javascript" src="/asset/js/setInfo.js"></script>
</head>
<body>
<div id="view_layout_1_843" class="mainSamrtView yibuSmartViewMargin">
    <div class='yibuFrameContent layout_Block2_Item0' style='border-style:none;'>
        <style type="text/css">
            .header, .main-wrap .main, .footer {
                position: relative;
                clear: both;
                margin: 0 auto;
                padding: 0;
            }

            .main-wrap {
                clear: both;
                margin: 0;
                padding: 0;
                width: auto;
            }

            .main-wrap .main {
            }

            .main-wrap .main .content {
                width: 100%;
            }

            #view_text_18_1265_txt ul {
                padding-left: 20px;
            }

            #view_text_20_1265_txt ul {
                padding-left: 20px;
            }
        </style>
        <div style="*z-index:11;*position:relative;width:100%;height:757px;margin-left:auto;margin-right:auto;">
            <!-- 导航页及顶部 -->
            <div class="header page_header yibuLayout_tempPanel" style="width:1000px;height:757px;">
                <div class='runTimeflowsmartView'>
                    <div id="view_image_3_843" class="yibuSmartViewMargin absPos">
                        <div class='yibuFrameContent overflow_hidden image_Style1_Item0 view_image_3_843_Style1_Item0'
                             style='height:48px;width:127px;border-style:none;'>
                            <div class="megwh" style="height:100%; width:100%;">
                                <a id="autosize_view_image_3_843" href="/asset/" target="_self">
                                    <input id="w_view_image_3_843" type="hidden" value="127"/>
                                    <input id="h_view_image_3_843" type="hidden" value="48"/>
                                    <input id="canadjustwidth_view_image_3_843" type="hidden" value="False"/>
                                    <input id="canadjustheight_view_image_3_843" type="hidden" value="False"/>
                                    <img src="/asset/images/9527073_logo_31cd9cdc-5cac-44ca-be2f-d0b903352c11_resize_picture.png"
                                         alt="" style="border:none; position:relative;"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="view_navigator_8_843" class="yibuSmartViewMargin absPos">
                        <div class='yibuFrameContent navigator_Style3_Item0 view_navigator_8_843_Style3_Item0'
                             style='border-style:none;'><!--nav-->
                            @include('segment.banner')
                            <script>
                                $(function () {
                                    slideMenu("nav_" + 'view_navigator_8_843');
                                    jQuery("#nav_" + 'view_navigator_8_843').parent("div").css("overflow", "visible");
                                    var isDivider = true;
                                    //子导航下边框显示不出来的fix
                                    $("#nav_" + 'view_navigator_8_843').children("li").each(function () {
                                        var Li_height = $(this).height();
                                        $("li", this).height(Li_height);

                                        var child_li = $("li", this);
                                        var topborderwidth = $("a:first", child_li).css('border-top-width');
                                        topborderwidth = isNaN(parseInt(topborderwidth)) ? 0 : parseInt(topborderwidth);
                                        var bottomborderwidth = $("a:first", child_li).css('border-bottom-width');
                                        bottomborderwidth = isNaN(parseInt(bottomborderwidth)) ? 0 : parseInt(bottomborderwidth);

                                        var aheight = Li_height - topborderwidth - bottomborderwidth;
                                        $("a", child_li).height(aheight);
                                    });

                                    jQuery("#nav_" + 'view_navigator_8_843').children("li").each(function () {
                                        var topWidth = $(this).children("h3").children("a").css("border-top-width");
                                        var leftWidth = $(this).children("h3").children("a").css("border-left-width");
                                        var bottomWidth = $(this).children("h3").children("a").css("border-bottom-width");
                                        if (topWidth != "0" && topWidth != "0px") {
                                            isDivider = false;
                                            return false;
                                        }
                                        if (leftWidth != "0" && leftWidth != "0px") {
                                            isDivider = false;
                                            return false;
                                        }
                                        if (bottomWidth != "0" && bottomWidth != "0px") {
                                            isDivider = false;
                                            return false;
                                        }
                                        if ($(this).children("ul").length > 0) {
                                            var maxWidth = $(this).children("ul").width();
                                            $(this).children("ul").children("li").each(function () {
                                                var a = $(this).children("a");
                                                var currentWidth = GetCurrentStrWidth(a.html(), a.css("font-size")) + 20;

                                                if (maxWidth < currentWidth)
                                                    maxWidth = currentWidth;
                                            });
                                            $(this).children("ul").css("width", maxWidth + "px");
                                        }

                                    });
                                    //if (isDivider)
                                    //    jQuery("#nav_" + 'view_navigator_8_843').children("li:last").children("h3").children("a").css("border-right-width", "0px");//去掉最后一项的分隔线
                                    if ("False" == "False") {
                                        jQuery("#" + 'view_navigator_8_843').css("z-index", "999999");
                                        if (jQuery("#" + 'view_navigator_8_843').parent().attr("class") != "runTimeflowsmartView") {//导航可能放在容器控件中了，需要把容器控件的z-index的值设大
                                            jQuery("#" + 'view_navigator_8_843').parent(".w_container_content").parent().parent().css("z-index", "999998");
                                        }
                                    }
                                    SetNavSelectedStyle("nav_" + 'view_navigator_8_843', 'nav');//选中当前导航
                                })
                            </script>
                        </div>
                    </div>
                    @section('bannerList')
                    <div id="view_photoalbum_32_843" class="yibuSmartViewMargin absPos">
                        <div class='yibuFrameContent overflow_hidden photoalbum_Style2_Item0 view_photoalbum_32_843_Style2_Item0'
                             style='height:667px;width:1000px;'>
                            <div class="w_slider_2 renderfullScreen w_slider_2_view_photoalbum_32_843">
                                <div class="w_slider_img">
                                    <!-- 导航背景图片 -->
                                    <ul>
                                        <li style="background: url('/asset/images/9527401_beijing1.png') center 0 no-repeat;">
                                        </li>
                                        <li style="background: url('/asset/images/9527472_beijing2.png') center 0 no-repeat;">
                                        </li>
                                        <li style="background: url('/asset/images/L3.png') center 0 no-repeat;">
                                        </li>
                                    </ul>
                                </div>
                                <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                                <a style="display:none;" class="prev" href="javascript:void(0)"></a>
                                <a style="display:none;" class="next" href="javascript:void(0)"></a>
                                <div class="w_slider_num">
                                    <ul></ul>
                                </div>

                            </div>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    if ("fade" == "fold") {
                                        setRenderFullScreen($("#view_photoalbum_32_843"), "window");
                                    } else {
                                        setRenderFullScreen($("#view_photoalbum_32_843"), "auto");
                                    }
                                    $(".w_slider_2_view_photoalbum_32_843").slide({
                                        titCell: $(".w_slider_2_view_photoalbum_32_843 .w_slider_num ul"),
                                        mainCell: $(".w_slider_2_view_photoalbum_32_843 .w_slider_img ul"),
                                        effect: "fade",
                                        autoPlay: "true",
                                        autoPage: true,
                                        trigger: "click",
                                        interTime: "3000"
                                    });
                                });
                            </script>
                        </div>
                    </div>


                        <div id="view_image_33_843" class="yibuSmartViewMargin absPos">
                        <div class='yibuFrameContent overflow_hidden image_Style1_Item0 view_image_33_843_Style1_Item0'
                             style='height:582px;width:686px;'>
                            <div class="megwh" style="height:100%; width:100%;">
                                <a id="autosize_view_image_33_843" href="javascript:void(0)" target="_self">
                                    <input id="w_view_image_33_843" type="hidden" value="735"/>
                                    <input id="h_view_image_33_843" type="hidden" value="651"/>
                                    <input id="canadjustwidth_view_image_33_843" type="hidden" value="False"/>
                                    <input id="canadjustheight_view_image_33_843" type="hidden" value="False"/>
                                    <img src="/asset/images/5035758_bann_27cde0f4-6988-4051-957a-78a2236c95ad_resize_picture.png"
                                         alt="" style="border:none; position:relative;"/>
                                </a>
                            </div>
                        </div>
                    </div>

                    @show
                </div>

            </div>
            <!-- END -->
        </div>

        <div class="main-wrap clearfix"
             style="*z-index:10;*position:relative;width:100%;margin-left:auto;margin-right:auto;">
            <div class="main clearfix page_main" style="width:1000px;">
                <div class="content yibuLayout_Body" style="min-height:100px;margin-left:auto;margin-right:auto;"
                     id="yibuLayout_center">
                    <div id="view_main_1_1265" class="mainSamrtView yibuSmartViewMargin">
                        @section('showList')
                            @show
                    </div>
                </div>
                <div style="width:100%;height:160px;background-color:#333333;margin:0 auto;">
                    <div class="footer page_footer yibuLayout_tempPanel"
                         style="width:1000px;height:31px;background-color:#333333;;">
                        <div class="runTimeflowsmartView">
                            <div id="view_text_7_843" class="yibuSmartViewMargin absPos">
                                <div class="yibuFrameContent overflow_hidden text_Style1_Item0 view_text_7_843_Style1_Item0"
                                     style="width:969px;border-style:none;">
                                    <style type="text/css">
                                        #view_text_7_843_txt ul {
                                            padding-left: 20px;
                                        }
                                    </style>
                                    <div id="view_text_7_843_txt" style="cursor:default; height:100%; width:100%;">
                                        <div class="editableContent " style="line-height:1.5;">
                                            <br>
                                            <p style="text-align: center; color: #999;"><span
                                                        style="color: rgb(255, 255, 255);">健康游戏公告：<span
                                                            class="jkyxgg"></span></span></p>
                                            <p style="text-align: center; color: #999;"><span
                                                        style="color: rgb(255, 255, 255);" class="wcnzs"></span></p>
                                            <p style="text-align: center; color: #999;"><span style="color: rgb(255, 255, 255);"><span
                                                            class="icp"></span>   &nbsp;&nbsp;&nbsp;<span class="companyName">重庆千里眼网络科技有限公司</span>    &nbsp;&nbsp;&nbsp;地址：<span class="address"></span>  &nbsp;&nbsp;&nbsp;电话：<sapn
                                                            class="phone"></sapn></span></p>
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
                <script type="text/javascript">
                    function yiburecomputeLayoutHeight() {
                        if (typeof (setLayoutHeight) != "undefined") {
                            ReComputeVisibleSmartViewTop(setLayoutHeight);
                        } else {
                            ReComputeVisibleSmartViewTop();
                        }
                    }

                    $(function () {
                        if ("False" == "False" && "false" == "true") {
                            $(document.body).bind('contextmenu', function () {
                                return false;
                            });
                        }
                        $('.yibuAnimate').smanimate();
                        $("img.lazyload").lazyload({
                            skip_invisible: false,
                            effect: "fadeIn",
                            failure_limit: 15,
                            threshold: 100
                        });
                        var $sm_all_autoHViews = $(".main div[class^='yibuSmartViewMargin absPos']")
                            .filter(function () {
                                var $this = $(this);
                                var child = $this.children(".yibuFrameContent");
                                return child.hasClass("overflow_hidden") == false &&
                                    child.hasClass("overflow_auto") == false &&
                                    $this.css("min-height") != "0px";
                            });
                        var $sm_all_imgs = $sm_all_autoHViews.find('img').filter(function () {
                            return !$(this).hasClass('lazyload');
                        });
                        //检测是否新闻固定模板标识对象
                        var newsFixTemlateFlagObj = $('#news_template_content_sm');
                        var productFixTemplateFlagObj = $('#product_template_sm_flag');
                        if ($sm_all_imgs.length > 0 && newsFixTemlateFlagObj.length == 0 && productFixTemplateFlagObj.length == 0) {
                            $sm_all_imgs.each(function () {
                                var $this = $(this);
                                $this.on("load", function () {
                                    yiburecomputeLayoutHeight();
                                });
                            });
                        }
                        yiburecomputeLayoutHeight();
                        refreshStaticData();

                    });
                </script>
            </div>
        </div>
    </div>
</div>

</body>
</html>