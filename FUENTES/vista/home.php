<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
//util class
include ('../c_sistema_util/util.php');
//Factory Class
include ('../modelo/DBFactory.php');

include '../controlador/negFlujo.php';
include '../modelo/dtFlujo.php';

include '../controlador/negComponente.php';
include '../modelo/dtComponente.php';

include '../controlador/negDato.php';
include '../modelo/dtDato.php';

include '../controlador/negUsuario.php';
include '../modelo/dtUsuario.php';

include '../controlador/negMalla.php';
include '../modelo/dtMalla.php';

include '../controlador/negCliente.php';
include '../modelo/dtCliente.php';

include '../modelo/dtProducto.php';
?>
<!DOCTYPE html>
<html>

	<head>
	    <?php 
	    	//SIN VALDIAR SESSION
	    	echo util::getHeadHtml("1","Bienvenido","si");
	    	echo util::getJavaFunctions(1);
		?>	
		
	</head>
  
  	<body class="overflow-hidden">
		<div class="wrapper preload">
			<?php 
			
				$goModulo="home";
				$usuarioid = "";
				$aplicacionid=0;
				
				if(isset($_REQUEST["qwerty"]))
				{
					util::decodeParamURL($_REQUEST["qwerty"]);
				}
				
				if(isset($_REQUEST["pth"]))
				{
					$goModulo=$_REQUEST["pth"];
					$aplicacionid = negSistema::getAplicacionid($goModulo);
				}
	        
				//Obteine HEADER
	        	echo util::getheader("1");
	        	//Obteine MENU
	        	echo util::getMenu5("1", $goModulo);
	        ?>
			<div class="main-container">
				
				<?php 	
					
					switch ($goModulo) {
						case "home":
							include '../vista/inicio.php';
							negSistema::saveNavegacion("Navegacion","Inicio del Sistema",$aplicacionid);							
						break;
						///music
						case "clientes":							
							include '../vista/cliente_lista.php';
							negSistema::saveNavegacion("Navegacion","Administración de clientes",$aplicacionid);
						break;
						case "crea_cliente":							
							include '../vista/cliente_crea.php';
							negSistema::saveNavegacion("Navegacion","Administración de clientes",$aplicacionid);
						break;
						case "edita_cliente":							
							include '../vista/cliente_edita.php';
							negSistema::saveNavegacion("Navegacion","Administración de clientes",$aplicacionid);
						break;
						case "productos":							
							include '../vista/producto_lista.php';
							negSistema::saveNavegacion("Navegacion","Administración de Productos",$aplicacionid);
						break;
						case "crea_producto":							
							include '../vista/producto_crea.php';
							negSistema::saveNavegacion("Navegacion","Administración de Productos",$aplicacionid);
						break;
						case "edita_producto":							
							include '../vista/producto_edita.php';
							negSistema::saveNavegacion("Navegacion","Administración de Productos",$aplicacionid);
						break;
						//fin paginas music
						case "usuarios":
							echo '<script src="../js/is/is-adm-usuario-rol.js?V1.'.rand(1,999).'"></script>';
							include '../cw_usuario/usuarios.php';
							negSistema::saveNavegacion("Navegacion","Acceso a la administración de los usuarios",$aplicacionid);
						break;
						case "crea_usuario":
						    echo '<script src="../js/is/is-adm-usuario-rol.js?V1.'.rand(1,999).'"></script>';						   
						    include '../cw_usuario/crear_usuario.php';
						    //negSistema::saveNavegacion("Navegacion","Acceso a la creación de un usuario",$aplicacionid);
						break;
						case "editar_usuario":
            			    echo '<script src="../js/is/is-adm-usuario-rol.js?V1.'.rand(1,999).'"></script>';
						    include '../cw_usuario/editar_usuario.php';
						    negSistema::saveNavegacion("Navegacion","Acceso a la edición de un usuario",$aplicacionid);
						break;
						case "crea_rol":
							echo '<script src="../js/is/is-adm-usuario-rol.js?V1.'.rand(1,999).'"></script>';
							include '../cw_usuario/crea_rol.php';
							negSistema::saveNavegacion("Navegacion","Acceso a la creación de un rol",$aplicacionid);
						break;
						case "edita_rol":
							echo '<script src="../js/is/is-adm-usuario-rol.js?V1.'.rand(1,999).'"></script>';
							include '../cw_usuario/edita_rol.php';
							negSistema::saveNavegacion("Navegacion","Acceso a la modificación de un rol",$aplicacionid);
						break;
						/*case "ver_flujo":
							echo '<script src="js/is/is-adm-usuario-rol.js?V1.'.rand(1,999).'"></script>';
							include 'cw_home/flujo.php';
							negSistema::saveNavegacion("Navegacion","Flujos",$aplicacionid);
						break;*/
												
						case "editar_mi_perfil":
							echo '<script src="../js/is/is-adm-usuario-rol.js?V1.'.rand(1,999).'"></script>';
							include '../cw_usuario/editar_perfil.php';
							negSistema::saveNavegacion("Navegacion","Acceso a la edición de un usuario",$aplicacionid);
							break;
						case "adm_flujos":							
							include '../cw_configuracion/flujos.php';
							negSistema::saveNavegacion("Navegacion","Administración de los Flujos",$aplicacionid);
						break;
						case "crear_flujo":								
							echo '<script src="../js/is/is-adm-configuracion-flujo.js?V1.'.rand(1,999).'"></script>';
							include '../cw_configuracion/flujo_crea.php';
							negSistema::saveNavegacion("Navegacion","Administración de los Flujos",$aplicacionid);
						break;
						case "edita_flujo":								
							echo '<script src="../js/is/is-adm-configuracion-flujo.js?V1.'.rand(1,999).'"></script>';
							include '../cw_configuracion/flujo_edita.php';
							negSistema::saveNavegacion("Navegacion","Administración de los Flujos",$aplicacionid);
						break;
						case "adm_componentes":							
							include '../cw_configuracion/componentes.php';
							negSistema::saveNavegacion("Navegacion","Administración de los Flujos",$aplicacionid);
						break;
						case "crear_componente":								
							echo '<script src="../js/is/is-adm-configuracion-componente.js?V1.'.rand(1,999).'"></script>';
							include '../cw_configuracion/componente_crea.php';
							negSistema::saveNavegacion("Navegacion","Administración de los Flujos",$aplicacionid);
						break;
						case "edita_componente":								
							echo '<script src="../js/is/is-adm-configuracion-componente.js?V1.'.rand(1,999).'"></script>';
							include '../cw_configuracion/componente_edita.php';
							negSistema::saveNavegacion("Navegacion","Administración de los Flujos",$aplicacionid);
						break;
						

						case "adm_datos":							
							include '../cw_configuracion/datos.php';
							negSistema::saveNavegacion("Navegacion","Administración de los Flujos",$aplicacionid);
						break;
						case "crear_dato":								
							echo '<script src="../js/is/is-adm-configuracion-dato.js?V1.'.rand(1,999).'"></script>';
							include '../cw_configuracion/dato_crea.php';
							negSistema::saveNavegacion("Navegacion","Administración de los Flujos",$aplicacionid);
						break;
						case "edita_dato":								
							echo '<script src="../js/is/is-adm-configuracion-dato.js?V1.'.rand(1,999).'"></script>';
							include '../cw_configuracion/dato_edita.php';
							negSistema::saveNavegacion("Navegacion","Administración de los Flujos",$aplicacionid);
						break;

						case "adm_mallas":							
							include '../cw_configuracion/mallas.php';
							negSistema::saveNavegacion("Navegacion","Administración de los Flujos",$aplicacionid);
						break;
						case "crear_malla":								
							echo '<script src="../js/is/is-adm-configuracion-dato.js?V1.'.rand(1,999).'"></script>';
							include '../cw_configuracion/malla_crea.php';
							negSistema::saveNavegacion("Navegacion","Administración de los Flujos",$aplicacionid);
						break;
						case "edita_malla":								
							echo '<script src="../js/is/is-adm-configuracion-dato.js?V1.'.rand(1,999).'"></script>';
							include '../cw_configuracion/malla_edita.php';
							negSistema::saveNavegacion("Navegacion","Administración de los Flujos",$aplicacionid);
						break;	

						default:
							include '../vista/inicio.php';
					}
					
				
				?>
				
				
			</div><!-- /main-container -->
			
			<!--  ------ MODAL INI --------- -->
				
				<?php 
					$styleHeadM = ' style="background-color: #4c5f70; color:#fff;" ';
					echo util::getModal(1,true,'','','',$styleHeadM);
					
					echo util::getModal(2,true,'','','',$styleHeadM);
					echo util::getModal(3,true,'','','',$styleHeadM);
				?>
				
			<!-- 
				--------------------------
				------ MODAL FIN ---------
				--------------------------
			 -->
			
			<?php 
				//echo util::getFooter(1);
			?>			
		</div><!-- /wrapper -->
		
		
			

		<a href="#" class="scroll-to-top hidden-print"><i class="fa fa-chevron-up fa-lg"></i></a>
		
	
  	</body>
</html>
