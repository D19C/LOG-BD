<?php
include('conexion.php');
//$bandera = 0;
//@$bandera = $_POST["bandera"];
//if($bandera<>1){

$nombre_acu = $_POST["nombre_acu"];
$numero_acu = $_POST["numero_acu"];
$parentesco = $_POST["parentesco"];
$ndoc = $_POST["ndoc"];


$inserta = "INSERT INTO acudientes(nombre_acu,numero_acu,parentesco,ndoc) VALUE('$nombre_acu','$numero_acu','$parentesco','$ndoc')";

$resultado = mysqli_query($mysqli,$inserta);
if (!$resultado){
	echo 'Error al registrar';
}else{
	echo '<center><h1>Acudiente creado</h1></center>';

}
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SatPLUS</title>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
body{
	background:#1d1d1d; 
}
h1{
	color: #ffffff;
}
</style>
</head>
<body>
	<form method="get" action="../login.html">
   	 <center><button class="button">Continuar</button></center>
</form>
<form action="registrar_acud.php" method="POST">
   <input type="hidden" name = "ndoc" value = "<?php echo $ndoc ?>">
   <center><button class="button">Crear otro acudiente</button></center>
</form>
</body>
</html>