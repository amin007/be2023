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
//semakPembolehubah($_POST,'_POST',0);
$fe = bersih($_POST['namaFe']);
$id = bersih($_POST['noSiri']);
$peratus = bersih($_POST['peratusan']);
$staf['pengurus'] = bersih($_POST['pengurus']);
$staf['asas'] = bersih($_POST['gajiStaf']);
$staf['bil'] = bersih($_POST['bilStaf']);
$staf['peratusGaji'] = bersih($_POST['peratusGaji']);
#--------------------------------------------------------------------------------------------------
# terpaksa import masuk kemudian sebab ada pengiraan dari data $_POST
require './sumber/fail/data/dataAnggaran.php';
#--------------------------------------------------------------------------------------------------
//$sql['FeBarcode'] = sqlFeBarcode($myJadual[0],$fe,$id);
$sql['DataAesV00'] = sqlDataAesV00($myJadual[0],$myJadual[1],$fe,$id,$peratus);
//$sql['dataMKO'] = sqlMkoDaa($myJadual[0],$id);
//$dataSql[] = sqlDataAesV01($myJadual[0],$myJadual[1],$fe,$id);
//$dataSql[] = sqlCariMsicAes($myJadual[0],$myJadual[1],$fe,$id);
//$dataSql[] = sqlNewssV00($myJadual[0],$myJadual[2],$fe,$id);
//$dataSql[] = sqlNewssV01($myJadual[0],$myJadual[2],$fe,$id);
//$dataSql[] = sqlNewssV02($myJadual[0],$myJadual[2],$fe,$id);
//$sql['NewssV03'] = sqlNewssV03($myJadual[0],$myJadual[2],$fe,$id,$peratus);
$sql['NewssV04'] = sqlNewssV04($myJadual[0],$myJadual[2],$fe,$id,$peratus);
//$sql['SsmRocHartaV00'] = sqlSsmRocHartaV00($myJadual[0],$myJadual[3],$fe,$id,$peratus);
//$sql['SsmRocHartaV01'] = sqlSsmRocHartaV01($myJadual[0],$myJadual[3],$fe,$id);
//$dataSql[] = sqlSsmRocUntungRugiV00($myJadual[0],$myJadual[4],$fe,$id);
//$sql['SsmRocUntungRugiV01'] = sqlSsmRocUntungRugiV01($myJadual[0],$myJadual[4],$fe,$id,$peratus);
$sql['SsmRocInfoAll'] = sqlSsmRocInfoAll($myJadual,$fe,$id,$peratus,$staf);
//$dataSql[] = sqlRangkaKwspV00($myJadual[0],$myJadual[5],$fe,$id);
//$dataSql[] = sqlRangkaKwspV01($myJadual[0],$myJadual[5],$fe,$id);
//$dataSql[] = sqlRangkaKwspV02($myJadual[0],$myJadual[5],$fe,$id);
//$dataSql[] = sqlRangkaKwspV03($myJadual[0],$myJadual[5],$fe,$id);
//$dataSql[] = sqlRangkaKwspV04($myJadual[0],$myJadual[5],$fe,$id);
$sql['RangkaKwspV05'] = sqlRangkaKwspV05($myJadual[0],$myJadual[5],$fe,$id,$peratus,$staf);
//$dataSql[] = '';//*/
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
//$class = '"table table-striped table-bordered table-sm"';
$class = '"table table-bordered table-sm"';
//$class = '"excel"';
$pilih = 'Carian Data Anggaran';
diatas($pilih,$urlcss);
#--------------------------------------------------------------------------------------------------
binaButang(null);
echo "<!-- Senarai Jadual
=============================================================================================== -->";
echo "\n<table><tr>";
#--------------------------------------------------------------------------------------------------
	foreach($data as $myJadualDaa => $rowDaa):
	if(semakTatasusunan($rowDaa) == 'array') :
	#----------------------------------------------------------------------------------------------
	$table = paparSatuJe($rowDaa,$myJadualDaa);
	echo "\n<td valign=\"top\"><table class=$class>\n$table\n</table></td>";
	#----------------------------------------------------------------------------------------------
	else: echo "\n<td valign=\"top\">Tiada Data</td>";
	#----------------------------------------------------------------------------------------------
	endif;
	endforeach;
#--------------------------------------------------------------------------------------------------
echo "\n</tr></table>\n";
#--------------------------------------------------------------------------------------------------
dibawah($pilih,$urljs);
echo "<script>\n";
jqueryExtendA();
jqueryExtendB();
jqueryExtendC();
gradeTable002(null);
echo "\n</script>\n</body>\n</html>";//*/
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################