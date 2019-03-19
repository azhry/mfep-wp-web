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
                           <div class="row margin-top-10">
                              <?php if(isset($akurasi_mfep)) { ?>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                 <div class="dashboard-stat2">
                                    <div class="display">
                                       <div class="number">
                                          <h3 class="font-green-sharp"><?= $akurasi_mfep; ?><small class="font-green-sharp">%</small></h3>
                                          <small>Akurasi Multi Factor Evaluation Process</small>
                                       </div>
                                       <div class="icon">
                                          <i class="icon-pie-chart"></i>
                                       </div>
                                    </div>
                                    <div class="progress-info">
                                       <div class="progress">
                                          <span style="width: <?= $akurasi_mfep; ?>%;" class="progress-bar progress-bar-success green-sharp">
                                          <span class="sr-only">78% akurasi</span>
                                          </span>
                                       </div>
                                       <div class="status">
                                          <div class="status-title">
                                             Akurasi
                                          </div>
                                          <div class="status-number">
                                             <?= $akurasi_mfep; ?> %
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <?php } ?>
                              <?php if(isset($akurasi_wp)) { ?>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                 <div class="dashboard-stat2">
                                    <div class="display">
                                       <div class="number">
                                          <h3 class="font-red-haze"><?= $akurasi_wp; ?><small class="font-red-haze">%</small></h3>
                                          <small>Akurasi Weighted Product</small>
                                       </div>
                                       <div class="icon">
                                          <i class="icon-pie-chart"></i>
                                       </div>
                                    </div>
                                    <div class="progress-info">
                                       <div class="progress">
                                          <span style="width: <?= $akurasi_wp; ?>%;" class="progress-bar progress-bar-success red-haze">
                                          <span class="sr-only"><?= $akurasi_wp; ?>% akurasi</span>
                                          </span>
                                       </div>
                                       <div class="status">
                                          <div class="status-title">
                                             Akurasi
                                          </div>
                                          <div class="status-number">
                                             <?= $akurasi_wp; ?> %
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <?php } ?>
                           </div>
                           <table class="table table-striped table-bordered table-hover">
                              <thead>
                                 <th>
                                    Rangking
                                 </th>
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
                                   for($i=0;$i<22;$i++){
                                   ?>
                                     <tr>
                                        <td><?= ($i+1)?></td>
                                        <td><?= $data_calon[$i]; ?></td>
                                        <?php 
                                           if(isset($mfep)){
                                              $same = "";
                                              if(strtolower($mfep[$i]["nama"]) == strtolower($data_calon[$i])){
                                                 $same = 'style="background-color: deepskyblue"';
                                              }
                                              echo "<td ".$same.">".$mfep[$i]["nama"]."</td>";
                                           }else{
                                             echo "<td> - </td>";
                                           }
                                        ?>
                                        <?php 
                                           if(isset($wp)){
                                              $same = "";
                                              if(strtolower($wp[$i]["nama"]) == strtolower($data_calon[$i])){
                                                 $same = 'style="background-color: deepskyblue"';
                                              }
                                              echo "<td".$same.">".$wp[$i]["nama"]."</td>";
                                           }else{
                                             echo "<td> - </td>";
                                           }
                                        ?>
                                     </tr>
                                   <?php 
                                   }
                                 ?>
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
                                     for($i=0;$i<22;$i++){
                                       ?>
                                         <tr>
                                            <td><?= $mfep[$i]["nama"]?></td>
                                            <td><?= $mfep[$i]["tbe"]?></td>
                                         </tr>
                                       <?php 
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
                                       TBE
                                    </th>
                                 </thead>
                                 <tbody>
                                   <?php 
                                     for($i=0;$i<22;$i++){
                                       ?>
                                         <tr>
                                            <td><?= $wp[$i]["nama"]?></td>
                                            <td><?= $wp[$i]["tbe"]?></td>
                                         </tr>
                                       <?php 
                                     }
                                   ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <?php } ?>
                        <input type="submit" name="set" class="btn btn-success" value="Mulai perangkingan">
                        <?php form_close(); ?>
                     </div>
                  </div>
                  <!--END TABS-->
               </div>
            </div>
            <!-- END PORTLET-->
         </div>
      </div>
   </div>
   <!-- TBE MFEP -->
</div>