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
$tarikhBatch = bersih($_POST['tarikhBatch']);
$tarikhBatchDaa = $tarikhBatch;
$sql['batch'] = sqlSelectMko($myJadual[0],$tarikhBatch);
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
		echo '<h1 align="center">BANCI EKONOMI 2023</h1>';
		//echo '<h2 align="center">BORANG PENGHANTARAN FE & BORANG SOAL SELIDIK KOSONG LUAR PEJABAT OPERASI MUAR</h2>';
		echo '<h3 align="center">RINGKASAN MAKLUMAT PERANGKAAN UTAMA</h3>';
		echo "\n<table id=\"myTable\" class=$class>$table";
	endforeach;
	#----------------------------------------------------------------------------------------------
	for($i = $baki+1; $i < 16; $i++):
		echo "\n\t" . '<tr>';
		echo "<td>$i</td>";
		for($j = 1; $j < 7; $j++):
			echo '<td>&nbsp;</td>';
		endfor;
		echo '</tr>';
	endfor;
	#----------------------------------------------------------------------------------------------
	echo "\n</table>";
#--------------------------------------------------------------------------------------------------
$notaBawah = [
	['PEGAWAI LUAR','','',null,null,null],
	['Bahawa saya penama ','','dibawah mengesahkan',null,null,null],
	['penghantaran borang lengkap','','seperti diatas :-',null,null,null],
	['&nbsp;','','',null,null,null],
	['Tanda Tangan',':','',null,null,null],
	['Disediakan Oleh',':',$namaFe,null,null,null],
	['Jawatan',':',$jawatanFe,null,null,null],
	['Tarikh Penghantaran',':',null,null,null,null],
	['&nbsp;','','',null,null,null],
	['KAWALAN OPERASI','','','PO PENERIMA',null,null],
	['Bahawa saya penama ','','dibawah mengesahkan','Bahawa saya penama ','','dibawah mengesahkan'],
	['penghantaran borang lengkap','','seperti diatas :-','penghantaran borang lengkap','','seperti diatas :-'],
	['&nbsp;','','',null,null,null],
	['Tanda Tangan',':','','Tanda Tangan',null,null],
	['Diterima Oleh',':',null,'Diterima Oleh',':',$namaPegawai],
	['Jawatan',':',null,'Jawatan',':',$jawatanPegawai],
	['Tarikh Penerimaan',':',null,'Tarikh Penerimaan',':',$tarikhBatchDaa],
	['&nbsp;','','',null,null,null],
];
#--------------------------------------------------------------------------------------------------
echo "\n<table class=$class>";
foreach($notaBawah as $kunci => $utama):
	echo "\n\t" . '<tr>';
foreach($utama as $kunci02 => $utama02):
	echo '<td>' . $utama02 . '</td>';
endforeach;
	echo "" . '</tr>';
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