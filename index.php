<?php
###################################################################################################
//require '/sumber/fail/php/***.php';
require './tatarajah.php';
require './sumber/fail/php/fungsi_global.php';
//require '/sumber/fail/data/***.php';
//require './sumber/fail/data/dataSql.php';
//require './sumber/fail/csv/***.php';
###################################################################################################
# untuk debug sahaja
#--------------------------------------------------------------------------------------------------
/*
$_SERVER['PATH_INFO'] => untuk apache
$_SERVER['PATH_TRANSLATED'] => untuk apache
$_SERVER['REQUEST_URI'] =
$_SERVER['PHP_SELF']
$_SERVER['QUERY_STRING'] => /bandar
$_SERVER['REQUEST_SCHEME'] => https
$_SERVER['SERVER_PORT'] => 80 atau 443

$s = 'PHP_SELF';
echo $_SERVER[$s] . '|<br>';
$cari0 = explode('rujukan/',$_SERVER[$s]);
$cari2 = explode('/',$cari0[1]);
echo '<pre>'; print_r($cari2); echo '</pre>';
*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# mula koding
#--------------------------------------------------------------------------------------------------
# hanya papar pautan sahaja
#--------------------------------------------------------------------------------------------------
$pilih = 'jadual01';
list($urlcss,$urljs) = linkCssJs(1);// nilai default = 1
diatasV01($pilih, $urlcss);
//binaButang(['jadual01','jadual02']);
$class = '"table table-striped table-bordered"';
#--------------------------------------------------------------------------------------------------
$teropong = 'Kembalilah<i class="fa fa-binoculars"></i>';
$pautan01 = '#';
$pautan02 = 'cariData.php';
$pautan03 = 'cariKesSendiri.php';
$namaPautan01 = 'MSIC';
$namaPautan02 = 'Cari Id Pertubuhan';
$namaPautan03 = 'Data Pentadbiran';

#--------------------------------------------------------------------------------------------------
print <<<END
<!-- Tajuk Besar
=============================================================================================== -->
<h1 class="mx-auto p-2 btn btn-outline-primary rounded-pill">
Selamat Datang Ke Server Data Pentadbiran</h1><hr>
<!-- Pautan 
=============================================================================================== -->
	<a class="btn btn-primary rounded-pill" href="../">$teropong</a>
	<a class="btn btn-success rounded-pill" href="$pautan01">$namaPautan01</a>
	<a class="btn btn-danger rounded-pill" href="$pautan02">$namaPautan02</a>
	<a class="btn btn-info rounded-pill" href="$pautan03">$namaPautan03</a>
<!-- Senarai Jadual
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
# tamat koding
###################################################################################################