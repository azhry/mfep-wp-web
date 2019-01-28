<div class="page-content">
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
			<div class="row">
				<div class="col-md-9">
					<?= $this->session->flashdata('msg') ?>
					<div class="portlet box red">
				<div class="portlet-title">
					<div class="caption">Perbarui Kriteria</div>
				</div>
				<div class="portlet-body">
					<?= form_open('kades/update_kriteria/'.$kriteria["id_kriteria"]) ?>
					<div class="form-group">
						<label for="nama_k">Nama Kriteria</label>
						<input type="text" name="nama_k_baru" class="form-control" value="<?= $kriteria['nama_kriteria']?>">
					</div>
					<div class="form-group">
						<label for="bobot_k">Benefit/Cost</label>
						<select name="kondisi_k_baru" class="form-control">
							<option value="Cost(-)" <?php if($kriteria["kondisi"] == "Cost(-)"){echo "selected";} ?>>Cost(-)</option>
							<option value="Benefit(+)" <?php if($kriteria["kondisi"] == "Benefit(+)"){echo "selected";} ?>>Benefit(+)</option>
						</select>
					</div>
					<div class="form-group">
						<label for="bobot_k">Bobot</label>
						<input type="number" name="bobot_k_baru" value="<?= $kriteria['bobot_kriteria']?>" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="perbarui" value="perbarui" class="btn blue btn-sm">
					</div>
					<?= form_close() ?>
				</div>
			</div>
				</div>
			</div>
	</div>
</div>