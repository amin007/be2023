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
# kaedah 2.0 - semak pembolehubah dari $_SERVER['REQUEST_URI']
$s = 'REQUEST_URI';//$s = 'PHP_SELF';//$s = 'QUERY_STRING';
//semakPembolehubah($_SERVER[$s],$s);
if (isset($_SERVER[$s])):
	$fail = explode('be2023/',$_SERVER[$s]);//semakPembolehubah($fail,'fail');
	$cari = explode('/',$fail[1]);//semakPembolehubah($cari,'cari');
	$id = (isset($cari[1])) ? bersih($cari[1]) : '';
endif;
#--------------------------------------------------------------------------------------------------
###################################################################################################
# mula papar html
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
<form method="POST" action="paparSqlMsicID.php" class="form-horizontal">
	<div class="p-3 mb-2 bg-transparent text-dark">
		<i class="fa fa-bicycle" style="font-size:50px"></i>
	</div><!-- / class="p-3 mb-2 bg-transparent text-dark" -->
	<div class="form-group">
		<label class="border border-dark btn-block">Carian Msic</label>
	</div><!-- / class="form-group" -->
	<div class="form-group">
		<label for="inputMsic">Id Sebenar</label>
		<input type="text" class="form-control form-control-lg"
		name="idSebenar" value="00000">
	</div>
	<div class="form-group">
		<label for="inputMsic">Id Proksi</label>
		<input type="text" class="form-control form-control-lg"
		name="idProksi" value="$id">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Peratusan</label>
		<input type="text" class="form-control form-control-lg"
		name="peratusan" value="1.0087">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Hasil</label>
		<input type="text" class="form-control form-control-lg"
		name="hasil" value="***">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Belanja</label>
		<input type="text" class="form-control form-control-lg"
		name="belanja" value="***">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Peratusan Gaji</label>
		<input type="text" class="form-control form-control-lg"
		name="peratusGaji" value="0.18">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Gaji Pengurus</label>
		<input type="text" class="form-control form-control-lg"
		name="gajiPengurus" value="5000">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Gaji Staf</label>
		<input type="text" class="form-control form-control-lg"
		name="gajiStaf" value="1500">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Bil Staf</label>
		<input type="text" class="form-control form-control-lg"
		name="bilStaf" value="2">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Harta</label>
		<input type="text" class="form-control form-control-lg"
		name="harta" value="***">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Stok Akhir</label>
		<input type="text" class="form-control form-control-lg"
		name="stok" value="***">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Cari Data">
	</div><!-- / class="form-group" -->
</form>
<!-- tamat borang 01
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