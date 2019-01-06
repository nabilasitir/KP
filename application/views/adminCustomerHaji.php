<!-- Panel Kerja Admin -->
 <div class="right_col" role="main">
      <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Daftar Jamaah Haji</h3>
              <h3><small>Klik untuk menambahkan/mengedit Data Jamaah</small></h3>
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
        
              <div class="x_panel">
                <div class="x_title">
                  <h2>Panel Setup Jamaah Haji</h2>
                  <div class="clearfix"></div>
                </div>
                
                <div class="x_content">
            
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
                    <div class="panel panel-primary">
                          <div class="panel-heading">
                              <i class="fa fa-table"></i> Data Jamaah Haji
                          </div>
                          <!-- /.panel-heading -->
                          
                          <div class="panel-body" style="overflow-x:auto;">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                               <thead>
                                  <tr>
                                    <th><center>No</th>
                                    <th><center>No. KTP</th>
                                    <th><center>No. Passport</th>
                                    <th><center>Nama Lengkap</th>
                                    <th><center>Tempat Lahir</th>
                                    <th><center>Tanggal Lahir</th>
                                    <th><center>Jenis Kelamin</th>
                                    <th><center>Umur</th>
                                    <th><center>Kewarganegaraan</th>
                                    <th><center>Alamat</th>
                                    <th><center>No. Tlp</th>
                                    <th><center>Email</th>
                                    <th><center>Pendidikan</th>
                                    <th><center>Pekerjaan</th>
                                    <th><center>Pengalaman</th>
                                    <th><center>Aksi</th>
                                  </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php $no=1; foreach($all as $row): ?>
                                    <tr class="odd gradeX">
                                      <td><?php echo $no++; ?></td>
                                      <td><?php echo $row->nomor_ktp; ?></td>
                                      <td><?php echo $row->nomor_passport; ?></td>
                                      <td><?php echo $row->nama; ?></td>
                                      <td><?php echo $row->tempat_lahir; ?></td>
                                      <td><?php echo date('d F Y', strtotime($row->tgl_lahir)); ?></td>
                                      <td><?php echo $row->jenis_kelamin; ?></td>
                                      <td><?php echo $row->umur; ?></td>
                                      <td><?php echo $row->kewarganegaraan; ?></td>
                                      <td><?php echo $row->alamat; ?></td>
                                      <td><?php echo $row->no_tlp; ?></td>
                                      <td><?php echo $row->email; ?></td>
                                      <td><?php echo $row->pendidikan; ?></td>
                                      <td><?php echo $row->pekerjaan; ?></td>
                                      <td><?php echo $row->pengalaman; ?></td>
                                      <td>
                                        <center>
                                          <div class="tooltip-demo">
                                            <a data-toggle="modal" data-target="#modal-edit<?=$row->id_jamaah;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                            <a href="<?php echo site_url('adminCustomerHaji/hapus/'.$row->id_jamaah); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->nama;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
                     <!-- /.panel-primary -->

                          <!--modal tambah-->                       
                          <div id="modal-tambah" class="modal fade">
                              <div class="modal-dialog">
                                <form class="form-horizontal" action="<?php echo site_url('adminCustomerHaji/add'); ?>" method="post">
                                  <div class="modal-content">
                                      <div class="modal-header bg-primary">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Tambah Data</h4>
                                      </div>
                                      
                                      <div class="modal-body"> 
                                          <div class="form-group">
                                              <label class='col-md-3'>Nomor KTP</label>
                                              <div class='col-md-9'><input type="text" name="nomor_ktp" autocomplete="off" required placeholder="Masukkan Nomor KTP" class="form-control" ></div>
                                          </div>
                                          <div class="form-group">
                                              <label class='col-md-3'>Nomor Passport</label>
                                              <div class='col-md-9'><input type="text" name="nomor_passport" autocomplete="off" required placeholder="Masukkan Nomor Passport" class="form-control" ></div>
                                          </div>
                                          <div class="form-group">
                                              <label class='col-md-3'>Nama</label>
                                              <div class='col-md-9'><input type="text" name="nama" autocomplete="off" required placeholder="Masukkan Nama" class="form-control" ></div>
                                          </div>
                                          <div class="form-group">
                                              <label class='col-md-3'>Tempat Lahir</label>
                                              <div class='col-md-9'><input type="text" name="tempat_lahir" autocomplete="off" required placeholder="Masukkan Tempat Lahir" class="form-control" ></div>
                                          </div>
                                          <div class="form-group">
                                              <label class='col-md-3'>Tanggal Lahir</label>
                                              <div class='col-md-9'><input type="date" name="tgl_lahir" autocomplete="off" required placeholder="Masukkan Tanggal Lahir" class="form-control" ></div>
                                          </div>
                                          <div class="form-group">
                                              <label class='col-sm-3'>Jenis Kekamin</label>
                                              <div class='col-md-9'>
                                                <select name="jenis_kelamin" required class="form-control">
                                                  <option selected disable></option>
                                                  <option >PEREMPUAN</option>
                                                  <option >LAKI-LAKI</option>
                                                </select>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class='col-md-3'>Umur</label>
                                              <div class='col-md-9'><input type="text" name="umur" autocomplete="off" required placeholder="Masukkan Umur" class="form-control" ></div>
                                          </div>
                                          <div class="form-group">
                                              <label class='col-md-3'>Kewarganegaraan</label>
                                              <div class='col-md-9'><input type="text" name="kewarganegaraan" autocomplete="off" required placeholder="Masukkan Kewarganegaraan" class="form-control" ></div>
                                          </div>
                                          <div class="form-group">
                                              <label class='col-md-3'>Alamat</label>
                                              <div class='col-md-9'><input type="text" name="alamat" autocomplete="off" required placeholder="Masukkan Alamat" class="form-control" ></div>
                                          </div>
                                          <div class="form-group">
                                              <label class='col-md-3'>Nomor Telepon</label>
                                              <div class='col-md-9'><input type="text" name="no_tlp" autocomplete="off" required placeholder="Masukkan Nomor Telepon" class="form-control" ></div>
                                          </div>
                                          <div class="form-group">
                                              <label class='col-md-3'>Email</label>
                                              <div class='col-md-9'><input type="text" name="email" autocomplete="off" placeholder="Masukkan Email" class="form-control" ></div>
                                          </div>
                                          <div class="form-group">
                                              <label class='col-md-3'>Pendidikan</label>
                                                  <div class='col-md-9'>
                                                      <select name="pendidikan" required class="form-control">
                                                        <option selected disable></option>
                                                        <option >SD/MI</option>
                                                        <option >SMP/MTS/SLTP</option>
                                                        <option >SMA/MAN/SLTA</option>
                                                        <option >S1</option>
                                                        <option >S2</option>
                                                        <option >S3</option>
                                                      </select>
                                                  </div>
                                          </div>
                                          <div class="form-group">
                                            <label class='col-md-3'>Pekerjaan</label>
                                                <div class='col-md-9'>
                                                    <select name="pekerjaan" required class="form-control">
                                                      <option selected disable></option>
                                                      <option >Pegawai Negeri</option>
                                                      <option >Pegawai Swasta</option>
                                                      <option >Wirausaha</option>
                                                      <option >TNI/POLRI</option>
                                                      <option >Pegawai BUMN</option>
                                                      <option >LAINNYA</option>
                                                    </select>
                                                </div>
                                          </div>
                                          <div class="form-group">
                                              <label class='col-md-3'>Pengalaman Haji</label>
                                                <div class='col-md-9'>
                                                      <select name="pengalaman" required class="form-control">
                                                        <option selected disable></option>
                                                        <option >SUDAH PERNAH</option>
                                                        <option >BELUM PERNAH</option>
                                                      </select>
                                                </div>
                                         </div>
                                           <div class="form-group">
                                                        <label>Pas Photo</label>
                                                        <input class="form-control" type="file" name="pas_foto">
                                                  </div>
                                                  <div class="form-group">
                                                        <label>Bukti Transfer</label>
                                                        <input class="form-control" type="file" name="bukti_transfer">
                                                  </div>
                                      </div>
                                      <!--end modal body-->
                                      
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                                      </div>
                                  </div>
                                  <!--end modal content-->
                                </form>
                              </div>
                              <!--end modal dialog-->
                          </div> 
                          <!--end modal tambah-->      
                </div>          
              </div>
          </div>
      </div>
  </div>
                    <?php $no=0; foreach($all as $row): $no++; ?>
                                    <div class="row">
                                      <div id="modal-edit<?=$row->id_jamaah;?>" class="modal fade">
                                        <div class="modal-dialog">
                                          <form class="form-horizontal" action="<?php echo site_url('adminCustomerHaji/edit'); ?>" method="post">
                                          <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Edit Data</h4>
                                            </div>
                                            <div class="modal-body">
                                                  <input type="hidden" readonly value="<?=$row->id_jamaah;?>" name="id" class="form-control" >
                                                  <div class="form-group">
                                                    <label class='col-md-3'>Nomor KTP</label>
                                                    <div class='col-md-9'><input type="text" name="nomor_ktp" autocomplete="off" value="<?=$row->nomor_ktp;?>" required placeholder="Masukkan Nomor KTP" class="form-control" ></div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class='col-md-3'>Nomor Passport</label>
                                                      <div class='col-md-9'><input type="text" name="nomor_passport" autocomplete="off" value="<?=$row->nomor_passport?>" required placeholder="Masukkan Nomor Passport" class="form-control" ></div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class='col-md-3'>Nama</label>
                                                      <div class='col-md-9'><input type="text" name="nama" autocomplete="off" value="<?=$row->nama;?>" required placeholder="Masukkan Nama" class="form-control" ></div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class='col-md-3'>Tempat Lahir</label>
                                                      <div class='col-md-9'><input type="text" name="tempat_lahir" autocomplete="off" value="<?=$row->tempat_lahir;?>" required placeholder="Masukkan Tempat Lahir" class="form-control" ></textarea></div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class='col-md-3'>Tanggal Lahir</label>
                                                      <div class='col-md-9'><input type="date" name="tgl_lahir" autocomplete="off" value="<?=$row->tgl_lahir;?>" required placeholder="Masukkan Tanggal Lahir" class="form-control" ></div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class='col-sm-3'>Jenis Kekamin</label>
                                                      <div class='col-md-9'>
                                                          <select name="jenis_kelamin" value="<?=$row->jenis_kelamin;?>" required class="form-control">
                                                              <option selected disable><?php echo $row->jenis_kelamin;?></option>
                                                              <option >PEREMPUAN</option>
                                                              <option >LAKI-LAKI</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class='col-md-3'>Umur</label>
                                                      <div class='col-md-9'><input type="text" name="umur" autocomplete="off" value="<?=$row->umur;?>" required placeholder="Masukkan Umur" class="form-control" ></div>
                                                 </div>
                                                  <div class="form-group">
                                                      <label class='col-md-3'>Kewarganegaraan</label>
                                                      <div class='col-md-9'><input type="text" name="kewarganegaraan" autocomplete="off" value="<?=$row->kewarganegaraan;?>" required placeholder="Masukkan Kewarganegaraan" class="form-control" ></div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class='col-md-3'>Alamat</label>
                                                      <div class='col-md-9'><input type="text" name="alamat" autocomplete="off" value="<?=$row->alamat;?>" required placeholder="Masukkan Alamat" class="form-control" ></div>
                                                 </div>
                                                  <div class="form-group">
                                                      <label class='col-md-3'>Nomor Telepon</label>
                                                      <div class='col-md-9'><input type="text" name="no_tlp" autocomplete="off" value="<?=$row->no_tlp;?>" required placeholder="Masukkan Nomor Telepon" class="form-control" ></div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class='col-md-3'>Email</label>
                                                      <div class='col-md-9'><input type="text" name="email" autocomplete="off" value="<?=$row->email;?>" placeholder="Masukkan Email" class="form-control" ></div>
                                                 </div>
                                                 <div class="form-group">
                                                      <label class='col-md-3'>Pendidikan</label>
                                                          <div class='col-md-9'>
                                                              <select name="pendidikan" value="<?=$row->pendidikan;?>" required class="form-control">
                                                                <option selected disable></option>
                                                                <option >SD/MI</option>
                                                                <option >SMP/MTS/SLTP</option>
                                                                <option >SMA/MAN/SLTA</option>
                                                                <option >S1</option>
                                                                <option >S2</option>
                                                                <option >S3</option>
                                                              </select>
                                                          </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class='col-md-3'>Pekerjaan</label>
                                                          <div class='col-md-9'>
                                                              <select name="pekerjaan" value="<?=$row->pekerjaan;?>" required class="form-control">
                                                                <option selected disable></option>
                                                                <option >Pegawai Negeri</option>
                                                                <option >Pegawai Swasta</option>
                                                                <option >Wirausaha</option>
                                                                <option >TNI/POLRI</option>
                                                                <option >Pegawai BUMN</option>
                                                                <option >LAINNYA</option>
                                                              </select>
                                                          </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class='col-md-3'>Pengalaman Haji</label>
                                                        <div class='col-md-9'>
                                                              <select name="pengalaman" value="<?=$row->pengalaman;?>" required class="form-control">
                                                                <option selected disable><?php echo $row->pengalaman;?></option>
                                                                <option >SUDAH PERNAH</option>
                                                                <option >BELUM PERNAH</option>
                                                              </select>
                                                        </div>
                                                  </div>
                                                
                                            
                                                 
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" value="edit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
                                              </div>
                                            </div>
                                            </form>
                                        </div>
                                      </div>
                                    </div>
                                    <?php endforeach; ?>
<!--Panel Kerja Admin -->







