 <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>Tour Muslim</h3>
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
                <!-- tittle-->
                <div class="x_title">
                    <h2>Tambah, Edit dan Hapus Paket</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!--end title-->

                <!-- content -->
                <div class="x_content">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
                    <div class="panel panel-primary">
                        <!-- panel heading-->
                        <div class="panel-heading">
                            <i class="fa fa-table"></i> Data Paket
                        </div>
                        <!-- /.panel-heading -->

                        <!-- Panel body -->
                        <div class="panel-body" style="overflow-x:auto;">
                           <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                               <thead>
                                  <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Paket</th>
                                    <th class="text-center">Tujuan</th>
                                    <th class="text-center">Fasilitas</th>
                                    <th class="text-center">Maskapai Penerbangan</th>
                                    <th class="text-center">Waktu</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Tanggal Berangkat</th>
                                    <th class="text-center">Kuota</th>
                                    <th class="text-center">Aksi</th>
                                  </tr>
                                </thead>
       
                                <tbody id="myTable">
                                  <?php $no=1; foreach($all as $row): ?>
                                  <tr class="odd gradeX">
                                      <td><?php echo $no++; ?></td>
                                      <td><?php echo $row->nama_paket; ?></td>
                                      <td><?php echo $row->tujuan; ?></td>
                                      <td><?php echo $row->fasilitas; ?></td>
                                      <td class="text-center"><a target="_blank" href="<?php echo base_url() . './images/'.$row->maskapai_penerbangan  ?>">
                                        <img src="<?php echo base_url() . './images/'.$row->maskapai_penerbangan  ?>" width="300" height="200">
                                          </a></td>
                                      <td><?php echo $row->waktu; ?> Hari</td>
                                      <td>Rp. <?php echo $row->harga; ?></td>
                                      <td><?php echo date('d F Y', strtotime($row->tanggal_berangkat)); ?></td>]
                                      <td><?php echo $row->kuota; ?> Seat</td>
                                      <td>
                                          <center>
                                              <div class="tooltip-demo">
                                                <a data-toggle="modal" data-target="#modal-edit<?=$row->id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                <a href="<?php echo site_url('adminTourMuslim/hapus/'.$row->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Dengan Nama Paket : <?=$row->nama_paket;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
                  </div>
                  <!-- end content -->
              </div>
          </div>
        </div>
        <!-- end row-->
          </div>
        </div>
        <!-- /page content -->


        <!-- modal tambah --> 
        <div id="modal-tambah" class="modal fade">
          <div class="modal-dialog">
              <form class="form-horizontal" name="myInput" action="<?php echo site_url('adminTourMuslim/add'); ?>" method="post">
              <div class="modal-content">            
                  <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Data</h4>
                  </div>
                                  
                  <div class="modal-body">
                    <div class="form-group">
                       <label>Nama Paket</label>
                       <input class="form-control" name="nama_paket" type="text" placeholder="Input Nama Paket" required>
                    </div>
                    <div class="form-group">
                       <label>Tujuan</label>
                       <input class="form-control" name="tujuan" type="text" placeholder="Input Tujuan" required>
                    </div>
                    <div class="form-group">
                       <label>Fasilitas</label>
                       <textarea class="form-control" name="fasilitas" type="text" placeholder="Input Tujuan" required></textarea>
                    </div>
                    <div class="form-group">
                      <label>Maskapai Penerbangan</label>
                      <div>
                        <select name="maskapai_penerbangan" required="required" class="form-control col-md-7 col-xs-12">
                          <option value="none" selected disabled></option>
                          <option value="BUDIMAN.jpg">BUDIMAN AIRLINES</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                       <label>Waktu</label>
                       <input class="form-control" name="waktu" type="text" placeholder="Input Lama Hari" required>
                    </div>
                    <div class="form-group">
                       <label>Harga</label>
                       <input class="form-control" name="harga" type="text" placeholder="Input Harga" required>
                    </div>
                    <div class="form-group">
                       <label>Tanggal Berangkat</label>
                       <input class="form-control" name="tanggal_berangkat" type="date" required>
                    </div>
                    <div class="form-group">
                       <label>Kuota</label>
                       <input class="form-control" name="kuota" type="text" placeholder="Input Jumlah Kuota" required>
                    </div>
                  <br>
                 </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                </div>
              </div>
              </form>
          </div>
        </div>
        <!-- end modal tambah-->

<!-- modal edit-->
<?php $no=0; foreach($all as $row): $no++; ?>
                  <div class="row">
                    <div id="modal-edit<?=$row->id;?>" class="modal fade">
                      <div class="modal-dialog">
                        <form class="form-horizontal" action="<?php echo site_url('AdminTourMuslim/edit'); ?>" method="post">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Data</h4>
                          </div>
                          <div class="modal-body">
                   
                            <input type="hidden" readonly value="<?=$row->id;?>" name="id" class="form-control" >
                                      <div class="form-group">
                                        <label>Nama Paket</label>
                                            <input class="form-control" name="nama_paket" type="text" placeholder="Input Nama Paket" value="<?=$row->nama_paket;?>" required>
                                      </div>
                                      <div class="form-group">
                                        <label>Tujuan</label>
                                            <input class="form-control" name="tujuan" type="text" placeholder="Input Tujuan" value="<?=$row->tujuan;?>" required>
                                      </div>
                                      <div class="form-group">
                                        <label>Fasilitas</label>
                                            <textarea class="form-control" name="fasilitas" type="text" placeholder="Input Fasilitas" required><?php echo $row->fasilitas;?></textarea>
                                      </div>
                                      <div class="form-group">
                                        <label>Maskapai Penerbangan</label>
                                        <div>
                                          <select name="maskapai_penerbangan" required="required" value="<?=$row->maskapai_penerbangan;?>" class="form-control col-md-7 col-xs-12">
                                            <option selected disable><?php echo $row->maskapai_penerbangan;?></option>
                                            <option value="BUDIMAN.jpg">BUDIMAN AIRLINES</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label>Waktu</label>
                                            <input class="form-control" name="waktu" type="text" placeholder="Input Lama Hari" value="<?=$row->waktu;?>" required>
                                      </div>
                                      <div class="form-group">
                                        <label>Harga</label>
                                            <input class="form-control" name="harga" type="text" placeholder="Input Harga" value="<?=$row->harga;?>" required>
                                      </div>
                                      <div class="form-group">
                                        <label>Tanggal Berangkat</label>
                                            <input class="form-control" name="tanggal_berangkat" type="date" value="<?=$row->tanggal_berangkat;?>" required>
                                      </div>
                                      <div class="form-group">
                                        <label>Kuota</label>
                                            <input class="form-control" name="kuota" type="text" placeholder="Input Jumlah Kuota" value="<?=$row->kuota;?>" required>
                                      </div>
                            <br>
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                              <button type="submit" value="edit" class="btn btn-warning"><i class="icon-pencil5"></i>Ubah</button>
                            </div>
                          </div>
                          </form>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
<!-- end modal edit--> 



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