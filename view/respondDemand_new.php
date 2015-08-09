<!DOCTYPE html>
<html>
	<head>	
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="css/reset.css" />
		<link type="text/css" rel="stylesheet" href="css/respondDemand.css" />
	</head>
	<body>
		<div class="step-hint-wrapper">
			<div class="step-hint">
				<div class="step-wrapper bid">
					<div class="step-id-wrapper">
						<div class="step-id step-one">
							1
						</div>
					</div>
					<h5>投标</h5>
				</div>
				<div class="step-wrapper check">
					<div class="step-id-wrapper">
						<div class="step-id step-two">
							2
						</div>
					</div>
					<h5>系统审核</h5>
				</div>
				<div class="step-wrapper complete">
					<div class="step-id-wrapper">
						<div class="step-id step-three">
							3
						</div>
					</div>
					<h5>投标完成</h5>
				</div>
			</div>
			<div>

			</div>
		</div>
		<!-- 投标表格开始 -->
		<div class="bid-form-wrapper">
			<form>
				<table>
					<tr>
						<td class="left-right"><span class="must-have">*</span><span class="input-title">供应商名称：</span><input type="text" placeholder="请输入供应商名称" /></td>
						<td rowspan="1" class="left-right"><span class="must-have">*</span><span class="input-title">直客价：</span><input type="text" placeholder="请输入您给普通用户的价格" /></td>
					</tr>
					<tr>
						<td class="left-right"><span class="must-have"></span><span class="input-title">供应商地址：</span><input type="text" placeholder="请输入供应商地址" /></td>
						<td class="left-right"><span class="must-have">*</span><span class="input-title">淘会场价格：</span><input type="text" placeholder="请输入您给淘会场用户的价格" /></td>
					</tr>
					<tr>
						<td class="left-right"><span class="must-have">*</span><span class="input-title">场地名称：</span><input type="text" placeholder="请输入场地名称" /></td>
						<td class="textarea-wrapper"><span class="must-have"></span><span class="input-title com-desc">商家描述：</span><textarea placeholder="请输入供应商描述，以便用户更方便了解您"></textarea></td>
					</tr>
					<tr>
						<td class="left-right last-two"><span class="must-have"></span><span class="input-title">联系人：</span><input type="text" placeholder="请输入联系人姓名" /></td>
						<td></td>
					</tr>
					<tr>
						<td class="left-right last-one"><span class="must-have">*</span><span class="input-title">联系电话：</span><input type="text" placeholder="请输入您的手机号" /></td>
						<td></td>
					</tr>
					<tr class="btn-line">
						<td class="whole"><input type="button" value="确认投标" class="bid-btn" /></td>
					</tr>
				</table>
			</form>
		</div>
		<!-- 投标表格结束 -->
	</body>
</html>