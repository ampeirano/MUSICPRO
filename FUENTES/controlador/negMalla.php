<?php
class negMalla{
    public static function getMallaDetalle()
    { 
    	return dtMalla::getMallaDetalle();
    }

    public static function CreaMalla($ciclo,$origen,$sistema,$malla,$tipo,$interfaz,$directorio_entrada,$directorio_destino,
    $link_fd,$usuarioid)
    { 


        $mallaidArr = dtMalla::CreaMalla($ciclo,$origen,$sistema,$malla,$tipo,$interfaz,$directorio_entrada,$directorio_destino,
        $link_fd,$usuarioid);

        $mallaid = $mallaidArr[0]["id"];


    }
    
    public static function ModificaMalla($ciclo,$origen,$sistema,$malla,$tipo,$interfaz,$directorio_entrada,$directorio_destino,
    $link_fd,$usuarioid,$malla_id,$sistema_id,$interfaz_id)
    {
        dtMalla::ModificaMalla($ciclo,$origen,$sistema,$malla,$tipo,$interfaz,$directorio_entrada,$directorio_destino,
        $link_fd,$usuarioid,$malla_id,$sistema_id,$interfaz_id);

        
    }
    public static function getMallaDetalleById($malla,$sistema,$interfaz)
    { 
    	return dtMalla::getMallaDetalleById($malla,$sistema,$interfaz);
    }

}
?>