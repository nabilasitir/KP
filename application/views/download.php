<section id="about" style="margin-bottom:50px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="headding_area">
                            <h2>El-Haqq File Download</h2>
                            <hr />
                        </div>
	                </div>
	                <div class="wrapper col-sm-offset-2 col-sm-8" style="height: 500px;">
						<?php foreach ($all as $key): ?>
							<div>
								<p class="site-title"><a href="<?php echo $key->link;?>" rel="home" ><?php echo $key->nama_file;?></a></p>

							</div>
						<?php endforeach; ?>
					</div>	
                </div>
            </div><!-- container end -->
</section><!-- About end -->
        