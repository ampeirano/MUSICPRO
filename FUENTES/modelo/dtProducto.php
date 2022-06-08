<?php 
class dtProducto{
    public static function getProductos()
    {
        $SQLquery="select * from producto;";
        return DBFactory::ExecuteSQL($SQLquery);
    }
    public static function creaProducto($prod_nombre,$prod_categoria,$prod_desc,$prod_tipo)
    {
        if($prod_categoria==""){$prod_categoria ="";}
        if($prod_tipo==""){$prod_tipo ="";}
        $SQLquery="INSERT INTO musicpro.producto(Descripcion_producto, Tipo_de_Producto, Nombre_producto,categoria_producto)VALUES('".$prod_desc."', '".$prod_tipo."', '".$prod_nombre."','".$prod_categoria."');";
        //echo $SQLquery;
        return DBFactory::ExecuteNonQuery($SQLquery);
    }
    public static function editaProducto($productoid,$prod_nombre,$prod_categoria,$prod_desc,$prod_tipo)
    {
        if($prod_categoria==""){$prod_categoria ="";}
        if($prod_tipo==""){$prod_tipo ="";}
        $SQLquery="UPDATE musicpro.producto
        SET Descripcion_producto='".$prod_desc."', Tipo_de_Producto='".$prod_tipo."', Nombre_producto='".$prod_nombre."', categoria_producto='".$prod_categoria."'
        WHERE ID_Producto=".$productoid.";";
        //echo $SQLquery;
        return DBFactory::ExecuteNonQuery($SQLquery);
    }
    public static function getProductoById($clienteid)
    {
        $SQLquery="select * from producto where ID_Producto =".$clienteid.";";
        return DBFactory::ExecuteSQLFirst($SQLquery);
    }

    public static function eliminaProductoById($productoid)
    {
        $SQLquery="DELETE FROM musicpro.producto WHERE ID_Producto = ".$productoid."";
        DBFactory::ExecuteNonQuery($SQLquery);
    }
}
?>