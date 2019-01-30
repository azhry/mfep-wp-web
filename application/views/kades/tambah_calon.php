<div class="page-content">
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
			<div class="row">
				<div class="col-md-12">
					<div id="notif_empty" class="alert alert-warning" hidden="">
								<strong>Peringatan data tak dapat di submit!</strong> <div id="f">Kriteria : </div>  Belum Memiliki Faktor
							</div>
					<?= $this->session->flashdata('msg') ?>
					<div class="portlet box red">
				<div class="portlet-title">
					<div class="caption">Tambah Data Calon Penerima Bantuan</div>
				</div>
				<div class="portlet-body">
					<?= form_open('kades/tambah_calon_penerima_bantuan') ?>
					<div class="form-group">
						<label for="nama_k">Nama</label>
						<input type="text" name="nama" class="form-control" required="">
					</div>
                     
                     <?php 
                         foreach ($kriteria as $value) {
                     ?>
					<div class="form-group">
						<label for="nama_k"><?= $value["nama_kriteria"]; ?></label>
						<input type="hidden" name="id_<?= str_replace(' ','_',$value["nama_kriteria"]) ?>" value="<?= $value["id_kriteria"]; ?>" >
						<?php if ($value['nama_kriteria'] == 'Penghasilan' or $value['nama_kriteria'] == 'Jumlah Tanggungan'): ?>
						<input type="number" name="faktor_<?= str_replace(' ','_',$value["nama_kriteria"]) ?>" class="form-control">
						<?php else: ?>
                        <select name="faktor_<?= str_replace(' ','_',$value["nama_kriteria"]) ?>" class="form-control">
                            <?php 
                                foreach ($faktor as $value_f) {
                                	if($value_f['id_kriteria'] == $value['id_kriteria']){
                                        echo "<option value=".$value_f['Id_faktor'].">".$value_f['nama_faktor']."</option>";
                                	}
                                }
                            ?>
                        </select>
                    	<?php endif; ?>
					</div>
				<?php } ?>
					<div class="form-group">
						<input type="submit" id="submit" name="tambah" value="Tambah" class="btn blue btn-sm">
					</div>
					<?= form_close() ?>
				</div>
			</div>
				</div>
			</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("select ").each(function(){
			var text = $(this).text();
			if(text == " "){
               $("#submit").attr({"disabled" : "true"})
               $("#notif_empty").show();
               $("#f").append($(this).parent().text()+",");
			}
		})
	})
</script>