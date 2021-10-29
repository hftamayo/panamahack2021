?php

$xdesusu=$_POST['txtdesusu'];
$xclausu=md5($_POST['txtclausu']);

session_start();

header('Location: escritorio.php');
?>