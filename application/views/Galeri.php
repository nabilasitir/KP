<!--Start of portfolio-->
        <section id="portfolio" class="text-center">
            <div class="col-md-12">
                <div class="portfolio_title">
                    <h2>our latest work</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            </div>
            <!--End of col-md-2-->
            <div class="colum">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="notes">
                                <?php foreach ($galeri->result() as $key) { ?>
                                <div class="note red">
                                    <div class="img_overlay">
                                        <p><?php echo $key->deskripsi;?></p>
                                    </div>
                                    <a target="_blank" href="<?php echo base_url() . './images/'.$key->gambar  ?>">
                                      <img src="<?php echo base_url() . './images/'.$key->gambar  ?>" width="300" height="200">
                                    </a>
                                </div>
                                 <?php } ?> 
                            </div>
                            <!--End of notes-->
                        </div>
                        <!--End of col-lg-12-->
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
            </div>
            <!--End of colum-->
        </section>
        <!--end of portfolio-->