/**
 * Created by wangfulin on 6/20/15.
 */
$(".demand-list>ul>li>a").click(function(){
    $(this).nextAll(".demand-content-wrapper").css("display","block");
});
$(".show-detail").click(function(){
    $(this).parent().parent().nextAll(".demand-content-wrapper").find(".demand-detail").css("display","block");
    $(this).parent().parent().parent().css("height","540px");
    $(this).next(".hide-detail").css("display","block");
    $(this).css("display","none");
});

$(".hide-detail").click(function(){
    $(this).parent().parent().nextAll(".demand-content-wrapper").find(".demand-detail").css("display","none");
    $(this).parent().parent().parent().css("height","121px");
    $(this).prev(".show-detail").css("display","block");
    $(this).css("display","none");
});