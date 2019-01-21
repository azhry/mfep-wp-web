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
					<div class="caption">Perbarui Data Calon Penerima Bantuan</div>
				</div>
				<div class="portlet-body">
					<?= form_open('kades/ubah_data_calon_penerima_bantuan/'.$calon[0]['id_calon']) ?>
					<div class="form-group">
						<label for="nama_k">Nama</label>
						<input type="text" value="<?= $calon[0]['nama']?>" name="nama" class="form-control" required="">
					</div>
                     
                     <?php 
                         $i = 0;
                         foreach ($kriteria as $value) {
                     ?>
					<div class="form-group">
						<label for="nama_k"><?= $value["nama_kriteria"]; ?></label>
						<?php 
						    $id_data_calon = ""; 
                            if(isset($calon[0]['id_data_calon'][$i])){
                              $id_data_calon = $calon[0]['id_data_calon'][$i]; 
                            }
						?>
						<input type="hidden" name="id_<?= $value["nama_kriteria"]; ?>" value="<?= $id_data_calon ?>" >
						<input type="hidden" name="id_kriteria_<?= $value["nama_kriteria"]; ?>" value="<?= $value['id_kriteria'] ?>" >
                        <select name="faktor_<?= $value["nama_kriteria"]; ?>" class="form-control">
                            <?php 
                                foreach ($faktor as $value_f) {
                                	$res = "";
                                	foreach ($calon[0]['faktor']['id'] as $value_d) {
                                		if($value_d == $value_f['Id_faktor']){
                                             $res = "selected";
                                             break;
                                		}
                                	}
                                	if($value_f['id_kriteria'] == $value['id_kriteria']){
                                        echo "<option  value=".$value_f['Id_faktor']." ".$res.">".$value_f['nama_faktor']."</option>";
                                	}
                                }
                            ?>
                        </select>
					</div>
				<?php $i++; } ?>
					<div class="form-group">
						<input type="submit" id="submit" name="perbarui_calon" value="Perbarui" class="btn blue btn-sm">
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