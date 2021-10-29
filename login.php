?php
include("vars.php");

$xdesusu=$_POST['txtdesusu'];
$xclausu=md5($_POST['txtclausu']);


else{
$conn=mysqli_connect($host, $user, $password) or die("No se pudo establecer comunicacion");
$db=mysqli_select_db($conn, $basedatos) or die("Error en la base de datos");

$sql="SELECT $tabla0.codigoUsuario, $tabla0.nombresUsuario,$tabla0.apellidosUsuario FROM $tabla0 WHERE $tabla0.credencialUsuario='$xdesusu' AND $tabla0.claveUsuario='$xclausu'";

$resultado=mysqli_query($conn, $sql) or die(mysqli_error($conn));
$filas=mysqli_num_rows($resultado);

	if($filas == 1){
		session_start();
		$xusuario=mysqli_fetch_assoc($resultado);
		$_SESSION[ 'autorizado' ]="si";	
		$_SESSION[ 'codusuario' ] = $xusuario['codigoUsuario'];
		$_SESSION['nombreusuario'] = $xusuario['nombresUsuario'] .  " " . $xperfor['apellidosUsuario'];

			header('Location: escritorio.php');
	}
}
?>