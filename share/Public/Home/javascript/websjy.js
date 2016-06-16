// JavaScript Document
//===========================点击展开关闭效果====================================//
function openShutManager(oSourceObj,oTargetObj,shutAble,oOpenTip,oShutTip){
    var sourceObj = typeof oSourceObj == "string" ? document.getElementById(oSourceObj) : oSourceObj;
    var targetObj = typeof oTargetObj == "string" ? document.getElementById(oTargetObj) : oTargetObj;
    var openTip = oOpenTip || "";
    var shutTip = oShutTip || "";
    if(targetObj.style.display!="none"){
       if(shutAble) return;
       targetObj.style.display="none";
       if(openTip  &&  shutTip){
        sourceObj.innerHTML = shutTip; 
       }
    } else {
        
       targetObj.style.display="block";
       if(openTip  &&  shutTip){
        sourceObj.innerHTML = openTip; 
       }
    }
}

// JavaScript Document
//===========================点击展开关闭效果====================================//
function openShutManager2(oSourceObj,oTargetObj,shutAble,oOpenTip,oShutTip){
    var sourceObj2 = typeof oSourceObj == "string" ? document.getElementById(oSourceObj) : oSourceObj;
    var targetObj2 = typeof oTargetObj == "string" ? document.getElementById(oTargetObj) : oTargetObj;
    var openTip2 = oOpenTip || "";
    var shutTip2 = oShutTip || "";
    if(targetObj2.style.display!="none"){
       if(shutAble) return;
       targetObj2.style.display="none";
       if(openTip2  &&  shutTip2){
        sourceObj2.innerHTML = shutTip2; 
       }
    } else {
       targetObj2.style.display="block";
       if(openTip2  &&  shutTip2){
        sourceObj2.innerHTML = openTip2; 
       }
    }
}

function openShutManager3(oSourceObj,oTargetObj,shutAble,oOpenTip,oShutTip){
    var sourceObj3 = typeof oSourceObj == "string" ? document.getElementById(oSourceObj) : oSourceObj;
    var targetObj3 = typeof oTargetObj == "string" ? document.getElementById(oTargetObj) : oTargetObj;
    var openTip3 = oOpenTip || "";
    var shutTip3 = oShutTip || "";
    if(targetObj3.style.display!="none"){
       if(shutAble) return;
       targetObj3.style.display="none";
       if(openTip3  &&  shutTip3){
        sourceObj3.innerHTML = shutTip3; 
       }
    } else {
       targetObj3.style.display="block";
       if(openTip3  &&  shutTip3){
        sourceObj3.innerHTML = openTip3; 
       }
    }
}