<?php
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('semakPembolehubah')):
	function semakPembolehubah($senarai,$jadual='entahlah',$p=0)
	{
		# semak $senarai adalah array atau tidak
		$semak = is_array($senarai) ? 'array' : 'bukan';
		if($semak == 'array'):
			echo '<pre>$' . $jadual . '=><br>';
			if($p == '0') print_r($senarai);
			if($p == '1') var_export($senarai);
			echo '</pre>' . "\n";
		else:
			echo tagVar($senarai,$jadual,$p);
		endif;
		//$this->semakPembolehubah($ujian,'ujian',0);
		#http://php.net/manual/en/function.var-export.php
		#http://php.net/manual/en/function.print-r.php
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('tagVar')):
	function tagVar($senarai,$jadual,$pilih)
	{
		# set pembolehubah utama
		$p1 = 'pre';#https://www.w3schools.com/tags/tag_var.asp
		$p2 = 'kbd';
		$p3 = 'code';
		$p4 = 'samp';
		# setkan tatasusunan
		$p[0] = "<pre>\$$jadual = $senarai</pre><br>\n";
		$p[1] = "<$p1>\$$jadual = $senarai</$p1><br>\n";
		$p[2] = "<$p1><$p2>\$$jadual = $senarai</$p2><br>\n";
		$p[3] = "<$p3>\$$jadual = $senarai</$p3><br>\n";
		$p[4] = "<$p4>\$$jadual = $senarai</$p4><br>\n";
		$p[5] = "<$p1><$p2>$senarai</$p2></$p1><br>\n";
		#
		return $p[$pilih];
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('semakTatasusunan')):
	function semakTatasusunan($senarai)
	{
		$semak = is_array($senarai) ? 'array' : 'bukan';
		#
		return $semak;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('semakTatasusunanIni')):
	function semakTatasusunanIni($senarai,$kodHtml = 'pre')
	{
		$semak = semakTatasusunan($senarai);
		if($semak == 'array'):
			echo "<$kodHtml>";
			foreach($senarai as $data):
				echo "$data\n";
			endforeach;
			echo "</$kodHtml>\n";
		else:
			echo tagVar($senarai,'',5);
		endif;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('bersih')):
	/** */
	function bersih($papar)
	{
		# buang ruang kosong (atau aksara lain) dari mula & akhir
		$papar = trim((string)$papar);# tambah (string) pada $papar

		return $papar;
	}
endif;
#--------------------------------------------------------------------------------------------------
###################################################################################################
# untuk paparkan jadual dari tatasusunan
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparSemuaData')):
	function paparSemuaData($row)
	{
		$output = null;
		$bilBaris = count($row);
		$cetak_tajuk_utama = false;# mula bina jadual
		#----------------------------------------------------------------------
		for ($kira=0; $kira < $bilBaris; $kira++)
		{	# papar tajuk jadual sekali sahaja :
			if ( !$cetak_tajuk_utama )
			{##================================================================
				$output .= "\n\t<thead><tr>";
				$output .= "\n\t\t" . '<th>#</th>';
				foreach ( $row[$kira] as $kunci=>$dataDaa ) :
				$output .= "\n\t\t" . '<th>' . $kunci . '</th>';
				endforeach;
				$output .= "\n\t" . '</tr></thead>';
				$output .= "\n\t" . '<tbody>';
			##=================================================================
				$cetak_tajuk_utama = true;
			}
		#---------------------------------------------------------------------
			# papar baris data dari tatasusunan
			$output .= "\n\t<tr>";
			$output .= "\n\t\t" . '<td>' . $kira . '</td>';
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\n\t\t" . '<td>' . $data . '</td>';
			//$output .= "<!-- $key|$kira -->";# untuk debug di masa hadapan
			endforeach;
			$output .= "\n\t" . '</tr>';
		}#---------------------------------------------------------------------
		$output .= "\n\t" . '</tbody>';

		return $output;//*/
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparSemuaDataV02')):
	function paparSemuaDataV02($row)
	{
		$output = null;
		$bilBaris = count($row);
		# mula bina jadual
		#--------------------------------------------------------------------------------
		for ($kira=0; $kira < $bilBaris; $kira++)
		{	#---------------------------------------------------------------------
			if($kira == 0)
			{	##=================================================================
				## papar tajuk jadual sekali sahaja : =============================
				$output .= "\n\t<thead><tr>";
				$output .= "\n\t\t" . '<th>#</th>';
				foreach ( $row[$kira] as $kunci=>$kunciTajuk ) :
				//$output .= "\n\t\t<th>$kunci|$kunciTajuk</th>";
				$output .= "\n\t\t" . '<th>' . $kunciTajuk . '</th>';
				endforeach;
				$output .= "\n\t" . '</tr></thead>';
				$output .= "\n\t" . '<tbody>';
				##==================================================================
			}#----------------------------------------------------------------------
			else
			{	##==================================================================
				## papar baris data dari tatasusunan ===============================
				$output .= "\n\t<tr>";
				$output .= "\n\t\t" . '<td>' . $kira . '</td>';
				foreach ( $row[$kira] as $key=>$data ) :
				$output .= "\n\t\t" . '<td>' . $data . '</td>';
				//$output .= "<!-- $key|$kira -->";# untuk debug di masa hadapan
				endforeach;
				$output .= "\n\t" . '</tr>';
				##==================================================================
			}#----------------------------------------------------------------------
		}#-------------------------------------------------------------------------------
		$output .= "\n\t" . '</tbody>';

		return $output;//*/
	}
endif;
#--------------------------------------------------------------------------------------------------
###################################################################################################
# untuk cari nilai dalam kp206
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('cariNilai')):
	function cariNilai($data,$kod)
	{
		foreach ($data as $key => $values):
			if($kod == $values[0]):
				//echo "<hr>$kod($key) = " . $values[0];
				return $key . '|' . $values[0];
			endif;
		endforeach;

		return null;
		//$nilai[] = cariNilai($dataKp['kp337'],'F090036');# untuk debug
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('cariMsic')):
	function cariMsic($data,$kod)
	{
		$jumpa = 0;
		$jumpaData = [];
		foreach ($data as $key => $values):
			if($kod === $values[26]):
				$jumpa++;
				$jumpaData[] =  $key . '|' . $values[0];
			else:
				//echo '<hr>$values[26] tak jumpa di row ' . $key . '|';
			endif;
		endforeach;

		return [$jumpa,$jumpaData];
		//$nilai[] = cariMsic($dataKp['kp337'],'47111');# untuk debug
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('cariPeratusKp337')):
	function cariPeratusKp337($anggar,$asal,$data)
	{
		if(is_numeric($data)):
			$peratus = $data / $asal;
			$anggaran = number_format($peratus * $anggar,0,'','');
			$peratus = number_format($peratus,4,'.','');
		else:
			$peratus = $anggaran = 0;
		endif;
		#
		return [$peratus,$anggaran];
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/**
 * Group items from an array together by some criteria or value.
 *
 * @param  $arr array The array to group items from
 * @param  $criteria string|callable The key to group by or a function the returns a key to group by.
 * @return array
 * https://stackoverflow.com/questions/7574857/group-rows-in-an-associative-array-of-associative-arrays-by-column-value-and-pre
 *
 */
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('groupBy')):
	function groupBy($arr, $criteria): array
	{
		return array_reduce($arr, function($accumulator, $item) use ($criteria)
		{
			$key = (is_callable($criteria)) ? $criteria($item) : $item[$criteria];
			if (!array_key_exists($key, $accumulator))
			{
				$accumulator[$key] = [];
			}

			array_push($accumulator[$key], $item);
			return $accumulator;
		}, []);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# untuk js dan css
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('linkCssJs')):
	function linkCssJs($pilih=1)
	{
		# setkan jquery, bootstrap dan font awesome sama ada local atau cdn
		## cdn jquery =============================================================================
		//$jquery_cdn = '//code.jquery.com/jquery-2.2.3.min.js';
		$jquery_cdn = '//code.jquery.com/jquery-3.3.1.js';
		## cdn bootstrap 3.3.7 ====================================================================
		$bootstrapJS_cdn = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js';
		$bootstrapCSS_cdn = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css';
		$ceruleanCSS_cdn = '//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css';
		$fontawesome_cdn = '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min'
		. '.css';
		## cdn bootstrap 4.1.3 ====================================================================
		$bootstrapJS_413 = '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js';
		$bootstrapCSS_413 = '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css';
		$ceruleanCSS_413 = '//stackpath.bootstrapcdn.com/bootswatch/4.1.3/cerulean/bootstrap.min'
		. '.css';
		## cdn bootstrap 5.*.* ====================================================================
		$btCss_511 = 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css';
		$btCss_530 = '//cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css';
		$btJs_530 = '//cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js';
		## cdn font awesome =======================================================================
		$fontawesome_510 = '//use.fontawesome.com/releases/v5.1.0/css/all.css';
		$fontawesome_5112 = '//use.fontawesome.com/releases/v5.11.2/css/all.css';
		$fontawesome_5140 = '//use.fontawesome.com/releases/v5.14.0/css/all.css';
		## local  =================================================================================
		$sumber = 'sumber/utama/';
		$jquery_local = $sumber . 'jquery/jquery-2.2.3.min.js';
		$bootstrapJS_local = $sumber . 'bootstrap/3.3.7/js/bootstrap.min.js';
		$bootstrapCSS_local = $sumber . 'bootstrap/3.3.7/css/bootstrap.min.css';
		$fontawesome_local = $sumber . 'font-awesome/4.7.0/css/font-awesome.min.css';
		$datatablesCSS_local = $sumber . 'datatables/1.10.19/css/jquery.dataTables.min.css';
		$datatablesJSS_local = $sumber . 'datatables/1.10.19/js/jquery.dataTables.min.js';
		## datatables  ============================================================================
		$datatablesCSS = '//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css';
		$datatablesJSS = '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js';
		$searchHighlightCSS = '//cdn.datatables.net/plug-ins/1.10.11/features/searchHighlight/'
		. 'dataTables.searchHighlight.css';
		$searchHighlightJSS = '//cdn.datatables.net/plug-ins/1.10.11/features/searchHighlight/'
		. 'dataTables.searchHighlight.min.js';
		###########################################################################################
		$urlcss[] = array();
		$urljs[] = array();
		###########################################################################################
		$urlcss[] = array($bootstrapCSS_413,$fontawesome_510,$datatablesCSS,$searchHighlightCSS);
		$urljs[] = array($jquery_cdn,$bootstrapJS_413,$datatablesJSS,$searchHighlightJSS);
		###########################################################################################
		$urlcss[] = array($btCss_530,$fontawesome_5140);
		$urljs[] = array($jquery_cdn,$btJs_530);
		###########################################################################################
		$urlcss[] = array($btCss_530,$fontawesome_5140,$datatablesCSS,$searchHighlightCSS);
		$urljs[] = array($jquery_cdn,$btJs_530,$datatablesJSS,$searchHighlightJSS);
		###########################################################################################

		return array($urlcss[$pilih],$urljs[$pilih]);//list($urlcss,$urljs) = linkCssJs();
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('masukCss')):
	function masukCss($urlcss)
	{
		$p = '';
		#
		if (isset($urlcss))
		{
			foreach ($urlcss as $css)
			{
				$p .= "\n" . '<link rel="stylesheet" type="text/css" href="' . $css .'">';
			}
		}
		#
		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('diatas')):
	function diatas($title = 'List Folder', $urlcss = null)
	{
		$linkCss = masukCss($urlcss);
		$title = ($title == null) ? 'Senarai Kod' : ucfirst($title);
		print <<<END
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,, maximum-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>$title</title>
$linkCss
<style>
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td
{
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
</style>
</head>
<body>
END;
		# tamat print <<<END
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('getTimeLoad')):
	function getTimeLoad()
	{
		$masa = $_SERVER['REQUEST_TIME'];
		$masa = date('h:i:s', $_SERVER['REQUEST_TIME']);
		//$masa = date('d M Y h:i:s A', time());

		return $masa;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
include 'csv2array.php'; # data dari csv tukar kepada tatasusunan
#--------------------------------------------------------------------------------------------------
###################################################################################################
# cari ikut ID
#--------------------------------------------------------------------------------------------------
// 26 => 000000448042
$cariMsic = '000000448042';
$nilai[] = cariNilai($data['kp206'],$cariMsic);
list($cariKey,$cariKod) = explode('|',$nilai[0]);
$isiData['kp206'][] = $data['kp206'][0];# ambil tajuk medan
$isiData['kp206'][] = $data['kp206'][$cariKey];
/*semakPembolehubah($nilai,'nilai',0);
semakPembolehubah($cariKey,'cariKey',0);
semakPembolehubah($isiData,'isiData',0);//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# cari ikut msic
#--------------------------------------------------------------------------------------------------
/*$cariMsic = '41001';// $key = 26 => F010029 => 41001
#--------------------------------------------------------------------------------------------------
list($jumpaMsic,$jumpaData) = cariMsic($data['kp206'],$cariMsic);
foreach($jumpaData as $kunci => $dataApa):
	//echo "\n<hr>$kunci = $dataApa";
	list($cariKey[],$cariKod[]) = explode('|',$dataApa);
endforeach;
$isiData['kp206'][] = $data['kp206'][0];# ambil tajuk medan
foreach($cariKey as $kunci02 => $kodID):
	//echo "\n<hr>key $dataApa02";
	$isiData['kp206'][] = $data['kp206'][$kodID];
endforeach;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
list($urlcss,$urljs) = linkCssJs(3);
//$class = '"table table-sm table-striped table-bordered"';
$class = '"table table-striped table-bordered"';
$class02 = '"excel"';
diatas('Senarai Batch', $urlcss);
#--------------------------------------------------------------------------------------------------
//binaButang(null);
#--------------------------------------------------------------------------------------------------
echo "\n<hr>masa jana laporan = " . getTimeLoad() . "|";
//echo "\n<hr>msic = $cariMsic ada sebanyak $jumpaMsic data.";
foreach($isiData as $kunci03 => $rowDaa):
	$table = paparSemuaDataV02($rowDaa);
	echo "\n<table id=\"myTable\" class=$class02>$table";
	echo "\n</table>";
endforeach;//*/
#--------------------------------------------------------------------------------------------------
/*dibawah($pilih,$urljs);
echo "<script>\n";
jqueryExtendA();
jqueryExtendB();
jqueryExtendC();
gradeTable002(null);
echo "\n</script>";//*/
echo "\n</body>\n</html>";//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################