
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Tracer Study 
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
       

            <!-- START PILIHAN CETAK-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Tracer Study </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                            </span>
                        </div>
                        <div class="widget-body">
    <?php
    echo form_open('absensi/alumni/cetak_excel');
    ?>
                        <table class="table table-bordered ">
                        <tr>
                        <td width="20%"> Pilih Jurusan Untuk Cetak Excel</td>  
                            <td>
                                <select class="form-control" name="jurusan" id="pilihan_periode">
                                    <option value="Sistem Informasi" disabled selected>====== Pilih Jurusan =========</option>
                                    <option value="TekniK Manajemen Industri" >TekniK Manajemen Industri</option>
                                    <option value="Manajemen Bisnis Industri" >Manajemen Bisnis Industri</option>
                                    <option value="Sistem Informasi" >Sistem Informasi</option>
                                    <option value="Teknik Kimia Industri" >Teknik Kimia Industri</option>
                                    <option value="Tenaga Penyuluh Lapangan" >Tenaga Penyuluh Lapangan</option>
                                </select>

                            </td>
                            <td>  
                            <button type="submit" class="btn btn-success">Cetak Excel</button>
                            </td>
                        </tr>
                      </table>
        </form>
        <hr>
                         
                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                                <tr>
                                  <th>Nim</th>
                                  <th>Nama </th>
                                  <th>Angkatan</th>
                                  <th>Jurusan</th>
                                  <th>Thn lulus</th>
                                  <th>Status Pekerjaan</th>
                                  <th>Jabatan</th>
                                  <th>Nama Kantor</th>
                                  <th>Bidang Kantor</th>
                                  <th>Pekerjaan Sesuai Jurusan</th>
                                  <th>Waktu Tunggu Kerja</th>
                                 <th>Kompetensi Spesifik</th>
 
                                </tr>
                            </thead>
                            <tbody>
<?php $i=1;
if ( !empty($record) )
foreach($record->result() as $row)
:?>
                                <tr class="odd gradeX">
                                    <td><?php echo $row->nim; ?></td>
                                    <td><?php echo $row->nama; ?></td>
                                    <td><?php echo $row->angkatan; ?></td>
                                    <td><?php echo $row->jurusan; ?></td>
                                    <td><?php echo $row->thn_lulus; ?></td>
                                    <td><?php echo $row->status_pekerjaan; ?></td>
                                    <td><?php echo $row->jabatan; ?></td>
                                    <td><?php echo $row->nama_kantor; ?></td>
                                    <td><?php echo $row->bidang_kantor; ?></td>
                                    <td><?php echo $row->pekerjaan_sesuai_jurusan; ?></td>
                                    <td><?php echo $row->waktu_tunggu_kerja; ?> Bulan</td>
                                    <td><?php echo $row->kompetensi_spesifik; ?></td>
                                    
                                </tr>

<?php 
$i++;
endforeach;
?>
                            </tbody>
                        </table>
        
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END PILIHAN CETAK-->


               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   