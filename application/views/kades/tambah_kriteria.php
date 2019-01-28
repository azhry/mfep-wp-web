<div class="page-content">
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
			<div class="row">
				<div class="col-md-9">
					<?= $this->session->flashdata('msg') ?>
					<div class="portlet box red">
				<div class="portlet-title">
					<div class="caption">Tambah Kriteria</div>
				</div>
				<div class="portlet-body">
					<?= form_open('kades/tambah_kriteria') ?>
					<div class="form-group">
						<label for="nama_k">Nama Kriteria</label>
						<input type="text" name="nama_k" class="form-control">
					</div>
					<div class="form-group">
						<label for="bobot_k">Bobot</label>
						<input type="number" name="bobot_k" class="form-control">
					</div>
					<div class="form-group">
						<label for="nama_k">Benefit/Cost</label>
                        <select name="kondisi" class="form-control">
                        	<option value="Cost(-)">Cost(-)</option>
                        	<option value="Benefit(+)">Benefit(+)</option>
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
	</div>
</div>