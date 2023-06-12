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
list($urlcss,$urljs) = linkCssJs();
diatasV01($pilih, $urlcss);
binaButang(['jadual01','jadual02']);
$class = '"table table-striped table-bordered"';
#--------------------------------------------------------------------------------------------------
?><!-- borang
=============================================================================================== -->
<?php echo "\r\r";
#--------------------------------------------------------------------------------------------------
echo '<div class="kotakAtas">
<div class="kotakTengah">' . "\r";
#--------------------------------------------------------------------------------------------------
echo '<form method="POST" action="paparTatasusunan.php" class="form-horizontal">';
#--------------------------------------------------------------------------------------------------
print <<<END
	<div class="p-3 mb-2 bg-transparent text-dark">
		<i class="fa fa-bicycle" style="font-size:50px"></i>
	</div><!-- / class="p-3 mb-2 bg-transparent text-dark" -->
	<div class="form-group">
		<label class="border border-dark btn-block">Carian Msic</label>
	</div><!-- / class="form-group" -->
	<div class="form-group">
		<label for="inputMsic">Msic</label>
		<input type="text" class="form-control form-control-lg"
		name="msic" placeholder="Masukkan Msic">
	</div>
	<div class="form-group">
		<label for="onputPeratusan">Peratusan</label>
		<input type="text" class="form-control form-control-lg"
		name="peratusan" placeholder="Masukkan Peratusan">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Cari Msic">
	</div><!-- / class="form-group" -->
END;
#--------------------------------------------------------------------------------------------------
echo "\r</form>";
#--------------------------------------------------------------------------------------------------
echo '</div><!-- / class="kotakTengah" -->
</div><!-- / class="kotakAtas" -->' . "\r\r";
#--------------------------------------------------------------------------------------------------
/*echo "\r<hr>\r<table class=$class>";
#--------------------------------------------------------------------------------------------------
echo "\r" . '<tr><td>msic</td><td><input type="text" class="form-control" name="msic"></td></tr>';
echo '<tr><td>peratus</td><td><input type="text" class="form-control" name="peratusan"></td></tr>';
echo '<tr><td>hantar</td><td><input type="submit" name="Simpan" value="Simpan" class="btn btn-primary btn-large"></td></tr>';
#--------------------------------------------------------------------------------------------------
echo "\r</table>\r</form>";//*/
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