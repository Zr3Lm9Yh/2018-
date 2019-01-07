(function(){
//	调用函数
tab();
	
})();

function tab(){
	//1.获取需要的标签
	var allLis = $("tab_header").getElementsByTagName("li");
	var doms = $("tab_content").getElementsByClassName("dom");
    var lastOne = 0;
    //2.遍历监听
     for(var i=0; i<allLis.length;i++){
     	var li= allLis[i];
     	(function(i){
     		li.onmouseover= function(){
     			//1.清楚样式
     			allLis[lastOne].className="";
     			doms[lastOne].style.display="none";
     			//2.设置选中
     			this.className="current";
     			doms[i].style.display="block";
     			//3.赋值
     			lastOne = i;
     		}
     	})(i);
     }
}

function $(id){
	return typeof id==="string"?document.getElementById(id):null;
}
