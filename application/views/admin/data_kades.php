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
								<i class="fa fa-globe"></i> Data Kepala Desa
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>
										Nama
									</th>
									<th>
										Username
									</th>
									<th>
										Email
									</th>
									<th>
										-
									</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($kades as $i => $row): ?>
								<tr>
									<td><?= $i + 1 ?></td>
									<td><?= $row->nama ?></td>
									<td><?= $row->username ?></td>
									<td><?= $row->email ?></td>
									<td>
										<a href="<?= base_url('admin/ganti-password-kades/' . $row->id_pengguna) ?>" class="btn btn-primary btn-xs">Ganti Password</a>
									</td>
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
</div>