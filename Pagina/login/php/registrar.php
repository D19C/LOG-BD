
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SatPLUS</title>
	<link rel="stylesheet" href="../css/style.css">
	<style>
		h2{
			color: #ffffff;
		}
	</style>
</head>
<body>
<?php
include('conexion.php');
$bandera=0;
$ndoc="";
$con=mysqli_connect('localhost','root','','b_registro');
if($ndoc==""){
$t_usuario = $_POST["t_usuario"];
$t_documento = $_POST["t_documento"];
$n_documento = $_POST["n_documento"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$contras = $_POST["contras"];
$correo = $_POST["correo"];
$grado = $_POST["grado"];
$f_nac = $_POST["f_nac"];
$t_sangre = $_POST["t_sangre"];
$alergias = $_POST["alergias"];
$n_medicas = $_POST["n_medicas"];


 $insertar = "INSERT INTO registro(t_usuario,t_documento,n_documento,nombres,apellidos,contras,correo,grado,f_nac,t_sangre,alergias,n_medicas) VALUES('$t_usuario','$t_documento','$n_documento','$nombres','$apellidos','$contras','$correo','$grado','$f_nac','$t_sangre','$alergias','$n_medicas')";
}

if($ndoc<>""){
	$cons = "SELECT * FROM registro WHERE n_documento = '$ndoc'";
	
	
} else {
$cons="SELECT * FROM registro WHERE n_documento = '$n_documento'";

}

$verificar_usuario = mysqli_query($mysqli, $cons);


if(mysqli_num_rows($verificar_usuario) > 0){
	echo '<script>
			alert("El usuario ya está registrado");
			window.history.go(-1);
			</script>';
	exit;	
}
$resultado = mysqli_query($mysqli,$insertar);
if (!$resultado){
	echo 'Error al registrar';
}else{


	echo '<center><h1>Nuevo usuario creado</h1></center>';	
}

?>

	<div class="form">
    <form method="POST" class="login-form" action="acudientes.php">
      <h3>Datos del acudiente</h3>
      <input type="hidden" name = "ndoc" value = "<?php echo $n_documento ?>">
       <input type="text" name="nombre_acu" placeholder="Nombre acudiente" required>
       <input type="text" name="numero_acu" placeholder="Número acudiente" required>
       <input type="text" name="parentesco" placeholder="Parentesco" required>
       <button>create</button> 

    </form>
</body>
</html>
