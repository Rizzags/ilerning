  <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                  RPS Realisasi Dosen
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="<?=base_url();?>e_dosen"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <?php echo str_replace('_', ' ', ucwords($this->uri->segment(2))); ?> <span class="divider-last">&nbsp;</span>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
           <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-user"></i>&nbsp;Dosen 
						    <?php if (!empty($record))
                                 {
                                  echo $record->row_Array()['nama'];
                                 }?>
                                  pada Mata Kuliah 
                            <?php  
                                 if (!empty($record)) 
								 { echo $record->row_Array()['nama_mtk'];
							}?>
								Kelas
							<?php  
                                 if (!empty($record)) 
								 { echo $record->row_Array()['nama_kelas'];
							}?>
							</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>                    
                        </div>
                        <div class="widget-body">
                          
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                  <thead>
                                      <tr>
                                        <th>Pertemuan</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Durasi Realisasi</th>
                                        <th>Durasi Sebenarnya</th>
                                        <th>Materi</th>
										<th>Status</th>
                                      </tr>
                                  </thead>
                                  <tbody>
									<?php
									if ($record == null) {
									  
									}else{

									$no = 1;
									foreach ($record->result() as $r ) {
									$status = "";
									$status	= (($r->validasi_prodi==1)?'Sudah divalidasi':'Belum divalidasi');
									echo "
										<tr >
											<td width='10'>$no</td>
											<td>$r->waktu_input</td>
											<td>$r->waktu_selesai</td>
											<td>$r->x</td>
											<td>$r->durasi_sebenarnya</td>
											<td>$r->materi</td>
											<td>$status</td>
										</tr> 
									";
									$no++;
									}
									}
									?>
                                  </tbody>
                              </table>
<tr>
  <td colspan="2" align="left"> 
 <?php if (!empty($record))
	{ 
     echo anchor('absensi/cetak_rps_realisasi/'.$record->row_Array()['id_jadual'],'Cetak',array('class'=> 'btn btn-primary blue','style'=>'background-color:green', 'target' => '_blank' ));
    }
   ?>
</tr>
                        </div>
                  </div>
               </div>
            </div>
            
            </div>
            <!-- END PAGE CONTENT-->         
    
         </div>
         <!-- END PAGE CONTAINER-->
      
      </div>

   <!-- END CONTAINER -->
