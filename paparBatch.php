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
$namaFe = bersih($_POST['namaFe']);// = $tatarajahBatch[0];
$jawatanFe = bersih($_POST['jawatanFe']);// = $tatarajahBatch[1];
$namaPegawai = bersih($_POST['namaPegawai']);// = $tatarajahBatch[2];
$jawatanPegawai = bersih($_POST['jawatanPegawai']);// = $tatarajahBatch[3];
$catatanBatch = bersih($_POST['catatanBatch']);
$tarikhBatch = bersih($_POST['tarikhBatch']);
$tarikhBatchDaa = $tarikhBatch;
$sql['batch'] = sqlSelectBatch($myJadual[0],$tarikhBatch,$catatanBatch);
#--------------------------------------------------------------------------------------------------
/*echo '<hr>semakPembolehubah<hr>';
semakPembolehubah($_POST,'_POST',0);
semakPembolehubah($myJadual,'myJadual',0);
semakPembolehubah($sql,'sql',0);//*/
#--------------------------------------------------------------------------------------------------
$data = dbMysqli01(DB_HOST,DB_NAME,DB_USER,DB_PASS,$sql);
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($data,'data',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
list($urlcss,$urljs) = linkCssJs();
//$class = '"table table-sm table-striped table-bordered"';
$class = '"table table-striped table-bordered"';
diatas('Senarai Batch', $urlcss);
#--------------------------------------------------------------------------------------------------
//binaButang(null);
#--------------------------------------------------------------------------------------------------
	foreach($data as $myJadualDaa => $rowDaa):
		$baki = count($rowDaa);
		$table = paparSemuaData($rowDaa,$myJadualDaa);
		echo '<h1 align="center">BORANG PENGHANTARAN KES BORANG BE 2023</h1>';
		echo "\n<table id=\"myTable\" class=$class>$table";
	endforeach;
	#----------------------------------------------------------------------------------------------
	for($i = $baki+1; $i < 17; $i++):
		echo "\n\t" . '<tr>';
		echo "<td>$i</td>";
		for($j = 1; $j < 6; $j++):
			echo '<td>&nbsp;</td>';
		endfor;
		echo '</tr>';
	endfor;
	#----------------------------------------------------------------------------------------------
	echo "\n</table>";
#--------------------------------------------------------------------------------------------------
$notaBawah = [
	//['&nbsp;','',''],
	['Tanda Tangan',':',''],
	['Disediakan Oleh',':',$namaFe],
	['Jawatan',':',$jawatanFe],
	['Tarikh Penghantaran',':',$tarikhBatchDaa],
	//['&nbsp;','',''],
	['Tanda Tangan',':',''],
	['Diterima Oleh',':',$namaPegawai],
	['Jawatan',':',$jawatanPegawai],
	['Tarikh Penghantaran',':',$tarikhBatchDaa],
	//['&nbsp;','',''],
];
#--------------------------------------------------------------------------------------------------
echo "\n<table class=$class>";
foreach($notaBawah as $kunci => $utama):
	echo "\n\t" . '<tr><td>' . $utama[0] . '</td><td>' . $utama[1] . '</td>'
	. '<td>' . $utama[2] . '</td></tr>';
endforeach;
echo "\n</table>\r";
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
#--------------------------------------------------------------------------------------------------
###################################################################################################