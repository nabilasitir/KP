<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}


.containerhaji {
    position: relative;
    max-width: 100%;
    margin: 0 auto;

}

.containerhaji img {vertical-align: middle;}

.containerhaji .content {
    position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
    height: 250px;

}
</style>
</head>
<body>

<div class="containerhaji">
  <img src="<?php echo base_url();?>assets/img/haji1.jpg" style="width:100%;" height="500">
  <div class="content">
    <h1 style="font-size:500%">HAJI</h1>
    <p style="font-size:150%">Sesuai dengan firman Allah SWT. Kewajiban Haji dalam Al Quran adalah sebagai berikut:</p>
    <p style="font-size:150%">فِيهِ ءَايَٰتٌۢ بَيِّنَٰتٌۭ مَّقَامُ إِبْرَٰهِيمَ ۖ وَمَن دَخَلَهُۥ كَانَ ءَامِنًۭا ۗ وَلِلَّهِ عَلَى ٱلنَّاسِ حِجُّ ٱلْبَيْتِ مَنِ ٱسْتَطَا عَ إِلَيْهِ سَبِيلًۭا ۚ وَمَن كَفَرَ فَإِ نَّ ٱللَّهَ غَنِىٌّ عَنِ ٱلْعَٰلَمِينَ</p>
    <p style="font-size:150%">“Mengerjakan haji adalah kewajiban manusia terhadap Allah, yaitu (bagi) orang yang sanggup mengadakan perjalanan ke Baitullah; Barangsiapa mengingkari (kewajiban haji), maka sesungguhnya Allah Maha Kaya (tidak memerlukan sesuatu) dari semesta alam”. (QS. Ali Imran: 97).</p>
  </div>
</div>

<div class="container">
	<div class="wrapper col-sm-offset-1 col-sm-10">
		<p style="font-size:500%; text-align:center; font-color:yellow;" >PAKET HAJI KHUSUS</p>
		       
			  <table class="table">
			    <thead>
			      <tr>
			        <th style="text-align: center">No</th>
			        <th style="text-align: center">Jenis Haji</th>
			        <th style="text-align: center">Keterangan</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php $no=1; foreach($all as $row): ?>
                    <tr class="odd gradeX">
	                    <td style="text-align: center"><?php echo $no++; ?></td>
	                    <td style="text-align: center"><?php echo $row->jenis; ?></td>
	                    <td style="text-align: center"><?php echo $row->keterangan; ?></td>
                    </tr>
					<?php endforeach; ?>
			    </tbody>
			  </table>
	</div>

	<div class="col-sm-12" style="background-color:black; height:100px;">
		<p style="font-size:500%; text-align:center; font-color:yellow;" >Persyaratan Pendaftaran Haji</p>
	</div>
	<div class="wrapper col-sm-offset-1 col-sm-10" >
		<br>
		<br>
		<span style="text-align: justify;font-size:150%;" >
			Foto Copy Paspor masih berlaku 7 bulan sebelum keberangkatan<br>
			Foto Copy KTP : 5 (lima) lembar<br>
			Foto Copy Kartu Keluarga (KK) : 2 (dua) lembar<br>
			Foto Copy Surat Nikah : 2 (dua) lembar<br>
			Foto Copy Akta Kelahiran<br>
			Pas Photo terbaru (berwarna), zoom 80% tampak wajah, background putih, khusus wanita (memakai kerudung / jilbab berwarna) dengan ukuran :<br>
			2 x 3 = 5 lembar<br>
			3 x 4 = 40 lembar<br>
			4 x 6 = 10 lembar<br>
			Mengisi dan menandatangani Formulir Pendaftaran<br>
			Menyerahkan Surat Kuasa tandatangan diatas materai Rp. 6.000,- (jika pengambilan porsi ONH Plus dikuasakan ke Khazzanah Tours & Travel)
		</span>
		<br>
		<br>
	</div>
	<div>
	</div>
</div>  

<div class="col-sm-12" style="background-color:black; height:100px;">
	<p style="font-size:500%; text-align:center; font-color:yellow;" >Form Pendaftaran Haji</p>
</div>
<div class="wrapper col-sm-offset-2 col-sm-8" >
<br>
<br>
<form class="form-horizontal form-label-left" action="<?php echo base_url().'layananHaji/add'; ?>" method="post" enctype="multipart/form-data">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomor_ktp">Nomor KTP <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nomor_ktp" name="nomor_ktp" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomor_passport">Nomor Passport <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nomor_passport" name="nomor_passport" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nama" class="form-control col-md-7 col-xs-12" type="text" name="nama">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat Lahir <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="tempat_lahir" name="tempat_lahir" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_lahir">Tanggal Lahir <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="date" id="tgl_lahir" name="tgl_lahir" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="jenis_kelamin" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="jenis_kelamin" value="Laki-Laki"> &nbsp; Laki-Laki &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="umur">Umur <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="umur" name="umur" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="kewarganegaraan" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="kewarganegaraan" value="WNI"> &nbsp; WNI &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="kewarganegaraan" value="WNA"> WNA
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat Lengkap <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea type="text" id="alamat" name="alamat" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_tlp">Nomor Telepon <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="no_tlp" name="no_tlp" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">E-Mail <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="email" id="email" name="email" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pendidikan">Pendidikan Terakhir <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="pendidikan" name="pendidikan" required="required" class="form-control col-md-7 col-xs-12">
                                <option value="none" selected disabled></option>
                                <option value="SD">SD</option>
                                <option value="SLTP">SLTP</option>
                                <option value="SLTA">SLTA</option>
                                <option value="SM / D1 / D2 / D3">SM / D1 / D2 / D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="Lain-lain">Lain-lain</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pekerjaan">Pekerjaan<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12"> 
                              <select id="pekerjaan" name="pekerjaan" required="required" class="form-control col-md-7 col-xs-12">
                                <option value="" selected disabled></option>
                                <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                <option value="TNI / POLRI">TNI / POLRI</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Buruh">Buruh</option>
                                <option value="BUMN / BUMD">BUMN / BUMD</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Pelajar / Mahasiswa">Pelajar / Mahasiswa</option>
                                <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pengalaman Umrah/Haji</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="pengalaman" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="pengalaman" value="Pernah"> &nbsp; Pernah &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="pengalaman" value="Belum Pernah"> Belum Pernah
                                </label>
                              </div>
                            </div>
                          </div>
                        <!--  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pas_foto">Pas Foto <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="file" id="pas_foto" name="pas_foto" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bukti_transfer">Foto Bukti Transfer <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="file" id="bukti_transfer" name="bukti_transfer" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div> -->
                          <div style="text-align: center" class="col-sm-offset-5">        
                            <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                          </div> 

                        </form>
                    </div>


</body>
</html>
