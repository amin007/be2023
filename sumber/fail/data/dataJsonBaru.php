<?php
###################################################################################################
require 'fungsi_global.php';
require 'dataBaru.php';
###################################################################################################
# debug data lama
#--------------------------------------------------------------------------------------------------
# kaedah 2.2 - hanya pilih data dalam bentuk json sahaja
$s = 'REQUEST_URI';//$s = 'PHP_SELF';//$s = 'QUERY_STRING';
//semakPembolehubah($_SERVER[$s],$s);
if (isset($_SERVER[$s])):
	$fail = explode('rujukan/',$_SERVER[$s]);//semakPembolehubah($fail,'fail');
	$cari = explode('/',$fail[1]);//semakPembolehubah($cari,'pilih');

	if(isset($cari[1])):
		$cariApa = bersih($cari[1]);
		if($cariApa == 'json'):
			$pilih = isset($cari[2]) ? $cari[2] : null;
			$cariApa = bersih($pilih);
			header('Content-Type: application/json; charset=utf-8');
			binaJson($data,$cariApa);
		else:endif;
	else:endif;
else:endif;//*/
#--------------------------------------------------------------------------------------------------
# set header yang simple
//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
/*define ('URL', $_SERVER['SCRIPT_NAME']);
list($urlcss,$urljs) = linkCssJs();
diatas($cariApa, $urlcss);
#--------------------------------------------------------------------------------------------------
# buat menu asas sahaja
$output = '';
foreach($data as $jadual => $row):
	$output .= "\n\t" . '<a class="btn btn-outline-secondary rounded-pill"'
	. ' href="' . URL . '?/json/' .$jadual. '">'
	. ucfirst($jadual) . '</a>';
	endforeach;
$output .= "\n\t<hr>$cariApa<hr>";

echo "\n<hr><!-- Pautan \n================================================================="
. "============================== -->$output";//*/
#--------------------------------------------------------------------------------------------------
# bina tatasusunan $data
/*$output = '';
foreach($data as $jadual => $row):
	$papar = ucfirst($jadual);
	$output .= "'$jadual',";
	endforeach;
$output .= "\n\t<hr>$cariApa<hr>";

echo "\n<hr><!-- Pautan \n================================================================="
. "============================== -->$output";//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################