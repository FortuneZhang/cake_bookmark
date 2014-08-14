Url = function(){
}

Url.build_a = function(href){
	var a = document.createElement('a');
	a.href = href;
	return a;	
}

Url.get_param = function(param, url){
	var parser_url = url ? url : window.location.href;
	var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
}