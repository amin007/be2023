<?php
###################################################################################################
#--------------------------------------------------------------------------------------------------
$bilStaf = $staf['bil'];
$pengurus = $staf['pengurus'];//gaji
$asas = $staf['asas'];//gaji
$peratusGaji = $staf['peratusGaji'];
$stafPengurus = ($pengurus*13);
$stafBaki = (($bilStaf-1)*$asas*13);
$anggarGaji = ($stafPengurus + $stafBaki) * $peratus;
$anggarBelanja = ($anggarGaji/$peratusGaji);
$anggarStok = $anggarBelanja*0.04;
$anggarHarta = $anggarBelanja*0.175;
$anggarHasil = $anggarBelanja/0.92;
#--------------------------------------------------------------------------------------------------
$data['dataAnggar5P'][] = [
	'Staf' => $bilStaf,
	'Anggaran' => 'data bawah ini semua anggaran',
	'gajiPengurus' => $pengurus,
	'blnPengurus' => number_format($pengurus/13,2),
	'gajiStaf' => $stafBaki,
	'blnStaf' => number_format($stafBaki/13,2),
	'JumGaji' => $stafPengurus + $stafBaki,
	'PurataGaji' => number_format(($stafPengurus + $stafBaki)/$bilStaf/13,2),
	'Hasil' => number_format($anggarHasil,2),
	'Belanja' => number_format($anggarBelanja,2),
	'Gaji' => number_format($anggarGaji,2),
	'Harta' => number_format($anggarHarta,2),
	'Pekerja' => $bilStaf,
	'Stok' => number_format($anggarStok,2),
];//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
/*
$tajuk['xxx'] = '#,-';
$data['xxx'] = array(
	array('','',''),
	array('','',''),
	array('','',''),
);//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx2')):
	function sqlXxx2($fe)
	{
		$sqlFeBarcode = sqlFeBarcode($fe);
		$sql = '';
		// $sqlXxx2 = sqlXxx2($fe);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################