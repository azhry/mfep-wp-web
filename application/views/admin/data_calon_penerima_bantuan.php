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
								<th>Pekerjaan</th>
								<th>Penghasilan</th>
								<th>Jumlah Tang<br>gungan</th>
								<th>Kondisi Rumah</th>
								<th>Kepe<br>-milikan Rumah</th>
								<th>Jaringan Listrik</th>
								<th>Jenis Rumah</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($warga as $i => $row): ?>
							<tr>
								<td><?= $row->nama ?></td>
								<td><?= $row->pekerjaan ?></td>
								<td><?= $row->penghasilan ?></td>
								<td><?= $row->jumlah_tanggungan ?></td>
								<td><?= $row->kondisi_rumah ?></td>
								<td><?= str_replace(' ', '<br>', $row->kepemilikan_rumah) ?></td>
								<td><?= str_replace('(', '<br>(', $row->jaringan_listrik) ?></td>
								<td><?= $row->jenis_rumah ?></td>
								<td>
									<?= form_open('admin/data-calon-penerima-bantuan/' . $row->id) ?>
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
			<div class="portlet box red">
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
			</div>
			<div class="portlet box red">
				<div class="portlet-title">
					<div class="caption">Tambah Data</div>
				</div>
				<div class="portlet-body">
					<?= form_open('admin/data-calon-penerima-bantuan') ?>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label for="pekerjaan">Pekerjaan</label>
						<input type="text" name="pekerjaan" class="form-control">
					</div>
					<div class="form-group">
						<label for="penghasilan">Penghasilan</label>
						<input type="number" name="penghasilan" class="form-control">
					</div>
					<div class="form-group">
						<label for="jumlah_tanggungan">Jumlah Tanggungan</label>
						<input type="number" name="jumlah_tanggungan" class="form-control">
					</div>
					<div class="form-group">
						<label for="kondisi_rumah">Kondisi Rumah</label>
						<select class="form-control" required name="kondisi_rumah">
							<option value="">Pilih Kondisi Rumah</option>
							<option value="Papan">Papan</option>
							<option value="Beton">Beton</option>
							<option value="Bambu">Bambu</option>
							<option value="Triplek">Triplek</option>
						</select>
					</div>
					<div class="form-group">
						<label for="kepemilikan_rumah">Kepemilikan Rumah</label>
						<select class="form-control" required name="kepemilikan_rumah">
							<option value="">Pilih Kepemilikan Rumah</option>
							<option value="Milik sendiri">Milik sendiri</option>
							<option value="Mengontrak">Mengontrak</option>
							<option value="Menumpang">Menumpang</option>
						</select>
					</div>
					<div class="form-group">
						<label for="jaringan_listrik">Jaringan Listrik</label>
						<select class="form-control" required name="jaringan_listrik">
							<option value="">Pilih Jaringan Listrik</option>
							<option value="Milik sendiri (tanpa subsidi)">Milik sendiri (tanpa subsidi)</option>
							<option value="Milik sendiri (subsidi)">Milik sendiri (subsidi)</option>
							<option value="Menumpang (subsidi)">Menumpang (subsidi)</option>
							<option value="Menumpang (tanpa subsidi)">Menumpang (tanpa subsidi)</option>
						</select>
					</div>
					<div class="form-group">
						<label for="jenis_rumah">Jenis Rumah</label>
						<select class="form-control" required name="jenis_rumah">
							<option value="">Pilih Jenis Rumah</option>
							<option value="Panggung">Panggung</option>
							<option value="Permanen">Permanen</option>
							<option value="Semi permanen">Semi permanen</option>
						</select>
					</div>
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