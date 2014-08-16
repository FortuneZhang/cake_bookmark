Url = function(){
}

Url.build_a = function(href){
	var a = document.createElement('a');
	a.href = href;
	return a;	
}

Url.get_param = function(param, url){
	var parser_url = url ? url : window.location.href;
	var params_string=parser_url.split('?')[1];
	
	if(params_string.length == 0){
		return '';
	}
	
	var params_array  = params_string.split('&');
	var param_value = '';
	for (var i = params_array.length - 1; i >= 0; i--) {
		if(params_array[i].indexOf(param + '=') == 0 ){
			param_value = params_array[i].split('=')[1];
			break;
		}
	};
	return param_value;	
}