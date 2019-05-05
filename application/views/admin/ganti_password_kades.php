<div class="page-content">
	<div class="row">
		<div class="row">
			<div class="col-md-12">
				<?= $this->session->flashdata('msg') ?>
				<div class="portlet box red">
					<div class="portlet-title">
						<div class="caption">Ganti Password Kepala Desa</div>
					</div>
					<div class="portlet-body">
						<table class="table table-bordered table-striped table-hover">
							<tbody>
								<tr>
									<td><strong>Nama</strong></td>
									<td><?= $kades->nama ?></td>
								</tr>
								<tr>
									<td><strong>Username</strong></td>
									<td><?= $kades->username ?></td>
								</tr>
								<tr>
									<td><strong>Email</strong></td>
									<td><?= $kades->email ?></td>
								</tr>
							</tbody>
						</table>
						<?= form_open('admin/ganti-password-kades/' . $kades->id_pengguna) ?>
						<div class="form-group">
							<label for="old_password">Password Lama</label>
							<input type="password" name="old_password" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="new_password">Password Baru</label>
							<input type="password" name="new_password" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="rnew_password">Konfirmasi Password Baru</label>
							<input type="password" name="rnew_password" class="form-control" required>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Ganti" class="btn blue">
						</div>
						<?= form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>