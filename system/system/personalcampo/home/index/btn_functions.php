<?php 
include("../../../connections/db-connect.php");
$user_id = $_SESSION['user_id'];

if(isset($_POST['submit'])){

$ruc = htmlspecialchars($_POST['RUC']);
$DireccionCasa  = strtoupper(htmlspecialchars($_POST['DireccionCasa']));
$nomape  = strtoupper(htmlspecialchars($_POST['nomape']));
$celular= htmlspecialchars($_POST['celular']);
$mail= htmlspecialchars($_POST['mail']);

$NombreBanco= htmlspecialchars($_POST['NombreBanco']);
$CtaAhorros= htmlspecialchars($_POST['CtaAhorros']);
$CtaCorriente= htmlspecialchars($_POST['CtaCorriente']);
$CCI= htmlspecialchars($_POST['CCI']);
$CtaDetra= htmlspecialchars($_POST['CtaDetra']);

$CEnombre  = strtoupper(htmlspecialchars($_POST['CEnombre']));
$CEcelular = htmlspecialchars($_POST['CEcelular']);

$PoliPago = htmlspecialchars($_POST['PoliPago']);
$obs = htmlspecialchars($_POST['obs']);


$mysqla2 = $conn->prepare("INSERT INTO `personalcampo` (`RUC`, `DireccionCasa`, `NombreBanco`, `CtaAhorros`, `CtaCorriente`, `CCI`,
 `CtaDetra`, `CEnombre`, `CEcelular`, `PoliPago`, `obs`, `mail`, `celular`, `nomape`) VALUES 
 ('$ruc','$DireccionCasa','$NombreBanco','$CtaAhorros','$CtaCorriente','$CCI',
 '$CtaDetra','$CEnombre','$CEcelular','$PoliPago','$obs','$mail','$celular','$nomape')");

if($mysqla2 ->execute()){	
	header("Location: index.php?envio=success");

  } else{
	header("Location: index.php?envio=error");
  }  
}

?>