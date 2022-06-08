<?php
class dtMalla{
    public static function getMallaDetalle()
    { 
        $SQLquery="call getMallaLista();";
    	return DBFactory::ExecuteSQL($SQLquery);
    }

    public static function CreaMalla($ciclo,$origen,$sistema,$malla,$tipo,$interfaz,$directorio_entrada,$directorio_destino,
    $link_fd,$usuarioid)
    { 
    	$SQLquery="call flujoCreaMalla('".$ciclo."', '".$origen."', '".$sistema."', '".$malla."', '".$tipo."', '".$interfaz."', '".$directorio_entrada."', '".$directorio_destino."', '".$link_fd."', '".$_SESSION["IGT-usuarioid"]."');";
    	return DBFactory::ExecuteSQL($SQLquery);
    }

    public static function ModificaMalla($ciclo,$origen,$sistema,$malla,$tipo,$interfaz,$directorio_entrada,$directorio_destino,
    $link_fd,$usuarioid,$malla_id,$sistema_id,$interfaz_id)
    { 
    	$SQLquery="call flujoModificaMalla('".$ciclo."', '".$origen."', '".$sistema."', '".$malla."', '".$tipo."', '".$interfaz."', '".$directorio_entrada."', 
                            '".$directorio_destino."', '".$link_fd."', ".$usuarioid.");";
    	//echo $SQLquery;
        return DBFactory::ExecuteNonQuery($SQLquery);
    }
    public static function getMallaDetalleById($malla,$sistema,$interfaz)
    { 
        $SQLquery="call getMallaDetalleById(".$malla.",".$sistema.",".$interfaz.");";
    	return DBFactory::ExecuteSQLFirst($SQLquery);
    }

}
?>