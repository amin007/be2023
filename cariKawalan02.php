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
semakPembolehubah($respon,'respon',0);
semakPembolehubah($nota,'nota',0);//*/
#--------------------------------------------------------------------------------------------------
# setkan pembolehubah bahagian kedua
$namaFe = $tatarajahBatch[0];
$jawatanFe = $tatarajahBatch[1];
$namaPegawai = $tatarajahBatch[2];
$jawatanPegawai = $tatarajahBatch[3];
#--------------------------------------------------------------------------------------------------
# setkan arahan sql sahaja
$link = "concat(tarikhBatch,'/',catatanBatch)";
$sql['kumpul'] = sqlGroupJadual('catatanBatch,tarikhBatch,'
. $link . ' as link','catatanBatch',$myJadual[0]);
$sql02['batch'] = sqlSelectNegatifV02($myJadual[0],$tarikh,$nota);
#--------------------------------------------------------------------------------------------------
/*echo '<hr>semakPembolehubah<hr>';
//semakPembolehubah($_POST,'_POST',0);
semakPembolehubah($myJadual,'myJadual',0);
semakPembolehubah($sql,'sql',0);//*/
#--------------------------------------------------------------------------------------------------
$kumpulDaa = dbMysqli01(DB_HOST,DB_NAME,DB_USER,DB_PASS,$sql);
$data = dbMysqli01(DB_HOST,DB_NAME,DB_USER,DB_PASS,$sql02);
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($data,'data',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
list($urlcss,$urljs) = linkCssJs();
$class = '"table table-sm table-striped table-bordered"';
//$class = '"table table-striped table-bordered"';
//$class02 = '"excel"';
diatas('R=' . $nota, $urlcss);
#--------------------------------------------------------------------------------------------------
//binaButang(null);
#--------------------------------------------------------------------------------------------------
echo '<h1 align="center">BANCI EKONOMI 2023</h1>';
echo '<h4 align="center">MAKLUMAT KAWALAN</h4>';
echo '<h4 align="center">UNIT : PROSESAN</h4>';
#--------------------------------------------------------------------------------------------------
	foreach($data as $myJadualDaa => $rowDaa):
		$baki = count($rowDaa);
		$table = paparSemuaData($rowDaa,$myJadualDaa);
		//$table = paparSemuaDataV03($rowDaa);
		//echo "\n<caption>$myJadualDaa</caption>";
		echo "\n<table id=\"myTable\" class=$class>$table";
	endforeach;
	#----------------------------------------------------------------------------------------------
	$jalur = count(current($data['batch'])) + 1;
	for($i = $baki+1; $i < 17; $i++):
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
$notaBawah = [
	['&nbsp;',null,null,null],
	['PEGAWAI LUAR','','KAWALAN OPERASI',null,],
	['Bahawa saya penama ','dibawah mengesahkan','Bahawa saya penama ','dibawah mengesahkan'],
	['penghantaran borang lengkap','seperti diatas :-','penghantaran borang lengkap','seperti diatas :-'],
	['&nbsp;',null,null,null],
	['Tanda Tangan',':','Tanda Tangan',null,],
	['Disediakan Oleh',':'.$namaFe,'Diterima Oleh',':'.$namaPegawai],
	['Jawatan',':'.$jawatanFe,'Jawatan',':'.$jawatanPegawai],
	['Tarikh Penerimaan',':','Tarikh Penerimaan',':',],
	['&nbsp;',null,null,null],
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
echo "\n</table>\r";//*/
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