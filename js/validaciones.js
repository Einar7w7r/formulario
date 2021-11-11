function validarformulario(){
	var nombre = document.getElementById("nombre").value;
	var regNombre = /^[A-Za-z-áéíóúÁÉÍÓÚ-ÿ\s\d\u00f1\u00d1]{3,30}$/;
	var apellido = document.getElementById("apellido").value;
	var regApellido = /^[A-Za-z-áéíóúÁÉÍÓÚ-ÿ\s\d\u00f1\u00d1]{3,30}$/;
	var email = document.getElementById("email").value;
	var regEmail = /^(.+\@.+\..+)$/;
	var P1 = document.getElementById('P1').value;
	var P2 = document.getElementById('P2').value;
	var P3 = document.getElementById('P3').value;
	var P4 = document.getElementById('P4').value;
	var P5 = document.getElementById('P5').value;
	var P6 = document.getElementById('P6').value;
	var P7 = document.getElementById('P7').value;
	var p8 = document.getElementById("p8").value;
	var regP8 = /^[A-Za-z-áéíóúÁÉÍÓÚ-ÿ\s\d\u00f1\u00d1]{3,100}$/;
	var P9 = document.getElementById('P9').value;
	var P10 = document.getElementById('P10').value;
	var p11 = document.getElementById("p11").value;
	var regP11 = /^[A-Za-z-áéíóúÁÉÍÓÚ-ÿ\s\d\u00f1\u00d1]{3,100}$/;
	var p12 = document.getElementById("p12").value;
	var regP12 = /^[A-Za-z-áéíóúÁÉÍÓÚ-ÿ\s\d\u00f1\u00d1]{3,100}$/;
	var p13 = document.getElementById("p13").value;
	var regP13 = /^[A-Za-z-áéíóúÁÉÍÓÚ-ÿ\s\d\u00f1\u00d1]{3,100}$/;
	var p14 = document.getElementById("p14").value;
	var regP14 = /^[A-Za-z-áéíóúÁÉÍÓÚ-ÿ\s\d\u00f1\u00d1]{3,100}$/;
	var p15 = document.getElementById("p15").value;
	var regP15 = /^[A-Za-z-áéíóúÁÉÍÓÚ-ÿ\s\d\u00f1\u00d1]{3,100}$/;
	var p16 = document.getElementById("p16").value;
	var regP16 = /^[A-Za-z-áéíóúÁÉÍÓÚ-ÿ\s\d\u00f1\u00d1]{3,100}$/;
	var p17 = document.getElementById("p17").value;
	var regP17 = /^[A-Za-z-áéíóúÁÉÍÓÚ-ÿ\s\d\u00f1\u00d1]{3,100}$/;


	if (nombre == "") {
		alert("Debes capturar el campo Nombre(s)");
		document.getElementById("nombre").focus();
		return false;
	}
	if (!nombre.match(regNombre)){
		alert("Debes capturar solo letras y espacios");
		document.getElementById("nombre").focus();
		return false;
	}
	if (apellido == "") {
		alert("Debes capturar el campo Apellidos");
		document.getElementById("apellido").focus();
		return false;
	}
	if (!apellido.match(regApellido)){
		alert("Debes capturar solo letras y espacios");
		document.getElementById("apellido").focus();
		return false;
	}
	if (email == "") {
		alert("Debes capturar el campo email");
		document.getElementById("email").focus();
		return false;
	}
	if (!email.match(regEmail)){
		alert("Debes capturar el formato correcto de email");
		document.getElementById("email").focus();
		return false;
	}
	if (P1 == "") {
		alert("Debes seleccionar una opción para la pregunta 1");
		document.getElementById("P1").focus();
		return false;
	}
	if (P2 == "") {
		alert("Debes seleccionar una opción para la pregunta 2");
		document.getElementById("P2").focus();
		return false;
	}
	if (P3 == "") {
		alert("Debes seleccionar una opción para la pregunta 3");
		document.getElementById("P3").focus();
		return false;
	}
	if (P4 == "") {
		alert("Debes seleccionar una opción para la pregunta 4");
		document.getElementById("P4").focus();
		return false;
	}
	if (P5 == "") {
		alert("Debes seleccionar una opción para la pregunta 5");
		document.getElementById("P5").focus();
		return false;
	}
	if (P6 == "") {
		alert("Debes seleccionar una opción para la pregunta 6");
		document.getElementById("P6").focus();
		return false;
	}
	if (P7 == "") {
		alert("Debes seleccionar una opción para la pregunta 7");
		document.getElementById("P7").focus();
		return false;
	}
	if (p8 == "") {
		alert("Debes capturar tu respuesta para la pregunta 8");
		document.getElementById("p8").focus();
		return false;
	}
	if (!p8.match (regP8)){
		alert("Debes capturar solo letras y espacios");
		document.getElementById("p8").focus();
		return false;
	}
	if (P9 == "") {
		alert("Debes seleccionar una opción para la pregunta 9");
		document.getElementById("P9").focus();
		return false;
	}
	if (P10 == "") {
		alert("Debes seleccionar una opción para la pregunta 10");
		document.getElementById("P10").focus();
		return false;
	}
	if (p11 == "") {
		alert("Debes capturar tu respuesta para la pregunta 11");
		document.getElementById("p11").focus();
		return false;
	}
	if (!p11.match (regP11)){
		alert("Debes capturar solo letras y espacios");
		document.getElementById("p11").focus();
		return false;
	}
	if (p11 == "") {
		alert("Debes capturar tu respuesta para la pregunta 11");
		document.getElementById("p11").focus();
		return false;
	}
	if (!p11.match (regP11)){
		alert("Debes capturar solo letras y espacios");
		document.getElementById("p11").focus();
		return false;
	}
	if (p12 == "") {
		alert("Debes capturar tu respuesta para la pregunta 12");
		document.getElementById("p12").focus();
		return false;
	}
	if (!p12.match (regP12)){
		alert("Debes capturar solo letras y espacios");
		document.getElementById("p12").focus();
		return false;
	}
	if (p13 == "") {
		alert("Debes capturar tu respuesta para la pregunta 13");
		document.getElementById("p13").focus();
		return false;
	}
	if (!p13.match (regP13)){
		alert("Debes capturar solo letras y espacios");
		document.getElementById("p13").focus();
		return false;
	}
	if (p14 == "") {
		alert("Debes capturar tu respuesta para la pregunta 14");
		document.getElementById("p14").focus();
		return false;
	}
	if (!p14.match (regP14)){
		alert("Debes capturar solo letras y espacios");
		document.getElementById("p14").focus();
		return false;
	}
	if (p15 == "") {
		alert("Debes capturar tu respuesta para la pregunta 15");
		document.getElementById("p15").focus();
		return false;
	}
	if (!p15.match (regP15)){
		alert("Debes capturar solo letras y espacios");
		document.getElementById("p15").focus();
		return false;
	}
	if (p16 == "") {
		alert("Debes capturar tu respuesta para la pregunta 16");
		document.getElementById("p16").focus();
		return false;
	}
	if (!p16.match (regP16)){
		alert("Debes capturar solo letras y espacios");
		document.getElementById("p16").focus();
		return false;
	}
	if (p17 == "") {
		alert("Debes capturar tu respuesta para la pregunta 17");
		document.getElementById("p17").focus();
		return false;
	}
	if (!p17.match (regP17)){
		alert("Debes capturar solo letras y espacios");
		document.getElementById("p17").focus();
		return false;
	}
	else {
		if(confirm("¿Estas seguro de enviar tus datos?")){
			alert("Gracias tus datos han sido enviados");
		} else {
			alert("Tus datos no fueron envidaos");
		}
	}
}