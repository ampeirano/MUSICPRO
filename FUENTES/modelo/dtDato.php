<?php
class dtDato{
    
    public static function getDatoDetalle($datoid)
    { 
    	$SQLquery="call GetDatoDetalle(".$datoid.");";
    	return DBFactory::ExecuteSQLFirst($SQLquery);
    }
    
    public static function CreaDato($fuente,$descripcion,$archivo,$origen_del_dato,$dependencia,$modificable,$se_virtualiza,$servicio_proxy,
    $servicio_cs,$ruta_archivo,$frec_actu,$observaciones,$solo_lectura,$esta_virt,$nombre,$servidor,$campo, $usuarioid)
    { 
    	$SQLquery="call flujoCreaDato('".$fuente."', '".$descripcion."', '".$archivo."', '".$origen_del_dato."', '".$dependencia."', '".$modificable."', '".$se_virtualiza."', '".$servicio_proxy."', '".$servicio_cs."', '".$ruta_archivo."', '".$frec_actu."', '".$observaciones."', '".$solo_lectura."', '".$esta_virt."', '".$nombre."', '".$servidor."', '".$campo."', '".$_SESSION["IGT-usuarioid"]."');";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function flujoCreaDatoTipoFuente($datoid,$tipo_dato)
    { 
    	$SQLquery="call flujoCreaDatoTipoFuente(".$datoid.",'".$tipo_dato."');";
        return DBFactory::ExecuteSQLFirst($SQLquery);
    }
    public static function flujoAddDatoAmbiente($datoid,$ambiente)
    { 
    	$SQLquery="call flujoAddDatoAmbiente(".$datoid.",'".$ambiente."');";
        return DBFactory::ExecuteSQLFirst($SQLquery);
    }
    public static function ModificaDato($datoid,$fuente,$descripcion,$archivo,$origen_del_dato,$dependencia,$modificable,$se_virtualiza,$servicio_proxy,
    $servicio_cs,$ruta_archivo,$frec_actu,$observaciones,$solo_lectura,$esta_virt,$nombre,$servidor,$campo, $usuarioid)
    { 
    	$SQLquery="call flujoModificaDato(".$datoid.",'".$fuente."', '".$descripcion."', '".$archivo."', '".$origen_del_dato."', '".$dependencia."', '".$modificable."', '".$se_virtualiza."', '".$servicio_proxy."', '".$servicio_cs."', '".$ruta_archivo."', '".$frec_actu."', '".$observaciones."', '".$solo_lectura."', '".$esta_virt."', '".$nombre."', '".$servidor."', '".$campo."', '".$_SESSION["IGT-usuarioid"]."');";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    
    public static function flujoAddGetFlujoDato($datoid,$flujoid)
    { 
    	$SQLquery="call flujoAddGetFlujoDato(".$flujoid.",'".$datoid."');";
        return DBFactory::ExecuteSQLFirst($SQLquery);
    }

    public static function flujoelimnaGetFlujoDato($datoid,$flujoid)
    { 
    	$SQLquery="call flujoelimnaGetFlujoDato(".$flujoid.",'".$datoid."');";
        return DBFactory::ExecuteSQLFirst($SQLquery);
    }
    

}
?>