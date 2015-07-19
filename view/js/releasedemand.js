/**
 * Created by wangfulin on 6/18/15.
 */
$(".date-type").change(function(){
    var selectedItem=$(this).val();
    var $timePoint=$(".time-point");
    var $timeGap=$(".time-gap");
    if(selectedItem==="gap"){
        $timePoint.removeClass("date-type-active");
        $timeGap.addClass("date-type-active");
    }else{
        $timeGap.removeClass("date-type-active");
        $timePoint.addClass("date-type-active");
    }
});

(function(){
    $detailNeedJump=$("#detail-need-jump");
    $generalNeedJump=$("#general-need-jump");
    $detailNeed=$("#detail-need");
    $generalNeed=$("#general-need");
    $detailNeedJump.click(function(){
        if(!$detailNeedJump.hasClass("need-type-active")){
            $detailNeedJump.addClass("need-type-active");
        }
        $leftPointer=$detailNeedJump.find(".left-pointer");
        if(!$leftPointer.hasClass("down-triangle")){
            $leftPointer.addClass("down-triangle");
        }
        if($generalNeedJump.hasClass("need-type-active")){
            $generalNeedJump.removeClass("need-type-active");
        }
        $rightPointer=$generalNeedJump.find(".right-pointer");
        if($rightPointer.hasClass("down-triangle")){
            $rightPointer.removeClass("down-triangle");
        }
        $detailNeed.css("display","block");
        $generalNeed.css("display","none");
    });

    $generalNeedJump.click(function(){
        if(!$generalNeedJump.hasClass("need-type-active")){
            $generalNeedJump.addClass("need-type-active");
        }
        $rightPointer=$generalNeedJump.find(".right-pointer");
        if(!$rightPointer.hasClass("down-triangle")){
            $rightPointer.addClass("down-triangle");
        }
        if($detailNeedJump.hasClass("need-type-active")){
            $detailNeedJump.removeClass("need-type-active");
        }
        $leftPointer=$detailNeedJump.find(".left-pointer");
        if($leftPointer.hasClass("down-triangle")){
            $leftPointer.removeClass("down-triangle");
        }
        $generalNeed.css("display","block");
        $detailNeed.css("display","none");
    });
})();