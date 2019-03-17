<div class="page-content">
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
			<div class="row">
				<div class="col-md-12">
					<?= $this->session->flashdata('msg') ?>
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">Perbarui Data Calon</div>
						</div>
						<div class="portlet-body">
							<?= form_open('admin/edit-data-calon?id=' . $id_calon) ?>
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" name="nama" value="<?= $calon->Nama ?>" class="form-control">
							</div>
							<?php 
								$datacalon = $calon->datacalon->toArray();
								foreach ($kriteria as $row): 
							?>
								<?php  
									$name = str_replace(' ', '_', strtolower($row->nama_kriteria));
									$nilai_kriteria = search($datacalon, 'id_kriteria', $row->id_kriteria);
								?>
								<div class="form-group">
									<label for="<?= $name ?>"><?= $row->nama_kriteria ?></label>
									<?php if ($row->nama_kriteria == 'Penghasilan' or $row->nama_kriteria == 'Jumlah Tanggungan'): ?>
										<input type="number" name="<?= $name ?>" value="<?= count($nilai_kriteria) > 0 ? $nilai_kriteria[0]['real_value'] : '' ?>" class="form-control">
									<?php else: ?>
										<?php  
											$opt = [];
											foreach ($row->faktor as $faktor)
											{
												$opt[$faktor->Id_faktor] = $faktor->nama_faktor;
											}
											echo form_dropdown($name, $opt, count($nilai_kriteria) > 0 ? $nilai_kriteria[0]['id_faktor'] : '', ['class' => 'form-control', 'required' => 'required']);
										?>
									<?php endif; ?>
								</div>
							<?php endforeach; ?>
							<div class="form-group">
								<input type="submit" name="submit" value="Simpan" class="btn blue">
							</div>
							<?= form_close() ?>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>