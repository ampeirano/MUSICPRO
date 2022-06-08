<?php 
class dtUsuario{
  
	public static function getAppsByPerfil($perfilid)
    {
    	$SQLquery="call getAppsByPerfil('".$perfilid."')";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function validaUsuario($usuario,$password)
    {
    	$SQLquery="call validaUsuario('".$usuario."','".$password."')";
        //echo $SQLquery;
    	return DBFactory::ExecuteSQLFirst($SQLquery);
    }
    public static function getApps()
    {
    	$SQLquery=" SELECT * FROM sistema_aplicacion;";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function editaRol($nombre,$descripcion,$perfilid)
    {
    	$SQLquery="call editaRol('".$nombre."','".$descripcion."',".$perfilid.")";
    	return DBFactory::ExecuteSQLFirst($SQLquery);
    }
    public static function creaRol($nombre,$descripcion)
    {
    	$SQLquery="call creaRol('".$nombre."','".$descripcion."')";
    	return DBFactory::ExecuteSQLFirst($SQLquery);
    }
    public static function creaUsuario($nombre,$email,$contraseña,$repeat_contraseña,$rol,$estatus,$telefono,$usuario_crea)
    {
        $SQLquery="call creaUsuario('".$nombre."','".$email."','".$contraseña."','".$rol."','".$estatus."','".$telefono."','".$usuario_crea."')";        
        return DBFactory::ExecuteNonQuery($SQLquery);
    }
    
    public static function editaUsuario($nombre,$email,$contraseña,$repeat_contraseña,$rol,$estatus,$telefono,$usuario_crea,$usuarioid)
    {
        $SQLquery="call editaUsuario('".$nombre."','".$email."','".$contraseña."','".$rol."','".$estatus."','".$telefono."','".$usuario_crea."','".$usuarioid."')";
        return DBFactory::ExecuteNonQuery($SQLquery);
    }
    
    public static function limpiaApssCargo($perfilid)
    {
    	$SQLquery="call limpiaApssCargo(".$perfilid.")";
    	DBFactory::ExecuteNonQuery($SQLquery);
    }
    public static function addApssCargo($perfilid,$apliacionid)
    {
    	$SQLquery="call addApssCargo(".$perfilid.",".$apliacionid.")";
    	DBFactory::ExecuteNonQuery($SQLquery);
    }
    public static function getRoles()
    {
    	$SQLquery="call getRoles()";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function getUsuarios()
    {
        $SQLquery="call getUsuarios()";
        return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function getUsuarioXid($usuarioid){
        $SQLquery="call getUsuarioXid(".$usuarioid.")";
        return DBFactory::ExecuteSQLFirst($SQLquery);
    }
    public static function getrolXperfilid($perfilid){
    	$SQLquery="call getrolXperfilid(".$perfilid.")";
    	return DBFactory::ExecuteSQLFirst($SQLquery);
    }
    public static function getActividadUsuariosAll(){
    	$SQLquery="call getActividadUsuariosAll()";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function getFuncionalidades()
    {
    	$SQLquery="call getFuncionalidades()";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function getFuncionalidadesByUsuario($usuarioid)
    {
    	$SQLquery="call getFuncionalidadesByUsuario('".$usuarioid."')";
    	return DBFactory::ExecuteSQL($SQLquery);
    }
    
    
    public static function limpiaFuncionalidadCargo($usuarioid)
    {
    	$SQLquery="call limpiaFuncionalidadCargo(".$usuarioid.")";
    	DBFactory::ExecuteNonQuery($SQLquery);
    }
    public static function addFuncionalidadCargo($usuarioid,$funcionalidadid)
    {
    	$SQLquery="call addFuncionalidadCargo(".$usuarioid.",".$funcionalidadid.")";
    	DBFactory::ExecuteNonQuery($SQLquery);
    }
}
?>