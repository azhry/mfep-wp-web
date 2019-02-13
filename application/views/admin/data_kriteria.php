<div class="page-content">
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
			<div class="row">
				<div class="col-md-12">
					<?= $this->session->flashdata('msg') ?>
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i> Kriteria
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
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-5">
										<div class="btn-group">
				                             <a href="<?= base_url()?>admin/tambah-kriteria">
											<button id="sample_editable_1_new" class="btn green">
											Add New <i class="fa fa-plus"></i>
											</button></a>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-striped table-bordered table-hover">
							<thead>
							<tr>
								<th>
									 Kriteria
								</th>
								<th>
									Benefit/Cost
								</th>
								<th>
									 Bobot
								</th>
								<th>
									 Aksi
								</th>
							</tr>
							</thead>
							<tbody>
								<?php
								     $i = 1; 
                                    foreach ($kriteria as $value) {
                                    	# code...
								?>
							<tr class="odd gradeX">
								<td>
									<?= $value["nama_kriteria"] ?>
								</td>
								<td>
									<?= $value['kondisi'] ?>
								</td>
								<td>
									<?= $value["bobot_kriteria"] ?>
								</td>
								<td>
									<?= form_open("admin/data-kriteria")?>
									  <input type="submit" class="btn btn-danger" name="hapus" value="hapus">
									  <input type="submit" class="btn btn-primary" name="ubah" value="Ubah">
									  <input type="submit" class="btn btn-warning" name="faktor" value="Faktor">
									  <input type="hidden" name="id" value="<?= $value['id_kriteria']?>">
									<?= form_close();?>
								</td>
							</tr>
						<?php $i++; } ?>
                           </tbody>
                       </table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
	</div>
</div>