<?php
class negDato{
    
    public static function getDatoDetalle($datoid)
    { 
    	return dtDato::getDatoDetalle($datoid);
    }
    public static function CreaDato($nombre,$campo,$descripcion,
                                    $basedatos_i,$webservices_i,$colamq_i,$apirest_i,$colajms_i,$archivo_i,$otro_i,
                                    $fuente,$servidor,
                                    $QA_i,$QA2_i,$BFIX_i,$SIT_i,$servicio_proxy,$servicio_cs,
                                    $ruta_archivo,$origen_del_dato,$frec_actu,$dependencia,$observaciones,$modificable,$solo_lectura,
                                    $se_virtualiza,$esta_virt,$usuarioid)
    { 
        $archivo = "N/A";
        if($origen_del_dato == ""){$origen_del_dato = "N/A";}
        if($dependencia == ""){$dependencia = "N/A";}
        if($modificable == ""){$modificable = "N/A";}
        if($ruta_archivo == ""){$ruta_archivo = "N/A";}
        if($frec_actu == ""){$frec_actu = "N/A";}

        $descripcion = str_replace("'","''",$descripcion);

        $datoidArr = dtDato::CreaDato($fuente,$descripcion,$archivo,$origen_del_dato,$dependencia,$modificable,$se_virtualiza,$servicio_proxy,
        $servicio_cs,$ruta_archivo,$frec_actu,$observaciones,$solo_lectura,$esta_virt,$nombre,$servidor,$campo, $usuarioid);

        $datoid = $datoidArr[0]["id"];

        if($basedatos_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"Base de Datos");}
        if($webservices_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"Web Services");}
        if($colamq_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"Cola MQ");}
        if($apirest_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"API rest");}
        if($colajms_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"Cola JMS");}
        if($archivo_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"Archivo");}
        if($otro_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"Otro");}

       
        if($QA_i=="SI"){dtDato::flujoAddDatoAmbiente($datoid,"QA");}
        if($QA2_i=="SI"){dtDato::flujoAddDatoAmbiente($datoid,"QA2");}
        if($BFIX_i=="SI"){dtDato::flujoAddDatoAmbiente($datoid,"BFIX");}
        if($SIT_i=="SI"){dtDato::flujoAddDatoAmbiente($datoid,"SIT");}


    }
    public static function ModificaDato($datoid,$nombre,$campo,$descripcion,$basedatos_i,$webservices_i,$colamq_i,$apirest_i,$colajms_i,$archivo_i,$otro_i,$fuente,$servidor,$QA_i,$QA2_i,$BFIX_i,$SIT_i,$content,$servicio_proxy,$servicio_cs,$ruta_archivo,$origen_del_dato,$frec_actu,$dependencia,$observaciones,$modificable,$solo_lectura,$se_virtualiza,$esta_virt,$usuarioid)
    {
        $archivo = "N/A";
        if($origen_del_dato == ""){$origen_del_dato = "N/A";}
        if($dependencia == ""){$dependencia = "N/A";}
        if($modificable == ""){$modificable = "N/A";}
        if($ruta_archivo == ""){$ruta_archivo = "N/A";}
        if($frec_actu == ""){$frec_actu = "N/A";}

        $descripcion = str_replace("'","''",$descripcion);

        dtDato::ModificaDato($datoid,$fuente,$descripcion,$archivo,$origen_del_dato,$dependencia,$modificable,$se_virtualiza,$servicio_proxy,
        $servicio_cs,$ruta_archivo,$frec_actu,$observaciones,$solo_lectura,$esta_virt,$nombre,$servidor,$campo, $usuarioid);

        
        if($basedatos_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"Base de Datos");}
        if($webservices_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"Web Services");}
        if($colamq_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"Cola MQ");}
        if($apirest_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"API rest");}
        if($colajms_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"Cola JMS");}
        if($archivo_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"Archivo");}
        if($otro_i=="SI"){dtDato::flujoCreaDatoTipoFuente($datoid,"Otro");}

       
        if($QA_i=="SI"){dtDato::flujoAddDatoAmbiente($datoid,"QA");}
        if($QA2_i=="SI"){dtDato::flujoAddDatoAmbiente($datoid,"QA2");}
        if($BFIX_i=="SI"){dtDato::flujoAddDatoAmbiente($datoid,"BFIX");}
        if($SIT_i=="SI"){dtDato::flujoAddDatoAmbiente($datoid,"SIT");} 
    }

    public static function flujoAddGetFlujoDato($datoid,$flujoid)
    { 
        return dtDato::flujoAddGetFlujoDato($datoid,$flujoid);
    }
    public static function flujoelimnaGetFlujoDato($datoid,$flujoid)
    { 
        return dtDato::flujoelimnaGetFlujoDato($datoid,$flujoid);
    }

}
?>