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
    $_POST[namaFe] => muhaimin
    $_POST[peratusan] => 1.87
    [Simpan] => Simpan
)
*/
###################################################################################################
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($_POST,'_POST',0);
$fe = bersih($_POST['namaFe']);//'muhaimin';
$peratus = bersih($_POST['peratusan']);
#--------------------------------------------------------------------------------------------------
$sql['SemuaNewss'] = sqlSemuaNewss($myJadual[0],$myJadual[2],$fe,$peratus);
$sql['SemuaAes'] = sqlSemuaAes($myJadual[0],$myJadual[1],$fe);
$sql['SemuaSsmRocHarta'] = sqlSemuaSsmRocHarta($myJadual[0],$myJadual[3],$fe,$peratus);
$sql['SemuaSsmRocUntungRugi'] = sqlSemuaSsmRocUntungRugi($myJadual[0],$myJadual[4],$fe,$peratus);
$sql['SemuaKwsp'] = sqlSemuaKwsp($myJadual[0],$myJadual[5],$fe,$peratus);
$sql['SemuaKwspSSM'] = sqlSemuaKwspHarta($myJadual[0],$myJadual[4],$myJadual[5],$fe,$peratus);
#--------------------------------------------------------------------------------------------------
//echo '<hr>semakPembolehubah<hr>';
//semakPembolehubah($myJadual,'myJadual',0);
//semakPembolehubah($sql,'sql',0);
#--------------------------------------------------------------------------------------------------
$data = dbMysqli00(DB_HOST,DB_NAME,DB_USER,DB_PASS,$sql);
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($data,'data',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
list($urlcss,$urljs) = linkCssJs();
$class = '"table table-striped table-bordered"';
diatas('Carian Semua Data Pentadbiran',$urlcss);
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
