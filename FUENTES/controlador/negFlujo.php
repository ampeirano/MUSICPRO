<?php
class negFlujo{
    public static function getFlujos()
    {
    	return dtFlujo::getFlujos();        
    }
    public static function getComponentes()
    {
        return dtFlujo::getComponentes();        
    }
    public static function getFlujoComponente()
    {
        return dtFlujo::getFlujoComponente();
    }
    public static function getDatos()
    {
        return dtFlujo::getDatos();
    }
    public static function getFlujoDatos()
    {
        return dtFlujo::getFlujoDatos();
    }
    public static function getFlujoDetail($flujoid)
    {
        return dtFlujo::getFlujoDetail($flujoid);
    }
    
    public static function flujoGetDatoTipoFuente()
    {
    	return dtFlujo::flujoGetDatoTipoFuente();
    }
    public static function flujoGetDatoTipoFuenteID($datoid)
    {
    	return dtFlujo::flujoGetDatoTipoFuenteID($datoid);
    }
    public static function flujoGetDatoAmbiente()
    {
    	return dtFlujo::flujoGetDatoAmbiente();
    }
    public static function flujoGetDatoAmbienteID($datoid)
    {
    	return dtFlujo::flujoGetDatoAmbienteID($datoid);
    }
    public static function flujoGetFlujosDatosID($datoid)
    {
        return dtFlujo::flujoGetFlujosDatosID($datoid);
    }
    public static function CreaNuevoFlujo($nombre,$descripcion,$archivo,$usuarioid)
    {
        return dtFlujo::CreaNuevoFlujo($nombre,$descripcion,$archivo,$usuarioid);
    }
    public static function ModificaFlujo($flujoid, $nombre,$descripcion,$estado,$usuarioid)
    {
        return dtFlujo::ModificaFlujo($flujoid, $nombre,$descripcion,$estado,$usuarioid);
    }
    public static function ModificaFileFlujo($flujoid, $archivo,$usuarioid)
    { 
        return dtFlujo::ModificaFileFlujo($flujoid, $archivo,$usuarioid);
    }
    public static function getFlujoMalla($flujoid)
    { 
        return dtFlujo::getFlujoMalla($flujoid);
    }
    public static function getFlujoCreaMallaDetalle($flujoid)
    { 
        return dtFlujo::getFlujoCreaMallaDetalle($flujoid);
    }
    public static function getFlujoMallaDetalleOne($flujoid , $malla , $tipo)
    {
        return dtFlujo::getFlujoMallaDetalleOne($flujoid , $malla , $tipo);
    }
}
?>