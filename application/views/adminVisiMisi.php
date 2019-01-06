<!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
          <div class="title_left">
             <h3>Visi & Misi</h3>
             <h3><small>Klik untuk menambahkan/mengedit Visi & Misi</small></h3>
          </div>

          <div class="title_right">
             <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                  </span>
               </div>
             </div>
          </div>
      </div>

      <div class="clearfix"></div>
       <!-- alert -->
       <?php 
       $data=$this->session->flashdata('sukses');
       if($data!=""){ ?>
       <div id="notifikasi" class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Sukses! </strong> <?=$data;?></div>
       <?php } ?>
                   
       <?php 
       $data2=$this->session->flashdata('error');
       if($data2!=""){ ?>
       <div id="notifikasi" class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong> Error! </strong> <?=$data2;?></div>
       <?php } ?>
       <!-- end alert -->  

       <!-- row-->  
       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Visi& Misi</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              
              <div class="x_content">                 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambahvisi"><i class="fa fa-plus-circle"></i> Tambah Visi </button>
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <i class="fa fa-table"></i> VISI El-Haqq
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body" style="overflow-x:auto;">
                          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                  <th><center>No</th>
                                  <th><center>Visi</th>
                                  <th><center>Aksi</th>
                                </tr>
                              </thead>
                        
                              <tbody id="myTable">
                              <?php $no=1; foreach($all as $row): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row->visi; ?></td>
                                    <td>
                                      <center>
                                        <div class="tooltip-demo">
                                          <a data-toggle="modal" data-target="#modal-editVisi<?=$row->id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                          <a href="<?php echo site_url('adminVisiMisi/hapusv/'.$row->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->visi;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
                                        </div>
                                      </center>
                                    </td>
                                </tr>
                              <?php endforeach; ?>
                              </tbody>
                          </table>
                          <!-- /.table-responsive -->
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
                </div>
                                       
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambahMisi"><i class="fa fa-plus-circle"></i> Tambah Misi </button>
          
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <i class="fa fa-table"></i> MISI El-Haqq
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body" style="overflow-x:auto;">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><center>No</th>
                                                <th><center>Misi</th>
                                                <th><center>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <?php $no=1; foreach($alls as $row): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row->misi; ?></td>
                                                <td>
                                                    <center>
                                                      <div class="tooltip-demo">
                                                        <a data-toggle="modal" data-target="#modal-editmisi<?=$row->id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                        <a href="<?php echo site_url('adminVisiMisi/hapusm/'.$row->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->misi;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
                                                      </div>
                                                    </center>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                   
                 <!-- Form Modal -->  
                  <div id="modal-tambahvisi" class="modal fade">
                      <div class="modal-dialog">
                        <form class="form-horizontal" action="<?php echo site_url('adminVisiMisi/addv'); ?>" method="post">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Tambah Data</h4>
                          </div>
                          <div class="modal-body">
                            
                            <div class="form-group">
                              <label class='col-md-3'>Visi</label>
                              <div class='col-md-9'><textarea type="text" name="visi" autocomplete="off" placeholder="Masukkan Visi" class="form-control" ></textarea></div>
                            </div>
                            <br>
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                            </div>
                          </form>
                      </div>
                  </div>    
                </div>
                  <div id="modal-tambahMisi" class="modal fade">
                      <div class="modal-dialog">
                        <form class="form-horizontal" action="<?php echo site_url('adminVisiMisi/addm'); ?>" method="post">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Tambah Data</h4>
                          </div>
                          <div class="modal-body">
                            
                            <div class="form-group">
                              <label class='col-md-3'>Misi</label>
                              <div class='col-md-9'><textarea type="text" name="misi" autocomplete="off" placeholder="Masukkan Misi" class="form-control" ></textarea></div>
                            </div>
                            <br>
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                            </div>
                          </form>
                      </div>
                  </div>    
                </div>
                  
                   
                  <?php $no=0; foreach($all as $row): $no++; ?>
                  <div class="row">
                    <div id="modal-editvisi<?=$row->id;?>" class="modal fade">
                      <div class="modal-dialog">
                        <form class="form-horizontal" action="<?php echo site_url('adminVisiMisi/editv'); ?>" method="post">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Data</h4>
                          </div>
                          <div class="modal-body">
                   
                            <input type="hidden" readonly value="<?=$row->id;?>" name="id" class="form-control" >
                   
                           <div class="form-group">
                              <label class='col-md-3'>Visi</label>
                              <div class='col-md-9'><input type="text" name="visi" value="<?=$row->visi;?>" autocomplete="off" placeholder="Masukkan Visi" class="form-control" ></div>
                            </div>
                            <br>
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>

                  <?php $no=0; foreach($all as $row): $no++; ?>
                  <div class="row">
                    <div id="modal-editmisi<?=$row->id;?>" class="modal fade">
                      <div class="modal-dialog">
                        <form class="form-horizontal" action="<?php echo site_url('adminVisiMisi/editm'); ?>" method="post">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Data</h4>
                          </div>
                          <div class="modal-body">
                   
                            <input type="hidden" readonly value="<?=$row->id;?>" name="id" class="form-control" >
                   
                           <div class="form-group">
                              <label class='col-md-3'>Misi</label>
                              <div class='col-md-9'><input type="text" name="misi" value="<?=$row->misi;?>" autocomplete="off" placeholder="Masukkan Misi" class="form-control" ></div>
                            </div>
                            <br>
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>


                </div><!-- /.box-body -->
              <!-- /view data -->
            </div><!--/.col (right) -->
          </div> <!-- /.row -->
         </div>
         </div>
        </div>     

<script>
      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
</script>