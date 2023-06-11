<?php
###################################################################################################
//require '/sumber/fail/php/***.php';
require './tatarajah.php';
require './sumber/fail/php/fungsi_global.php';
//require '/sumber/fail/data/***.php';
require './sumber/fail/data/dataSql.php';
//require './sumber/fail/csv/***.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
$pilih = null;
list($urlcss,$urljs) = linkCssJs();
$class = 'table table-striped table-bordered';
diatas($pilih, $urlcss);
binaButang(null);
#--------------------------------------------------------------------------------------------------
echo '<form method="POST" action="paparSql.php" class="form-horizontal">';
echo "\r<hr>\r<table class=$class>";
#--------------------------------------------------------------------------------------------------
echo "\r" . '<tr><td>nama fe</td><td><input type="text" class="form-control" name="namaFe"></td></tr>';
echo '<tr><td>no siri</td><td><input type="text" class="form-control" name="noSiri"></td></tr>';
echo '<tr><td>peratus</td><td><input type="text" class="form-control" name="peratusan"></td></tr>';
echo '<tr><td>hantar</td><td><input type="submit" name="Simpan" value="Simpan" class="btn btn-primary btn-large"></td></tr>';
#--------------------------------------------------------------------------------------------------
echo "\r</table>\r</form>";
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