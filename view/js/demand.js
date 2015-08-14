/**
 * Created by wangfulin on 6/20/15.
 */
$(".demand-list>ul>li>a").click(function(){
    $(this).nextAll(".demand-content-wrapper").css("display","block");
});
$(".show-detail").click(function(){
    $(".demand-detail").css("display","block");
    $(this).next(".hide-detail").css("display","block");
    $(this).css("display","none");
});

$(".hide-detail").click(function(){
    $(".demand-detail").css("display","none");
    $(this).prev(".show-detail").css("display","block");
    $(this).css("display","none");
});