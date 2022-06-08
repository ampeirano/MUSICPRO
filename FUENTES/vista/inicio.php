<?php
$flujos = "";
$compoentes = "";
$compflujo = "";
$datos  = "1";
$datosFlujo  ="0";
//$flujos = negFlujo::getFlujos();
//$compoentes = negFlujo::getComponentes();
//$compflujo = negFlujo::getFlujoComponente();
//$datos  = negFlujo::getDatos();
//$datosFlujo  = negFlujo::getFlujoDatos();

?>
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-6">
							<div class="page-title">
								Inicio
							</div>
							<div class="page-sub-header">
								Bienvenido, <?php echo $_SESSION["IGT-nombre"]." ".$_SESSION["IGT-apellidos"];?>, <i class="fa fa-map-marker text-danger"></i> Banco de Chile
							</div>
						</div>
						<div class="col-sm-6 text-right text-left-sm p-top-sm">
							

							
						</div>
					</div>


					<div class="row m-top-md">
						

						<div class="col-lg-4 col-sm-4">
							<div class="statistic-box bg-info m-bottom-md">
								<div class="statistic-title">
									Ventas
								</div>

								<div class="statistic-value">
									<?php echo 2 //count($flujos); ?>
								</div>

								<div class="m-top-md"></div>

								<div class="statistic-icon-background">
									<i class="ion-social-buffer-outline"></i>
									
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4">
							<div class="statistic-box bg-purple m-bottom-md">
								<div class="statistic-title">
									Retiro Local
								</div>

								<div class="statistic-value">
								<?php echo 7 //count($compoentes); ?>
								</div>

								<div class="m-top-md"> </div>

								<div class="statistic-icon-background">
									<i class="ion-cube"></i>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4">
							<div class="statistic-box bg-success m-bottom-md">
								<div class="statistic-title">
									Despachos
								</div>

								<div class="statistic-value">
								<?php echo 9 //count($datos); ?>
								</div>

								<div class="m-top-md"> </div>

								<div class="statistic-icon-background">
									<i class="ion-ios7-keypad"></i>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default weather-widget">
								<table class="table table-striped no-margin">
									<thead>
										<tr>
											<th class="text-left">Nombre Producto</th>
											<th class="text-left">tipo Instrumento</th>
											<th class="text-left">categoria</th>
											<th class="text-center">Acción</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											
											$cont = 0;
											/*foreach($flujos as $f)
											{
												if($f["estado"] == "PUBLICADO")
												{
													$flujoid = $f["flujoid"];
													$cont++;
													echo '	<tr>
																<td class="text-left">'.$cont.'- '.$f["flujo"].'</td>
																<td class="text-left">';
													foreach($compoentes as $c)												
													{
														$componenteid = $c["componenteid"];
														foreach($compflujo as $cf)
														{
															
															//echo "(".$flujoid." == ".$cf["flujoid"]." && ".$componenteid." == ".$cf["componenteid"].")";
															if($flujoid == $cf["flujoid"] && $componenteid == $cf["componenteid"])
															{
																echo '-'.$c["componente"]."<br />";
															}
														}
														

													}
													echo '
																</td>
																<td class="text-left"><strong>';
													foreach($datos as $d)												
													{
														$datoid = $d["datoid"];
														foreach($datosFlujo as $df)
														{
															//echo "(".$flujoid." == ".$df["flujoid"]." && ".$datoid." == ".$df["datoid"].")";
															if($flujoid == $df["flujoid"] && $datoid == $df["datoid"])
															{
																echo '-'.$d["dato"]."<br />";
															}
														}
													}
													echo '															
																					</strong>
																</td>
																<td class="text-center"><a style=" margin-bottom: 5px;min-width: 90px;" class="btn btn-info btn-sm" href="home.php?'.util::encodeParamURL('pth=ver_flujo&flujoid='.$flujoid).'">Ver Detalle</a> </td>										
															</tr>';
												}
												
											}*/										
										?>

										
									</tbody>
								</table>
							</div><!-- ./panel -->
						</div><!-- ./col -->
					</div>
				</div><!-- ./padding-md -->
		
	<script type="text/javascript">


		</script>

			
