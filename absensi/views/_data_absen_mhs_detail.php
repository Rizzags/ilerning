
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                       E-Learning Mahasiswa
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="<?=base_url();?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           Absensi Mahasiswa<span class="divider-last">&nbsp;</span>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Daftar Absesin Anda pada Mata Kuliah <?php echo $absensi->row_array()['nama'] ?></h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                                <tr>
                                  <th>Pertemuan</th>
                                 <!--<th>Thn Akademik</th> -->
                                 <!--<th>Kode MK</th> -->
                                 <!--<th>Nama Mata Kuliah</th> -->
                                    <th>Tanggal Pertemuan</th>
                                    <th>Keterangan</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <!-- buat data absen -->
                            <?php
                            if($absensi == null){

                            }else{
                              $i = 0;
                              foreach ($absensi->result() as $row) {
                                # code...
                                $i++;
                                echo "<tr>";
                                echo "<td width = '10'>".$i."</td>";
                                //echo "<td>".$row->thn_akademik."</td>";
                                //echo "<td>".$row->id_mtk."</td>";
                                //echo "<td>".$row->nama."</td>";
                                echo "<td>".$row->tanggal_masuk."</td>";
                                echo "<td>".$row->keterangan_absen."</td>";
                                echo "</tr>";
                              }
                             } 
                            ?>
                            <!-- ================ -->
                            </tbody>
                        </table>
            <hr>
            <h5 style="color:red;"><i>Keterangan:<br> 
			-  M = Masuk <br>
      -  S = Sakit <br>
      -  I = Izin <br>
      -  T = Terlambat <br>
      -  A = Alfa <br>
      -  Hanya Mahasiswa yang mengikuti tahun akademik di atas tahun 2018
			<br><br>
			
			<i style="color:blue;">- Jika ada kritik maupun saran terhadap e-learning mahasiswa ini serta perbedaan SKS, dapat mengirimkan email ke <b>ulil-h@kemenperin.go.id</b> atau <b>pusdata@stmi.ac.id</b> beserta melampirkan Screenshot error yang dimaksud.Terima kasih. [ttd Web Master]</i><h5>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->


               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   