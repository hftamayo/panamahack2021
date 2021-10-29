<html>
<HEAD><TITLE>PANAMAHACK: Prueba de Concepto PHP 8.1.0 Backdoor 2021</TITLE>
<LINK type='text/css' rel='StyleSheet' href='nomina.css'>

<script type="text/javascript">
var handler;
 function detectarEvento(Event) {
  if(Event==null) {
  		alert('null');
  		Event=event;
  		}
  handler = (Event.which) ? Event.which : Event.keyCode;
 }
 
 function enviarSalto(Event, siguienteObjeto) {
		  detectarEvento(Event);
		  setTimeout('handler=""',100);
		  if(handler=='13'){
	          var controls = document.getElementsByName(siguienteObjeto);
	          controls[0].focus();
          }
} 
 function validarCampos() {
 if(handler != '13') {
	return true; 
	} 
	return false; 
	} 
 }
</script>

</HEAD>
<BODY onLoad='frminicio.txtdesusu.focus();'>
<form name="frminicio" action="login.php" method="POST" onsubmit="return validarCampos()">
<table align='center' cellpadding='0' cellspacing='0' border='0' bgcolor="#0066CC">
<tr>
<td height='430' width='800' align='center' valign='top'><img src='ph.png' width='200' height='200'>
<table align="center" border="0">
<TR>
   <TD colspan="2" align="center"><div class='logintipo1'>INICIO DE SESION</div></TD>
</TR>
<TR>
   <TD><div class='logintipo2'>Usuario</TD><TD><INPUT type="text" size="20" maxlength="60" name="txtdesusu" onKeyDown="enviarSalto(event, 'txtclausu');"></div></TD>
</TR>
<TR>
   <TD><div class='logintipo2'>Contrase&#241;a</TD><TD><INPUT type="password" size="20" maxlength="15" name="txtclausu" onKeyDown="enviarSalto(event, 'btnenviar')"></div></TD>
</TR>
<tr><td>&nbsp;&nbsp;</td><TD colspan="2">&nbsp;</TD></tr>
<TR align="center"><td>&nbsp;&nbsp;</td><TD colspan="2"><INPUT type="submit" name="btnenviar" value="Conectar">&nbsp;&nbsp;<input type="reset" name="btncancelar" value="Cancelar"></TD>
</TR>
</table>
</td>
</tr>
</table>
</form>
</BODY>
</html>