<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
         <div class="title_left">
            <h3>Layanan Umrah</h3>
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


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Tambah dan Edit Layanan Umrah</h2>
                     <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">     
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
          
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <i class="fa fa-table"></i> Data Paket
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body" style="overflow-x:auto;">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><center>No</th>
                                                <th><center>Nama Paket</th>
                                                <th><center>Harga</th>
                                                <th><center>Fasilitas</th>
                                                <th><center>Maskapai Penerbangan</th>
                                                <th><center>Waktu</th>
                                                <th><center>Tanggal Berangkat</th>
                                                <th><center>Tanggal Pulang</th>
                                                <th><center>Kuota</th>
                                                <th><center>Status</th>
                                                <th><center>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <?php $no=1; foreach($all as $row): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row->nama_paket; ?></td>
                                                <td>Rp. <?php echo $row->harga; ?></td>
                                                <td><?php echo $row->fasilitas; ?></td>
                                                <td class="text-center"><a target="_blank" href="<?php echo base_url() . './images/'.$row->maskapai_penerbangan  ?>">
                                                  <img src="<?php echo base_url() . './images/'.$row->maskapai_penerbangan  ?>" width="300" height="200">
                                                    </a></td>
                                                <td><?php echo $row->hari; ?> Hari</td>
                                                <td><?php echo $row->keberangkatan; ?></td>
                                                <td><?php echo $row->kepulangan; ?></td>
                                                <td><?php echo $row->kuota; ?> Seat</td>
                                                <td><?php echo $row->status; ?></td>
                                                <td>
                                                    <center>
                                                      <div class="tooltip-demo">
                                                        <a data-toggle="modal" data-target="#modal-edit<?=$row->id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                        <a href="<?php echo site_url('adminLayananUmrah/hapus/'.$row->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->nama_paket;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
                  </div>
                </div>
              </div>
                   
                 <!-- Form Modal -->  
                  <div id="modal-tambah" class="modal fade">
                      <div class="modal-dialog">
                        <form class="form-horizontal" action="<?php echo site_url('adminLayananUmrah/add'); ?>" method="post">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Tambah Data</h4>
                          </div>
                          <div class="modal-body">
                            
                            <div class="form-group">
                              <label class='col-md-3'>Nama Paket</label>
                              <div class='col-md-9'><input type="text" name="nama_paket" autocomplete="off" required placeholder="Masukkan Nama Paket" class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Harga</label>
                              <div class='col-md-9'><input type="text" name="harga" autocomplete="off" required placeholder="Masukkan Harga" class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Fasilitas</label>
                              <div class='col-md-9'><textarea type="text" name="fasilitas" autocomplete="off" required placeholder="Masukkan Fasilitas" class="form-control" ></textarea></div>
                            </div>
                            <div class="form-group">
                              <label class='col-sm-3'>Maskapai Penerbangan</label>
                              <div class='col-md-9'>
                                <select name="maskapai_penerbangan" required class="form-control">
                                  <option selected disable></option>
                                  <option value="BUDIMAN.jpg">BUDIMAN AIRLINES</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Waktu</label>
                              <div class='col-md-9'><input type="text" name="hari" autocomplete="off" required placeholder="Masukkan Waktu (Hari)" class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Tanggal Berangkat</label>
                              <div class='col-md-9'><input type="date" name="keberangkatan" autocomplete="off" required placeholder="Masukkan Tanggal Berangkat" class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Tanggal Pulang</label>
                              <div class='col-md-9'><input type="date" name="kepulangan" autocomplete="off" required placeholder="Masukkan Tanggal Pulang" class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Kuota</label>
                              <div class='col-md-9'><input type="text" name="kuota" autocomplete="off" required placeholder="Masukkan Kuota" class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Status</label>
                              <div class='col-md-9'><input type="text" name="status" autocomplete="off" placeholder="Masukkan Status" class="form-control" ></div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                            </div>
                          </form>
                      </div>
                  </div>    
                  </div>
                </div>
                  <!-- /#page-wrapper -->
                   
                  <?php $no=0; foreach($all as $row): $no++; ?>
                  <div class="row">
                    <div id="modal-edit<?=$row->id;?>" class="modal fade">
                      <div class="modal-dialog">
                        <form class="form-horizontal" action="<?php echo site_url('adminLayananUmrah/edit'); ?>" method="post">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Data</h4>
                          </div>
                          <div class="modal-body">
                   
                            <input type="hidden" readonly value="<?=$row->id;?>" name="id" class="form-control" >
                   
                            <div class="form-group">
                              <label class='col-md-3'>Nama Paket</label>
                              <div class='col-md-9'><input type="text" name="nama_paket" autocomplete="off" value="<?=$row->nama_paket;?>" required placeholder="Masukan Nama Paket" class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Harga</label>
                              <div class='col-md-9'><input type="text" name="harga" autocomplete="off" value="<?=$row->harga;?>" required placeholder="Masukan Harga" class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Fasilitas</label>
                              <div class='col-md-9'><textarea type="text" name="fasilitas" autocomplete="off" required placeholder="Masukan Fasilitas" class="form-control"><?php echo $row->fasilitas;?></textarea></div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3">Maskapai Penerbangan</label>
                              <div class="col-sm-9">
                                <select name="maskapai_penerbangan" required="required" class="form-control">
                                  <option selected disable><?php echo $row->maskapai_penerbangan;?></option>
                                  <option value="BUDIMAN.jpg">BUDIMAN AIRLINES</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Waktu</label>
                              <div class='col-md-9'><input type="text" name="hari" autocomplete="off" value="<?=$row->hari;?>" required placeholder="Masukan Waktu (hari)" class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Tanggal Keberangkatan</label>
                              <div class='col-md-9'><input type="date" name="keberangkatan" autocomplete="off" value="<?=$row->keberangkatan;?>" required placeholder="Masukan " class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Tanggal Kepulangan</label>
                              <div class='col-md-9'><input type="date" name="kepulangan" autocomplete="off" value="<?=$row->kepulangan;?>" required placeholder="Masukan " class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>kuota</label>
                              <div class='col-md-9'><input type="text" name="kuota" autocomplete="off" value="<?=$row->kuota;?>" required placeholder="Masukan Kuota" class="form-control" ></div>
                            </div>
                            <div class="form-group">
                              <label class='col-md-3'>Status</label>
                              <div class='col-md-9'><input type="text" name="status" autocomplete="off" value="<?=$row->status;?>" required placeholder="Masukan Status" class="form-control" ></div>
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
              </div>
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