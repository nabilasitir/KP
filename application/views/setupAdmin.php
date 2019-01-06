<!--Panel Kerja Admin -->
        <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-dashboard"></i> Dashboard</h3>
              </div>
              <div class="panel-body">
                Selamat Datang <b><?php echo $this->session->userdata("user_nama") ?></b> di halaman Administrator System

                 <fieldset>
                          <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" name="user" type="text" value="" >
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" name="pass" type="text" value="" >
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input class="form-control" name="nama" type="text" value="" >
                                    </div>
                                </div>
                          </div>
                          <div class="btn-group">
                              <input name="Edit" type="submit" value="Ubah" class="btn btn-info">
                          </div>
                          <div class="btn-group">
                              <input name="Tambah" type="submit" value="Tambah" class="btn btn-success">
                          </div>
                </fieldset>
              </div>

              <div class="panel-body">
                  <div class="table-responsive">
                      <table class="table table-hover table-striped" id="dataTables-transaksi">
                          <thead>
                            <tr>
                              <th class="text-left">#</th>
                              <th class="text-left">Nama Lengkap</th>
                              <th class="text-left">Username</th>
                              <th class="text-left">Password</th>
                            </tr>
                          </thead>
                                
                          <tbody>
                              <tr>
                                 <td>1</td>
                                 <td>Nabila</td>
                                 <td>admin</td>
                                 <td>admin</td>
                                 <td class="text-right">
                              
                                <div class="tooltip-demo">
                                    <a href=""><button type="button" class="btn btn-xs btn-primary"data-toggle="tooltip" data-placement="top" title="Edit Member"><i class="fa fa-wrench"></i></button></a>
                                    <a href=""><button type="button" class="btn btn-xs btn-danger"data-toggle="tooltip" data-placement="top" title="Delete Member"><i class="fa fa-trash-o"></i></button></a>
                                </div>
                                </td>
                              </tr>
                               
                          </tbody>
                                
                      </table>
                   </div>
              </div>
              <!-- End Fieldsheet Table-->
            </div>
        </div>
<!--End Panel Kerja Admin-->
