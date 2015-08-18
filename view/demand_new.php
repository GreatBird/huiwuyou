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
			<?php
				include "newHeader.php";
			?>
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
			<?php
				include "newFooter.php";
			?>
			<!-- 需求大厅footer结束 -->

		</div>
		<!-- 需求大厅container结束 -->

		<script src="js/demand.js"></script>
       	<script src="js/demand_new.js"></script>
	</body>
</html>