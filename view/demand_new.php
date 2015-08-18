<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/demand_new.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<script src="js/jquery-2.1.3.min.js"></script>
	</head>
	<body>
		<!-- 需求大厅container开始 -->
		<div class="demand-container">

			<!-- 需求大厅header开始 -->
			<div class="d-hd-container">
				<div class="d-hd-content">
					<div class="hd-ad-bar">
						<a href="#" title="广告">广告</a>
					</div>
					<div class="hd-search-bar-container">
						<div class="hd-search-bar">
							<div class="search-logo">
								<a href="index.html" title="网站名">会无忧logo</a>
							</div>
							<div class="search-input-wrapper">
								<!-- 在这里提交搜索内容 -->
								<form action="" method="get">
									<input type="text" placeholder="请输入搜索内容" class="search-input" />
									<input type="submit" value="" class="search-btn" />
								</form>
							</div>
							<div class="search-addition">
								<ul class="language-select">
									<li><img src="" alt="" title="" /><a href="#">English</a></li>
									<li><img src="" alt="" title="" /><a href="#">简体中文</a></li>
									<li><img src="" alt="" title="" /><a href="#">繁体中文</a></li>
									<li><img src="" alt="" title="" /><a href="#">日本语</a></li>
								</ul>
								<ul class="service-center">
									<li>客服中心</li>
								</ul>
								<ul class="phone-select">
									<li><span>国内：</span><a href="#">010-6666666</a></li>
									<li><span>香港：</span><a href="#">010-6666666</a></li>
									<li><span>台湾：</span><a href="#">010-6666666</a></li>
									<li><span>国外：</span><a href="#">010-6666666</a></li>
								</ul>
							</div>
							<div class="qr-download">
								<a href="#" class="show-qr-code"></a>
								<div class="qr-download-content">
									<div class="content-desc">
										扫描下面二维码<span class="close-qr-content">&times;</span>
									</div>
									<div class="qr-code-pic">

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="hd-nav-bar">
						<div class="hd-nav">
							<ul>
								<li><a href="index.php">首页</a></li>
								<li>
									<a href="#">找场地<i class="fa fa-angle-down"></i></a>
									<ul style="display:none;">
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
									</ul>
								</li>
								<li><a href="#">会议套餐</a></li>
								<li><a href="#">配套服务</a></li>
								<li><a href="#">发布大厅</a></li>
								<li><a href="#">需求大厅</a></li>
								<li><a href="#">活动策划</a></li>
							</ul>
							<div class="hd-login-panel">
								<a href="login.php" class="login-entr"><span>登录</span></a>
								<a href="register.php"><span>注册</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 需求大厅header结束 -->

			<!-- 需求大厅内容开始 -->
			<div class="d-content-container">
				<div class="d-content-content">
					<!-- 城市列表 -->
					<div class="city-list">
						<ul>
							<li class="all-city"><a href="#">全部城市</a></li>
							<li class="hot-city"><a href="#">武汉</a></li>
							<li class="hot-city"><a href="#">西安</a></li>
							<li class="hot-city"><a href="#">城都</a></li>
							<li class="hot-city"><a href="#">长沙</a></li>
							<li class="hot-city"><a href="#">重庆</a></li>
							<li class="hot-city"><a href="#">昆明</a></li>
							<li class="hot-city"><a href="#">贵阳</a></li>
							<li class="hot-city"><a href="#">北京</a></li>
							<li class="hot-city"><a href="#">上海</a></li>
							<li class="hot-city"><a href="#">广州</a></li>
							<li class="hot-city"><a href="#">深圳</a></li>
							<li class="hot-city"><a href="#">杭州</a></li>
							<li class="more-city"><a href="#">更多</a></li>
						</ul>
					</div>

					<!-- 需求列表 -->
					<div class="demand-list">
						<ul>
							<!-- 单个需求列表 -->
							<li>
								<a href="javascript:void(0)">
								<!-- 左边的需求方的图片及文字说明 -->
								<div class="demand-show">
									<img src="" alt="" title="" />
									<span>企业主</span>
								</div>

								<!-- 基本信息介绍 -->
								<div class="demand-basic">
									<h5 class="demand-desc">苏州张先生需借款20万元用于补充流动资金</h5>
									<span class="demand-contact">联系人：张女士</span>
									<span class="demand-length">借款时长：12个月</span>
									<span class="demand-place">借款地区：苏州地区</span>
									<span class="demand-for">借款用途：补充流动资金</span>
								</div>

								<!-- 关键点列举 -->
								<div class="demand-key">
									<ul>
										<li><i></i>有房产</li>
										<li><i></i>无抵押物担保</li>
									</ul>
								</div>

								<!-- 需求概述 -->
								<div class="demand-general">
									贷款<span class="demand-spent">20万</span>
									<span class="demand-addition">3天以内用款</span>
								</div>
								<div class="btns">
                                    <input class="demand-btn show-detail" type="button" value="查看详情" />
                                    <input style="display:none;" id="hide-detail" class="demand-btn hide-detail" type="button" value="收起" />
                                </div>
								</a>
								<!-- 详细信息 -->
								<div style="display:none" class="demand-content-wrapper">
                                <div style="display:none;" class="demand-detail">
                                    <ul>
                                        <li>
                                            活动预算：<span>$1000左右</span>
                                        </li>
                                        <li>
                                            活动类型：<span>培训/讲座</span>
                                        </li>
                                        <li>
                                            活动城市：<span>重庆  渝中区</span>
                                        </li>
                                        <li>
                                            活动人数：<span>100</span>
                                        </li>
                                        <li>
                                            需求场地：<span>其他</span>
                                        </li>
                                        <li>
                                            会议时间：<span>1天] 2015.06.27~2015.06.27</span>
                                        </li>
                                        <li>
                                            区位交通：<span>室内场地，有投影，可培训就行</span>
                                        </li>
                                        <li>
                                            场地布局：<span>课桌式</span>
                                        </li>
                                        <li>
                                            住宿：<span>无</span>
                                        </li>
                                        <li>
                                            餐饮：<span>无</span>
                                        </li>
                                        <li>
                                            茶歇：<span>无</span>
                                        </li>
                                        <li>
                                            配套：<span>无</span>
                                        </li>
                                        <li>
                                            <input class="demand-btn" type="button" value="回复投标" />
                                        </li>
                                    </ul>
                                </div>
                                </div>
							</li>

							<!-- 单个需求列表 -->
							<li>
								<a href="javascript:void(0)">
								<!-- 左边的需求方的图片及文字说明 -->
								<div class="demand-show">
									<img src="" alt="" title="" />
									<span>企业主</span>
								</div>

								<!-- 基本信息介绍 -->
								<div class="demand-basic">
									<h5 class="demand-desc">苏州张先生需借款20万元用于补充流动资金</h5>
									<span class="demand-contact">联系人：张女士</span>
									<span class="demand-length">借款时长：12个月</span>
									<span class="demand-place">借款地区：苏州地区</span>
									<span class="demand-for">借款用途：补充流动资金</span>
								</div>

								<!-- 关键点列举 -->
								<div class="demand-key">
									<ul>
										<li><i></i>有房产</li>
										<li><i></i>无抵押物担保</li>
									</ul>
								</div>

								<!-- 需求概述 -->
								<div class="demand-general">
									贷款<span class="demand-spent">20万</span>
									<span class="demand-addition">3天以内用款</span>
								</div>
								<div class="btns">
                                    <input class="demand-btn show-detail" type="button" value="查看详情" />
                                    <input style="display:none;" id="hide-detail" class="demand-btn hide-detail" type="button" value="收起" />
                                </div>
								</a>
								<!-- 详细信息 -->
								<div style="display:none" class="demand-content-wrapper">
                                <div style="display:none;" class="demand-detail">
                                    <ul>
                                        <li>
                                            活动预算：<span>$1000左右</span>
                                        </li>
                                        <li>
                                            活动类型：<span>培训/讲座</span>
                                        </li>
                                        <li>
                                            活动城市：<span>重庆  渝中区</span>
                                        </li>
                                        <li>
                                            活动人数：<span>100</span>
                                        </li>
                                        <li>
                                            需求场地：<span>其他</span>
                                        </li>
                                        <li>
                                            会议时间：<span>1天] 2015.06.27~2015.06.27</span>
                                        </li>
                                        <li>
                                            区位交通：<span>室内场地，有投影，可培训就行</span>
                                        </li>
                                        <li>
                                            场地布局：<span>课桌式</span>
                                        </li>
                                        <li>
                                            住宿：<span>无</span>
                                        </li>
                                        <li>
                                            餐饮：<span>无</span>
                                        </li>
                                        <li>
                                            茶歇：<span>无</span>
                                        </li>
                                        <li>
                                            配套：<span>无</span>
                                        </li>
                                        <li>
                                            <input class="demand-btn" type="button" value="回复投标" />
                                        </li>
                                    </ul>
                                </div>
                                </div>
							</li>

							<!-- 单个需求列表 -->
							<li>
								<a href="javascript:void(0)">
								<!-- 左边的需求方的图片及文字说明 -->
								<div class="demand-show">
									<img src="" alt="" title="" />
									<span>企业主</span>
								</div>

								<!-- 基本信息介绍 -->
								<div class="demand-basic">
									<h5 class="demand-desc">苏州张先生需借款20万元用于补充流动资金</h5>
									<span class="demand-contact">联系人：张女士</span>
									<span class="demand-length">借款时长：12个月</span>
									<span class="demand-place">借款地区：苏州地区</span>
									<span class="demand-for">借款用途：补充流动资金</span>
								</div>

								<!-- 关键点列举 -->
								<div class="demand-key">
									<ul>
										<li><i></i>有房产</li>
										<li><i></i>无抵押物担保</li>
									</ul>
								</div>

								<!-- 需求概述 -->
								<div class="demand-general">
									贷款<span class="demand-spent">20万</span>
									<span class="demand-addition">3天以内用款</span>
								</div>
								<div class="btns">
                                    <input class="demand-btn show-detail" type="button" value="查看详情" />
                                    <input style="display:none;" id="hide-detail" class="demand-btn hide-detail" type="button" value="收起" />
                                </div>
								</a>
								<!-- 详细信息 -->
								<div style="display:none" class="demand-content-wrapper">
                                <div style="display:none;" class="demand-detail">
                                    <ul>
                                        <li>
                                            活动预算：<span>$1000左右</span>
                                        </li>
                                        <li>
                                            活动类型：<span>培训/讲座</span>
                                        </li>
                                        <li>
                                            活动城市：<span>重庆  渝中区</span>
                                        </li>
                                        <li>
                                            活动人数：<span>100</span>
                                        </li>
                                        <li>
                                            需求场地：<span>其他</span>
                                        </li>
                                        <li>
                                            会议时间：<span>1天] 2015.06.27~2015.06.27</span>
                                        </li>
                                        <li>
                                            区位交通：<span>室内场地，有投影，可培训就行</span>
                                        </li>
                                        <li>
                                            场地布局：<span>课桌式</span>
                                        </li>
                                        <li>
                                            住宿：<span>无</span>
                                        </li>
                                        <li>
                                            餐饮：<span>无</span>
                                        </li>
                                        <li>
                                            茶歇：<span>无</span>
                                        </li>
                                        <li>
                                            配套：<span>无</span>
                                        </li>
                                        <li>
                                            <input class="demand-btn" type="button" value="回复投标" />
                                        </li>
                                    </ul>
                                </div>
                                </div>
							</li>

							<!-- 单个需求列表 -->
							<li>
								<a href="javascript:void(0)">
								<!-- 左边的需求方的图片及文字说明 -->
								<div class="demand-show">
									<img src="" alt="" title="" />
									<span>企业主</span>
								</div>

								<!-- 基本信息介绍 -->
								<div class="demand-basic">
									<h5 class="demand-desc">苏州张先生需借款20万元用于补充流动资金</h5>
									<span class="demand-contact">联系人：张女士</span>
									<span class="demand-length">借款时长：12个月</span>
									<span class="demand-place">借款地区：苏州地区</span>
									<span class="demand-for">借款用途：补充流动资金</span>
								</div>

								<!-- 关键点列举 -->
								<div class="demand-key">
									<ul>
										<li><i></i>有房产</li>
										<li><i></i>无抵押物担保</li>
									</ul>
								</div>

								<!-- 需求概述 -->
								<div class="demand-general">
									贷款<span class="demand-spent">20万</span>
									<span class="demand-addition">3天以内用款</span>
								</div>
								<div class="btns">
                                    <input class="demand-btn show-detail" type="button" value="查看详情" />
                                    <input style="display:none;" id="hide-detail" class="demand-btn hide-detail" type="button" value="收起" />
                                </div>
								</a>
								<!-- 详细信息 -->
								<div style="display:none" class="demand-content-wrapper">
                                <div style="display:none;" class="demand-detail">
                                    <ul>
                                        <li>
                                            活动预算：<span>$1000左右</span>
                                        </li>
                                        <li>
                                            活动类型：<span>培训/讲座</span>
                                        </li>
                                        <li>
                                            活动城市：<span>重庆  渝中区</span>
                                        </li>
                                        <li>
                                            活动人数：<span>100</span>
                                        </li>
                                        <li>
                                            需求场地：<span>其他</span>
                                        </li>
                                        <li>
                                            会议时间：<span>1天] 2015.06.27~2015.06.27</span>
                                        </li>
                                        <li>
                                            区位交通：<span>室内场地，有投影，可培训就行</span>
                                        </li>
                                        <li>
                                            场地布局：<span>课桌式</span>
                                        </li>
                                        <li>
                                            住宿：<span>无</span>
                                        </li>
                                        <li>
                                            餐饮：<span>无</span>
                                        </li>
                                        <li>
                                            茶歇：<span>无</span>
                                        </li>
                                        <li>
                                            配套：<span>无</span>
                                        </li>
                                        <li>
                                            <input class="demand-btn" type="button" value="回复投标" />
                                        </li>
                                    </ul>
                                </div>
                                </div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- 需求大厅内容结束 -->

			<!-- 需求大厅footer开始 -->
			<div class="d-footer-container">

				<!-- 快速导航入口开始 -->
				<div class="quick-link-wrapper">
					<div class="quick-link-content">
						<div class="partner-link">
							<div class="pl-discount">
								<h3>合作优惠<a href="#"><span>更多</span></a></h3>
								<div class="discount-detail">
									<ul>
										<li><a href="#">明珠会员订酒店 礼上有“里”</a></li>
										<li><a href="#">广发分享日 五星度假买一送一</a></li>
									</ul>
								</div>
							</div>
							<div class="pl-brand">
								<h3>合作伙伴</h3>
								<div class="brand-list">
									<ul>
										<li class="brand-item brand-item1"><a href="#"></a></li>
										<li class="brand-item brand-item2"><a href="#"></a></li>
										<li class="brand-item brand-item3"><a href="#"></a></li>
										<li class="brand-item brand-item4"><a href="#"></a></li>
										<li class="brand-item brand-item5"><a href="#"></a></li>
										<li class="brand-item brand-item6"><a href="#"></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="indices-nav-container">
               				<dl class="indices-hot">
	                   			<dt>携程导航</dt>
	                      		<dd><a target="_blank" href="http://hotels.ctrip.com/">酒店预订</a></dd>
				                <dd><a target="_blank" href="http://hotels.ctrip.com/international/">国际酒店</a></dd>
				                <dd><a target="_blank" href="http://flights.ctrip.com/">特价机票</a></dd>
				                <dd><a target="_blank" href="http://flights.ctrip.com/international/">国际机票</a></dd>
				                <dd><a target="_blank" href="http://vacations.ctrip.com/">旅游线路</a></dd>
				                <dd><a target="_blank" href="http://piao.ctrip.com/">景点门票</a></dd>
				                <dd><a target="_blank" href="http://you.ctrip.com/">旅游攻略</a></dd>
				                <dd><a target="_blank" href="http://trains.ctrip.com/">火车票</a></dd>
				                <dd><a target="_blank" href="http://tuan.ctrip.com/">酒店团购</a></dd>
				                <dd><a target="_blank" href="http://cruise.ctrip.com/">邮轮</a></dd>
				                <dd><a target="_blank" href="http://you.ctrip.com/around">周末游</a></dd>
				                <dd><a target="_blank" href="http://vacations.ctrip.com/visa">签证</a></dd>
				                <dd><a target="_blank" href="http://car.ctrip.com/">租车</a></dd>
				                <dd><a target="_blank" href="http://top.ctrip.com/">目的地榜单</a></dd>
				                <dd><a target="_blank" href="http://vacations.ctrip.com/outie">欧铁通票</a></dd>
				                <dd><a target="_blank" href="http://taocan.ctrip.com/fh/">自由行</a></dd>
	                      		<dd><a target="_blank" href="http://vacations.ctrip.com/mice">公司旅游</a></dd>
	                      		<dd><a target="_blank" href="http://lipin.ctrip.com/">礼品卡</a></dd>
	                      		<dd><a target="_blank" href="http://vacations.ctrip.com/grouptravel/">团队游</a></dd>
	                      		<dd><a target="_blank" href="http://ct.ctrip.com/">企业商旅</a></dd>
                			</dl>
                		<div class="indices-line"></div>
                			<dl class="indices-hot">
	                   		  <dt>酒店预订</dt>
	                   		  <dd><a target="_blank" href="http://hotels.ctrip.com/citylist">城市酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/international/landmarks/">国家酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/hotel/beijing1">北京酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/hotel/shanghai2">上海酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/hotel/guangzhou32">广州酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/hotel/chengdu28">成都酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/hotel/hangzhou17">杭州酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/hotel/xian10">西安酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/international/singapore73">新加坡酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/international/dubai220">迪拜酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/international/country4/">泰国酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/international/country42/">韩国酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/international/country146/">马尔代夫酒店</a></dd>
				              <dd><a target="_blank" href="http://hotels.ctrip.com/international/country31/">法国酒店</a></dd>
				              <dd><a target="_blank" href="http://tuan.ctrip.com/group/city_shenyang/">沈阳酒店团购</a></dd>
	               			</dl>
	                	<div class="indices-line"></div>
	                		<dl class="indices-hot">
	                    		<dt>特价机票</dt>
			              		<dd><a target="_blank" href="http://flights.ctrip.com/booking/sha-Shanghai-flights.html">上海机票</a></dd>
						        <dd><a target="_blank" href="http://flights.ctrip.com/booking/bjs-Beijing-flights.html">北京机票</a></dd>
						        <dd><a target="_blank" href="http://flights.ctrip.com/booking/can-Guangzhou-flights.html">广州机票</a></dd>
						        <dd><a target="_blank" href="http://flights.ctrip.com/booking/szx-Shenzhen-flights.html">深圳机票</a></dd>
						        <dd><a target="_blank" href="http://flights.ctrip.com/booking/ckg-Chongqing-flights.html">重庆机票</a></dd>
						        <dd><a target="_blank" href="http://flights.ctrip.com/booking/ctu-Chengdu-flights.html">成都机票</a></dd>
						        <dd><a target="_blank" href="http://flights.ctrip.com/booking/kmg-Kunming-flights.html">昆明机票</a></dd>
						        <dd><a target="_blank" href="http://flights.ctrip.com/booking/syx-Sanya-flights.html">三亚机票</a></dd>
						        <dd><a target="_blank" href="http://flights.ctrip.com/booking/hgh-Hangzhou-flights.html">杭州机票</a></dd>
						        <dd><a target="_blank" href="http://9cair.flights.ctrip.com/">春秋航空</a></dd>
						        <dd><a target="_blank" href="http://czair.flights.ctrip.com/">南方航空</a></dd>
						        <dd><a target="_blank" href="http://caair.flights.ctrip.com/">中国国航</a></dd>
						        <dd><a target="_blank" href="http://huair.flights.ctrip.com/">海南航空</a></dd>
						        <dd><a target="_blank" href="http://mfair.flights.ctrip.com/">厦门航空</a></dd>
						        <dd><a target="_blank" href="http://scair.flights.ctrip.com/">山东航空</a></dd>
						        <dd><a target="_blank" href="http://jdair.flights.ctrip.com/">首都航空</a></dd>
						        <dd><a target="_blank" href="http://flights.ctrip.com/booking/SHA-BJS-day-1.html">上海到北京</a></dd>
						        <dd><a target="_blank" href="http://flights.ctrip.com/booking/china-city-flights-sitemap.html">打折机票</a></dd>
						        <dd><a target="_blank" href="http://flights.ctrip.com/booking/hot-city-flights-sitemap.html">机票地图</a></dd>
						        <dd><a target="_blank" href="http://flights.ctrip.com/hot-airport.html">机场大全</a></dd>
	                		</dl>
                		<div class="indices-line"></div>
                			<dl class="indices-hot">
		                    <dt>旅游度假</dt>
		                      <dd><a target="_blank" href="http://vacations.ctrip.com/dest">国内旅游推荐</a></dd>
					          <dd><a target="_blank" href="http://vacations.ctrip.com/dest/inter">出境旅游推荐</a></dd>
		                      <dd><a target="_blank" href="http://vacations.ctrip.com/tours">国内旅游攻略</a></dd>
		                      <dd><a target="_blank" href="http://vacations.ctrip.com/tours/inter">出境旅游攻略</a></dd>
					          <dd><a target="_blank" href="http://vacations.ctrip.com/tours/d-maldives-330">马尔代夫旅游</a></dd>
					           <dd><a target="_blank" href="http://vacations.ctrip.com/tours/d-phuket-364">普吉岛旅游</a></dd>
		                      <dd><a target="_blank" href="http://vacations.ctrip.com/tours/d-bali-438">巴厘岛旅游</a></dd>
		                      <dd><a target="_blank" href="http://vacations.ctrip.com/tours/d-chejudoisland-297">济州岛旅游</a></dd>
		                      <dd><a target="_blank" href="http://vacations.ctrip.com/tours/d-japan-100041">日本旅游</a></dd>
		                      <dd><a target="_blank" href="http://vacations.ctrip.com/tours/d-singapore-53">新加坡旅游</a></dd>
		                      <dd><a target="_blank" href="http://vacations.ctrip.com/tours/d-australia-100048">澳大利亚旅游</a></dd>
		                      <dd><a target="_blank" href="http://vacations.ctrip.com/tours/d-sanya-61">三亚旅游</a></dd>
		                      <dd><a target="_blank" href="http://vacations.ctrip.com/tours/d-lijiang-32">丽江旅游</a></dd>
				              <dd><a target="_blank" href="http://trains.ctrip.com/piaojia/">票价查询</a></dd>
				              <dd><a target="_blank" href="http://trains.ctrip.com/daishoudian/">代售点</a></dd>
				              <dd><a target="_blank" href="http://trains.ctrip.com/yushouqi/">预售期</a></dd>
				              <dd><a target="_blank" href="http://trains.ctrip.com/yupiao/">余票查询</a></dd>
				              <dd><a target="_blank" href="http://trains.ctrip.com/huochezhan/">火车站</a></dd>
				              <dd><a target="_blank" href="http://trains.ctrip.com/TrainSchedule/">时刻表</a></dd>
                			</dl>
                		<div class="indices-line"></div>
                			<dl class="indices-hot">
			                    <dt>攻略指南</dt>
			                    <dd><a href="http://you.ctrip.com/" target="_blank">攻略社区</a></dd>
			                    <dd><a href="http://you.ctrip.com/place/" target="_blank">旅游攻略</a></dd>
			                    <dd><a href="http://you.ctrip.com/travels/" target="_blank">旅行游记</a></dd>
			                    <dd><a href="http://you.ctrip.com/asks/" target="_blank">旅游问答</a></dd>
			                    <dd><a href="http://you.ctrip.com/events/" target="_blank">结伴旅游</a></dd>
			                    <dd><a href="http://you.ctrip.com/around/" target="_blank">周末旅游</a></dd>
			                    <dd><a href="http://you.ctrip.com/guides/" target="_blank">攻略下载</a></dd>
			                    <dd><a href="http://you.ctrip.com/weather/" target="_blank">天气预报</a></dd>
			                    <dd><a href="http://you.ctrip.com/news/" target="_blank">旅游资讯</a></dd>
			                    <dd><a href="http://top.ctrip.com/" target="_blank">旅游榜单</a></dd>
			                    <dd><a href="http://you.ctrip.com/thematic/union.html" target="_blank">旅游专题</a></dd>
			                    <dd><a href="http://you.ctrip.com/sitemap/" target="_blank">地图大全</a></dd>
			                    <dd><a target="_blank" href="http://ct.ctrip.com/">企业商旅</a></dd>
			                    <dd><a target="_blank" href="http://ct.ctrip.com/crptravel/default/landing">中小企业差旅</a></dd>
			                    <dd><a target="_blank" href="http://pages.ctrip.com/commerce/promote/201106/other/slqz/index.html">商旅签证</a></dd>
			                    <dd><a target="_blank" href="http://ct.ctrip.com/Corp.Product.RFP/Hotel/Login.aspx">RFP通道</a></dd>  
                			</dl>
                		<div class="indices-line"></div>
                			<dl class="indices-hot">
	                    		<dt>快速入口</dt>
				             	<dd><a target="_blank" href="http://you.ctrip.com/around/cities">周末游</a></dd>
				              	<dd><a target="_blank" href="http://tuan.ctrip.com/group/citydaquan.html">团购导航</a></dd>
				              	<dd><a target="_blank" href="http://piao.ctrip.com/dest/c-china-1-a.html">门票导航</a></dd>
			                    <dd><a target="_blank" href="http://campus.ctrip.com/">携程学生旅行</a></dd>
			                    <dd><a target="_blank" href="http://campus.ctrip.com/cca">携程校园大使</a></dd>
			                    <dd><a target="_blank" href="http://www.kztpms.com?ctm_ref=3">客栈管理系统</a></dd>
			                    <dd><a target="_blank" href="http://hotels.ctrip.com/jiameng/">酒店加盟</a></dd>
			                    <dd><a target="_blank" href="http://www.skysea.com/">天海邮轮</a></dd>
			                    <dd><a target="_blank" href="http://ct.ctrip.com/crptravel/default/landing">中小企业差旅</a></dd>
	               			 </dl>
           			 	</div>
					</div>
				</div>
				<!-- 快速导航入口结束 -->

				<!-- 友情链接开始 -->
				<div class="friend-link-wrapper">
					<div class="friend-link-content">
						<div class="reason-to-choose">
							<h3>为什么选择携程</h3>
							<ul>
								<li>
									<a href="#">
										<div class="pic-detail good-service">

										</div>
										<div class="word-detail1">
											<h5>放心的服务</h5>
											<p>领先的服务标准 独创的保障体系</p>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="pic-detail cheap-price">

										</div>
										<div class="word-detail2">
											<h5>放心的价格</h5>
											<p>具竞争力的价格 无任何隐形费用</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="friend-indices travel-info">
							<h3>旅游资讯</h3>
							<ul>
								<li><a href="#">宾馆索引</a></li>
								<li><a href="#">攻略索引</a></li>
								<li><a href="#">机票索引</a></li>
								<li><a href="#">网站索引</a></li>
								<li><a href="#">旅游索引</a></li>
								<li><a href="#">火车票索引</a></li>
								<li><a href="#">邮轮索引</a></li>
								<li><a href="#">企业差旅索引</a></li>
								<li><a href="#">用车索引</a></li>
							</ul>
						</div>
						<div class="friend-indices take-part-in">
							<h3>加盟合作</h3>
							<ul>
								<li><a href="#">分销联盟</a></li>
								<li><a href="#">友情链接</a></li>
								<li><a href="#">广告业务</a></li>
								<li><a href="#">企业礼品卡采购</a></li>
								<li><a href="#">保险代理</a></li>
								<li><a href="#">代理合作</a></li>
								<li><a href="#">酒店加盟</a></li>
								<li><a href="#">旅游局及景区合作</a></li>
								<li><a href="#">智慧旅游</a></li>
							</ul>
						</div>
						<div class="friend-indices about-website">
							<h3>关于携程</h3>
							<ul>
								<li><a href="#">关于携程</a></li>
								<li><a href="#">携程热点</a></li>
								<li><a href="#">联系我们</a></li>
								<li><a href="#">诚聘英才</a></li>
								<li><a href="#">旅游度假资质</a></li>
								<li><a href="#">企业公民</a></li>
								<li><a href="#">服务说明</a></li>
								<li><a href="#">营业执照</a></li>
							</ul>
						</div>
					</div>
					<div class="copyright">
						<p>
							Copyright© 1999-2015, ctrip.com. All rights reserved. | ICP证：沪B2-20050130
						</p>
					</div>
				</div>
				<!-- 友情链接结束 -->
			</div>
			<!-- 需求大厅footer结束 -->

		</div>
		<!-- 需求大厅container结束 -->

		<script src="js/demand.js"></script>
       	<script src="js/demand_new.js"></script>
	</body>
</html>