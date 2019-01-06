        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3>Agenda Acara <small>Klik untuk menambahkan/mengedit Agenda</small></h3>
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

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Agenda Acara</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
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
                                              <th class="text-center">Agenda Acara</th>
                                              <th class="text-center">Isi/Content</th>
                                              <th class="text-center">Tanggal</th>
                                              <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <?php $no=1; foreach($all as $row): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row->acara; ?></td>
                                                <td><?php echo $row->isi; ?></td>
                                                <td><?php echo date('d F Y', strtotime($row->tanggal)); ?></td>
                                                <td>
                                                    <center>
                                                      <div class="tooltip-demo">
                                                        <a data-toggle="modal" data-target="#modal-edit<?=$row->id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                        <a href="<?php echo site_url('adminAgendaAcara/hapus/'.$row->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Agenda Acara : <?=$row->acara;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
                        <form name="adminAgendaAcara" action="<?php echo base_url(). 'AdminAgendaAcara/add'; ?>" method="post" enctype="multipart/form-data">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Tambah Data</h4>
                          </div>
                                  <div class="modal-body">
                                    <input name="id" type="hidden" value="">
                                      <div class="form-group">
                                        <label>Acara</label>
                                            <input class="form-control" name="acara" type="text" placeholder="Masukan Acara" value="" required>
                                      </div>
                                      <div class="form-group">
                                          <label>Isi/Content</label>
                                            <textarea class="form-control" name="isi"></textarea>
                                      </div>
                                      <div class="form-group">
                                      <label>Tanggal</label>
                                          <input class="form-control" type="date" name="tanggal">
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
        <!-- /page content -->

        <?php $no=0; foreach($all as $row): $no++; ?>
                  <div class="row">
                    <div id="modal-edit<?=$row->id;?>" class="modal fade">
                      <div class="modal-dialog">
                        <form class="form-horizontal" action="<?php echo site_url('AdminAgendaAcara/edit'); ?>" method="post">
                        <div class="modal-content">
                          <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Data</h4>
                          </div>
                          <div class="modal-body">
                   
                            <input type="hidden" readonly value="<?=$row->id;?>" name="id" class="form-control" >
                                      <div class="form-group">
                                      <label>Acara</label>
                                            <input class="form-control" name="acara" type="text" autocomplete="off" value="<?=$row->acara;?>" required placeholder="Input judul posting" required>
                                      </div>
                                      <div class="form-group">
                                      <label>Isi</label>
                                            <input class="form-control" name="isi" type="text" autocomplete="off" value="<?=$row->isi;?>" required placeholder="Input judul posting" required>
                                      </div>
                                      <div class="form-group">
                                      <label>Tanggal</label>
                                            <input class="form-control" name="tanggal" type="date" autocomplete="off" value="<?=$row->tanggal;?>" required placeholder="Input judul posting" required>
                                      </div>
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      

        <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
        <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
        <!-- /calendar modal -->

