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
print <<<END
<!-- mula kotak
=============================================================================================== -->
<div class="kotakAtas">
<div class="kotakTengah">
<!-- mula borang 01
=============================================================================================== -->
<form method="POST" action="paparSql02.php" class="form-horizontal">
	<div class="p-3 mb-2 bg-transparent text-dark">
		<i class="fa fa-bicycle" style="font-size:50px"></i>
	</div><!-- / class="p-3 mb-2 bg-transparent text-dark" -->
	<div class="form-group">
		<label class="border border-dark btn-block">Carian Kes Sendiri</label>
	</div><!-- / class="form-group" -->
	<div class="form-group">
		<label for="inputMsic">Nama Pegawai Kerja Luar/Fe</label>
		<input type="text" class="form-control form-control-lg"
		name="namaFe" placeholder="Masukkan Nama Pegawai Kerja Luar/Fe">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Peratusan</label>
		<input type="text" class="form-control form-control-lg"
		name="peratusan" placeholder="Masukkan Peratusan">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Cari Data">
	</div><!-- / class="form-group" -->
</form>
<!-- tamat borang 01
=============================================================================================== -->
<!-- mula borang 02
=============================================================================================== -->
<form method="POST" action="paparJadualMenegak.php" class="form-horizontal">
	<div class="p-3 mb-2 bg-transparent text-dark">
		<i class="fa fa-bicycle" style="font-size:50px"></i>
	</div><!-- / class="p-3 mb-2 bg-transparent text-dark" -->
	<div class="form-group">
		<label class="border border-dark btn-block">Carian No Siri</label>
	</div><!-- / class="form-group" -->
	<div class="form-group">
		<label for="inputMsic">No Siri</label>
		<input type="text" class="form-control form-control-lg"
		name="noSiri" placeholder="Masukkan No Siri">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Cari Data">
	</div><!-- / class="form-group" -->
</form>
<!-- tamat borang 02
=============================================================================================== -->

</div><!-- / class="kotakTengah" -->
</div><!-- / class="kotakAtas" -->
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