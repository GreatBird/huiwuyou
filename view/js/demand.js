/**
 * Created by wangfulin on 6/20/15.
 */
$("#show-detail").click(function(){
    $(".demand-detail").css("display","block");
    $("#hide-detail").css("display","block");
    $(this).css("display","none");
});

$("#hide-detail").click(function(){
    $(".demand-detail").css("display","none");
    $("#show-detail").css("display","block");
    $(this).css("display","none");
});