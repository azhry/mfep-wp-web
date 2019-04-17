<div class="page-content">
   <!-- BEGIN PAGE CONTENT INNER -->
   <div class="row margin-top-10">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light">
               <div class="portlet-title tabbable-line">
                  <div class="caption caption-md">
                     <i class="icon-globe theme-font-color hide"></i>
                     <span class="caption-subject theme-font-color bold uppercase">Perangkingan Calon Penerima Bantuan</span>
                  </div>
                  <ul class="nav nav-tabs">
                     <li class="active">
                        <a href="#tab_1_2" data-toggle="tab" aria-expanded="false">
                        Sistem Pendukung Keputusan</a>
                     </li>
                  </ul>
               </div>
               <div class="portlet-body">
                  <!--BEGIN TABS-->
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab_1_2">
                        <div class="portlet-body">
                           <?= form_open(base_url("Kades/perangkingan")); ?>
                           <div class="row margin-top-10">
                              <div class="btn-group pull-right">
                                 <div class="md-checkbox-inline">
                                    <div class="md-checkbox has-success">
                                       <input type="checkbox" id="checkbox35" name="mfep" value="do_mfep" class="md-check">
                                       <label for="checkbox35"> 
                                       <span class="inc"></span>
                                       <span class="check"></span>
                                       <span class="box"></span>
                                       Multi Factor Evaluation Process </label>
                                    </div>
                                    <div class="md-checkbox has-error">
                                       <input type="checkbox" id="checkbox34" class="md-check" name="wp" value="do_wp">
                                       <label for="checkbox34">
                                       <span></span>
                                       <span class="check"></span>
                                       <span class="box"></span>
                                       Weighted Product</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <table class="table table-striped table-bordered table-hover">
                              <thead>
                                 <th>
                                    Kepala Desa
                                 </th>
                                 <th>
                                    MFEP
                                 </th>
                                 <th>
                                    WP
                                 </th>
                              </thead>
                              <tbody>
                                 <?php  
                                   for($i=0;$i<$data_size;$i++){
                                   ?>
                                     <tr>
                                        <td><?= $data_calon[$i]; ?></td>
                                        <?php 
                                           if(isset($mfep)){
                                              echo "<td>".$mfep[$i]["nama"]."</td>";
                                           }else{
                                             echo "<td> - </td>";
                                           }
                                        ?>
                                        <?php 
                                           if(isset($wp)){
                                              echo "<td>".$wp[$i]["nama"]."</td>";
                                           }else{
                                             echo "<td> - </td>";
                                           }
                                        ?>
                                     </tr>
                                   <?php
                                    if($i == sizeof($data_calon)-1){
                                        break;
                                    } 
                                   }
                                 ?>
                                 <tr style="background-color: aliceblue">
                                 <td><b>Jumlah Data Yang Sama</b></td>
                                 <td><b><?= $akurasi_mfep; ?></b></td>
                                 <td><b><?= $akurasi_wp; ?></b></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <?php if(isset($mfep)){?>
                        <div class="portlet box yellow">
                           <div class="portlet-title">
                              <div class="caption">
                                 <i class="fa fa-globe"></i>Total Bobot Evaluasi MFEP
                              </div>
                              <div class="tools">
                                 <a href="javascript:;" class="collapse" data-original-title="" title="">
                                 </a>
                                 <a href="javascript:;" class="remove" data-original-title="" title="">
                                 </a>
                              </div>
                           </div>
                           <div class="portlet-body">
                              <div class="table-toolbar">
                              </div>
                              <table class="table table-striped table-bordered table-hover">
                                 <thead>
                                    <th>
                                       Nama
                                    </th>
                                    <th>
                                       TBE
                                    </th>
                                 </thead>
                                 <tbody>
                                   <?php 
                                     for($i=0;$i<$data_size;$i++){
                                       ?>
                                         <tr>
                                            <td><?= $mfep[$i]["nama"]?></td>
                                            <td><?= $mfep[$i]["tbe"]?></td>
                                         </tr>
                                       <?php 
                                        if($i == sizeof($data_calon)-1){
                                            break;
                                        } 
                                     }
                                   ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <?php } ?>
                        <?php if(isset($wp)){ ?>
                        <div class="portlet box purple">
                           <div class="portlet-title">
                              <div class="caption">
                                 <i class="fa fa-globe"></i>Total Bobot Evaluasi WP
                              </div>
                              <div class="tools">
                                 <a href="javascript:;" class="collapse" data-original-title="" title="">
                                 </a>
                                 <a href="javascript:;" class="remove" data-original-title="" title="">
                                 </a>
                              </div>
                           </div>
                           <div class="portlet-body">
                              <div class="table-toolbar">
                              </div>
                              <table class="table table-striped table-bordered table-hover">
                                 <thead>
                                    <th>
                                       Nama
                                    </th>
                                    <th>
                                       Nilai Preferensi
                                    </th>
                                 </thead>
                                 <tbody>
                                   <?php 
                                     for($i=0;$i<$data_size;$i++){
                                       ?>
                                         <tr>
                                            <td><?= $wp[$i]["nama"]?></td>
                                            <td><?= $wp[$i]["preference"]?></td>
                                         </tr>
                                       <?php 
                                         if($i == sizeof($data_calon)-1){
                                             break;
                                         } 
                                     }
                                   ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <?php } ?>
                        <input type="submit" name="set" class="btn btn-success" value="Mulai perangkingan">
                        <?php form_close(); ?>
                        <?php 
                             if(isset($mfep)){
                                echo "<a class='btn btn-warning' id='lihat_mfep'> Lihat Perhitungan MFEP</a>";
                             }
                             if(isset($wp)){
                                echo "<a class='btn btn-info' id='lihat_wp'> Lihat Perhitungan WP</a>";
                             }
                        ?>
                     </div>
                  </div>
                  <!--END TABS-->
               </div>
            </div>
            <!-- END PORTLET-->
         </div>
      </div>
   </div>
   <!-- MFEP HITUNG MANUAL -->
   <div class="row margin-top-10" id="mfep_hitung_manual" hidden="">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light">
               <div class="portlet-title tabbable-line">
                  <div class="caption caption-md">
                     <i class="icon-globe theme-font-color hide"></i>
                     <span class="caption-subject theme-font-color bold uppercase">Perhitungan Multi Factor Evaluation Process</span>
                  </div>
                 
               </div>
               <div class="portlet-body scroll">
                  <!--BEGIN TABS-->
                    <div class="well well-lg">
                       <h4 class="block">Normalisasi Nilai Bobot Faktor (NBF)</h4>
                            <table class="table table-bordered">
                                 <thead>
                                     <th>Kriteria</th>
                                     <th>Bobot</th>
                                     <th>Normalisasi</th>
                                 </thead>
                                 <tbody>
                                     <?php 
                                       foreach ($nbf_mfep as $key => $value) { ?>
                                         <tr>
                                            <td><?= $value['kriteria']?></td>
                                            <td><?= $value['bobot']?></td>
                                            <td><?= $value['normalisasi']?></td>
                                        </tr> 
                                     <?php   }
                                     ?>
                                 </tbody>
                            </table>
                    </div>

                     <div class="well well-lg">
                       <h4 class="block">Nilai Bobot Evaluasi (NBE)</h4>
                           <?php  
                             foreach ($nbe_mfep as $key => $value) { ?>
                               <p><b>Nama : <?= $value['nama']?></b></p>
                                <table class="table table-bordered">
                                    <thead>
                                      <th>Kriteria</th>
                                      <th>NBF</th>
                                      <th>NEF</th>
                                      <th>NBE</th>
                                    </thead>
                                    <tbody>
                                 <?php 
                                    foreach ($value['nbe']['kode_kriteria'] as $key => $kriteria) { ?>     
                                             <tr>
                                               <td><?= $kriteria?></td>
                                               <td><?= $value['nbe']['nbf'][$key]?></td>
                                               <td><?= $value['nbe']['nef'][$key]?></td>
                                               <td><?= $value['nbe']['nilai'][$key]?></td>
                                             </tr>
                                   <?php  }
                                 ?>
                                  </tbody>
                               </table>
                           <?php  }
                           ?>
                    </div>

                     <div class="well well-lg">
                       <h4 class="block">Total Bobot Evaluasi (TBE)</h4>
                            <table class="table table-bordered">
                                 <thead>
                                     <th>Nama</th>
                                     <th>TBE</th>
                                 </thead>
                                 <tbody>
                                     <?php 
                                       foreach ($nbe_mfep as $key => $value) { ?>
                                         <tr>
                                            <td><?= $value['nama']?></td>
                                            <td><?= $value['tbe']?></td>
                                        </tr> 
                                     <?php   }
                                     ?>
                                 </tbody>
                            </table>
                    </div>

                  <!--END TABS-->
               </div>
               <br>
               <a class="btn btn-danger" id="sembunyikan_mfep">Sembunyikan</a>
            </div>
            <!-- END PORTLET-->
         </div>
      </div>
   </div>
   <!--  MFEP HITUNG MANUAL-->
    <!-- WP HITUNG MANUAL -->
   <div class="row margin-top-10" id="wp_hitung_manual" hidden="">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light">
               <div class="portlet-title tabbable-line">
                  <div class="caption caption-md">
                     <i class="icon-globe theme-font-color hide"></i>
                     <span class="caption-subject theme-font-color bold uppercase">Perhitungan Weighted procces</span>
                  </div>
                 
               </div>
               <div class="portlet-body scroll">
                  <!--BEGIN TABS-->
                    <div class="well well-lg">
                       <h4 class="block">Normalisasi Nilai Bobot (W)</h4>
                       <table class="table table-bordered">
                         <thead>
                           <tr>
                             <th>Nama Kriteria</th>
                             <th>Bobot</th>
                             <th>Normalisasi W</th>
                           </tr>
                         </thead>
                         <tbody>
                            <?php foreach ($normalized_weights as $key => $value): ?>
                              <tr>
                                <td><?= $key ?></td>
                                <td><?= $weights[$key] ?></td>
                                <td><?= $value ?></td>
                              </tr>
                            <?php endforeach; ?>
                         </tbody>
                       </table>
                    </div>

                    <div class="well well-lg">
                       <h4 class="block">Nilai Vektor</h4>
                       <?php  
                         foreach ($wp as $i => $value) { ?>
                           <p><b>Nama : <?= $value['nama']?></b></p>
                            <table class="table table-bordered">
                                <thead>
                                  <th>Kriteria</th>
                                  <th>Tipe</th>
                                  <th>Nilai Faktor</th>
                                  <th>Bobot Ternormalisasi</th>
                                  <th>Nilai Vektor</th>
                                </thead>
                                <tbody>
                             <?php 
                                foreach ($value['vector_calculations'] as $k => $v) { ?>     
                                         <tr>
                                           <td><?= $k ?></td>
                                           <td><?= $v['type'] ?></td>
                                           <td><?= $v['factor'] ?></td>
                                           <td><?= $v['normalized_weight'] ?></td>
                                           <td><?= $v['val'] ?></td>
                                         </tr>
                               <?php  }
                             ?>
                              </tbody>
                           </table>
                       <?php  }
                       ?>
                    </div>

                    <div class="well well-lg">
                       <h4 class="block">Nilai Preferensi</h4>
                       <table class="table table-bordered">
                         <thead>
                           <tr>
                              <th>No.</th>
                              <th>Nama</th>
                              <th>Nilai Preferensi</th>
                           </tr>
                         </thead>
                         <tbody>
                            <?php foreach ($wp as $i => $row): ?>
                              <tr>
                                <td><?= $i + 1 ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['preference'] ?></td>
                              </tr>
                            <?php endforeach; ?>
                         </tbody>
                       </table>
                    </div>
                  <!--END TABS-->
               </div>
               <br>
               <a class="btn btn-danger" id="sembunyikan_wp">Sembunyikan</a>
            </div>
            <!-- END PORTLET-->
         </div>
      </div>
   </div>
   <!--  WP HITUNG MANUAL-->
</div>

<style type="text/css">
  .scroll{
      padding: 5px;
      overflow: scroll;
      height: 500px;
      
      /*script tambahan khusus untuk IE */
      scrollbar-face-color: #CE7E00; 
      scrollbar-shadow-color: #FFFFFF; 
      scrollbar-highlight-color: #6F4709; 
      scrollbar-3dlight-color: #11111; 
      scrollbar-darkshadow-color: #6F4709; 
      scrollbar-track-color: #FFE8C1; 
      scrollbar-arrow-color: #6F4709;
    }
</style>

<script type="text/javascript">
  $(document).ready(function(){
     $("#lihat_mfep").click(function(){
        $("#mfep_hitung_manual").fadeIn(500);
     })
     $("#sembunyikan_mfep").click(function(){
        $("#mfep_hitung_manual").fadeOut(500);  
     })
      $("#lihat_wp").click(function(){
        $("#wp_hitung_manual").fadeIn(500);
     })
     $("#sembunyikan_wp").click(function(){
        $("#wp_hitung_manual").fadeOut(500);  
     })
  })
</script>

