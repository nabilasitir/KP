<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
               <div class="page-title">
                  <div class="title_left">
                    <h3>Video</h3>
                    <h3><small>Klik untuk menambahkan/mengedit Video</small></h3>
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
              
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>El-Haqq <small>Video</small></h2>
                    <div class="clearfix"></div>
                    </div>
                  
                    <div class="x_content">

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
                     
                      <!-- /.row -->
                      <div class="row">
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <i class="fa fa-table"></i> Data Link File
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body" style="overflow-x:auto;">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><center>No</th>
                                                <th><center>Nama File</th>
                                                <th><center>Link</th>
                                                <th><center>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <?php $no=1; foreach($all as $row): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row->nama_video; ?></td>
                                                <td><?php echo $row->link; ?></td>
                                                <td>
                                                    <center>
                                                      <div class="tooltip-demo">
                                                        <a data-toggle="modal" data-target="#modal-edit<?=$row->id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                        <a href="<?php echo site_url('adminVideo/hapus/'.$row->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->nama_video;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
                    </div>
                   
                 <!-- Form Modal -->  
                  <div id="modal-tambah" class="modal fade">
                      <div class="modal-dialog">
                        <form class="form-horizontal" action="<?php echo site_url('adminVideo/add'); ?>" method="post">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Tambah Data</h4>
                          </div>
                          <div class="modal-body">
                            
                            <div class="form-group">
                              <label class='col-md-3'>Nama File</label>
                              <div class='col-md-9'><input type="text" name="nama_video" autocomplete="off" required placeholder="Masukkan Nama File" class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Link File</label>
                              <div class='col-md-9'><input type="text" name="link" autocomplete="off" required placeholder="Masukkan Link File" class="form-control" ></div>
                            </div>
                            <br>
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                            </div>
                          </div>
                          </form>
                      </div>
                  </div>    
                  </div>
                </div>
              </div>
                  <!-- /#page-wrapper -->
                   
                  <?php $no=0; foreach($all as $row): $no++; ?>
                  <div class="row">
                    <div id="modal-edit<?=$row->id;?>" class="modal fade">
                      <div class="modal-dialog">
                        <form class="form-horizontal" action="<?php echo site_url('adminVideo/edit'); ?>" method="post">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Data</h4>
                          </div>
                          <div class="modal-body">
                   
                            <input type="hidden" readonly value="<?=$row->id;?>" name="id" class="form-control" >
                   
                           <div class="form-group">
                              <label class='col-md-3'>Nama File</label>
                              <div class='col-md-9'><input type="text" name="nama_video" value="<?=$row->nama_video;?>" autocomplete="off" required placeholder="Masukkan Nama File" class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Link File</label>
                              <div class='col-md-9'><input type="text" name="link" value="<?=$row->link;?>" autocomplete="off" required placeholder="Masukkan Link File" class="form-control" ></div>
                            </div>
                            <br>
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
                            </div>
                          </div>
                          </form>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>


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