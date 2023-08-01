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
/*$namaFe = bersih($_POST['namaFe']);// = $tatarajahBatch[0];
$jawatanFe = bersih($_POST['jawatanFe']);// = $tatarajahBatch[1];
$namaPegawai = bersih($_POST['namaPegawai']);// = $tatarajahBatch[2];
$jawatanPegawai = bersih($_POST['jawatanPegawai']);// = $tatarajahBatch[3];
$tarikhBatch = bersih($_POST['tarikhBatch']);
$tarikhBatchDaa = $tarikhBatch;
$sql['batch'] = sqlSelectMko($myJadual[0],$tarikhBatch);//*/
#--------------------------------------------------------------------------------------------------
/*echo '<hr>semakPembolehubah<hr>';
semakPembolehubah($_POST,'_POST',0);
semakPembolehubah($myJadual,'myJadual',0);
semakPembolehubah($sql,'sql',0);//*/
#--------------------------------------------------------------------------------------------------
//$data = dbMysqli01(DB_HOST,DB_NAME,DB_USER,DB_PASS,$sql);
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
echo '<h1 align="center">BANCI EKONOMI 2023</h1>';
echo '<h2 align="center">MAKLUMAT KAWALAN</h2>';
echo '<h2 align="center">UNIT : PROSESAN</h2>';
echo '<h2 align="center">KP : 337</h2>';
#--------------------------------------------------------------------------------------------------
print <<<END
<!-- mula kotak
=============================================================================================== -->
<div class="container">
<!-- mula borang 03
=============================================================================================== -->
<form method="POST" action="updateKawalan.php" class="form-horizontal">
	<div class="p-3 mb-2 bg-transparent text-dark">
		<i class="fa fa-bicycle" style="font-size:50px"></i>
	</div><!-- / class="p-3 mb-2 bg-transparent text-dark" -->
	<div class="form-group">
		<label class="border border-dark btn-block">Carian Tarikh Batch02</label>
	</div><!-- / class="form-group" -->
	<div class="form-group">
		<label for="inputMsic">Carian Tarikh Batch</label>
		<input type="date" class="form-control form-control-lg"
		name="tarikhBatch">
	</div>
	<div class="form-group">
		<label for="inputMsic">noSiri</label>
		<input type="text" class="form-control form-control-lg"
		name="noSiri">
	</div>
	<div class="form-group">
		<label for="inputMsic">Jawatan</label>
		<input type="test" class="form-control form-control-lg"
		name="catatanBatch" value="BELUM LAWAT">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Cari Tarikh Batch">
	</div><!-- / class="form-group" -->
</form>
<!-- tamat borang 03
=============================================================================================== -->
</div><!-- / class="container" -->
<!-- tamat kotak
=============================================================================================== -->
END;
	# tamat print <<<END
#--------------------------------------------------------------------------------------------------
	/*foreach($data as $myJadualDaa => $rowDaa):
		$baki = count($rowDaa);
		$table = paparSemuaData($rowDaa,$myJadualDaa);
		echo "\n<table id=\"myTable\" class=$class>$table";
	endforeach;
	#----------------------------------------------------------------------------------------------
	for($i = $baki+1; $i < 17; $i++):
		echo "\n\t" . '<tr>';
		echo "<td>$i</td>";
		for($j = 1; $j < 13; $j++):
			echo '<td>&nbsp;</td>';
		endfor;
		echo '</tr>';
	endfor;
	#----------------------------------------------------------------------------------------------
	echo "\n</table>";//*/
#--------------------------------------------------------------------------------------------------
$notaBawah = [
	['&nbsp;','','',null,null,null],
	['PEGAWAI LUAR','','','KAWALAN OPERASI',null,null],
	['Bahawa saya penama ','','dibawah mengesahkan','Bahawa saya penama ','','dibawah mengesahkan'],
	['penghantaran borang lengkap','','seperti diatas :-','penghantaran borang lengkap','','seperti diatas :-'],
	['&nbsp;','','',null,null,null],
	['Tanda Tangan',':','','Tanda Tangan',null,null],
	['Disediakan Oleh',':',null,'Diterima Oleh',':',null],
	['Jawatan',':',null,'Jawatan',':',null],
	['Tarikh Penerimaan',':',null,'Tarikh Penerimaan',':',null],
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