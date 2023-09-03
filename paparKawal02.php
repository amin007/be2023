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
#--------------------------------------------------------------------------------------------------
list($tarikh,$nota) = pecahPautan02();# setkan pembolehubah bahagian pertama
/*semakPembolehubah($tarikh,'tarikh',0);
semakPembolehubah($nota,'nota',0);//*/
#--------------------------------------------------------------------------------------------------
# setkan arahan sql sahaja
$server = 'cariKawalan02.php';
$link = "concat(tarikhBatch,'/',catatanBatch)";
$sql['kumpul'] = sqlGroupJadual('catatanBatch,tarikhBatch,'
. $link . ' as link','catatanBatch',$myJadual[0]);
#--------------------------------------------------------------------------------------------------
/*echo '<hr>semakPembolehubah<hr>';
semakPembolehubah($_POST,'_POST',0);
semakPembolehubah($myJadual,'myJadual',0);
semakPembolehubah($sql,'sql',0);
semakPembolehubah($sql02,'sql02',0);//*/
#--------------------------------------------------------------------------------------------------
$kumpulDaa = dbMysqli01(DB_HOST,DB_NAME,DB_USER,DB_PASS,$sql);
#--------------------------------------------------------------------------------------------------
/*echo '<hr>semakPembolehubah SQL<hr>';
semakPembolehubah($kumpulDaa,'kumpulDaa',0);//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
list($urlcss,$urljs) = linkCssJs();
$class = '"table table-sm table-striped table-bordered"';
//$class = '"table table-striped table-bordered"';
//$class02 = '"excel"';
diatas('Senarai Batch', $urlcss);
#--------------------------------------------------------------------------------------------------
//binaButang(null);
#--------------------------------------------------------------------------------------------------
echo '<h1 align="center">BANCI EKONOMI 2023</h1>';
echo '<h4 align="center">MAKLUMAT KAWALAN</h4>';
echo '<h4 align="center">UNIT : PROSESAN</h4>';
#--------------------------------------------------------------------------------------------------
	foreach($kumpulDaa as $myJadual01 => $rowDaa):
		$table01 = paparSemuaDataV03($rowDaa,$server);
		//echo "\n<caption>$myJadualDaa</caption>";
		echo "\n<table id=\"myTable\" class=$class>$table01";
	endforeach;
	#----------------------------------------------------------------------------------------------
	$jalur = count(current($kumpulDaa['kumpul'])) + 1;
	for($i = count($rowDaa)+1; $i < 17; $i++):
		echo "\n\t" . '<tr>';
		echo "<td>$i</td>";
		for($j = 1; $j < $jalur; $j++):
			echo '<td>&nbsp;</td>';
		endfor;
		echo '</tr>';
	endfor;
	#----------------------------------------------------------------------------------------------
	echo "\n</table>";//*/
#--------------------------------------------------------------------------------------------------
//dibawah($pilih,$urljs);
/*echo "<script>\n";
jqueryExtendA();
jqueryExtendB();
jqueryExtendC();
gradeTable002(null);
echo "\n</script>";//*/
echo "\n</body>\n</html>";//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################