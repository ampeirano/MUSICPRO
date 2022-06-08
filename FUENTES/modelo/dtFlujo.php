<?php
class dtFlujo{
    public static function getFlujos()
    {
    	$SQLquery="call flujoGetFlujos();";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function getComponentes()
    {
    	$SQLquery="call flujoGetComponentes();";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function getFlujoComponente()
    {
    	$SQLquery="call flujoGetFlujoComponente();";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function getDatos()
    {
    	$SQLquery="call flujoGetDatos();";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function getFlujoDatos()
    {
    	$SQLquery="call flujoGetFlujoDato();";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function getFlujoDetail($flujoid)
    {
    	$SQLquery="call flujoGetFlujoDetail(".$flujoid.");";
    	return DBFactory::ExecuteSQLFirst($SQLquery);
    }
    public static function flujoGetDatoTipoFuente()
    {
    	$SQLquery="call flujoGetDatoTipoFuente();";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function flujoGetDatoTipoFuenteID($datoid)
    {
    	$SQLquery="call flujoGetDatoTipoFuenteID(".$datoid.");";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function flujoGetDatoAmbiente()
    {
    	$SQLquery="call flujoGetDatoAmbiente();";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function flujoGetDatoAmbienteID($datoid)
    {
    	$SQLquery="call flujoGetDatoAmbienteID(".$datoid.");";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function flujoGetFlujosDatosID($datoid)
    {
    	$SQLquery="call flujoGetFlujosDatosID(".$datoid.");";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function CreaNuevoFlujo($nombre,$descripcion,$archivo,$usuarioid)
    { 
    	$SQLquery="call flujoCreaNuevoFlujo('".$nombre."','".$descripcion."','".$archivo."','".$usuarioid."');";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function ModificaFlujo($flujoid, $nombre,$descripcion,$estado,$usuarioid)
    { 
    	$SQLquery="call flujoModificaFlujo(".$flujoid.", '".$nombre."','".$descripcion."','".$estado."','".$usuarioid."');";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function ModificaFileFlujo($flujoid, $archivo,$usuarioid)
    { 
    	$SQLquery="call flujoModificaFileFlujo(".$flujoid.", '".$archivo."','".$usuarioid."');";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function getFlujoMalla($flujoid)
    {
        $SQLquery="call getFlujoCreaMalla(".$flujoid.");";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function getFlujoCreaMallaDetalle($flujoid)
    {
        $SQLquery="call getFlujoCreaMallaDetalle(".$flujoid.");";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function getFlujoMallaDetalleOne($flujoid , $malla , $tipo)
    {
        $SQLquery="call getFlujoMallaDetalleOne(".$flujoid.",'".$malla."','".$tipo."');";
    	return DBFactory::ExecuteSQL($SQLquery);
    }

    
}
?>