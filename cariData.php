<?php
###################################################################################################
//require '/sumber/fail/php/***.php';
require './tatarajah.php';
require './sumber/fail/php/fungsi_global.php';
//require '/sumber/fail/data/***.php';
//require './sumber/fail/data/dataSql.php';
//require './sumber/fail/csv/***.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
$pilih = 'jadual01';
list($urlcss,$urljs) = linkCssJs(1);// nilai default = 1
diatasV01($pilih, $urlcss);
binaButang(['jadual01','jadual02']);
$class = '"table table-striped table-bordered"';
#--------------------------------------------------------------------------------------------------
$namaFe = $tatarajahBatch[0];
$jawatanFe = $tatarajahBatch[1];
$namaPegawai = $tatarajahBatch[2];
$jawatanPegawai = $tatarajahBatch[3];
#--------------------------------------------------------------------------------------------------
print <<<END
<!-- mula kotak
=============================================================================================== -->
<!-- div class="kotakAtas" -->
<!-- div class="kotakTengah" -->
<div class="container">
<!-- mula borang
=============================================================================================== -->
<form method="POST" action="paparSql.php" class="form-horizontal">
	<div class="p-3 mb-2 bg-transparent text-dark">
		<i class="fa fa-bicycle" style="font-size:50px"></i>
	</div><!-- / class="p-3 mb-2 bg-transparent text-dark" -->
	<div class="form-group">
		<label class="border border-dark btn-block">Carian Fe dan Nombor Siri</label>
	</div><!-- / class="form-group" -->
	<div class="form-group">
		<label for="inputMsic">Nama Pegawai Kerja Luar/Fe</label>
		<input type="text" class="form-control form-control-lg"
		name="namaFe" placeholder="Masukkan Nama Pegawai Kerja Luar/Fe">
	</div>
	<div class="form-group">
		<label for="inputMsic">Nombor Siri</label>
		<input type="text" class="form-control form-control-lg"
		name="noSiri" value="00000" placeholder="Masukkan Nombor Siri">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Peratusan</label>
		<input type="text" class="form-control form-control-lg"
		name="peratusan" value="1.087">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Peratusan Gaji</label>
		<input type="text" class="form-control form-control-lg"
		name="peratusGaji" value="0.18">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Gaji Pengurus</label>
		<input type="text" class="form-control form-control-lg"
		name="pengurus" value="5000">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Gaji Staf</label>
		<input type="text" class="form-control form-control-lg"
		name="gajiStaf" value="1500">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Bil Staf</label>
		<input type="text" class="form-control form-control-lg"
		name="bilStaf" value="1">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Cari Data">
	</div><!-- / class="form-group" -->
</form>
<!-- tamat borang 01
=============================================================================================== -->
<!-- mula borang 02
=============================================================================================== -->
<form method="POST" action="paparBatch.php" class="form-horizontal">
	<div class="p-3 mb-2 bg-transparent text-dark">
		<i class="fa fa-bicycle" style="font-size:50px"></i>
	</div><!-- / class="p-3 mb-2 bg-transparent text-dark" -->
	<div class="form-group">
		<label class="border border-dark btn-block">Carian Tarikh Batch</label>
	</div><!-- / class="form-group" -->
	<div class="form-group">
		<label for="inputMsic">Carian Tarikh Batch</label>
		<input type="date" class="form-control form-control-lg"
		name="tarikhBatch">
	</div>
	<div class="form-group">
		<label for="inputMsic">Disediakan Oleh</label>
		<input type="text" class="form-control form-control-lg"
		name="namaFe" value="$namaFe">
	</div>
	<div class="form-group">
		<label for="inputMsic">Jawatan</label>
		<input type="test" class="form-control form-control-lg"
		name="jawatanFe" value="$jawatanFe">
	</div>
	<div class="form-group">
		<label for="inputMsic">Diterima Oleh</label>
		<input type="text" class="form-control form-control-lg"
		name="namaPegawai" value="$namaPegawai">
	</div>
	<div class="form-group">
		<label for="inputMsic">Jawatan</label>
		<input type="test" class="form-control form-control-lg"
		name="jawatanPegawai" value="$jawatanPegawai">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Cari Tarikh Batch">
	</div><!-- / class="form-group" -->
</form>
<!-- tamat borang 02
=============================================================================================== -->
<!-- mula borang 03
=============================================================================================== -->
<form method="POST" action="paparBatch02.php" class="form-horizontal">
	<div class="p-3 mb-2 bg-transparent text-dark">
		<i class="fa fa-bicycle" style="font-size:50px"></i>
	</div><!-- / class="p-3 mb-2 bg-transparent text-dark" -->
	<div class="form-group">
		<label class="border border-dark btn-block">Carian Tarikh Batch02</label>
	</div><!-- / class="form-group" -->
	<div class="form-group">
		<label for="inputMsic">Carian Tarikh Batch</label>
		<input type="date" class="form-control form-control-lg"
		name="tarikhBatch">
	</div>
	<div class="form-group">
		<label for="inputMsic">Disediakan Oleh</label>
		<input type="text" class="form-control form-control-lg"
		name="namaFe" value="$namaFe">
	</div>
	<div class="form-group">
		<label for="inputMsic">Jawatan</label>
		<input type="test" class="form-control form-control-lg"
		name="jawatanFe" value="$jawatanFe">
	</div>
	<div class="form-group">
		<label for="inputMsic">Diterima Oleh</label>
		<input type="text" class="form-control form-control-lg"
		name="namaPegawai" value="$namaPegawai">
	</div>
	<div class="form-group">
		<label for="inputMsic">Jawatan</label>
		<input type="test" class="form-control form-control-lg"
		name="jawatanPegawai" value="$jawatanPegawai">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Cari Tarikh Batch">
	</div><!-- / class="form-group" -->
</form>
<!-- tamat borang 03
=============================================================================================== -->
<!-- /div !-- / class="kotakTengah" -->
<!-- /div !-- / class="kotakAtas" -->
</div><!-- / class="container" -->
<!-- tamat kotak
=============================================================================================== -->
END;
	# tamat print <<<END
#--------------------------------------------------------------------------------------------------
dibawah($pilih,$urljs);
echo "<script>\n";
jqueryExtendA();
jqueryExtendB();
jqueryExtendC();
gradeTable002(null);
echo "\n</script>\n</body>\n</html>";//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################