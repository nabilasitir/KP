<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="page-title">
              <div class="title_left">
                <h3>Testimoni</h3>
                <h3><small>Klik untuk menambahkan/mengedit Testimoni</small></h3>
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
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Testimoni</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

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
                   
                    <!-- /.row -->
                    <div class="row">
                        <div>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <i class="fa fa-table"></i> Data Testimoni
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body" style="overflow-x:auto;">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><center>No</th>
                                                <th><center>Nama</th>
                                                <th><center>Email</th>
                                                <th><center>Domisili</th>
                                                <th><center>Tanggal</th>
                                                <th><center>Isi Testimoni</th>
                                                <th><center>Foto</th>
                                                <th><center>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <?php $no=1; foreach($all as $row): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row->nama; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td><?php echo $row->domisili; ?></td>
                                                <td><?php echo date('d F Y', strtotime($row->tanggal)); ?></td>
                                                <td><?php echo $row->isi; ?></td>
                                                <td><a target="_blank" href="<?php echo base_url() . './images/'.$row->foto  ?>">
                                                      <img src="<?php echo base_url() . './images/'.$row->foto  ?>" width="300" height="200">
                                                    </a></td>
                                  
                                                <td>
                                                    <center>
                                                      <div class="tooltip-demo">
                                                        <a href="<?php echo site_url('adminTestimoni/hapus/'.$row->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row->nama;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div><!-- /.box-body -->
              <!-- /view data -->
            </div><!--/.col (right) -->
          </div> <!-- /.row -->
 </div>
</div>
</div>
              

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

</div>