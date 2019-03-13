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
							<table class="table table-striped table-hover table-bordered">
						<thead>
							<tr>
								<th>Nama</th>
								<?php foreach ($kriteria as $row): ?>
									<th><?= $row->nama_kriteria ?></th>
								<?php endforeach; ?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($calon as $row): ?>
								<tr>
									<td><?= $row->Nama ?></td>
									<?php for ($i = 0; $i < count($kriteria); $i++): ?>
										<?php if (isset($row->datacalon[$i]->faktor)): ?>
											<td><?= $row->datacalon[$i]->real_value ?></td>
										<?php else: ?>
											<td>-</td>
										<?php endif; ?>
									<?php endfor; ?>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
	</div>
</div>;