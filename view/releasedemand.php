<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" href="css/reset.css" rel="stylesheet" />
        <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
        <link type="text/css" href="css/releasedemand.css" rel="stylesheet" />
        <script src="js/jquery-2.1.3.min.js"></script>
    </head>
    <body>
        <div class="header-wrapper">
            <?php include "headerbar.php" ?>
            <?php include "headerposition.php" ?>
        </div>
        <div class="release-demand-container">
            <div class="release-demand-content">
                <div class="release-demand-header">
                    <a id="detail-need-jump" class="need-type-active">
                        <div>
                            <h3>精准发布</h3>
                            <p>需求更详细 推荐更快速 报价更精准</p>
                        </div>
                        <span class="left-pointer down-triangle"></span>
                    </a>
                    <a id="general-need-jump">
                        <div>
                            <h3>快速发布</h3>
                            <p>5秒发布 快速反馈 便捷体验</p>
                        </div>
                        <span class="right-pointer"></span>
                    </a>
                </div>
                <div class="detail-need" id="detail-need">
                    <div class="detail-need-form-wrapper">
                        <form>
                            <div class="need-bar">
                                <h4>
                                    <em></em>
                                    基本需求
                                </h4>
                            </div>
                            <div class="form-row">
                                <label><em>*</em>活动地点：</label>
                                <input name="city" type="text" placeholder="活动城市" />
                            </div>
                            <div class="form-row">
                                <label><em>*</em>活动时间：</label>
                                <select class="date-type" name="dateType">
                                    <option value="point">时间点</option>
                                    <option value="gap">时间段</option>
                                </select>
                                <div class="time-point date-type-active">
                                    <input type="text" placeholder="请选择时间" />
                                </div>
                                <div class="time-gap">
                                    <input type="text" placeholder="请选择开始时间" />
                                    <input type="text" placeholder="请选择结束时间" />
                                </div>
                            </div>
                            <div class="form-row">
                                <label><em>*</em>活动天数：</label>
                                <select name="days">
                                    <option value="half">半天</option>
                                    <option value="one">1天</option>
                                    <option value="two">2天</option>
                                    <option value="three">3天</option>
                                    <option value="four">4天</option>
                                    <option value="five">5天</option>
                                    <option value="six">6天</option>
                                    <option value="seven">7天</option>
                                    <option value="eight">8天</option>
                                    <option value="nine">9天</option>
                                    <option value="ten">10天</option>
                                    <option value="tenPlus">10天以上</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <label><em>*</em>活动人数：</label>
                                <input name="peopelNum" type="text" />
                            </div>
                            <div class="form-row">
                                <label><em>*</em>活动类型：</label>
                                <select name="eventType">
                                    <option>会议/培训/讲座</option>
                                    <option>宴会/婚宴</option>
                                    <option>聚会/沙龙/拓展</option>
                                    <option>展览/演出</option>
                                    <option>路演/商业活动</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <label><em>*</em>场地类型：</label>
                                <select name="venuesType">
                                    <option>酒店/宾馆</option>
                                    <option>餐厅/酒楼</option>
                                    <option>休闲场所</option>
                                    <option>场馆/展厅</option>
                                    <option>户外广场</option>
                                    <option>特色场地</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <label><em>*</em>活动预算：</label>
                                <input name="price" type="text" />
                            </div>
                            <div class="form-row">
                                <label>是否用餐：</label>
                                <select name="isDining">
                                    <option value="F">否</option>
                                    <option value="T">是</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <label>是否住宿：</label>
                                <select name="isRoom">
                                    <option value="F">否</option>
                                    <option value="T">是</option>
                                </select>
                            </div>
                            <div class="form-row-textarea">
                                <label>其他要求：</label>
                                <textarea>

                                </textarea>
                            </div>
                            <div class="need-bar">
                                <h4>
                                    <em></em>
                                    联系方式
                                </h4>
                            </div>
                            <div class="form-row">
                                <label><em>*</em>联系人：</label>
                                <input type="text" name="contactname" />
                            </div>
                            <div class="form-row">
                                <label><em>*</em>联系电话：</label>
                                <input type="text" name="phone" />
                            </div>
                            <div class="form-row">
                                <label>常用邮箱：</label>
                                <input type="text" name="email" />
                            </div>
                            <div class="form-row">
                                <div class="check-contact">
                                    <input type="checkbox" class="iscontact" />
                                    不允许商家与我直接联系，仅接受某某会场的在线报价
                                </div>
                            </div>
                            <div class="form-row">
                                <input type="submit" value="发布需求" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="general-need" id="general-need">
                    <div class="general-need-form-wrapper">
                        <form>
                            <div class="need-bar">
                                <h4>
                                    <em></em>
                                    基本需求
                                </h4>
                            </div>
                            <div class="form-row">
                                <label><em>*</em>联系人：</label>
                                <input type="text" name="contactname" />
                            </div>
                            <div class="form-row">
                                <label><em>*</em>联系电话：</label>
                                <input type="text" name="phoen" />
                            </div>
                            <div class="form-row">
                                <label>常见邮箱：</label>
                                <input type="text" name="email" />
                            </div>
                            <div class="form-row-textarea">
                                <label>需求描述：</label>
                                <textarea>

                                </textarea>
                            </div>
                            <div class="form-row">
                                <input type="submit" value="发布需求" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
        <script src="js/releasedemand.js"></script>
    </body>
</html>