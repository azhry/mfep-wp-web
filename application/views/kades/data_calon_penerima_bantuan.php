<div class="page-content">
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-5">
			<div class="row">
				<div class="col-md-12">
					<?= $this->session->flashdata('msg') ?>
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i> Data Calon Penerima Bantuan
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<!-- <div class="table-toolbar">
								<div class="row">
									<div class="col-md-5">
										<div class="btn-group">
				                             <a href="<?= base_url()?>kades/tambah-calon-penerima-bantuan">
											<button id="sample_editable_1_new" class="btn green">
											Add New <i class="fa fa-plus"></i>
											</button></a>
										</div>
									</div>
								</div>
							</div> -->
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>
								<th>Nama</th>
								<?php
                                     foreach ($kriteria as $value) {
								 ?>
								 <th><?= $value['nama_kriteria']; ?></th>
								<?php } ?>
								<!-- <th>Aksi</th> -->
							</tr>
							</thead>
							<tbody>
						    <?php 
                               foreach ($calon as $value) {
						    ?>
							<tr class="odd gradeX">
								  <td><?= $value['nama']; ?></td>
								 <?php 
								    $res;
								    // var_dump($value['kriteria']['nama']);
                                    for ($i=0; $i < sizeof($kriteria); $i++){ 
                                    	$res = "";
                                    	for ($j=0; $j < sizeof($value['kriteria']['nama']); $j++) { 
                                    		if($value['kriteria']['nama'][$j] == $kriteria[$i]['nama_kriteria']){
                                               $res = $value['faktor']['nama'][$j];
                                               break;
                                    		}
                                    	}
                                    	echo "<td>".$res."</td>";
                                    }
								 ?>
							<!-- 	 <td>
								 	<?= form_open("kades/data_calon_penerima_bantuan") ?>
								 	  <input type="hidden" name="id_calon" value="<?= $value['id_calon'] ?>">
								 	  <input type="submit" style="    width: 68px;" name="ubah" value="ubah" class="btn btn-primary">
								 	  <input type="submit" name="hapus" value="hapus" class="btn btn-danger">
								 	<?= form_close() ?>
								 </td> -->
							</tr>
							<?php } ?>				
                           </tbody>
                           <!-- for every data -->
                       </table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
	</div>
</div>;