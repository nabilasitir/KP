<!-- Panel Kerja Admin -->
 <div class="right_col" role="main">
          <div class="">
             <div class="page-title">
              <div class="title_left">
                <h3>Berita</h3>
                <h3><small>Klik untuk menambahkan/mengedit Berita</small></h3>
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
              <div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Panel Setup Berita</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
                     <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <i class="fa fa-table"></i> Data Berita
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body" style="overflow-x:auto;">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                              <th class="text-center">No</th>
                                              <th class="text-center">Judul</th>
                                              <th class="text-center">Isi/Content</th>
                                              <th class="text-center">Diposting Pada</th>
                                              <th class="text-center">Nama File</th>
                                              <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <?php $no=1; foreach($all as $row): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row->judul; ?></td>
                                                <td><?php echo $row->berita; ?></td>
                                                <td><?php echo date('d F Y', strtotime($row->posted)); ?></td>
                                                <td><?php echo $row->gambar; ?></td>
                                                <td>
                                                    <center>
                                                      <div class="tooltip-demo">
                                                        <a data-toggle="modal" data-target="#modal-edit<?=$row->id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                        <a href="<?php echo site_url('adminBerita/hapus/'.$row->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Berita Dengan Judul : <?=$row->judul;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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


                     <div id="modal-tambah" class="modal fade">
                      <div class="modal-dialog">
                       <div class="modal-content">
                        <form name="adminBerita" action="<?php echo base_url(). 'AdminBerita/tambah_berita'; ?>" method="post" enctype="multipart/form-data">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Tambah Data</h4>
                          </div>
                                  <div class="modal-body">
                                    <input name="id" type="hidden" value="">
                                      <div class="form-group">
                                        <label>Judul</label>
                                            <input class="form-control" name="judul" type="text" placeholder="Input judul posting" value="" required>
                                      </div>
                                      <div class="form-group">
                                          <label>Isi/Content</label>
                                            <textarea class="form-control" name="berita"></textarea>
                                      </div>
                                      <div class="form-group">
                                      <label>Gambar</label>
                                          <input class="form-control" type="file" name="gambar">
                                      </div>
                                  </div>
                            <div class="modal-footer">
                                      <div class="btn-group">
                                        <input name="Tambah" type="submit" value="Tambah" class="btn">
                                      </div>
                              </div>
                            </form>
                           </div>
                          </div>
                      </div>
                    </div>    
                   </div>
                  </div>
                </div>
              </div>
            </div>

  <?php $no=0; foreach($all as $row): $no++; ?>
                  <div class="row">
                    <div id="modal-edit<?=$row->id;?>" class="modal fade">
                      <div class="modal-dialog">
                        <form class="form-horizontal" action="<?php echo site_url('AdminBerita/edit'); ?>" method="post">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Data</h4>
                          </div>
                          <div class="modal-body">
                   
                            <input type="hidden" readonly value="<?=$row->id;?>" name="id" class="form-control" >
                                      <div class="form-group">
                                      <label>Judul</label>
                                            <input class="form-control" name="judul" type="text" autocomplete="off" value="<?=$row->judul;?>" required placeholder="Input judul posting" value="" required>
                                      </div>
                                      <div class="form-group">
                                          <label>Isi/Content</label>
                                            <textarea class="form-control" autocomplete="off" requarired placeholder="Masukan Konten Berita" name="berita"><?php echo $row->berita;?></textarea>
                                      </div>
                                      <!-- <div class="form-group">
                                      <label>Gambar</label>
                                          <input class="form-control" type="file" autocomplete="off" value="<?=$row->gambar;?>" required name="gambar">
                                      </div> -->
                            <br>
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







<!-- tinyMCE-->
  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
    tinymce.init({
            selector: "textarea",
            plugins: [
                    "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "table contextmenu directionality emoticons template textcolor paste textcolor filemanager"
            ],
    
            toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
            toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
            toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",
    
            menubar: false,
            toolbar_items_size: 'small',
            image_advtab: true,
            style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ],
    
            templates: [
                    {title: 'Test template 1', content: 'Test 1'},
                    {title: 'Test template 2', content: 'Test 2'}
            ]
    });
    </script>

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