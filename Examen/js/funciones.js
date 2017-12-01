var check1 = function(){
	var data1 = document.getElementById('nombre').value;
	var myElement = document.querySelector("#nombre");
	
	if(!isNaN(data1)){
		alert("No puede ingresar numeros en este campo")
	}
	else{
		
	}
}
var check2 = function(){
	var data2 = document.getElementById('email').value;
	var myElement = document.querySelector("#email");
	
	var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var resultado = re.test(data2);
	if(!resultado){
		alert("La direccion de correo ingresada es incorrecta.")
	}
	else{
		
	}
	return resultado;
	
}
var check3 = function(){
	var data1 = document.getElementById('nombre').value;
	var myElement = document.querySelector("#nombre");
	
	var data2 = document.getElementById('email').value;
	var myElement = document.querySelector("#email");
	
	var data3 = document.getElementById('mensaje').value;
	var myElement = document.querySelector("#mensaje");
	
	if(!data1 || !data2){
		alert("Debe llenar los campos requeridos");
	}
	else{
		if(check2()){
		alert("Datos Ingresados Correctamente");
		}
	}
}
