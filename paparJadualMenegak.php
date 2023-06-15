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
	$_POST[noSiri] => 000003985740
	[Simpan] => Simpan
)
*/
###################################################################################################
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($_POST,'_POST',0);
$id = bersih($_POST['noSiri']);//'000002791307';
//$peratus = bersih($_POST['peratusan']);
#--------------------------------------------------------------------------------------------------
//$sql[] = '';
$sql['dataBarcode'] = sqlCariBintangDaa($myJadual[0],'barcode',$id);
$sql['dataAes'] = sqlCariBintangDaa($myJadual[1],'Serial No',$id);
$sql['data5P'] = sqlCariBintangDaa($myJadual[2],'NO_SIRI',$id);
$sql['dataSsmHarta'] = sqlCariBintangDaa($myJadual[3],'ESTABLISHMENT_ID',$id);
$sql['dataUntungRugi'] = sqlCariBintangDaa($myJadual[4],'ESTABLISHMENT_ID',$id);
$sql['dataKwsp'] = sqlCariBintangDaa($myJadual[5],'ESTABLISHMENT_ID',$id);
$sql['dataMKO'] = sqlMkoDaa($myJadual[0],$id);
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
$pilih = null;
list($urlcss,$urljs) = linkCssJs();
$class = '"table table-striped table-bordered"';
diatas($pilih, $urlcss);
#--------------------------------------------------------------------------------------------------
binaButang(null);
echo "<!-- Senarai Jadual
==============================================================================================="
. " -->";
#--------------------------------------------------------------------------------------------------
	foreach($data as $myJadualDaa => $rowDaa):
	#----------------------------------------------------------------------------------------------
	echo "\n<table><tr>";
	if(semakTatasusunan($rowDaa) == 'array') :
		$table = paparSatuJe($rowDaa,$myJadualDaa);
		echo "\n<td valign=\"top\"><table class=$class>\n$table\n</table></td>";
	else: echo "\n<td valign=\"top\">Tiada Data</td>";
	endif;
	echo "\n</tr></table>\n";
	#----------------------------------------------------------------------------------------------
	endforeach;
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