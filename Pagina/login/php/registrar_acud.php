
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
$ndoc =  $_POST["ndoc"];
$cons = "SELECT * FROM registro WHERE n_documento = '$ndoc'";

echo $cons;
$verificar_usuario = mysqli_query($mysqli, $cons);


?>

	<div class="form">
    <form method="POST" class="login-form" action="acudientes.php">
      <h3>Datos del acudiente</h3>
      <input type="hidden" name = "ndoc" value = "<?php echo $ndoc ?>">
       <input type="text" name="nombre_acu" placeholder="Nombre acudiente" required>
       <input type="text" name="numero_acu" placeholder="Número acudiente" required>
       <input type="text" name="parentesco" placeholder="Parentesco" required>
       <button>create</button> 
<?php 
  if($ndoc<>""){

	echo "<table border='1' >
		<tr>
			<td>nombre acudiente</td>
			<td>numero</td>
			<td>parentesco</td>	
		</tr>";

		$con=mysqli_connect('localhost','root','','b_registro');
		$nn = "SELECT * FROM acudientes where ndoc = ".$ndoc;
		$result = mysqli_query($con,$nn);
		
		while($mostrar=mysqli_fetch_array($result)){ 
		 echo"<tr>
			<td>".$mostrar['nombre_acu']."</td>
			<td>".$mostrar['numero_acu']."</td>
			<td>".$mostrar['parentesco']."</td>
		</tr>";
	    }
	    echo "</table>";
	}
	 ?>
    </form>
</body>
</html>
