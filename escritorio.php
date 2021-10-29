<?php
session_start();
if (@$_SESSION['autorizado'] !="si")  
{
	header("Location: nologin.php");
	exit();
	}
else{
include("vars.php");

$conn=mysqli_connect($host, $user, $password) or die("No se pudo establecer comunicacion");
$db=mysqli_select_db($conn, $basedatos) or die("Error en la base de datos");

$sql1="SELECT * FROM $tabla0";
$resultado1=mysqli_query($conn, $sql1) or die(mysqli_error($conn));
$filas1=mysqli_num_rows($resultado1);


?>

<html>
<HEAD><TITLE></TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</style>
<LINK type='text/css' rel='StyleSheet' href='nomina.css'>

</HEAD>

<BODY>
<form id="catalogos" name="catalogos">

<br>

<table border="0" align="center">
<tr><td colspan="3" align="center" bgcolor='003300' ><b><font color='ffffff'> USUARIOS ACTIVOS<br>
<tr bgcolor='3399ff'><td>Codigo</td><td>Nombres</td><td>Operaciones</td></tr>

<?php

if($filas1 <1){
   echo "<tr bgcolor='ffff33'><td colspan='3'>No hay registros que mostrar</td></tr>";
}

else{
    $i=0;
	while($usuarios = mysqli_fetch_assoc($resultado1) ) {		
        echo "<tr bgcolor='ffff99'><td>". $usuarios['codigoUsurio'] . "</td><td>" .$usuarios['nombresUsuarios'] . "</a></td><td>" . $usuarios['apellidosUsuarios'] . "</td></tr>";
    }
          echo "<tr bgcolor='cccccc'><td colspan='3'>&nbsp;</td></tr>";  
}
?>
</table>
</form>
</BODY>
</html>
<?php
}
?>