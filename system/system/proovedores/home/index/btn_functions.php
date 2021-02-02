<?php 
include("../../../connections/db-connect.php");
$user_id = $_SESSION['user_id'];

if(isset($_POST['submit'])){

$ruc = htmlspecialchars($_POST['ruc']);
$razonsocial  = strtoupper(htmlspecialchars($_POST['razonsocial']));
$nom_comercial= strtoupper(htmlspecialchars($_POST['nom_comercial']));
$dir_fiscal = strtoupper(htmlspecialchars($_POST['dir_fiscal']));
$dir_local= strtoupper(htmlspecialchars($_POST['dir_local']));
$nombreAC= strtoupper(htmlspecialchars($_POST['nombreAC']));
$emailAC= htmlspecialchars($_POST['emailAC']);
$telfAC= htmlspecialchars($_POST['telfAC']);
$numcelAC= htmlspecialchars($_POST['numcelAC']);
$nombanco= strtoupper(htmlspecialchars($_POST['nombanco']));
$nroctaahorro = htmlspecialchars($_POST['nroctaahorro']);
$ctacorriente = htmlspecialchars($_POST['ctacorriente']);
$ctainterbancaria = htmlspecialchars($_POST['ctainterbancaria']);
$ctadetracciones = htmlspecialchars($_POST['ctadetracciones']);
$nombreAR= strtoupper(htmlspecialchars($_POST['nombreAR']));
$emailAR = htmlspecialchars($_POST['emailAR']);
$telfAR = htmlspecialchars($_POST['telfAR']);
$numcelAR = htmlspecialchars($_POST['numcelAR']);
$nombreAR_e = strtoupper(htmlspecialchars($_POST['nombreAR_e']));
$emailAR_e = htmlspecialchars($_POST['emailAR_e']);
$telfAR_e = htmlspecialchars($_POST['telfAR_e']);
$numcelAR_e = htmlspecialchars($_POST['numcelAR_e']);
$nombreOP = strtoupper(htmlspecialchars($_POST['nombreOP']));
$emailOP = htmlspecialchars($_POST['emailOP']);
$telfOP = htmlspecialchars($_POST['telfOP']);
$numcelOP = htmlspecialchars($_POST['numcelOP']);
$nombreOP_e = strtoupper(htmlspecialchars($_POST['nombreOP_e']));
$emailOP_e = htmlspecialchars($_POST['emailOP_e']);
$telfOP_e = htmlspecialchars($_POST['telfOP_e']);
$numcelOP_e = htmlspecialchars($_POST['numcelOP_e']);
$reservas_individuales = htmlspecialchars($_POST['reservas_individuales']);
$reservas_grupos = htmlspecialchars($_POST['reservas_grupos']);
$politicas_ninhos = htmlspecialchars($_POST['politicas_ninhos']);
$politicas_generales = htmlspecialchars($_POST['politicas_generales']);
$cheks = htmlspecialchars($_POST['cheks']);
$politicas_liberados = htmlspecialchars($_POST['politicas_liberados']);
$anulaciones = htmlspecialchars($_POST['anulaciones']);
$politicas_pagos = htmlspecialchars($_POST['politicas_pagos']);
$web = htmlspecialchars($_POST['web']);


$mysqla = $conn->prepare("INSERT INTO `proveedores` (`RUC`, `Razon Social`, `Nombre Comercial`, `Direccion Fiscal`, 
`Direccion_Local`, `AC_Nombre`, `AC_email`, `AC_telefono`, `AC_celular`, `Nombre Banco`, 
`N° Cuenta de Ahorros`, `N° Cuenta Corriente`, `N° CCI`, `N° Cuenta de Detracciones`, 
`AR_Nombre`, `AR_email`, `AR_telf`, `AR_celular`, `AR_e_Nombre`, `AR_e_email`, `AR_e_telf`, 
`AR_e_celular`, `AO_Nombre`, `AO_email`, `AO_telf`, `AO_celular`, `AO_e_Nombre`, `AO_e_email`,
 `AO_e_telf`, `AO_e_celular`, `Reservaciones Individuales`, `Reservaciones Grupos`, `Politicas de Niños`,
  `Politicas Generales`, `ChIn_ChOut_Day_Use`, `Politicas de Liberados`, `Anulaciones_no_Shows`, `Politica de Pagos`,`web`)
	VALUES
	('$ruc','$razonsocial','$nom_comercial','$dir_fiscal',
'$dir_local','$nombreAC','$emailAC','$telfAC','$numcelAC','$nombanco',
'$nroctaahorro','$ctacorriente','$ctainterbancaria','$ctadetracciones',
'$nombreAR','$emailAR','$telfAR','$numcelAR','$nombreAR_e','$emailAR_e','$telfAR_e',
'$numcelAR_e','$nombreOP','$emailOP','$telfOP','$numcelOP','$nombreOP_e','$emailOP_e',
'$telfOP_e','$numcelOP_e','$reservas_individuales','$reservas_grupos','$politicas_ninhos',
'$politicas_generales','$cheks','$politicas_liberados','$anulaciones','$politicas_pagos','$web')");

if($mysqla ->execute()){		
	/*echo "<script>
	$('#alert').removeClass('hide').slideDown().show(); 
	console.log('post enviado');
	</script>";*/
	header("Location: index.php?envio=success");

  } else{
	header("Location: index.php?envio=error");
	//Console.log('ERROR: Could not able to execute $mysqla . " . mysqli_error($conn)."');
  }  
}

?>