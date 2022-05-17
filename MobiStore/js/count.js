var elem = document.getElementById("form-control");
var form_control_val = document.getElementById('form-control-val');
var elem_val = parseInt(form_control_val.getAttribute("value"));
var value = parseInt(elem.getAttribute("value"));
function CountofDetalis(a){
	if ( a == "up"){
		if(value>=1 && value<10){
			value++;
			elem.setAttribute("value", value);
			form_control_val.setAttribute("value", value);
		}
	};

	if (a == "down"){
		if(value>1 && value <=10){
			value--;
			elem.setAttribute("value",value);
			form_control_val.setAttribute("value", value);
		}
	}
};