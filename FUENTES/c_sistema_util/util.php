<?php
include ('../controlador/negSistema.php');
include ('../modelo/dtSistema.php');

class util
{
	public static function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	public static function encodeKeyWord($palabra)
	{
		
		$ct="S";
		if(!strpos($palabra, "0") === false){$ct="N";}
		if(!strpos($palabra, "1") === false){$ct="N";}
		if(!strpos($palabra, "2") === false){$ct="N";}
		if(!strpos($palabra, "3") === false){$ct="N";}
		if(!strpos($palabra, "4") === false){$ct="N";}
		if(!strpos($palabra, "5") === false){$ct="N";}
		if(!strpos($palabra, "6") === false){$ct="N";}
		if(!strpos($palabra, "7") === false){$ct="N";}
		if(!strpos($palabra, "8") === false){$ct="N";}
		if(!strpos($palabra, "9") === false){$ct="N";}
		
		if($ct == "S")  
		{
			$palabra = str_replace("a", "0", $palabra);
			$palabra = str_replace("e", "9", $palabra);
			$palabra = str_replace("i", "8", $palabra);
			$palabra = str_replace("o", "7", $palabra);
			$palabra = str_replace("u", "6", $palabra);
			
			$palabra = str_replace("A", "5", $palabra);
			$palabra = str_replace("E", "4", $palabra);
			$palabra = str_replace("I", "3", $palabra);
			$palabra = str_replace("O", "2", $palabra);
			$palabra = str_replace("U", "1", $palabra);
		} 
		
		return ($palabra);
	}
	public static function decodeKeyWord($palabra)
	{
		$ct="S";
		if(!strpos($palabra, "a") === false){$ct="N";}
		if(!strpos($palabra, "e") === false){$ct="N";}
		if(!strpos($palabra, "i") === false){$ct="N";}
		if(!strpos($palabra, "o") === false){$ct="N";}
		if(!strpos($palabra, "u") === false){$ct="N";}
		
		if(!strpos($palabra, "A") === false){$ct="N";}
		if(!strpos($palabra, "E") === false){$ct="N";}
		if(!strpos($palabra, "I") === false){$ct="N";}
		if(!strpos($palabra, "O") === false){$ct="N";}
		if(!strpos($palabra, "U") === false){$ct="N";}
		
		if($ct == "S")
		{
			$palabra = str_replace("0", "a", $palabra);
			$palabra = str_replace("9", "e", $palabra);
			$palabra = str_replace("8", "i", $palabra);
			$palabra = str_replace("7", "o", $palabra);
			$palabra = str_replace("6", "u", $palabra);
			
			$palabra = str_replace("5", "A", $palabra);
			$palabra = str_replace("4", "E", $palabra);
			$palabra = str_replace("3", "I", $palabra);
			$palabra = str_replace("2", "O", $palabra);
			$palabra = str_replace("1", "U", $palabra);
		}
		
		return ($palabra);
	}
	/**
     * util::decodeParamURL($string)
     * [13-01-2016]-DOO: Decodifica los parametros de la URL
     * Version: 1.0
     * Estado: En Operacion
     * @param mixed $string: Parametros de la URL encriptado
     * @1q	return retorna la URL decodificada
     */
    public static function decodeParamURL($string)
    {
        $string = base64_decode($string);
        $string= self::decodeKeyWord($string);
        
        $cad_get = explode("&",$string); //separo la url por &
        foreach($cad_get as $value)
        {
            $val_get = explode("=",$value); //asigno los valosres al GET
            $_REQUEST[$val_get[0]]=utf8_decode($val_get[1]);
        }
    }
    public static function validaSession($vuelve) 
    {
    	if(!isset($_SESSION["IGT-usuarioid"]))
    	{	
    		$url = $vuelve.'vista/login.php';
    		header('Location: ' . $url, true, 301);    		
    		exit();
    	}
    }
    public static function encodeParamURL($urlParam)
    {
    	
    	$urlParam = self::encodeKeyWord($urlParam);
    	return  "qwerty=".base64_encode($urlParam);
    }
    public static function validaFuncionApps($aplicacionid)
    {
    	$apps = $_SESSION["IGT-perfil_obj"];
    	$salida = "NO";
    	foreach ($apps as $a)
    	{
    		if($aplicacionid == $a["aplicacionid"])
    		{
    			$salida = "SI";
    		}
    		
    	}
    	
    	return $salida;
    }
    public static function getMenu5($level,$gof)    
    {
    	
    	$vuelve=self::getLevel($level);
    	$apps = $_SESSION["IGT-perfil_obj"];
    	$func = $_SESSION["IGT-funcion_obj"];
    	
    	
    	$aa_flujos				='N';
        $aa_componentes			='N';
		$aa_datos				='N';
        $aa_usuarops			= 'N';
		$adm_clientes			='N';
        $adm_productos			='N';
       
        foreach ($apps as $a)
        {	
        	if($a["aplicacionid"] == 1){$aa_flujos				='S';}
        	if($a["aplicacionid"] == 2){$aa_usuarops			='S';}
        	//if($a["aplicacionid"] == 3){$aa_componentes			='S';}
        	if($a["aplicacionid"] == 4){$aa_datos				='S';}
			if($a["aplicacionid"] == 4){$aa_mallas				='S';}
			if($a["aplicacionid"] == 3){$adm_clientes			='S';}
			if($a["aplicacionid"] == 3){$adm_productos			='S';}
        }
        
        foreach ($func as $a)
        {
        	if($a["funcionalidadid"] == 1){$ff_denuncias_all	='S';}
        	if($a["funcionalidadid"] == 2){$ff_consultas_all	='S';}
        }
    	
     	$dpl = '<aside class="sidebar-menu fixed">
					<div class="sidebar-inner scrollable-sidebar">
						<div class="main-menu">
							<ul class="accordion">
								<li class="menu-header">
									Main Menu 
								</li>
								<li class="bg-palette1 '; if($gof== "home"){ $dpl.='active';}  $dpl.='" >
									<a href="'.$vuelve.'vista/home.php">
										<span class="menu-content block">
											<span class="menu-icon"><i class="block fa fa-home fa-lg"></i></span>
											<span class="text m-left-sm">Inicio</span>
										</span>
										<span class="menu-content-hover block">
											Inicio
										</span>
									</a>
								</li>';	
     	
     	
     	if($adm_productos == "S" || $adm_clientes == "S" || $aa_datos == "S" )
     	{
     	
     				$dpl .= '
								<li class="openable bg-palette3 '; if($gof == "clientes" || $gof == "adm_flujos"|| $gof == "adm_datos" ){ $dpl.='open';}  $dpl.='">
									<a href="#">
										<span class="menu-content block">
											<span class="menu-icon"><i class="block fa fa-cogs fa-lg"></i></span>
											<span class="text m-left-sm">Configuración</span>
											<span class="submenu-icon"></span>
										</span>
										<span class="menu-content-hover block">
											Config
										</span>
									</a>

								<ul class="submenu">';
     				
     				if($adm_productos == "S")
     				{
     				
						$dpl .= '
									
										<li '; if($gof == "productos" || $gof == "producto_crea" || $gof == "producto_edita"){ $dpl.='class="active" ';}  $dpl.=' ><a href="'.$vuelve.'vista/home.php?'.util::encodeParamURL('pth=productos').'"><span class="submenu-label">Adm. Productos</span></a></li>
										
									';
     				}
     				if($adm_clientes == "S")
     				{
						$dpl .= '
						<li '; if($gof == "clientes" || $gof == "crea_cliente" || $gof == "edita_cliente"){ $dpl.='class="active" ';}  $dpl.=' ><a href="'.$vuelve.'vista/home.php?'.util::encodeParamURL('pth=clientes').'"><span class="submenu-label">Adm. Clientes</span></a></li>
										
									';
     				}
     				/*if($aa_datos == "S")
     				{
						$dpl .= '
                                    	<li '; if($gof == "adm_datos" || $gof == "crea_dato" || $gof == "edita_dato"){ $dpl.='class="active" ';}  $dpl.=' ><a href="'.$vuelve.'vista/home.php?'.util::encodeParamURL('pth=adm_datos').'"><span class="submenu-label">Adm. Datos</span></a></li>
									';
     				}
					if($aa_mallas == "S");
					{
						$dpl .= '
                                    	<li '; if($gof == "adm_mallas" || $gof == "crea_malla" || $gof == "edita_malla"){ $dpl.='class="active" ';}  $dpl.=' ><a href="'.$vuelve.'vista/home.php?'.util::encodeParamURL('pth=adm_mallas').'"><span class="submenu-label">Adm. Mallas</span></a></li>
									';
     				}*/
						$dpl .= '
									</ul>
								</li>';
     	}
		if($aa_usuarops == "S")
		{
			$dpl .= '
								<li class="bg-palette2 '; if($gof == "usuarios" || $gof == "crea_rol"|| $gof == "crea_usuario"|| $gof == "editar_usuario" || $gof == "edita_rol"){ $dpl.='active';}  $dpl.='">
									<a href="'.$vuelve.'vista/home.php?'.util::encodeParamURL('pth=usuarios').'">
										<span class="menu-content block">
											<span class="menu-icon"><i class="block fa fa-user fa-lg"></i></span>
											<span class="text m-left-sm">Usuarios</span>
										</span>
										<span class="menu-content-hover block">
											Usuarios
										</span>
									</a>
								</li>
								';

		}
     				

					$dpl .='

							</ul>
						</div>	
						<div class="sidebar-fix-bottom clearfix">
							<div class="user-dropdown dropup pull-left">
								<a href="'.$vuelve.'vista/login.php" class="pull-right font-18"><i class="ion-log-out"></i></a>	
							</div>
							
						</div>
					</div><!-- sidebar-inner -->
				</aside>';   
     
     
   
     
    return $dpl;
    }
    
    public static function getheader($level){
    	
    	$vuelve=self::getLevel($level);
    	
    	/*
    	$urlenv="usuarioid=".$_SESSION["IGT-usuarioid"]."&user=true";
    	$urlenv="edita_usuario.php?".util::encodeParamURL($urlenv);
    	*/
    	
    	
    	$html= '<header class="top-nav">
					<div class="top-nav-inner">
						<div class="nav-header">
							<button type="button" class="navbar-toggle pull-left sidebar-toggle" id="sidebarToggleSM">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
							<ul class="nav-notification pull-right">
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-lg"></i></a>
									<span class="badge badge-danger bounceIn">1</span>
									<ul class="dropdown-menu dropdown-sm pull-right">
										<li class="user-avatar">
											<img src="'.$vuelve.'images/profile/profile1.jpg" alt="" class="img-circle">
											<div class="user-content">
												<h5 class="no-m-bottom">Technology Solutions</h5>
												<div class="m-top-xs">
													<a href="'.$vuelve.'vista/login.php">Salir</a>
												</div>
											</div>
										</li>	  
										<!--
										<li>
											<a href="'.$vuelve.'vista/home.php">
												Inbox
												<span class="badge badge-danger bounceIn animation-delay2 pull-right">1</span>
											</a>
										</li>			  
										<li>
											<a href="#">
												Notification
												<span class="badge badge-purple bounceIn animation-delay3 pull-right">2</span>
											</a>
										</li>			  
										<li>
											<a href="#" class="sidebarRight-toggle">
												Message
												<span class="badge badge-success bounceIn animation-delay4 pull-right">7</span>
											</a>
										</li>	
										-->		  	  
										<li class="divider"></li>
												  	  
									</ul>
								</li>
							</ul>
							
							<a href="'.$vuelve.'vista/home.php" class="brand" style="text-align:left;">
							<i class="fa fa-database"></i><span class="brand-name">Tienda Music-Pro</span>
							</a>
						</div>
						<div class="nav-container">
							<button type="button" class="navbar-toggle pull-left sidebar-toggle" id="sidebarToggleLG">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<ul class="nav-notification">	
								<li class="search-list">
									<div class="search-input-wrapper">
										
										<div class="search-input">
											<!--
											<input type="text" class="form-control input-sm inline-block">
											<a href="#" class="input-icon text-normal"><i class="ion-ios7-search-strong"></i></a>
											-->
										</div>
										
									</div>
								</li>
							</ul>
							<div class="pull-right m-right-sm">
								<div class="user-block hidden-xs">
									<a href="#" id="userToggle" data-toggle="dropdown">
										<img src="'.$vuelve.'images/profile.png" alt="" class="img-circle inline-block user-profile-pic" />
										<div class="user-detail inline-block">
											'.$_SESSION["IGT-nombre"]." ".$_SESSION["IGT-apellidos"].'
											<i class="fa fa-angle-down"></i>
										</div>
									</a>
									<div class="panel border dropdown-menu user-panel">
										<div class="panel-body paddingTB-sm">
											<ul>
												<li>
													<a href="'.$vuelve.'home.php?'.util::encodeParamURL('pth=editar_mi_perfil').'">
														<i class="fa fa-edit fa-lg"></i><span class="m-left-xs">Mi cuenta</span>
													</a>
												</li>
												<!--
												<li>
													<a href="#">
														<i class="fa fa-inbox fa-lg"></i><span class="m-left-xs">Mis Denuncias</span>
														<span class="badge badge-danger bounceIn animation-delay3">0</span>
													</a>
												</li>
												-->
												<li>
													<a href="'.$vuelve.'vista/login.php">
														<i class="fa fa-power-off fa-lg"></i><span class="m-left-xs">Salir</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<ul class="nav-notification">
									<!--
									<li>
										<a href="#" data-toggle="dropdown"><i class="fa fa-bell fa-lg"></i></a>
										<span class="badge badge-info bounceIn animation-delay6">5</span>
										<ul class="dropdown-menu notification dropdown-3 pull-right">
											<li><a href="#">Tienes  2 notificaciones</a></li>					  
											<li>
												<a href="#">
													<span class="notification-icon bg-success">
														<i class="fa fa-plus"></i>
													</span>
													<span class="m-left-xs">Se han creadpo 2 Deuncias</span>
													<span class="time text-muted"></span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="notification-icon bg-danger">
														<i class="fa fa-bolt"></i>
													</span>
													<span class="m-left-xs">Se han creado 5 consultas nuevas</span>													
												</a>
											</li>														  
										</ul>
									</li>
									-->
								</ul>
							</div>
						</div>
					</div><!-- ./top-nav-inner -->	
				</header>';
    	
    	return $html;
    	
    }
    
    public static function getJavaFunctions($level){
    
    	$vuelve=self::getLevel($level);
    
    	$html= '
	    <!-- Le javascript
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
			
		</script>
		        
				';
    	
    	
    	
    	
    	return $html;
    }
    public static function getHeadHtml($level,$descripcion,$validaSession='si'){

    	$vuelve=self::getLevel($level);      
    	if($validaSession == 'si')
    	{
    		//Valida session
    		self::validaSession($vuelve);
    		
    	}
        $html= '
					<meta charset="utf-8">
				    <title>'.$descripcion.'- Tienda de Music-Pro</title>
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
					<link href="'.$vuelve.'css/dataTables.bootstrap.css" rel="stylesheet">

					
			
					
					';
      
        return $html;       
    }
    public static function getLevel($level)    
    {
        $vuelve="";
        if($level==0){
        	$vuelve="./";
        }
        if($level==1 || $level==1000){
            $vuelve="../";
        }
        if($level==2){
            $vuelve="../../";
        }
        if($level==3){
            $vuelve="../../../";
        }
        return $vuelve;
    }
   	
	public static function pintaConsoleJquery($datoInConsole)
    {
        echo '<script language="javascript" type="text/javascript">
                    $( document ).ready(function() {
                        console.log("'.$datoInConsole.'")
                    });
                    
             </script>
            ';
    }
    public static function getSelected($d1,$d2)
    {
    	$salida='  ';
    	if($d1==$d2)
    	{
    		$salida=' selected="selected" ';
    	}
    	
    	return($salida);
    }
    /***
     * 
     * @param int $tipo 
     * 		   		1 = normal Modal
     * 				2 = large Modal
     * 				3 = small Modal
     *  			4 = todos
     *  @param boolean $btnCloseTit
     */
    public static function getModal($tipo,$btnCloseTit,$titulo='Información',$body='',$footer='<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>',$styleHead="",$styleBody="",$styleFooter="")
    {
    	$htm ='';
    	$n_m = '';
    	$l_m = '';
    	$s_m = '';
    	$a_m = '';
    	
    	/*DEFINE NORMAL MODAL INI*/
    		$n_m = '
					<div class="modal fade" id="normalModal"  >
					  	<div class="modal-dialog">
					    	<div class="modal-content">
					      		<div class="modal-header" '.$styleHead.'>';
    								if($btnCloseTit == true)
    								{$n_m .= '<button id="btn_modal_close_adm" type="button" class="close" data-dismiss="modal" style=" opacity: 1;color:#fff"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';}
    								$n_m .= '
									<h4 class="modal-title"><span id="nmod-titulo">'.$titulo.'</span></h4>
					      		</div>
					      		<div class="modal-body" id="nmod-body" '.$styleBody.'>
					        		'.$body.'
					      		</div>
					      		<div class="modal-footer" id="nmod-footer" '.$styleFooter.'>
					        		'.$footer.'
					      		</div>
					    	</div>
					  	</div>
					</div>';
    	/*DEFINE NORMAL MODAL FIN*/
    	
    	/*DEFINE LARGE MODAL INI*/
    		$l_m = '
					<div class="modal fade" id="largeModal">
					  	<div class="modal-dialog modal-lg">
					    	<div class="modal-content">
					      		<div class="modal-header" '.$styleHead.'>';
    								if($btnCloseTit == true)
    								{$l_m.= '<button type="button" class="close" data-dismiss="modal" style=" opacity: 1;color:#fff"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';}
    								$l_m.= '
									<h4 class="modal-title"><span id="lmod-titulo">'.$titulo.'</span></h4>
					      		</div>
					      		<div class="modal-body" id="lmod-body" '.$styleBody.'>
					        		'.$body.'
					      		</div>
					      		<div class="modal-footer" id="lmod-footer" '.$styleFooter.'>
					        		'.$footer.'
					      		</div>
					    	</div>
					  	</div>
					</div>';
    	/*DEFINE LARGE MODAL FIN*/
    	
    	/*DEFINE SMALL MODAL INI*/
    		$s_m = '
					<div class="modal fade" id="smallModal">
					  	<div class="modal-dialog modal-sm">
					    	<div class="modal-content">
					      		<div class="modal-header" '.$styleHead.'>';
    								if($btnCloseTit == true)
    								{$s_m.= '<button type="button" class="close" data-dismiss="modal" style=" opacity: 1; color:#fff"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';}
    								$s_m.= '
									<h4 class="smod-title"><span id="smod-titulo">'.$titulo.'</span></h4>
					      		</div>
					      		<div class="modal-body" id="smod-body" '.$styleBody.'>
					        		'.$body.'
					      		</div>
					      		<div class="modal-footer" id="smod-footer" '.$styleFooter.'>
					        		'.$footer.'
					      		</div>
					    	</div>
					  	</div>
					</div>';
    	/*DEFINE SMALL MODAL FIN*/
    	
    	/*DEFINE TODOS MODAL INI*/
    		$a_m = $n_m.' '.$l_m.' '.$s_m;
    	/*DEFINE TODOS MODAL FIN*/
    	
    	if($tipo == 1){$htm = $n_m;}
    	if($tipo == 2){$htm = $l_m;}
    	if($tipo == 3){$htm = $s_m;}
    	if($tipo == 4){$htm = $a_m;}
    	
    	return $htm;
    
    	
    }
    public static function getFooter($level)
    {
    	
    	$vuelve=self::getLevel($level);
    	
    	$htm='<footer class="footer">
				<span class="footer-brand">
					<strong class="text-danger" style="color: #15881b;">Tienda Web</strong>MUSIC-PRO
				</span>
				<p class="no-margin">
					&copy; 2022. Technology Solutions
				</p>	
			</footer>';
    	
    	return $htm;
    }
}
?>