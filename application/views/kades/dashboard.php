<div class="page-content">
   <!-- BEGIN PAGE CONTENT INNER -->
   <div class="row margin-top-10">
      <div class="col-md-12">
         <h2>Selamat Datang.</h2>
         <a href="<?= base_url('kades/data_calon_penerima_bantuan')?>">
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat blue">
               <div class="visual">
                  <i class="fa fa-comments"></i>
               </div>
               <div class="details">
                  <div class="number">
                      <?= $calon_count; ?>
                  </div>
                  <div class="desc">
                     Calon Penerima Bantuan
                  </div>
               </div>
               <a class="more" href="<?= base_url('kades/data_calon_penerima_bantuan')?>">
               View more <i class="m-icon-swapright m-icon-white"></i>
               </a>
            </div>
         </div>
      </a>
    <!--   <a href="<?= base_url('kades/data-kriteria')?>">
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat blue">
               <div class="visual">
                  <i class="fa fa-comments"></i>
               </div>
               <div class="details">
                  <div class="number">
                     <?= $kriteria_count; ?>
                  </div>
                  <div class="desc">
                     Kriteria
                  </div>
               </div>
               <a class="more" href="<?= base_url('kades/data-kriteria')?>">
               View more <i class="m-icon-swapright m-icon-white"></i>
               </a>
            </div>
         </div>
      </a> -->
      <a href="<?= base_url('kades/perangkingan')?>">
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
               <div class="visual">
                  <i class="fa fa-sort-amount-asc"></i>
               </div>
               <div class="details">
                  <div class="number">
                     <i  class="fa fa-sort-amount-asc"></i>
                  </div>
                  <div class="desc">
                     Perangkingan SPK
                  </div>
               </div>
               <a class="more" href="javascript:;">Mulai<i class="m-icon-swapright m-icon-white"></i>
               </a>
            </div>
         </div>
      </a>
      </div>
   </div>
   <!-- END PAGE CONTENT INNER -->
</div>