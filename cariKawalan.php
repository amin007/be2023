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
list($tarikh,$respon,$nota,$mko) = pecahPautan();# setkan pembolehubah bahagian pertama
/*semakPembolehubah($tarikh,'tarikh',0);
semakPembolehubah($respon,'respon',0);
semakPembolehubah($nota,'nota',0);//*/
$hariIni = date("Y-m-d");
#--------------------------------------------------------------------------------------------------
# setkan arahan sql sahaja
$sql['batch'] = sqlSelectNegatif($myJadual[0],$tarikh);
#--------------------------------------------------------------------------------------------------
/*echo '<hr>semakPembolehubah<hr>';
//semakPembolehubah($_POST,'_POST',0);
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
echo '<h1 align="center">BANCI EKONOMI 2023</h1>';
echo '<h4 align="center">MAKLUMAT KAWALAN</h4>';
echo '<h4 align="center">UNIT : PROSESAN</h4>';
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
		<label for="inputA">Carian Tarikh Batch:$hariIni</label>
		<input type="date" class="form-control form-control-lg"
		name="tarikhBatch" value="$tarikh">
	</div>
	<div class="form-group">
		<label for="inputB">noSiri</label>
		<input type="text" class="form-control form-control-lg"
		name="noSiri" autofocus>
	</div>
	<div class="form-group">
		<label for="inputC">Respon</label>
		<input type="text" class="form-control form-control-lg"
		name="respon" value="$respon">
	</div>
	<div class="form-group">
		<label for="inputD">Catatan</label>
		<input type="text" class="form-control form-control-lg"
		name="catatanBatch" value="$nota">
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
/*
	<div class="form-group">
		<label for="inputC">DataMKO</label>
		<input type="hidden" class="form-control form-control-lg"
		name="DataMKO" value="$mko">
	</div>
*/
#--------------------------------------------------------------------------------------------------
	foreach($data as $myJadualDaa => $rowDaa):
		$baki = count($rowDaa);
		$table = paparSemuaData($rowDaa,$myJadualDaa);
		echo "\n<table id=\"myTable\" class=$class>$table";
	endforeach;
	#----------------------------------------------------------------------------------------------
	$jalur = count(current($data['batch'])) + 1;
	for($i = $baki+1; $i < 17; $i++):
		echo "\n\t" . '<tr>'
		. "<td>$i</td>";
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