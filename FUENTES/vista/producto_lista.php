

				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
							<i class="fa fa-stack-overflow"></i> Productos
							</div>
							<div class="page-sub-header">
								<a href="../vista/home.php">Inicio</a>/<a href="../vista/home.php?<?php echo util::encodeParamURL('pth=clientes')?>">Administración de productos</a>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-lg-12">
							
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									<a class="btn btn-primary" href="../vista/home.php?<?php echo util::encodeParamURL('pth=crea_producto')?>"><i class="fa fa-plus"></i> Crear nuevo producto</a>
									
									
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
													<th>Producto </th>
													<th>Categoria</th>													
													<th>Tipo</th>										
													<th>Accion</th>													
												</tr>
											</thead>
											<tbody>
											<?php 
											 $productos = dtProducto::getProductos();											 
											 
											 foreach ($productos as $f)
                                             {
											     echo '<tr>
    													<td>'.$f['Nombre_producto'].'</td>
														<td>'.$f['Tipo_de_Producto'].'</td>
														<td>'.$f['Descripcion_producto'].'</td>
														<td style="text-align:center;">
														<a class="btn btn-info btn-sm" href="../vista/home.php?'.util::encodeParamURL('pth=edita_producto&productoid='.$f['ID_Producto'].'').'">Modificar</a>
														<a class="btn btn-danger btn-sm" onclick="eliminaProducto('.$f['ID_Producto'].');">Eliminar</a>
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
		
	<script src='../js/jquery.dataTables.min.js'></script>
	<script src='../js/uncompressed/dataTables.bootstrap.js'></script>
		
	<script type="text/javascript">
	
    function eliminaProducto(productoid)
	{
		if(confirm("Estas seguro de elimiar el cliente ?"))
		{
			doEliminaProducto(productoid);
		}
	}
	function doEliminaProducto(productoid)
	{
		detMalla = getDataJson("../controlador/productos.php","acc=DELETEPRODUCTO&productoid="+productoid,"DELETEPRODUCTO","NO SE PUDO HACER","NO");
		alert("el producto ha sido eliminado exitosamente");
		reloadLocal();
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
