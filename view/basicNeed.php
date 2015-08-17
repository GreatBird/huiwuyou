<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link type="text/css" href="css/reset.css" rel="stylesheet" />
		<link type="text/css" rel="stylesheet" href="css/base.css" />
		<link type="text/css" rel="stylesheet" href="css/basicNeed.css" />
	</head>
	<body>
		<?php
                include "header.php";
        ?>
		<div class="wrapper">
			<div class="basic-need-wrapper">
				<form>
					<table>
						<tr>
							<td>
								<h5 class="need-name"><span class="must-have">*</span>酒店位置</h5>
								<input class="text-input" type="text" placeholder="请输入酒店位置" />
							</td>
						</tr>
						<tr>
							<td>
								<h5 class="need-name"><span class="must-have">*</span>需要的场地类型（可多选）</h5>
								<input type="checkbox" name="venue-type" value="五星豪华标准" />五星豪华标准
								<input type="checkbox" name="venue-type" value="四星中高档标准" />四星中高档标准
								<input type="checkbox" name="venue-type" value="三星经济普通" />三星经济普通
								<input type="checkbox" name="venue-type" value="特色场地" />特色场地（会所餐厅，会议中心等）
							</td>
						</tr>
						<tr>
							<td>
								<h5 class="need-name inline-h5"><span class="must-have">*</span>开会日期</h5>
								<input class="time-input" type="text" name="startTime" />
								<input class="time-input" type="text" name="endTime" />
							</td>
						</tr>
						<tr>
							<td>
								<h5><span class="must-have">*</span>最多参会人数<input class="num-input" type="text" name="peopleNum" />人</h5>
							</td>
						</tr>
						<tr>
							<td>
								<h5 class="need-name">餐厅和客房需求（选填）</h5>
								<input type="checkbox" name="need" value="need-food" />需要用餐<br />
								<input type="checkbox" name="need" value="need-food" />需要用餐
							</td>
						</tr>
						<tr>
							<td>
								<h5 class="need-name"><span class="must-have">*</span>会议总预算（含餐饮客房预算）<input type="text" class="num-input" />元以内</h5>
							</td>
						</tr>
						<tr>
							<td>
								<h5 class="need-name"><span class="must-have">*</span>酒店投标截止日期<input class="time-input" type="text" /></h5>
							</td>
						</tr>
						<tr>
							<td>
								<h5 class="need-name">餐厅和客房需求（选填）</h5>
								<input type="checkbox" name="need" value="need-food" />需要用餐<br />
								<input type="checkbox" name="need" value="need-food" />需要用餐
							</td>
						</tr>
						<tr>
							<td>
								<h5 class="need-name inline-h5">其他需求</h5>
								<textarea class="other-need"></textarea>
							</td>
						</tr>
						<tr>
							<td><input class="btn-submit" type="submit" value="提交" /></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
 	<!-- content end -->

    <?php
        include "footer.php";
    ?>
	</body>
</html>