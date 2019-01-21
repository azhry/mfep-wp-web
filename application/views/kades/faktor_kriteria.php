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
								<i class="fa fa-globe"></i> Faktor Kriteria "<?= $kriteria['nama_kriteria']?>"
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-5">
										<div class="btn-group">
												<button id="tambah_faktor" class="btn green">
												Tambah Faktor<i class="fa fa-plus"></i>
												</button>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>
								<th class="table-checkbox">
									No.
								</th>
								<th>
									 Kriteria
								</th>
								<th>
									 Bobot
								</th>
								<th>
									 Aksi
								</th>
							</tr>
							</thead>
							<tbody>
							<?php  
                               $i=1;
                               foreach ($faktor as $value) {
							?>
							<tr class="odd gradeX">
								<td>
								   <?= $i; ?>
								</td>
								<td id="nama-faktor">
								  <?= $value['nama_faktor']; ?>
								</td>
								<td id="bobot-faktor">
								  <?= $value['bobot_faktor']; ?>
								</td>
								<td>
									<?= form_open("kades/faktor_kriteria/".$kriteria['id_kriteria']) ?>
									  <input type="hidden" name="id_faktor" id="id_faktor" value="<?= $value['Id_faktor']?>">
									  <input type="submit" class="btn btn-danger" name="hapus" value="hapus">
									  <input type="button" class="btn btn-primary" name="" id="ubah" 
									  value="Ubah">
									 <?= form_close() ?>
								</td>
							</tr>
						     <?php $i++; } ?>
                           </tbody>
                       </table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
	</div>

	<!-- BEGIN PAGE CONTENT INNER -->
	<div hidden="" id="form_tambah_faktor" class="row margin-top-12">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box red">
				<div class="portlet-title">
					<div class="caption">Tambah Faktor</div>
				</div>
				<div class="portlet-body">
					<?= form_open('kades/faktor_kriteria/'.$kriteria['id_kriteria']) ?>
					<div class="form-group">
						<label for="nama_k">Nama Faktor</label>
						<input type="text" name="nama_f" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="bobot_k">Bobot</label>
						<input type="number" name="bobot_f" class="form-control" required="">
					</div>
					<div class="form-group">
						<input type="submit" name="tambah" value="Tambah" class="btn blue btn-sm">
						<button id="batalkan_tambah_faktor" class="btn blue btn-sm">Batalkan</button>
					</div>
					<?= form_close() ?>
				</div>
			</div>
				</div>
			</div>
	</div>

	<div hidden="" id="form_ubah_faktor" class="row margin-top-12">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box red">
				<div class="portlet-title">
					<div class="caption">Perbarui Faktor</div>
				</div>
				<div class="portlet-body">
					<?= form_open('kades/faktor_kriteria/'.$kriteria['id_kriteria']) ?>
					<div class="form-group">
						<label for="nama_k">Nama Faktor</label>
						<input type="text" name="ubah_nama_f" id="ubah_nama_f" class="form-control" required="">
						<input type="hidden" name="id_faktor" id="id_faktor_1" value="">
					</div>
					<div class="form-group">
						<label for="bobot_k">Bobot</label>
						<input type="number" name="ubah_bobot_f" id="ubah_bobot_f" class="form-control" required="">
					</div>
					<div class="form-group">
						<input type="submit" name="perbarui" value="perbarui" class="btn blue btn-sm">
						<button id="batalkan_ubah_faktor" class="btn blue btn-sm">Batalkan</button>
					</div>
					<input type="hidden" name="">
					<?= form_close() ?>
				</div>
			</div>
				</div>
			</div>
	</div>

</div>



<script type="text/javascript">
	$(document).ready(function(){
        $("#tambah_faktor").click(function(){
        	$("#form_ubah_faktor").hide();
            $("#form_tambah_faktor").fadeIn();
        })
        $("#batalkan_tambah_faktor").click(function(){
        	$("#form_tambah_faktor").fadeOut();
        })
        $("#batalkan_ubah_faktor").click(function(){
        	$("#form_ubah_faktor").fadeOut();
        })
        $(document).on("click","#ubah",function(){
        	nama =  $(this).parent().parent().parent().find("#nama-faktor").html();
        	bobot = $(this).parent().parent().parent().find("#bobot-faktor").html();
            id_faktor = $(this).parent().find("#id_faktor").val();
            $("#form_tambah_faktor").hide();
            $("#form_ubah_faktor").fadeIn();
            $("#ubah_nama_f").val(nama);
            $("#id_faktor_1").val(id_faktor);
            $("#ubah_bobot_f").val(parseInt(bobot));
        })
	})
</script>