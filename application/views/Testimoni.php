<section id="about" style="margin-bottom:50px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                       <div class="headding_area">
                            <h2>Testimoni</h2>
                            <hr />

                        </div>

                </div>
                <div class="col-sm-offset-2 col-sm-8">
                   <form class="form-horizontal" action="/action_page.php">
                      <div>
                              <?php foreach ($testimoni->result() as $key) { ?>
                              <h3 class="post-title">
                                <?php echo $key->nama;?> | <?php echo $key->domisili;?>
                              </h3>
                              <p class="post-meta"> Berangkat Pada: 
                                <?php echo date('d F Y', strtotime($key->tanggal)); ?>
                              </p>
                              <div class="post-image">
                                <img class="img-thumbnail" style="display:block; margin-left:auto; margin-right:auto;" src="<?php echo base_url() . './images/'.$key->foto  ?>">
                              </div>
                              <p class="post-meta"> Kesan Pesan Saya:" 
                                <?php echo $key->isi;?>"
                              </p>

                              <hr style="border: solid blue 2px">
                              <p></p>
                            <?php } ?> 
                      </div>
                  </form>
                </div>
                    <div class="modal fade" id="mymodaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Tambah Testimoni</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form class="form-horizontal" name="testimoni" action="<?php echo base_url().'Testimoni/tambah_testimoni'; ?>" method="post" enctype="multipart/form-data">
                                          <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                                          </div>
                                          <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Masukan Alamat Email" name="email">
                                          </div>
                                          <div class="form-group">
                                            <label>Domisili</label>
                                            <input type="text" class="form-control" id="domisili" placeholder="Masukan Domisili" name="domisili">
                                          </div>
                                          <div class="form-group">
                                            <label>Tanggal Berangkat</label>
                                              <input type="date" class="form-control" id="tanggal" placeholder="Masukan Tanggal Berangkat" name="tanggal">
                                          </div>
                                          <div class="form-group">
                                            <label>Kesan Pesan</label>
                                              <textarea type="text" class="form-control" id="isi" placeholder="Masukan Pesan Kesan" name="isi"></textarea>
                                          </div>
                                          <div class="form-group">
                                            <label>Foto</label>
                                              <input type="file" class="form-control" id="foto" placeholder="Masukan Foto" name="foto">
                                          </div>
                                          <div class="form-group modal-footer">
                                            <div class="modal-footer">        
                                              <button type="submit" name="Tambah" value="Tambah" class="btn btn-success">Submit</button>
                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div> 
                                          </div>
                                  </form> 
                                </div>               
                              </div>
                            </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-8 box-header with-border">
                      <button class="btn btn-primary tambah-form" data-toggle="modal" data-target="#mymodaladd"><i class="fa fa-plus"></i>  Posting Testimoni</button>
                    </div>
        </div>

                
    </div><!-- container end -->
</section><!-- About end -->
