
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>酒店加盟页</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="css/hotelSignUp.css" />
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/LocalList.js"></script>
    <script>
        window.onload=function(){
            var options = {
                country: 'province', //省级select ID
                state: 'city',     //市级select ID
                city: 'area',       //县区级select ID
                current: '',        //初始化时3个select的默认值，使用region code及 | 区分，如「 01|02|33 」，具体请查阅 xml 数据文件
                language: 'zh_cn',
                path_to_xml: 'resource/data/',    //xml文件所在的地址
                read_only: false
            }

            LocalList.mf_init(options);
        };
    </script>
</head>
<body>
    <div class="header-wrapper">
        <?php include "headerbar.php" ?>
        <?php include "headerposition.php" ?>
    </div>
    <div class="hotelSignUp-container">
        <div class="hotelSignUp">
            <form>
                <div class="part-info basic-info">
                    <table>
                        <tr>
                            <td>酒店信息：</td>
                            <td><input type="text" /></td>
                        </tr>
                        <tr>
                            <td>酒店地址：</td>
                            <td>
                                <select class="city-select" id="province" name="province" onchange="LocalList.mf_processStateList()" style="display:inline;">
                                </select>
                                <select class="city-select" id="city" name="city" onchange="LocalList.mf_processCityList()" style="display:inline;">
                                </select>
                                <select class="city-select" id="area" name="area" style="display:inline;">
                                </select>
                            </td>
                        </tr>
                        <tr class="floatLeft">
                            <td>详细地址：</td>
                            <td><input type="text" /></td>
                        </tr>
                    </table>
                </div>
                <div class="part-info more-info">
                    <table>
                        <tr>
                            <td>酒店类型：</td>
                            <td>
                                <select>
                                    <option>五星／顶级</option>
                                    <option>五星／豪华</option>
                                    <option>五星／高档</option>
                                    <option>五星／舒适</option>
                                    <option>三星／舒适</option>
                                    <option>经济型</option>
                                    <option>特色场地Clubs</option>
                                    <option>度假村Resorts</option>
                                    <option>会议中心</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>房间数：</td>
                            <td><input type="text" name="" /></td>
                        </tr>
                        <tr>
                            <td>电话：</td>
                            <td><input type="text" name="" /></td>
                        </tr>
                        <tr>
                            <td>传真：</td>
                            <td><input type="text" name="" /></td>
                        </tr>
                    </table>
                </div>
                <div class="part-info auth-info">
                    <table>
                        <tr>
                            <td>可提供发票：</td>
                            <td>
                                <input name="invoice" id="invoice-provided" type="radio" value="invoice-provided" /><label for="invoice-provided">是</label>
                                <input name="invoice" id="invoice-not-provided" type="radio" value="invoice-not-provided" /><label for="invoice-not-provided">否</label>
                            </td>
                        </tr>
                        <tr>
                            <td>可提供账单：</td>
                            <td>
                                <input name="bill" id="bill-provided" value="bill-provided" type="radio" /><label for="bill-provided">是</label>
                                <input name="bill" id="bill-not-provided" value="bill-not-provided" type="radio" /><label for="bill-not-provided">否</label>
                            </td>
                        </tr>
                        <tr>
                            <td>三证上传：</td>
                            <td>上传三证信息后，会优先审核哦～</td>
                        </tr>
                        <tr>
                            <td>请上传营业执照：</td>
                            <td><input type="file" /></td>
                        </tr>
                        <tr>
                            <td>请上传组织机构代码证：</td>
                            <td><input type="file" /></td>
                        </tr>
                        <tr>
                            <td>请上传税务登记证：</td>
                            <td><input type="file" /></td>
                        </tr>
                    </table>
                </div>
                <div class="part-info personal-info">
                    <table>
                        <tr>
                            <td>性别：</td>
                            <td>
                               <input type="radio" id="male" value="male" name="gender" /><label for="male">男：</label>
                                <input type="radio" id="female" value="female" name="gender" /><label for="female">男：</label>
                            </td>
                        </tr>
                        <tr>
                            <td>联系人：</td>
                            <td><input type="text" name="" /></td>
                        </tr>
                        <tr>
                            <td>固定电话：</td>
                            <td><input type="text" name="" /></td>
                        </tr>
                        <tr>
                            <td>手机：</td>
                            <td><input type="text" name="" /></td>
                        </tr>
                        <tr>
                            <td>电子邮箱：</td>
                            <td><input type="text" name="" /></td>
                        </tr>
                        <tr>
                            <td>QQ：</td>
                            <td><input type="text" name="" /></td>
                        </tr>
                        <tr>
                            <td class="hotel-submit"><input type="submit" value="提交申请" /></td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
</body>
</html>