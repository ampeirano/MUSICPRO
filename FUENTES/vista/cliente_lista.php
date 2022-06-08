

				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
							<i class="fa fa-stack-overflow"></i> Clientes
							</div>
							<div class="page-sub-header">
								<a href="../vista/home.php">Inicio</a>/<a href="../vista/home.php?<?php echo util::encodeParamURL('pth=clientes')?>">Administración de clientes</a>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-lg-12">
							
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									<a class="btn btn-primary" href="../vista/home.php?<?php echo util::encodeParamURL('pth=crea_cliente')?>"><i class="fa fa-plus"></i> Crear nuevo cliente</a>
									
									
									<span class="smart-widget-option">
												
					                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
					                                <i class="fa fa-chevron-up"></i>
					                            </a>
					                            
					                            
					                        </span>
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<table class="table table-striped" id="dataTable">
											<thead>
												<tr>
													<th>Nombre </th>
													<th>Rut</th>
													<th>Email</th>
													<th>Fecha Nacimiendo</th>										
													<th>Accion</th>													
												</tr>
											</thead>
											<tbody>
											<?php 
											 $clientes = negCliente::getClientes();											 
											 
											 foreach ($clientes as $f)
                                             {
											     echo '<tr>
    													<td>'.$f['nombre'].' '.$f['apellido'].'</td>
														<td>'.$f['rut'].'</td>
														<td>'.$f['email'].'</td>
														<td>'.$f['fecha_nacimiento'].'</td>
														<td style="text-align:center;">
														<a class="btn btn-info btn-sm" href="../vista/home.php?'.util::encodeParamURL('pth=edita_cliente&clienteid='.$f['ID_Cliente'].'').'">Modificar</a>
														<a class="btn btn-danger btn-sm" onclick="eliminaCliente('.$f['ID_Cliente'].');">Eliminar</a>
														</td>
														
												      </tr>	';

											 }
											 
											?>
																							
											</tbody>
										</table>
									</div><!-- ./task-widget -->
								</div><!-- ./smart-widget-inner -->
							</div><!-- ./smart-widget -->							
						</div><!-- ./col -->
					</div><!-- ./FIN ROW  -->
					
					
				</div><!-- ./padding-md -->
		
	<script src='..js/jquery.dataTables.min.js'></script>
	<script src='..js/uncompressed/dataTables.bootstrap.js'></script>
		
	<script type="text/javascript">
	
	function eliminaCliente(clienteid)
	{
		if(confirm("Estas seguro de elimiar el cliente ?"))
		{
			doEliminaCliente(clienteid);
		}
	}
	function doEliminaCliente(clienteid)
	{
		detMalla = getDataJson("../controlador/productos.php","acc=DELETECLIENTE&clienteid="+clienteid,"DELETECLIENTE","NO SE PUDO HACER","NO");
		alert("el cliente ha sido eliminado exitosamente");
		releadLocal();
	}
		
		$(document).ready(function(){
			
			
			$("#dataTable").dataTable({
		        "oLanguage": {
		            "sLengthMenu": "Mostrando  _MENU_ registros",
		            "sSearch":      "Busqueda: ",
		            "sInfo": "Mostrando <strong>_START_ de _END_</strong> de _TOTAL_ Registros",
		            "oPaginate": {
		                "sFirst":    "Primero",
		                "sLast":     "Último",
		                "sNext":     "Siguiente",
		                "sPrevious": "Anterior"
		            }
		        }
		    });
		   
		});
	</script>
