
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

  <!-- -->
<?php
$i=0;

  foreach($listchat->result() as $row):

    $m_nama[$i]=$row->mtk;
    $m_dosen[$i]=$row->dosen;
    $id_jadual[$i]=$row->id_jadual;

    $i++;
  endforeach;



?>
                        <div class="widget-title">
                            <h4><i class=" icon-indent-left"></i>Daftar Chat</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
                        </div>
                        <div class="widget-body" style="font-size:14px;">
                                
                                    <ul class="branch in">

<?php 


?>
                                        <li>
                                            
                                            

                                  <?php 
                                  for ($i=0; $i <count($m_nama) ; $i++) {
                                  ?>
                                              <li><i class="icon-file"></i> <a href="<?php echo base_url().'e_dosen/chat/'.$id_jadual[$i]; ?>"><i style="color:blue;"><b><?php echo $m_nama[$i].' ('.$m_dosen[$i].') '; ?></b> </a></li>

                                  <?php 
                                  }
                                  ?>
                                            
                                        </li>


                                    </ul>
                        </div>
  <!-- -->
  
                            
                            <div class="space5"></div>

                        </div>

                        </div>   
                  </div>

               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   