  <!--Start of blog-->
        <section id="blog">
            <div class="container" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest_blog text-center">
                            <h2>Paket Layanan Umrah</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cum libero vitae quos eaque commodi.</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <?php foreach ($paket as $key): ?>
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                <div class="blog_img">
                                    <img src="<?php echo base_url() . './images/'.$key->maskapai_penerbangan  ?>" alt="Avatar" style="width:100%;" alt="Card image cap">
                                </div>
                                <div class="blog_content">
                                    <a href=""><h3><b><?php echo $key->nama_paket?> </b></h3></a>
                                   
                                    <h4 >Paket <?php echo $key->hari?> Hari</h4>
                                    <h4 >Keberangkatan Tanggal :<?php echo date('d F Y', strtotime($key->keberangkatan)); ?></h4>
                                    <h4 >Kepulangan Tanggal    :<?php echo date('d F Y', strtotime($key->kepulangan)); ?></h4>
                                    <h4 ><b>IDR.</b>    <?php echo $key->harga?></h4>

                                    <center>
                                    <a style="width:240px; text-align:center;"type="button" class="btn btn-primary" position="right" data-toggle="modal" data-target="#detailPaket<?=$key->id;?>">Lihat Detail Paket</a>
                                    <a style="width:240px; text-align:center;"type="button" class="btn btn-secondary btn-primary" href="<?php echo base_url().'index.php/pendaftaranUmrah/tampil/'.$key->id; ?>" target="_blank">   Booking Paket   </a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <!--Detail Paket-->
                    <?php $no=0; foreach($paket as $key): $no++; ?>
                    <div class="modal fade" id="detailPaket<?=$key->id;?>" tabindex="-1" role="dialog" aria-hidden="true"  >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <h2 class="modal-title" id="exampleModalLongTitle">Detail Paket</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body ">
                                <a target="_blank" href="<?php echo base_url() . './images/'.$key->maskapai_penerbangan  ?>">
                                   <center><img src="<?php echo base_url() . './images/'.$key->maskapai_penerbangan  ?>" width="100%" height="auto"></center> 
                                </a>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label class='col-md-5'>Nama Paket</label>
                                    <label class='col-md-7'><?php echo $key->nama_paket ?></label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class='col-md-5'>Harga</label>
                                    <label class='col-md-7'><?php echo $key->harga ?></label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class='col-md-5'>Fasilitas</label>
                                    <label class='col-md-7'><?php echo $key->fasilitas ?></label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class='col-md-5'>Kuota</label>
                                    <label class='col-md-7'><?php echo $key->kuota ?></label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class='col-md-5'>Maskapai Penerbangan</label>
                                    <label class='col-md-7'><?php echo $key->maskapai_penerbangan ?></label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class='col-md-5'>Waktu</label>
                                    <label class='col-md-7'><?php echo $key->hari ?> Hari</label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class='col-md-5'>Tanggal Keberangkatan</label>
                                    <label class='col-md-7'><?php echo date('d F Y', strtotime($key->keberangkatan)); ?></label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class='col-md-5'>Tanggal Kepulangan</label>
                                    <label class='col-md-7'><?php echo date('d F Y', strtotime($key->kepulangan)); ?> </label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class='col-md-5'>Status</label>
                                    <label class='col-md-7'><?php echo $key->status ?></label>
                                </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" href="<?php echo base_url().'index.php/pendaftaranUmrah/'.$key->id; ?>">Booking</button>
                          </div>  
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?> 
                    <!--End of col-md-4-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
</section>
<!-- end of blog-->