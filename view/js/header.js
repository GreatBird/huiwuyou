/**
 * Created by wangfulin on 6/7/15.
 */
$(document).ready(function(){
    //show links when mouse is over "fast-nav-item" element
    $(".fast-nav-item").mouseenter(function(){
        $(this).children(".fa").removeClass("fa-caret-right").addClass("fa-caret-down");
        $(this).next(".fast-link").css("display","block");
        $(this).addClass("activated")
    });
    $(".fast-link").mouseenter(function(){
        $(this).prev(".fast-nav-item").children(".fa").removeClass("fa-caret-right").addClass("fa-caret-down");
        $(this).css("display","block");
        $(this).addClass("activated")
    });

    //hide links when mouse moves out "fast-link" element
    $(".fast-nav-item").mouseleave(function(){
        var $fastLink=$(this).next(".fast-link");
        if($fastLink.css("display")==="block") {
            $(this).children(".fa").removeClass("fa-caret-down").addClass("fa-caret-right");
            $fastLink.css("display", "none");
            $(this).removeClass("activated")
        }
    });
    $(".fast-link").mouseleave(function(){
        $(this).prev(".fast-nav-item").children(".fa").removeClass("fa-caret-down").addClass("fa-caret-right");
        $(this).css("display","none");
        $(this).removeClass("activated")
    });

    //select search type
    $(".search-type li").click(function(){
        $(".selected-type").html($(this).text()+'<i class="fa fa-caret-down"></i>');
        $(".search-type").css("display","none");
    });

    //display search type when mouse is over "search-type" element
    $(".selected-type").mouseenter(function(){
        $(this).next(".search-type").css("display","block");
    });
    $(".search-type").mouseenter(function(){
        $(this).css("display","block");
    });

    //hide search type when mouse moves out of "selected-type" element
    $(".selected-type").mouseleave(function(){
        $(this).next(".search-type").css("display","none");
    });
    $(".search-type").mouseleave(function(){
        $(this).css("display","none");
    });

    //display event-form
    $(".event>span").click(function(){
        var $form=$(".event-form-wrapper");
        var $planEvent=$(".plan-event");
        if($planEvent.hasClass("fa-caret-right")){
            $planEvent.removeClass("fa-caret-right");
            $planEvent.addClass("fa-caret-down");
        }else{
            $planEvent.removeClass("fa-caret-down");
            $planEvent.addClass("fa-caret-right");
        }
        if($form.css("display")==="none"){
            $form.css("display","block");
        }else{
            $form.css("display","none");
        }
    });
});
