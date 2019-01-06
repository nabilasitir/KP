
<div class="col-sm-2" style="border: solid 1px; margin:10px; height: 100%;">
  <h4>Pilih Sesuai Jadwal Anda</h4><br>
    <p>Tanggal</p>  
        <input class="form-control" id="myInput" type="date"><br>
      <p>Penerbangan</p>  
        <form action="" method="post">
        <select class="form-control" name="Penerbangan">
        <option value="">Silahkan Pilih</option>
        </select>
      </form><br>
      <p>Paket</p>  
        <form action="" method="post">
        <select class="form-control" name="Penerbangan">
        <option value="">Silahkan Pilih</option>
        </select>
      </form><br>
      <button type="button" class="btn btn-primary" position="right">CARI</button>
</div>

<?php foreach ($tour_muslim as $key): ?>
<div class="col-sm-9.5">
  <div class="col-sm-3" style="border: solid 1px; margin:10px; ">
    <div class="card">
      <img src="<?php echo base_url() . './images/'.$key->maskapai_penerbangan  ?>" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b><center><?php echo $key->nama_paket?> </b></h4> 
        <h4><b><center><?php echo $key->waktu?> Hari</b></h4> 
        <p><center><?php echo date('d F Y', strtotime($key->tanggal_berangkat)); ?></p> 
        <button type="button" class="btn btn-primary" position="right" data-toggle="modal" data-target="#detailPaket<?=$key->id;?>" style="width:75%; margin-left:25px;">Lihat Detail Paket</button>
        <a href="<?php echo base_url();?>index.php/pendaftaranUmrah"<button type="button" class="btn btn-primary" position="right" data-target="#detailPaket<?=$key->id;?>" style="width:75%; margin-left:25px;">Booking Paket</button></a>
    </div>
  </div>
</div>
</div>
<?php endforeach; ?>

              <!-- Detail Paket -->
              <?php $no=0; foreach($tour_muslim as $key): $no++; ?>
              <div id="detailPaket<?=$key->id;?>" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Detail Paket</h4>
                          </div>
                          <div class="modal-body">
                            <img src="<?php echo base_url() . './images/'.$key->maskapai_penerbangan  ?>" alt="Avatar" style="width:100%">
                            <div class="form-group">
                              <label class='col-md-5'>Nama Paket</label>
                              <label class='col-md-7'><?php echo $key->nama_paket ?></label>
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
                              <label class='col-md-5'>Waktu</label>
                              <label class='col-md-7'><?php echo $key->waktu ?> Hari</label>
                            </div>
                            <div class="form-group">
                              <label class='col-md-5'>Harga</label>
                              <label class='col-md-7'>Rp. <?php echo $key->harga ?></label>
                            </div>
                            <div class="form-group">
                              <label class='col-md-5'>Tanggal Keberangkatan</label>
                              <label class='col-md-7'><?php echo $key->tanggal_berangkat ?></label>
                            </div>
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary" href="<?php echo base_url();?>index.php/pendaftaranUmrah">Booking</button>
                            </div>   
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?> 


                   