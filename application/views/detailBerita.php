
                       
                          <?php foreach ($berita as $key) { ?>
                           <div id="detailBerita<?=$key->id;?>">
                        <div class="card" style="margin:20px;">                          <h2><?php echo $key->judul;?></h2>
                          <h5><?php echo date('d F Y', strtotime($key->posted)); ?></h5>
                            <a target="_blank" href="<?php echo base_url() . './images/berita/'.$key->gambar  ?>"><center>
                               <img src="<?php echo base_url() . './images/berita/'.$key->gambar  ?>" width="70%" height="70%" >
                            </a>
                          <p><?php echo $key->berita;?>
                          </p>
                        </div>
                        <?php } ?>
                        </div>