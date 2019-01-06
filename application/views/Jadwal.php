      <section id="welcome" >
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        
                            <br>
                            <h2 style="text-align:center; font-weight::bold;">Jadwal Keberangkatan dan Kepulangan Umrah El-Haqq Tour </h2>
                            <p>Cari Jadwal Berdasarkan Tanggal Keberangkatan :</p>  
                            <input class="form-control" id="myInput" type="text" placeholder="Search For..">
                            <br>
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                  <th rowspan="2" style="text-align:center; width:15px;">No</th>
                                  <th rowspan="2" style="text-align:center; width:15px;">Keberangkatan</th>
                                  <th rowspan="2" style="text-align:center; width:50px;">Kepulangan</th>
                                  <th rowspan="2" style="text-align:center; width:50px;">Maskapai</th>
                                  <th rowspan="2" style="text-align:center; width:50px;">Paket</th>
                                  <th rowspan="2" style="text-align:center; width:120px;">Seat Kosong</th>
                                  <th rowspan="2" style="text-align:center; width:100px;">Status</th>
                                </tr>
                               
                              </thead>
                              <tbody id="myTable">
                                <?php $no=1; foreach($all as $row): ?>
                                <tr class="odd gradeX">
                                  <td><?php echo $no++; ?></td>
                                  <td><?php echo date('d F Y', strtotime($row->keberangkatan)); ?></td>
                                  <td><?php echo date('d F Y', strtotime($row->kepulangan)); ?></td>
                                  <td><?php echo $row->maskapai_penerbangan; ?></td>
                                  <td><?php echo $row->nama_paket; ?></td>
                                  <center><td><?php echo $row->kuota; ?></td></center>
                                 <td>
                                     <?php 
                                        $kuota = $row->kuota ; 
                                      ?> 
                                      <?php  
                                          if($kuota==0) 
                                          { 
                                              echo "<font color='orange'><font size=2><b>Full Booked</b>"; 
                                          } 
                                          else{
                                              echo "<font color='green'><font size=2><b>Tersedia</b></font>";
                                          } 
                                      ?>
                                  </td>
                                </tr>
                                <?php endforeach; ?>  
                              </tbody>
                            </table>
                    
                    </div>
                    <!--End of col-md-8-->
                </div>
                <!--End of row and vol_area-->
            </div>
            <!--End of container-->
        </section>

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
