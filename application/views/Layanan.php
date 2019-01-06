<style>
.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
#image_div
{
 margin: center;
 position:relative;
 box-shadow: 6px 6px 9px 1px black;
}
#image_div #image_label
{
 margin:0px;
 position:absolute;
 bottom:7px;
 height: 50px;
}
#image_div #image_label span
{
 background-color: #0B4C5F;
 opacity:0.8;
 font-size:30px;
 padding:7px;
 box-sizing:border-box;
 color:white;
 font-weight:bold;
}

</style>
        <section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest_blog text-center">
                            <h2>Layanan El Haqq Tour Muslim</h2>
                            <p>El- Haqq Tour memberikan 3 layanan berupa :</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                <div class="blog_img">
                                    <div id="image_div">
                                        <a href="<?php echo base_url();?>index.php/LayananUmrah" >
                                            <img src="<?php echo base_url();?>assets/img/umrah.png" alt="Snow" style="width:100%;height:250px;">
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/LayananUmrah"><p id="image_label"><span>Layanan Umrah</span></p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                <div class="blog_img">
                                   <div id="image_div">
                                        <a href="<?php echo base_url();?>index.php/layananHaji" >
                                            <img src="<?php echo base_url();?>assets/img/haji.jpg" alt="Forest" style="width:100%;height:250px;">
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/layananHaji" ><p id="image_label"><span>Layanan Haji</span></p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                <div class="blog_img">
                                    <div id="image_div">
                                        <a href="<?php echo base_url();?>index.php/TourMuslim" >
                                            <img src="<?php echo base_url();?>assets/img/tour.png" alt="Mountains" style="width:100%;height:250px;">
                                        </a>
                                        <a href="<?php echo base_url();?>index.php/TourMuslim" ><p id="image_label"><span>Layanan Tour Muslim</span></p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>