<?php
class negComponente{
    
    public static function getComponenteDetalle($componenteid)
    { 
    	return dtComponente::getComponenteDetalle($componenteid);
    }
    public static function CreaComponente($nombre,$descripcion,$usuarioid)
    { 
        return dtComponente::CreaComponente($nombre,$descripcion,$usuarioid);
    }
    public static function ModificaComponente($componenteid,$nombre,$descripcion,$usuarioid)
    { 
        return dtComponente::ModificaComponente($componenteid,$nombre,$descripcion,$usuarioid);
    }
    public static function flujoAsociaFlujoCompomente($flujoid,$componenteid)
    { 
        return dtComponente::flujoAsociaFlujoCompomente($flujoid,$componenteid);
    }
    public static function flujoEliminaFlujoCompomente($flujoid,$componenteid)
    { 
        return dtComponente::flujoEliminaFlujoCompomente($flujoid,$componenteid);
    }
    

}
?>