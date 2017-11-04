function guardar(){
	var mat=document.getElementById("matricula").value;
	var nom=document.getElementById("nombre").value;
	var apat=document.getElementById("apellidoPa").value;
	var amat=document.getElementById("apellidoMa").value;
	var dire=document.getElementById("correo").value;
	var xhttp;
	if (window.XMLHttpRequest) {
		//CODIGO NAVEGADOR MODERNO
		xhttp = new XMLHttpRequest();
	}
	else
	{
		xhttp = ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.onreadystatechange=function(){
		if (this.readyState==4 && this.status == 200) {
			document.getElementById("resultado").innerHTML=this.responseText;
		}
	};
	xhttp.open("POST","guardar_empleado_poo.php",true);
	xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	var cad="matricula="+mat+"&nombre="+nom+"&apellidoPa="+apat+"&materno="+amat+"&correo="+email;
	xhttp.send(cad);
}
