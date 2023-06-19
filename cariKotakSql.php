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
<!-- mula borang 1
=============================================================================================== -->
<form method="POST" action="paparSql04.php" class="form-horizontal">
	<div class="p-3 mb-2 bg-transparent text-dark">
		<i class="fa fa-bicycle" style="font-size:50px"></i>
	</div><!-- / class="p-3 mb-2 bg-transparent text-dark" -->
	<div class="form-group">
		<label class="border border-dark btn-block">Carian Sql</label>
	</div><!-- / class="form-group" -->
	<div class="form-group">
		<label for="inputMsic">Arahan Sql</label>
		<textarea rows="1" cols="20" name="sql" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Cari Data">
	</div><!-- / class="form-group" -->
</form>
<!-- tamat borang 1
=============================================================================================== -->
<!-- mula borang 2
=============================================================================================== -->
<form method="POST" action="paparSqlAje.php" class="form-horizontal">
	<div class="p-3 mb-2 bg-transparent text-dark">
		<i class="fa fa-bicycle" style="font-size:50px"></i>
	</div><!-- / class="p-3 mb-2 bg-transparent text-dark" -->
	<div class="form-group">
		<label class="border border-dark btn-block">Carian Sql</label>
	</div><!-- / class="form-group" -->
	<div class="form-group">
		<label for="inputMsic">Nama Jadual 01</label>
		<input type="text" class="form-control form-control-lg"
		name="jadual01">
	</div>
	<div class="form-group">
		<label for="inputMsic">Nama Jadual 02</label>
		<input type="text" class="form-control form-control-lg"
		name="jadual02">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Medan 01</label>
		<input type="text" class="form-control form-control-lg"
		name="medan01" placeholder="Masukkan Peratusan">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Medan 02</label>
		<input type="text" class="form-control form-control-lg"
		name="medan02" placeholder="Masukkan Peratusan">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">fail csv</label>
		<input type="text" class="form-control form-control-lg"
		name="failcsv" value="*.csv">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Localhost</label>
		<input type="text" class="form-control form-control-lg"
		name="dbLocalhost" value="root">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Username</label>
		<input type="text" class="form-control form-control-lg"
		name="dbUser" value="root">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Password</label>
		<input type="text" class="form-control form-control-lg"
		name="dbPass" value="***">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Cari Data">
	</div><!-- / class="form-group" -->
</form>
<!-- tamat borang 2
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