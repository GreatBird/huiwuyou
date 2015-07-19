<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" href="css/reset.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/venue.css" rel="stylesheet" />
    <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="js/header.js" type="text/javascript"></script>
    <title>会场界面</title>
</head>
<body>
<!-- header start -->
<div class="header-wrapper">
    <?php include "headerbar.php" ?>
    <?php include "headersearch.php" ?>
</div>
<!-- header end -->
<br class="clearfix" />
<!-- 会场搜索开始 -->
<div class="venue-wrapper">
    <div class="venue">
        <div class="bread-cumb">
            <a href="index.php">首页</a> &gt; <a href="venue.php">会场</a>
        </div>
        <div class="venue-type">
            <div class="venue-search">
                <ul>
                    <li><i class="venue-search-txt fa fa-map-marker"></i><input type="text" placeholder="选择活动城市" /></li>
                    <li><i class="venue-search-txt fa fa-list"></i><input type="text" placeholder="选择活动类型" /></li>
                    <li><i class="venue-search-txt fa fa-users"></i><input type="text" placeholder="选择活动人数" /></li>
                    <li class="search-item"><i class=""></i><input type="text" placeholder="输入酒店名称/地点" /></li>
                    <li class="venue-search-btn"><input type="submit" value="搜 索" /></li>
                </ul>
            </div>
            <div class="venue-cate">
                <div class="venue-place-type">
                    <h5>场地类型</h5>
                    <ul class="venue-cate-item">
                        <li class="no-constraint"><a href="#">不限</a></li>
                        <li class="venue-cate-type"><a href="#">
                            <div>
                                <div>
                                    <span class="search-icon"></span>
                                </div>
                                <div>
                                    热门场地
                                </div>
                            </div>
                        </a></li>
                        <li class="venue-cate-type"><a href="#">
                            <div>
                                <div>
                                    <span class="search-icon"></span>
                                </div>
                                <div>
                                    酒店/宾馆
                                </div>
                            </div>
                        </a></li>
                        <li class="venue-cate-type"><a href="#">
                            <div>
                                <div>
                                    <span class="search-icon"></span>
                                </div>
                                <div>
                                    餐厅/酒楼
                                </div>
                            </div>
                        </a></li>
                        <li class="venue-cate-type"><a href="#">
                            <div>
                                <div>
                                    <span class="search-icon"></span>
                                </div>
                                <div>
                                    休闲场所
                                </div>
                            </div>
                        </a></li>
                        <li class="venue-cate-type"><a href="#">
                            <div>
                                 <div>
                                     <span class="search-icon"></span>
                                 </div>
                                 <div>
                                     场馆/展厅
                                 </div>
                             </div>
                        </a></li>
                        <li class="venue-cate-type"><a href="#">
                            <div>
                                <div>
                                    <span class="search-icon"></span>
                                </div>
                                <div>
                                    户外/广场
                                </div>
                            </div>
                        </a></li>
                        <li class="venue-cate-type"><a href="#">
                            <div>
                                <div>
                                    <span class="search-icon"></span>
                                </div>
                                <div>
                                    特色场地
                                </div>
                            </div>
                        </a></li>
                    </ul>
                </div>
                <div class="venue-location">
                    <h5>地理位置</h5>
                    <ul class="venue-cate-item">
                        <li class="no-constraint"><a href="#">不限</a></li>
                        <li class="venue-cate-location"><a href="#">热门商圈<i class="fa fa-angle-down"></i></a></li>
                        <li class="venue-cate-location"><a href="#">行政区<i class="fa fa-angle-down"></i></a></li>
                        <li class="venue-cate-location"><a href="#">地铁沿线<i class="fa fa-angle-down"></i></a></li>
                        <li class="venue-cate-location"><a href="#">机场/车站<i class="fa fa-angle-down"></i></a></li>
                        <li class="venue-cate-location"><a href="#">大学周边<i class="fa fa-angle-down"></i></a></li>
                        <li class="venue-cate-location"><a href="#">景点/景区<i class="fa fa-angle-down"></i></a></li>
                    </ul>
                </div>
                <div class="venue-equipment">
                    <h5>场地设施</h5>
                    <ul class="venue-cate-item">
                        <li class="no-constraint"><a href="#">不限</a></li>
                        <li class="venue-cate-equipment"><a href="#"><input type="checkbox" />舞台</a></li>
                        <li class="venue-cate-equipment"><a href="#"><input type="checkbox" />投影</a></li>
                        <li class="venue-cate-equipment"><a href="#"><input type="checkbox" />音响</a></li>
                        <li class="venue-cate-equipment"><a href="#"><input type="checkbox" />麦克风</a></li>
                        <li class="venue-cate-equipment"><a href="#"><input type="checkbox" />LED屏</a></li>
                        <li class="venue-cate-equipment"><a href="#"><input type="checkbox" />WIFI</a></li>
                        <li class="venue-cate-equipment"><a href="#"><input type="checkbox" />讲台</a></li>
                        <li class="venue-cate-equipment"><a href="#"><input type="checkbox" />舞台灯</a></li>
                        <li class="venue-cate-equipment"><a href="#"><input type="checkbox" />背景板</a></li>
                        <li class="venue-cate-equipment"><a href="#"><input type="checkbox" />横幅</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 会场搜索结束 -->

<div class="venue-container-wrapper">
    <div class="venue-container">
        <!-- 过滤条形块开始 -->
        <div class="filter-bar">
            <div class="filter-bar-left">
                <ul>
                    <li class="active"><a href="#">综合排序</a></li>
                    <li><a href="#">面积</a>
                        <div class="area-popup">

                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <input type="checkbox" name="group-order" />
                             有团购
                        </a>
                    </li>
                    <li>
                        <a>
                            <input type="checkbox" name="paranoma" />
                            全景
                        </a>
                    </li>
                </ul>
            </div>
            <div class="filter-bar-right">
                <p>
                    找到<span class="search-num">4</span>场地
                </p>
                <span class="icon-filter-box active">
                    <a href="#">
                        <i class="fa fa-th-list"></i>
                    </a>
                </span>
                <span class="icon-filter-box">
                    <a href="#">
                        <i class="fa fa-th"></i>
                    </a>
                </span>
            </div>
        </div>
        <!-- 过滤条形块结束 -->

        <!-- 结果显示开始 -->
        <div class="filter-result-wrapper">
            <div class="filter-result">
                <div class="result-content">
                    <div class="result-left-content">
                        <img src="resource/small.png" alt="" title="" />
                        <p class="result-pic-desc"><span class="result-num">1</span><span class="result-name">南充伯爵咖啡</span></p>
                        <br />
                        <span class="result-place">场地类型：咖啡厅</span>
                        <br />
                        <p>位于<span class="place-position">安庆区</span></p>
                    </div>
                    <div class="result-right-content">

                    </div>
                </div>
                <div class="btn-thumb">
                    <p><span class="fit-venue-num">1</span>块符合的活动场地</p>
                    <span>展开<i class="fa fa-caret-down"></i></span>
                </div>
                <div class="result-detail-info-content">
                    <img src="resource/small.png" alt="" title="" />
                    <div class="detail-info-desc">
                        <p class="detail-info-name">伯爵咖啡</p>
                        <p class="detail-info-structure">面积220平米 层高3米</p>
                        <p class="detail-info-contain">可容纳100～200人</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- 结果显示结束 -->

    </div>
</div>
<?php include "footer.php" ?>
</body>
</html>