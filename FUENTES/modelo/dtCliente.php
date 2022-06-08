<?php 
class dtCliente{
    public static function getClientes()
    {
        $SQLquery="select * from cliente;";
        return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function creaCliente($cli_nombre,$cli_apellido,$cli_rut,$cli_fecnac,$cli_edad,$cli_correo)
    {
        if($cli_apellido==""){$cli_apellido ="";}
        $SQLquery="INSERT INTO musicpro.cliente(rut, fecha_nacimiento, email, nombre, apellido, edad)
                                VALUES('".$cli_rut."','".$cli_fecnac."' ,'".$cli_correo."' ,'".$cli_nombre."' ,'".$cli_apellido."' , ".$cli_edad.");";
        //echo $SQLquery;
        return DBFactory::ExecuteNonQuery($SQLquery);
    }
    public static function editaCliente($clienteid,$cli_rut,$cli_fecnac,$cli_correo,$cli_nombre,$cli_apellido,$cli_edad)
    {
        $SQLquery="UPDATE musicpro.cliente
        SET rut='".$cli_rut."', fecha_nacimiento='".$cli_fecnac."', email='".$cli_correo."', nombre='".$cli_nombre."', apellido='".$cli_apellido."', edad='".$cli_edad."'
        WHERE ID_Cliente=".$clienteid.";";
        //echo $SQLquery;
        return DBFactory::ExecuteNonQuery($SQLquery);
    }
    public static function getClienteById($clienteid)
    {
        $SQLquery="select * from cliente where ID_Cliente =".$clienteid.";";
        return DBFactory::ExecuteSQLFirst($SQLquery);
    }
    public static function eliminaClienteById($clienteid)
    {
        $SQLquery="DELETE FROM musicpro.cliente WHERE ID_Cliente = ".$clienteid."";
        DBFactory::ExecuteNonQuery($SQLquery);
    }
}
?>