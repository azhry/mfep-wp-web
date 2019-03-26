<div class="page-content">
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
			<div class="row">
				<div class="col-md-12">
					<?= $this->session->flashdata('msg') ?>
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">Ganti Password</div>
						</div>
						<div class="portlet-body">
							<?= form_open('kades/ganti-password') ?>
							<div class="form-group">
								<label for="old_password">Password Lama</label>
								<input type="password" name="old_password" placeholder="Masukkan password lama" class="form-control">
							</div>
							<div class="form-group">
								<label for="old_password">Password Baru</label>
								<input type="password" name="new_password" placeholder="Masukkan password baru" class="form-control">
							</div>
							<div class="form-group">
								<label for="old_password">Masukkan Lagi Password Baru</label>
								<input type="password" name="new_rpassword" placeholder="Masukkan lagi password baru" class="form-control">
							</div>
							<div class="form-group">
								<input type="submit" name="submit" value="Ganti" class="btn blue btn-sm">
							</div>
							<?= form_close() ?>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>