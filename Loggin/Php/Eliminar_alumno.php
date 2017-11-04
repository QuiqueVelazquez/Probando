<?php
$serverName = "DESKTOP-HL5GVE0\SQLEXPRESS1";
$connectionInfo = array("Database"=>"Prueba", "UID"=>"sa", "PWD"=>"12345", "CharacterSet"=>"UTF-8");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if($conn){
	echo "Conexion establecida";
}else{
	echo "Error en la conexion";
}

?>
<br>
<?php
if(!empty($_POST)){
	$matricula=$_POST['matricula'];
	$nombre=$_POST['nombre'];
	$apellidoPa=$_POST['apellidoPa'];
	$apellidoMa=$_POST['apellidoMa'];
	$correo=$_POST['correo'];
	$query= "DELETE FROM Alumno (Matricula) values ($matricula)";
	
	$recurso=sqlsrv_prepare($conn,$query);
	
	if(sqlsrv_execute($recurso)){
		echo 'AGREGADO CORRECTAMENTE';
	}else{
		echo $query;
		echo 'NO AGREGADO';
	}
}
?>