<?php
include('conexion.php');

session_start();

$t_documento = $_POST['t_documento'];
$n_documento = $_POST['n_documento'];
$contras = $_POST['contras'];

$q = "SELECT COUNT(*) as contar FROM registro WHERE t_documento = '$t_documento' and n_documento = '$n_documento' and contras = '$contras'";

$consulta = mysqli_query($mysqli,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
	$_SESSION['log'] = $n_documento; 
	header("location: ../../inicio/pagina.php");
}else{
	echo '<script>
			alert("DATOS INCORRECTOS");
			window.history.go(-1);
			</script>';
}
?>