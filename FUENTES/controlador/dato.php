<?php 
session_start();
include ('controlador/negUsuario.php');
include ('modelo/dtUsuario.php');
include ('controlador/negFlujo.php');
include ('modelo/dtFlujo.php');
include ('controlador/negComponente.php');
include ('modelo/dtComponente.php');
include ('controlador/negDato.php');
include ('modelo/dtDato.php');


include ('modelo/DBFactory.php');


$acc = "";
if(isset($_REQUEST["acc"]))
{
	$acc = $_REQUEST["acc"];
}


if($acc == "CREADATO")
{
    $nombre         = $_REQUEST["nombre"];
    $campo         = $_REQUEST["campo"];
    $descripcion    = $_REQUEST["descripcion"]; //QUERY
    /* TIPO DE FUENTE INI */    
    $basedatos_i    = $_REQUEST["basedatos_i"];
    $webservices_i  = $_REQUEST["webservices_i"];
    $colamq_i       = $_REQUEST["colamq_i"];
    $apirest_i      = $_REQUEST["apirest_i"];
    $colajms_i      = $_REQUEST["colajms_i"];
    $archivo_i      = $_REQUEST["archivo_i"];
    $otro_i         = $_REQUEST["otro_i"];
    /* TIPO DE FUENTE FIN */    
    $fuente         = $_REQUEST["fuente"];
    $servidor       = $_REQUEST["servidor"];
    /* AMBIENTE INI */ 
    $QA_i           = $_REQUEST["QA_i"];
    $QA2_i          = $_REQUEST["QA2_i"];
    $BFIX_i         = $_REQUEST["BFIX_i"];
    $SIT_i          = $_REQUEST["SIT_i"];
    /* AMBIENTE FIN */ 

    $content         = $_REQUEST["content"];
    $servicio_proxy  = $_REQUEST["servicio_proxy"];    
    $servicio_cs     = $_REQUEST["servicio_cs"]; 
    $ruta_archivo    = $_REQUEST["ruta_archivo"];
    $origen_del_dato = $_REQUEST["origen_del_dato"];
    $frec_actu       = $_REQUEST["frecuencia_actulaizacion"];
    $dependencia     = $_REQUEST["dependencia"];
    $observaciones   = $_REQUEST["observaciones"];
    $modificable     = $_REQUEST["modificable"];
    $solo_lectura    = $_REQUEST["solo_lectura"];
    $se_virtualiza   = $_REQUEST["se_virtualiza"];
    $esta_virt       = $_REQUEST["esta_virtualizado"];


    $usuarioid = $_SESSION["IGT-usuarioid"];    
    negDato::CreaDato($nombre,$campo,$descripcion,$basedatos_i,$webservices_i,$colamq_i,$apirest_i,$colajms_i,$archivo_i,$otro_i,$fuente,$servidor,$QA_i,$QA2_i,$BFIX_i,$SIT_i,$content,$servicio_proxy,$servicio_cs,$ruta_archivo,$origen_del_dato,$frec_actu,$dependencia,$observaciones,$modificable,$solo_lectura,$se_virtualiza,$esta_virt,$usuarioid);
    echo json_encode("OK");
}





if($acc == "EDITADATO")
{
    $datoid = $_REQUEST["datoid"];
    $nombre         = $_REQUEST["nombre"];
    $campo         = $_REQUEST["campo"];
    $descripcion    = $_REQUEST["descripcion"]; //QUERY
    /* TIPO DE FUENTE INI */    
    $basedatos_i    = $_REQUEST["basedatos_i"];
    $webservices_i  = $_REQUEST["webservices_i"];
    $colamq_i       = $_REQUEST["colamq_i"];
    $apirest_i      = $_REQUEST["apirest_i"];
    $colajms_i      = $_REQUEST["colajms_i"];
    $archivo_i      = $_REQUEST["archivo_i"];
    $otro_i         = $_REQUEST["otro_i"];
    /* TIPO DE FUENTE FIN */    
    $fuente         = $_REQUEST["fuente"];
    $servidor       = $_REQUEST["servidor"];
    /* AMBIENTE INI */ 
    $QA_i           = $_REQUEST["QA_i"];
    $QA2_i          = $_REQUEST["QA2_i"];
    $BFIX_i         = $_REQUEST["BFIX_i"];
    $SIT_i          = $_REQUEST["SIT_i"];
    /* AMBIENTE FIN */ 

    $content         = $_REQUEST["content"];
    $servicio_proxy  = $_REQUEST["servicio_proxy"];    
    $servicio_cs     = $_REQUEST["servicio_cs"]; 
    $ruta_archivo    = $_REQUEST["ruta_archivo"];
    $origen_del_dato = $_REQUEST["origen_del_dato"];
    $frec_actu       = $_REQUEST["frecuencia_actulaizacion"];
    $dependencia     = $_REQUEST["dependencia"];
    $observaciones   = $_REQUEST["observaciones"];
    $modificable     = $_REQUEST["modificable"];
    $solo_lectura    = $_REQUEST["solo_lectura"];
    $se_virtualiza   = $_REQUEST["se_virtualiza"];
    $esta_virt       = $_REQUEST["esta_virtualizado"];


    $usuarioid = $_SESSION["IGT-usuarioid"];    
    negDato::modificaDato($datoid,$nombre,$campo,$descripcion,$basedatos_i,$webservices_i,$colamq_i,$apirest_i,$colajms_i,$archivo_i,$otro_i,$fuente,$servidor,$QA_i,$QA2_i,$BFIX_i,$SIT_i,$content,$servicio_proxy,$servicio_cs,$ruta_archivo,$origen_del_dato,$frec_actu,$dependencia,$observaciones,$modificable,$solo_lectura,$se_virtualiza,$esta_virt,$usuarioid);
    echo json_encode("OK");
}

if($acc == "SETDATOFLUJO")
{
    $datoid = $_REQUEST["datoid"];
    $flujoid = $_REQUEST["flujoid"];
    negDato::flujoAddGetFlujoDato($datoid,$flujoid);
    echo json_encode("OK");
}

if($acc == "ELIMINADATOFLUJO")
{
    $datoid = $_REQUEST["datoid"];
    $flujoid = $_REQUEST["flujoid"];
    negDato::flujoelimnaGetFlujoDato($datoid,$flujoid);
    echo json_encode("OK");
}




?>

