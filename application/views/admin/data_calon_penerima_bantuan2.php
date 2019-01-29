<div class="page-content">
	<!-- BEGIN PAGE CONTENT INNER -->
	<?= $this->session->flashdata('msg') ?>
	<div class="row margin-top-10">
		<div class="col-md-9">
			<div class="portlet box green">
				<div class="portlet-title">
					<div class="caption">
						Data Calon Penerima Bantuan
					</div>
				</div>
				<div class="portlet-body">
					<table class="table table-striped table-hover table-bordered">
						<thead>
							<tr>
								<th>Nama</th>
								<?php foreach ($kriteria as $row): ?>
									<th><?= $row->nama_kriteria ?></th>
								<?php endforeach; ?>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($calon as $row): ?>
								<tr>
									<td><?= $row->Nama ?></td>
									<?php for ($i = 0; $i < count($kriteria); $i++): ?>
										<?php if (isset($row->datacalon[$i]->faktor)): ?>
											<td><?= $row->datacalon[$i]->faktor->nama_faktor ?></td>
										<?php else: ?>
											<td>-</td>
										<?php endif; ?>
									<?php endfor; ?>
									<td>
										<?= form_open('admin/data-calon-penerima-bantuan2/' . $row->id_calon) ?>
										<input type="submit" name="hapus" value="Hapus" class="btn red btn-xs">
										<?= form_close() ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<!-- <div class="portlet box red">
				<div class="portlet-title">
					<div class="caption">Import Excel</div>
				</div>
				<div class="portlet-body">
					<?= form_open_multipart('admin/data-calon-penerima-bantuan') ?>
					<div class="form-group">
						<input type="file" class="form-control" name="file">
					</div>
					<div class="form-group">
						<input type="submit" name="import" value="Import" class="btn blue btn-sm">
					</div>
					<?= form_close() ?>
				</div>
			</div> -->
			<div class="portlet box red">
				<div class="portlet-title">
					<div class="caption">Tambah Data</div>
				</div>
				<div class="portlet-body">
					<?= form_open('admin/data-calon-penerima-bantuan2') ?>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<?php foreach ($kriteria as $row): ?>
						<?php  
							$name = str_replace(' ', '_', strtolower($row->nama_kriteria));
						?>
						<div class="form-group">
							<label for="<?= $name ?>"><?= $row->nama_kriteria ?></label>
							<select class="form-control" required name="<?= $name ?>">
								<option value="">Pilih <?= $row->nama_kriteria ?></option>
								<?php foreach ($row->faktor as $faktor): ?>
									<option value="<?= $faktor->Id_faktor ?>"><?= $faktor->nama_faktor ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					<?php endforeach; ?>
					<div class="form-group">
						<input type="submit" name="tambah" value="Tambah" class="btn blue btn-sm">
					</div>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>