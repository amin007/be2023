<?php
###################################################################################################
//require '/sumber/fail/php/***.php';
require './tatarajah.php';
require './sumber/fail/php/fungsi_global.php';
//require '/sumber/fail/data/***.php';
require './sumber/fail/data/dataSql.php';
require './sumber/fail/data/dataSqlMysqli.php';
//require './sumber/fail/csv/***.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
//$fungsi = get_defined_functions();// internal or user
//semakPembolehubah($fungsi,'fungsi',0);
//echo '<pre>$fungsi=>';//print_r($fungsi['user']);//echo '<br></pre>' . "\n";
#--------------------------------------------------------------------------------------------------
###################################################################################################
/*
$_POST=>
Array
(
$_POST['id'] => ***
$_POST['msic'] => 47113
$_POST['peratusan'] => 1.0087
)
*/
###################################################################################################
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($kp337,'kp337',0);
//semakPembolehubah($_POST,'_POST',0);
#--------------------------------------------------------------------------------------------------
$msic = bersih($_POST['msic']);
$fe = bersih($_POST['fe']);
$id = null;
$peratus = bersih($_POST['peratusan']);
#--------------------------------------------------------------------------------------------------
$sql['SemuaNewss'] = sqlCariMsicBe($kp337[0],$kp337[2],$msic,$fe);
for($i = 1; $i <= 10;$i++):
	$sql[$kp337[$i]] = sqlCariMsicKp337($kp337[0],$kp337[$i],$msic,$id);
endfor;
#--------------------------------------------------------------------------------------------------
//echo '<hr>semakPembolehubah<hr>';
//semakPembolehubah($myJadual,'myJadual',0);
//semakPembolehubah($kp337,'kp337',0);
//semakTatasusunanIni($sql,'pre');
#--------------------------------------------------------------------------------------------------
$data = dbMysqli01(DB_HOST,DB_NAME,DB_USER,DB_PASS,$sql);
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($data,'data',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
$pilih = null;
list($urlcss,$urljs) = linkCssJs();
$class = '"table table-striped table-bordered"';
diatas($pilih, $urlcss);
#--------------------------------------------------------------------------------------------------
binaButang(null);
//echo "\r<hr>\r<table class=$class><tr>";
#--------------------------------------------------------------------------------------------------
	foreach($data as $myJadualDaa => $rowDaa):
	#--------------------------------------------------------------------------------------------------
	$table = paparSemuaData($rowDaa,$myJadualDaa);
    echo "<h2>$myJadualDaa</h2>";
	echo "\r<table id=\"allTable\" class=$class>$table</table>\r<hr>";
	#--------------------------------------------------------------------------------------------------
	endforeach;
#--------------------------------------------------------------------------------------------------
//echo "\r</tr></table>\r";
#--------------------------------------------------------------------------------------------------
dibawah($pilih,$urljs);
echo "<script>\n";
jqueryExtendA();
jqueryExtendB();
jqueryExtendC();
gradeTable002(null);
echo "\n</script>\n</body>\n</html>";//*/
#--------------------------------------------------------------------------------------------------
/*# kaedah 2.1
$s = 'REQUEST_URI';//$s = 'PHP_SELF';//$s = 'QUERY_STRING';
//semakPembolehubah($_SERVER[$s],$s);
if (isset($_SERVER[$s])):
	$fail = explode('be20023/',$_SERVER[$s]);//semakPembolehubah($fail,'fail');
	$cari = explode('/',$fail[1]);semakPembolehubah($cari,'pilih');

	if(isset($cari[1])):
		$cariApa = bersih($cari[1]);
		if($cariApa == 'json'):
			$pilih = isset($cari[2]) ? $cari[2] : null;
			$cariApa = bersih($pilih);
			binaJson($data,$cariApa);
		elseif($cariApa == 'tahun'):
			$tajuk['tahun'] = '#,-,-,-,-';
			$data['tahun'] = kiraTahunJadual();
			panggilDataTable01($tajuk,$data,$cariApa);# panggil fungsi
		elseif(in_array($cariApa,$dataPhpJson)):# panggil fungsi untuk tatasusunan php => json
			panggilDataTable03($tajuk,$data,$cariApa);
		elseif(in_array($cariApa,$dataJson)):
			panggilDataTable02($tajuk,$data,$cariApa);# panggil fungsi untuk data json
		else:
			panggilDataTable01($tajuk,$data,$cariApa);# panggil fungsi
		endif;
	else:
		panggilDataTable01($tajuk,$data,null);# panggil fungsi
	endif;
else:
	panggilDataTable01($tajuk,$data,null);# panggil fungsi
endif;//*/
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################
