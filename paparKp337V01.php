<?php
###################################################################################################
//require '/sumber/fail/php/***.php';
require './tatarajah.php';
require './sumber/fail/php/fungsi_global.php';
//require '/sumber/fail/data/***.php';
require './sumber/fail/data/dataSql.php';
require './sumber/fail/data/dataSqlMysqli.php';
require './sumber/fail/data/dataKp337.php';
//require './sumber/fail/csv/***.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
//$fungsi = get_defined_functions();// internal or user
//semakPembolehubah($fungsi,'fungsi',0);
//echo '<pre>$fungsi=>';//print_r($fungsi['user']);//echo '<br></pre>' . "\n";
//https://stackoverflow.com/questions/4668628/truncate-float-numbers-with-php
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($_POST,'_POST',0);
$id = bersih($_POST['idSebenar']);//'000002791307';
$peratus = bersih($_POST['peratusan']);
$hasil = bersih($_POST['hasil']);
$belanja = bersih($_POST['belanja']);
#--------------------------------------------------------------------------------------------------
$sql['barcode'] = sqlCariBintangDaa($myJadual[0],'barcode',$id);
$sql['aes'] = sqlCariBintangDaa($myJadual[1],'Serial No',$id);
$sql['limap'] = sqlCariBintangDaa($myJadual[2],'NO_SIRI',$id);
$sql['ssmharta'] = sqlCariBintangDaa($myJadual[3],'ESTABLISHMENT_ID',$id);
$sql['untungrugi'] = sqlCariBintangDaa($myJadual[4],'ESTABLISHMENT_ID',$id);
$sql['kwsp'] = sqlCariBintangDaa($myJadual[5],'ESTABLISHMENT_ID',$id);
$sql['mko'] = sqlMkoDaa($myJadual[0],$id);
#--------------------------------------------------------------------------------------------------
//echo '<hr>semakPembolehubah<hr>';
//semakPembolehubah($myJadual,'myJadual',0);
//semakPembolehubah($sql,'sql',0);
#--------------------------------------------------------------------------------------------------
$data01 = dbMysqli00(DB_HOST,DB_NAME,DB_USER,DB_PASS,$sql);
$data02 = belanjaKp337V01();
$data03 = hasilKp337V01();
$data04 = stokKp337V01();
//$data02 = array_merge($a01,$a02,$a03);
//$belanjaAsal = $data02['kp337'][78][3];
$belanjaAsal = $data02['kp337'][73][3];
$hasilAsal = $data03['kp337'][30][3];
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($data,'data',0);
//semakPembolehubah($data02,'data',0);
//semakPembolehubah($data03,'data03',0);
/*semakPembolehubah($belanja,'belanja',2);
semakPembolehubah($hasil,'hasil',2);
semakPembolehubah($belanjaAsal,'belanjaAsal',2);
semakPembolehubah($hasilAsal,'hasilAsal',2);*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
$pilih = null;
list($urlcss,$urljs) = linkCssJs(2);
$class = '"table table-sm table-striped table-bordered"';
$class02 = '"excel"';
diatas($pilih, $urlcss);
#--------------------------------------------------------------------------------------------------
binaButang(null);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
echo "\n<hr><!-- Senarai Jadual
==============================================================================================="
. " -->";
#--------------------------------------------------------------------------------------------------
/*foreach($data01 as $myJadualDaa => $rowDaa):
	#----------------------------------------------------------------------------------------------
	echo "\n<table><tr>";
	$table = paparSatuJe($rowDaa,$myJadualDaa);
	echo "\n<td valign=\"top\"><table class=$class>\n$table\n</table></td>";
	echo "\n</tr></table>\n";
	#----------------------------------------------------------------------------------------------
endforeach;//*/
#--------------------------------------------------------------------------------------------------
echo "\n<!-- ================================================================================ -->";
#--------------------------------------------------------------------------------------------------
foreach($data02 as $myJadual02 => $row02):
	$table02 = paparJadualAnggar($row02,$myJadual02,$belanja,$belanjaAsal,'belanja');
	//echo "\n<h1>anggar = $belanja| asal = $belanjaAsal</h1><hr>";
	echo "\n<table class=$class02>\n$table02\n</table>";
endforeach;//*/
#--------------------------------------------------------------------------------------------------
foreach($data03 as $myJadual03 => $row03):
	$table = paparJadualAnggar($row03,$myJadual03,$hasil,$hasilAsal,'hasil');
	//echo "\n<h1>anggar = $hasil| asal = $hasilAsal</h1><hr>";
	echo "\n<table class=$class02>\n$table\n</table>";
endforeach;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
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
