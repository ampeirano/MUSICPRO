<?php 
session_start();
include ('controlador/negCliente.php');
include ('../modelo/dtCliente.php');
include ('../modelo/DBFactory.php');


$acc = "";
if(isset($_REQUEST["acc"]))
{
	$acc = $_REQUEST["acc"];
}
if($acc=="CREARCLIENTE")
{
      
    $cli_nombre = $_REQUEST["cli_nombre"];
    $cli_apellido = $_REQUEST["cli_apellido"];
    $cli_rut = $_REQUEST["cli_rut"];
    $cli_fecnac = $_REQUEST["cli_fecnac"];
    $cli_edad = $_REQUEST["cli_edad"];
    $cli_correo = $_REQUEST["cli_correo"];


    dtCliente::creaCliente($cli_nombre,$cli_apellido,$cli_rut,$cli_fecnac,$cli_edad,$cli_correo);
    echo json_encode("OK");

}
if($acc=="EDITARPRODUCTO")
{ 
    $cliienteid = $_REQUEST["clienteid"];
    $cli_nombre = $_REQUEST["cli_nombre"];
    $cli_apellido = $_REQUEST["cli_apellido"];
    $cli_rut = $_REQUEST["cli_rut"];
    $cli_fecnac = $_REQUEST["cli_fecnac"];
    $cli_edad = $_REQUEST["cli_edad"];
    $cli_correo = $_REQUEST["cli_correo"];

    dtCliente::editaCliente($cliienteid,$cli_nombre,$cli_apellido,$cli_rut,$cli_fecnac,$cli_edad,$cli_correo);
    echo json_encode("OK");
}
if($acc=="DELETECLIENTE")
{
    $cliienteid = $_REQUEST["clienteid"];

    dtCliente::eliminaClienteById($cliienteid);
    echo json_encode("OK");

}
?>