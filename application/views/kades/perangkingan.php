<div class="page-content">
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
			<div class="row">
				<div class="col-md-12">
                    <div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Sistem Pendukung Keputusan
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<?= form_open()?>
									<div class="col-md-6">
										<div class="btn-group pull-left">
											<div class="btn-group">
														<input type="submit" class="btn btn-success" name="perangkingan" value="Mulai Perangkingan">
														
													</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="btn-group pull-right">
											<div class="md-checkbox-inline">
												<div class="md-checkbox has-success">
													<input type="checkbox" id="checkbox35" name="mfep" value="do_mfep" class="md-check">
													<label for="checkbox35"> 
													<span class="inc"></span>
													<span class="check"></span>
													<span class="box"></span>
													Multi Factor Evaluation Process </label>
												</div>
												<div class="md-checkbox has-error">
													<input type="checkbox" id="checkbox34" class="md-check" name="wp" value="do_wp">
													<label for="checkbox34">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Weighted Product</label>
												</div>
											</div>
										
									</div>
									</div>
									<?= form_close()?>
								</div>
							</div>
							<table class="table table-striped table-bordered table-hover">
							<thead>
							<th>
								Rangking
							</th>
							<?php 
							   $no = '';
                               if(isset($mfep)){
                                 $no = count($mfep);
                               	 echo "<th> MFEP </th>";
                               }
                               if(isset($wp)){
                               	if(empty($no)){
                               	    $no = count($wp);
                               	}
                               	echo "<th> WP </th>";
                               }
							?>
							</thead>
							<tbody>
							   <?php 
                                   for ($i=0; $i < $no; $i++) { 
                                 ?>
                                    <tr>
                                    	<td><?= ($i+1); ?></td>
                                    	<?php if(isset($mfep)){ echo "<td>".$mfep[$i]["nama"]."</td>"; }?>
                                    	<?php if(isset($wp)){ echo "<td>".$wp[$i]["nama"]."</td>"; }?>
                                    </tr>
                                 <?php 
                                   }
							   ?>
							</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>

