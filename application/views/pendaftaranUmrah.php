<head>

</head>

<div class="col-sm-offset-1 col-sm-10">
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Wizards</h3>
              </div>

              
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Wizards <small>Sessions</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                  Step 1<br />
                                  <small>Step 1 Pilih Paket</small>
                            </span>

                            
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Step 2 Isi Data Diri</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Step 3 Preview Data</small>
                                          </span> 
                          </a>
                        </li>
                        
                      </ul>
                      <div id="step-1">
                        <?php foreach ($paket as $key): ?>
                        <div id="detailPaket<?=$key->id;?>">
                          <div>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Detail Paket</h4>
                          </div>
                          <div class="col-sm-offset-1">
                            <div class="form-group">
                              <label class='col-md-5'>Nama Paket</label>
                              <label class='col-md-7'><?php echo $key->nama_paket ?></label>
                            </div>
                            <div class="form-group">
                              <label class='col-md-5'>Harga</label>
                              <label class='col-md-7'><?php echo $key->harga ?></label>
                            </div>
                            <div class="form-group">
                              <label class='col-md-5'>Fasilitas</label>
                              <label class='col-md-7'><?php echo $key->fasilitas ?></label>
                            </div>
                            <div class="form-group">
                              <label class='col-md-5'>Kuota</label>
                              <label class='col-md-7'><?php echo $key->kuota ?></label>
                            </div>
                            <div class="form-group">
                              <label class='col-md-5'>Maskapai Penerbangan</label>
                              <label class='col-md-7'><?php echo $key->maskapai_penerbangan ?></label>
                            </div>
                            <div class="form-group">
                              <label class='col-md-5'>Lama Hari</label>
                              <label class='col-md-7'><?php echo $key->hari ?></label>
                            </div>
                            <div class="form-group">
                              <label class='col-md-5'>Tanggal Keberangkatan</label>
                              <label class='col-md-7'><?php echo $key->keberangkatan ?></label>
                            </div>
                            <div class="form-group">
                              <label class='col-md-5'>Tanggal Kepulangan</label>
                              <label class='col-md-7'><?php echo $key->kepulangan ?></label>
                            </div>
                            <div class="form-group">
                              <label class='col-md-5'>Status</label>
                              <label class='col-md-7'><?php echo $key->status ?></label>
                            </div>
                          </div> 
                        </div>
                      <?php endforeach; ?>
                      </div>


                      <div id="step-2">
                       <form class="form-horizontal form-label-left" action="<?php echo base_url().'pendaftaranUmrah/add'; ?>" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id_paket" value="<?php echo $key->id; ?>">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomor_ktp">Nomor KTP <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nomor_ktp" name="nomor_ktp" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomor_passport">Nomor Passport <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nomor_passport" name="nomor_passport" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nama" class="form-control col-md-7 col-xs-12" type="text" name="nama">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat Lahir <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="tempat_lahir" name="tempat_lahir" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_lahir">Tanggal Lahir <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="date" id="tgl_lahir" name="tgl_lahir" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="jenis_kelamin" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="jenis_kelamin" value="Laki-Laki"> &nbsp; Laki-Laki &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="umur">Umur <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="umur" name="umur" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="kewarganegaraan" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="kewarganegaraan" value="WNI"> &nbsp; WNI &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="kewarganegaraan" value="WNA"> WNA
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat Lengkap <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea type="text" id="alamat" name="alamat" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_tlp">Nomor Telepon <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="no_tlp" name="no_tlp" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">E-Mail <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="email" id="email" name="email" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pendidikan">Pendidikan Terakhir <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="pendidikan" name="pendidikan" required="required" class="form-control col-md-7 col-xs-12">
                                <option value="none" selected disabled></option>
                                <option value="SD">SD</option>
                                <option value="SLTP">SLTP</option>
                                <option value="SLTA">SLTA</option>
                                <option value="SM / D1 / D2 / D3">SM / D1 / D2 / D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="Lain-lain">Lain-lain</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pekerjaan">Pekerjaan<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12"> 
                              <select id="pekerjaan" name="pekerjaan" required="required" class="form-control col-md-7 col-xs-12">
                                <option value="" selected disabled></option>
                                <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                <option value="TNI / POLRI">TNI / POLRI</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Buruh">Buruh</option>
                                <option value="BUMN / BUMD">BUMN / BUMD</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Pelajar / Mahasiswa">Pelajar / Mahasiswa</option>
                                <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengalaman Umrah/Haji</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="pengalaman" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="pengalaman" value="Pernah"> &nbsp; Pernah &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="pengalaman" value="Belum Pernah"> Belum Pernah
                                </label>
                              </div>
                            </div>
                          </div>
                        <!--  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pas_foto">Pas Foto <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="file" id="pas_foto" name="pas_foto" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bukti_transfer">Foto Bukti Transfer <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="file" id="bukti_transfer" name="bukti_transfer" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div> -->
                          <div style="text-align: center" class="col-sm-offset-5">        
                            <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                          </div> 

                        </form>

                      </div>

                      <div id="step-3">
                        <form class="form-horizontal" name="tambahFoto" action="<?php echo base_url(). 'pendaftaranUmrah/tambahFoto'; ?>" method="post" enctype="multipart/form-data">
                          
                          <input type="hidden" name="id_peserta" value="<?php echo $key->id; ?>">  
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="foto">Foto:</label>
                                <div class="col-sm-4">          
                                  <input type="file" class="form-control" id="foto" name="foto">
                                </div>
                            </div>
      
                        </form>
                        
                      </div>
                      

                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
</div>
</div>

<script>
  $(document).ready(function(){
    $(".buttonNext").click(function(){

      //nama = $("#nama").val();
      alert("  gfgr");
      //$("#l_nama").html(nama);

    });
  });
</script>