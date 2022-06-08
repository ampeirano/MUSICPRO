<?php
class dtComponente{
    
    public static function getComponenteDetalle($componenteid)
    { 
    	$SQLquery="call GetComponenteDetalle(".$componenteid.");";
    	return DBFactory::ExecuteSQLFirst($SQLquery);
    }
    
    public static function CreaComponente($nombre,$descripcion,$usuarioid)
    { 
    	$SQLquery="call flujoCreaCompomente('".$nombre."', '".$descripcion."','".$usuarioid."');";
    	return DBFactory::ExecuteSQL($SQLquery);
    }

    public static function ModificaComponente($componenteid,$nombre,$descripcion,$usuarioid)
    { 
    	$SQLquery="call flujoModificaComponete(".$componenteid.",'".$nombre."', '".$descripcion."','".$usuarioid."');";
        return DBFactory::ExecuteSQL($SQLquery);
    }

    public static function flujoAsociaFlujoCompomente($flujoid,$componenteid)
    { 
    	$SQLquery="call flujoAsociaFlujoCompomente(".$flujoid.",'".$componenteid."');";
        return DBFactory::ExecuteSQL($SQLquery);
    }
    
    public static function flujoEliminaFlujoCompomente($flujoid,$componenteid)
    { 
    	$SQLquery="call flujoEliminaFlujoCompomente(".$flujoid.",'".$componenteid."');";       
        return DBFactory::ExecuteSQL($SQLquery);
    }
    
    

}
?>