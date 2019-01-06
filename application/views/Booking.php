<h2 style="text-align: center">Booking</h2>
<div class="col-sm-6">

  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-4" for="kode">Kode Booking:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="kode" name="kode">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="seat">Jumlah Seat:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="seat" placeholder="Masukan Jumlah Seat" name="seat">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pkt">Nama Paket:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="pkt" placeholder="Pilih Paket" name="pkt">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="hrg">Harga:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="hrg" name="hrg">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="byr">Jumlah Pembayaran:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="byr" name="byr">
      </div>
    </div>
  </form>
</div>

<div class="col-sm-6">
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-3" for="pms">Nama Pemesan:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="pms" placeholder="Masukan Nama Pemesan" name="pms">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="ktk">Kontak:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="ktk" placeholder="Masukan Kontak" name="ktk">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="alt">Alamat:</label>
      <div class="col-sm-8">          
        <textarea type="text" class="form-control" style="resize: none; height: 83px" id="alt" placeholder="Masukan Alamat Lengkap" name="alt"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pos">Kode Pos:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="pos" placeholder="Masukan Kode Pos" name="pos">
      </div>
    </div>
  </form>
</div>
<div class="form-group">        
  <div class="col-sm-offset-11">
    <button type="submit" class="btn btn-default">Next >></button>
  </div>
</div>
