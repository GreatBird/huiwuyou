/**
 * Created by wangfulin on 6/8/15.
 */
$(document).ready(function(){
    // stop propagation
    function stopPropagation(eve){
        var e=eve || window.event;
        if(e.preventDefault()){
            e.preventDefault();
        }else if(e.stopPropagation()){
            e.stopPropagation();
        }else{
            e.returnValue=false;
        }
    }
    //close the popup window
    $(".pop-close").click(function(eve){
        $(".pop-login-wrapper").css("display","none");
        stopPropagation(eve);
    });

    //highlight the input when mouse focus
    $('.pop-login-input input[class*="login-icon"]').click(function(eve){
        $('.pop-login-input input[class*="login-icon"]').css("border","1px solid #cfcfcf");
        $(this).css("border","1px solid rgb(41,105,251)");
        stopPropagation(eve);
    });

    //reset the style when click blank space
    $(".pop-login-wrapper").click(function(){
        $('.pop-login-input input[class*="login-icon"]').css("border","1px solid #cfcfcf");
    });
});