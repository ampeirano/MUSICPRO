<?php 
session_start();
session_unset();
session_destroy();

//util class
include ('c_sistema_util/util.php');

//Factory Class
include ('modelo/DBFactory.php');

$tipo = " de Acceso al sistema";
if(isset($_REQUEST["acc"]))
{
	$acc = $_REQUEST["acc"];
	if($acc == "lga")
	{
		$tipo = " de Acceso al sistema";
	}	
	if($acc == "den")
	{
		$tipo = " de seguimiento de denuncia";
	}
	if($acc == "con")
	{
		$tipo = " de seguimiento de consulta";
	}
	
}

?>

<!DOCTYPE html>
<html>
  	<head>
	      <?php 
	    	//SIN VALDIAR SESSION
	    	echo  util::getHeadHtml("0","Recuperar clave","no");
	     ?>	
  	</head>

  	<body class="overflow-hidden light-background">
		<div class="wrapper no-navigation preload">
			<div class="sign-in-wrapper">
				<div class="sign-in-inner">
					<div class="login-brand text-center">
						<img alt="" src="images/recuperar_clave.png" style="height: 60px;"> Recuperar Contraseña <strong class="text-skin"> <?php echo $tipo;?></strong>
					</div>
					

					<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="controlador/acceso_publico.php" method="post">
					<input type="hidden" id="acc" name="acc" value="DOINGRESO" />
					<div class="smart-widget-body">
						<div class="form-group m-bottom-md">
							<strong>Ingresa tu correo electronico</strong>							
							<div id="msj_usr" data-container="body" data-toggle="popover" data-placement="top" data-content=""></div>
							<input onblur="validaNomUsuario();" type="text" id="usuario" name="usuario" class="form-control" placeholder="Ingresa tu correo electronico" >
							
						</div>
						

						<div class="m-top-md p-top-sm">
							<a class="btn btn-success block" onclick="javascript:doRecupera();">Recuperar Contraseña</a>
							
							
							
							
						</div>

						<div class="m-top-md p-top-sm">
							<div class="font-12 text-center m-bottom-xs">
								<a href="javascript:history.back(1)" class="font-12">Volver</a>
							</div>
						</div>
						
						</div>
					</form>
				</div><!-- ./sign-in-inner -->
			</div><!-- ./sign-in-wrapper -->
		</div><!-- /wrapper -->

		<a href="" id="scroll-to-top" class="hidden-print"><i class="icon-chevron-up"></i></a>

		<?php 
		
			echo util::getModal(1,true);
			echo util::getJavaFunctions(1);
		?>
		
		<script type="text/javascript">
			function validaNomUsuario()
			{
				
				if($("#usuario").val()=="")
	            {
					$("#msj_usr").attr("data-content", "Debes indicar tu nombre de usuario!");
					$('#msj_usr').popover('show');
		        }else
		        {
		        	$('#msj_usr').popover('hide');

		        }
		        
			}
			function validaClave()
			{
				
				if($("#password").val()=="")
	            {
					$("#msj_password").attr("data-content", "Debes ingresar tu contraseña!");
					$('#msj_password').popover('show');
		        }else
		        {
		        	$('#msj_password').popover('hide');

		        }
			}
		    function doIngreso()
		    {       
		    	
			    $("#nmod-titulo").html("Accediendo al Sistema");
				$("#nmod-body").html('<div style="text-align:center" id="msg-guardando"> <img alt="" src="images/Loading.gif" style="width:80px;"> </div>');
				$("#nmod-footer").html("");
			         
		        	var modalTitle = "Error- debes revisar lo siguiente.";
		        	var modalBody = "<div style=\"width:100%; text-align: left\"> <strong> No es posible acceder al sistema, por favor revisa lo siguiente.</strong><br /><br />";
		        	var modaFooter = '<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>';
		        	var contError = 0;
		            
		            if($("#usuario").val()=="")
		            {
		                contError ++;
				         validaNomUsuario();
     
		            }
		            if($("#password").val()=="")
		            {
		                contError ++;
				         validaClave();       

		            }
		            mensajeErr ="";
		            if(contError > 0)
		        	{
		        		contError =0;
		        		
		        	}
		        	else
		        	{
		        		
		        		// LEVANTA MODAL
						openModal(1);
		        		msjError = "No pudimos realizar lo solicitado";
		        		urlIn = "controlador/acceso_publico.php";
		        		formalioID = "frm_1";
		        		srv="DOINGRESO";
		        		var valida = getDataJsonSbm(urlIn,formalioID,srv,msjError);
		                //location.href = urlEnv;
		                if(valida == "OK")
		                {
		                	location.href = 'index.php';
	
		                }else
		                {
		                	msg='EL usuario o la clave ingresada no es correcta, por favor intenta nuevamene.';
		                    
		            		$("#nmod-titulo").html("Error de ingreso al sistema");
		            		$("#nmod-body").html(msg);
		            		$("#nmod-footer").html('<button onclick="reloadLocal();" type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>');
		                }
		                
		                  
		                
		        	}
		    }
		</script>
	    
  	</body>
</html>
