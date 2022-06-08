<!DOCTYPE html>
<html lang="en">
<?php 
include ('Util/util.php');
include ('controlador/negCliente.php');
include ('modelo/dtCliente.php');
include ('modelo/DBFactory.php');
session_start();
?>
<head>
<?php 
  echo util::getHeadHtml("1", " Sin permiso");
?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
        	echo util::getMenu5("1",1);
        ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">No tienes permisos</h1>
                        <div class="alert alert-danger">
                                No tienes permisos para acceder a la funcionalidad seleccionada. <a href="#" class="alert-link">Enviale un mensaje al administrador</a>.
                         </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php 
    	
    echo util::getJavaFunctions("1");
    
    ?>

</body>

</html>
