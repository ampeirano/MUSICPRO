<?php 
session_start();
session_unset();
session_destroy();

//util class
include ('../c_sistema_util/util.php');
//Factory Class
include ('../modelo/DBFactory.php');
?>

<!DOCTYPE html>
<html>
  	<head>
	      <?php 
	    	//SIN VALDIAR SESSION
	    	//echo  util::getHeadHtml("1","Iniciar Sesion","no");
			$vuelve ='../';

			echo '<meta charset="utf-8">
			<title>Iniciar Sesion - Tienda de Music-Pro</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="">
			<meta name="author" content="Grupo 6 Duoc">
	
			<!-- Bootstrap core CSS -->
			<link href="'.$vuelve.'bootstrap/css/bootstrap.min.css" rel="stylesheet">
			
			<!-- Font Awesome -->
			<link href="'.$vuelve.'css/font-awesome.min.css" rel="stylesheet">
	
			<!-- ionicons -->
			<link href="'.$vuelve.'css/ionicons.min.css" rel="stylesheet">
			
			<!-- Slider -->
			<link href="'.$vuelve.'css/bootstrap-slider.css" rel="stylesheet"/>
	
			<!-- Tag Input -->
			<link href="'.$vuelve.'css/jquery.tagsinput.css" rel="stylesheet">
	
			<!-- Date Time Picker -->
			<link href="'.$vuelve.'css/datetimepicker.css" rel="stylesheet">
			
			<!-- Select2 -->
			<link href="'.$vuelve.'css/select2/select2.css" rel="stylesheet"/>	


			<!-- Morris -->
			<link href="'.$vuelve.'css/morris.css" rel="stylesheet"/>	
	
			<!-- Datepicker -->
			<link href="'.$vuelve.'css/datepicker.css" rel="stylesheet"/>	
	
			<!-- Animate -->
			<link href="'.$vuelve.'css/animate.min.css" rel="stylesheet">
	
			<!-- Owl Carousel -->
			<link href="'.$vuelve.'css/owl.carousel.min.css" rel="stylesheet">
			<link href="'.$vuelve.'css/owl.theme.default.min.css" rel="stylesheet">

			
			<!-- Simplify -->
			<link href="'.$vuelve.'css/simplify.min.css" rel="stylesheet">

			<!-- datatable -->
			<link href="'.$vuelve.'css/dataTables.bootstrap.css" rel="stylesheet">';
	     ?>	


  	</head>

  	<body class="overflow-hidden light-background">
		<div class="wrapper no-navigation preload">
			<div class="sign-in-wrapper">
				<div class="sign-in-inner">
					<div class="login-brand text-center">
						<img alt="" src="../images/login.png" style="height: 50px;"> Acceso <strong class="text-skin">MUSIC-PRO</strong>
					</div>
					

					<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="../controlador/acceso_publico.php" method="post">
					<input type="hidden" id="acc" name="acc" value="DOINGRESO" />
					<div class="smart-widget-body">
						<div class="form-group m-bottom-md">
							<strong>Usuario</strong>							
							<div id="msj_usr" data-container="body" data-toggle="popover" data-placement="top" data-content=""></div>
							<input onblur="validaNomUsuario();" type="text" id="usuario" name="usuario" class="form-control" placeholder="Ingresa tu usuario" >
							
						</div>
						<div class="form-group">
							<strong>Contraseña</strong>
							<div id="msj_password" data-container="body" data-toggle="popover" data-placement="top" data-content=""></div>
							<input onblur="validaClave();" id="password" name="password" type="password" class="form-control" placeholder="Ingresa tu contraseña">
						</div>

						<div class="m-top-md p-top-sm">
							<a class="btn btn-success block" onclick="javascript:doIngreso();">Ingresar</a>
							
							
							
							
						</div>

						<div class="m-top-md p-top-sm">
							<div class="font-12 text-center m-bottom-xs">
								<a href="../recupera_acc.php?acc=lga" class="font-12">Recuperar contraseña</a>
							</div>
						</div>
						
						</div>
					</form>
				</div><!-- ./sign-in-inner -->
			</div><!-- ./sign-in-wrapper -->
		</div><!-- /wrapper -->

		<a href="" id="scroll-to-top" class="hidden-print"><i class="icon-chevron-up"></i></a>

		<?php 
		
			//echo util::getModal(1,true);
			echo '<div class="modal fade" id="normalModal"  >
							<div class="modal-dialog">
							<div class="modal-content">
									<div class="modal-header">
									<button id="btn_modal_close_adm" type="button" class="close" data-dismiss="modal" style=" opacity: 1;color:#fff"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
									<h4 class="modal-title"><span id="nmod-titulo">Información</span></h4>
											</div>
											<div class="modal-body" id="nmod-body">
											
											</div>
									<div class="modal-footer" id="nmod-footer" >
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
							</div>
							</div>
					</div>';
			//echo util::getJavaFunctions(1);

			echo ' <!-- Le javascript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			
			
			<!-- ISFOT -->
			<script src="'.$vuelve.'js/util.js?V1.'.rand(1,100).'"></script>
	
	
			
			<!-- Jquery -->
			<script src="'.$vuelve.'js/jquery-1.11.1.min.js"></script>
			
			<!-- Bootstrap -->
			<script src="'.$vuelve.'bootstrap/js/bootstrap.min.js"></script>
		  
			<!-- Popup Overlay -->
			<script src=\''.$vuelve.'js/jquery.popupoverlay.min.js\'></script>
	
			<!-- Slider -->
			<script src=\''.$vuelve.'js/uncompressed/bootstrap-slider.js\'></script>	
			
			<!-- Tag Input -->
			<script src=\''.$vuelve.'js/jquery.tagsinput.min.js\'></script>
	
			<!-- Moment -->
			<script src=\''.$vuelve.'js/uncompressed/moment.js\'></script>
	
			<!-- Flot -->
			<script src=\''.$vuelve.'js/jquery.flot.min.js\'></script>
	
			<!-- Morris -->
			<script src=\''.$vuelve.'js/rapheal.min.js\'></script>	
			<script src=\''.$vuelve.'js/morris.min.js\'></script>	
	
			<!-- Sparkline -->
			<script src=\''.$vuelve.'js/sparkline.min.js\'></script>
	
			<!-- Skycons -->
			<script src=\''.$vuelve.'js/uncompressed/skycons.js\'></script>
	
			<!-- Popup Overlay -->
			<script src=\''.$vuelve.'js/jquery.popupoverlay.min.js\'></script>
	
			<!-- Easy Pie Chart -->
			<script src=\''.$vuelve.'js/jquery.easypiechart.min.js\'></script>
	
			<!-- Sortable -->
			<script src=\''.$vuelve.'js/uncompressed/jquery.sortable.js\'></script>
	
			<!-- Owl Carousel -->
			<script src=\''.$vuelve.'js/owl.carousel.min.js\'></script>
	
	
			<!-- Date Time picker -->
			<script src=\''.$vuelve.'js/uncompressed/bootstrap-datetimepicker.js\'></script>
	
			<!-- Select2 -->
			<script src=\''.$vuelve.'js/select2.min.js\'></script>
	
			<!-- Slimscroll -->
			<script src=\''.$vuelve.'js/jquery.slimscroll.min.js\'></script>
	
			<!-- Modernizr -->
			<script src=\''.$vuelve.'js/modernizr.min.js\'></script>
			
			<!-- Simplify -->
			<script src="'.$vuelve.'js/simplify/simplify.js"></script>
	
			<script>
				$(function()	{
					//Delete Widget Confirmation
					$(\'#deleteWidgetConfirm\').popup({
						vertical: \'top\',
						pagecontainer: \'.container\',
						transition: \'all 0.3s\'
					});
	
					// Slider		
					$(\'#horizontalSlider1\').slider();
					$(\'#horizontalSlider2\').slider();
					$(\'#horizontalSlider3\').slider();
					$(\'#horizontalSlider4\').slider();
					
					$(\'#verticalSlider1\').slider();
					$(\'#verticalSlider2\').slider();
					$(\'#verticalSlider3\').slider();
					$(\'#verticalSlider4\').slider();
					$(\'#verticalSlider5\').slider();
	
					//Select2
					$(\'.select2\').select2();
	
					//Tag Input
					$(\'#tagsExample\').tagsInput();
	
					//Date & Time Picker
					$(\'.datepicker-input\').datetimepicker({
						pickTime: false
					});
	
					//Date & Time Picker
					$(\'.timepicker-input\').datetimepicker({
						pickDate: false
					});
	
					//Date & Time Picker
					$(\'.datetimepicker-input\').datetimepicker();
				});
				
			</script>';
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
		        		urlIn = "../controlador/acceso_publico.php";
		        		formalioID = "frm_1";
		        		srv="DOINGRESO";
		        		var valida = getDataJsonSbm(urlIn,formalioID,srv,msjError);
		                //location.href = urlEnv;
		                if(valida == "OK")
		                {
		                	location.href = '../index.php';
	
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
