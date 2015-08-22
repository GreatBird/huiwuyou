/**
 * Created by wangfulin on 8/22/15.
 */
$(document).ready(function(){
    $(".left-title").click(function(){
        $(".quick-submit-wrapper").css("display","block");
        $(".quick-search-wrapper").css("display","none");
        $(".left-title").addClass("h3-activated");
        if($(".right-title").hasClass("h3-activated")){
            $(".right-title").removeClass("h3-activated");
        }
    });

    $(".right-title").click(function(){
        $(".quick-search-wrapper").css("display","block");
        $(".quick-submit-wrapper").css("display","none");
        $(".right-title").addClass("h3-activated");
        if($(".left-title").hasClass("h3-activated")){
            $(".left-title").removeClass("h3-activated");
        }
    });
});
