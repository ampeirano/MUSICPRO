<?php 
session_start();
include ('controlador/negCliente.php');
include ('../modelo/dtProducto.php');
include ('../modelo/DBFactory.php');


$acc = "";
if(isset($_REQUEST["acc"]))
{
	$acc = $_REQUEST["acc"];
}
if($acc=="CREARPRODUCTO")
{
      
    $prod_nombre = $_REQUEST["prod_nombre"];
    $prod_categoria = $_REQUEST["prod_categoria"];
    $prod_desc = $_REQUEST["prod_desc"];
    $prod_tipo = $_REQUEST["prod_tipo"];

    dtProducto::creaProducto($prod_nombre,$prod_categoria,$prod_desc,$prod_tipo);
    echo json_encode("OK");

}
if($acc=="EDITARPRODUCTO")
{      
    $productoid = $_REQUEST["productoid"];
    $prod_nombre = $_REQUEST["prod_nombre"];
    $prod_categoria = $_REQUEST["prod_categoria"];
    $prod_desc = $_REQUEST["prod_desc"];
    $prod_tipo = $_REQUEST["prod_tipo"];

    dtProducto::editaProducto($productoid,$prod_nombre,$prod_categoria,$prod_desc,$prod_tipo);
    echo json_encode("OK");

}
if($acc=="DELETEPRODUCTO")
{      
    $productoid = $_REQUEST["productoid"];

    dtProducto::eliminaProductoById($productoid);
    echo json_encode("OK");

}


?>