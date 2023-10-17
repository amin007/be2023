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
$anggarModal = $anggarHarta*2;
$anggarHasil = $anggarBelanja/0.92;
#--------------------------------------------------------------------------------------------------
$data['dataAnggar5P'][] = [
	'Staf' => $bilStaf,
	'Anggaran' => 'data bawah ini semua anggaran',
	'gajiPengurus' => $pengurus,
	'blnPengurus' => round($pengurus/13,2),
	'gajiStaf' => $stafBaki,
	'blnStaf' => round($stafBaki/13,2),
	'JumGaji' => $stafPengurus + $stafBaki,
	'PurataGaji' => round(($stafPengurus + $stafBaki)/$bilStaf/13,2),
	'Modal' => number_format($anggarModal,2) . '|' . round($anggarModal,0),
	'Hasil' => number_format($anggarHasil,2) . '|' . round($anggarHasil,0),
	'Belanja' => number_format($anggarBelanja,2) . '|' . round($anggarBelanja,0),
	'Gaji' => number_format($anggarGaji,2) . '|' . round($anggarGaji,0),
	'Harta' => number_format($anggarHarta,2) . '|' . round($anggarHarta,0),
	'Pekerja' => $bilStaf,
	'Stok' => number_format($anggarStok,2) . '|' . round($anggarStok,0),
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