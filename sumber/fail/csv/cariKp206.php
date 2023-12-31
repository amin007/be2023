<?php
###################################################################################################
//require '/sumber/fail/php/***.php';
require '../../../tatarajah.php';
require '../php/fungsi_global.php';
//require './data/***.php';
//require './data/dataSql.php';
//require './dataSqlMysqli.php';
//require './sumber/fail/csv/***.php';
###################################################################################################
# untuk paparkan jadual dari tatasusunan
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparJadualX00')):
	function paparJadualX00($row)
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
if ( ! function_exists('cariMsicKp')):
	function cariMsicKp($data,$kod)
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
if ( ! function_exists('cariNilaiKp')):
	function cariNilaiKp($data,$kod)
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
if ( ! function_exists('cariKpData5p')):
	function cariKpData5p($data)
	{
		$data02 = null;
		$data5p = [/*0,1,2,25,*/26,27,181,200,203,217,274,458,369,503,613,643,665,689,689,
		/*1949,1950,1951,1952,1953,1954,1955,1956,1957,1958,1959*/];
		foreach ($data as $key => $values):
		foreach ($values as $kunci => $angka):
			if(in_array($kunci,$data5p)):
				//echo "<hr>($key)[$kunci]=$angka";
				$data02[$key][$kunci] = $angka;
			else:
			endif;
		endforeach;
		endforeach;

		return $data02;
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
/*fputcsv(
    resource $stream,
    array $fields,
    string $separator = ",",
    string $enclosure = "\"",
    string $escape = "\\",
    string $eol = "\n"
)*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dariArrayToCsv')):
	function dariArrayToCsv($fail,$data)
	{
		$fp = fopen($fail, 'w');
		foreach ($data as $key=>$fields):
		//foreach ($fields as $kunci=>$angka):
			//echo "<hr>($key)[$kunci]=$angka";
			fputcsv($fp, $fields,";");
		//endforeach;
		endforeach;

		fclose($fp);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# data dari csv tukar kepada tatasusunan
#--------------------------------------------------------------------------------------------------
$filename = '../../../godek/dataKp206/kp206-aes2022';
$file02 = 'dataKp206_5p';
require '../../../godek/dataKp206/csv2array.php';
$isiData = cariKpData5p($data['kp206']);# buat tatasusunan berasaskan 5p
dariArrayToCsv($file02 . '.csv',$isiData);
//semakPembolehubah($data['kp206'][0],'data',0);
//semakPembolehubah($isiData,'isiData',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################
# cari ikut ID
#--------------------------------------------------------------------------------------------------
/* 26 => 000000448042
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
# kita dapatkan nilai $jumpaData dan dapatkan $cariKey
foreach($jumpaData as $kunci => $dataApa):
	//echo "\n<hr>$kunci = $dataApa";
	list($cariKey[],$cariKod[]) = explode('|',$dataApa);
endforeach;
# lepas itu, tajuk medan dan data dalam $cariKey
# digabungkan dalam $isiData
$isiData['kp206'][] = $data['kp206'][0];# ambil tajuk medan
foreach($cariKey as $kunci02 => $kodID):
	//echo "\n<hr>key $dataApa02";
	$isiData['kp206'][] = $data['kp206'][$kodID];
endforeach;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
/*$pilih = 'Senarai Batch';
list($urlcss,$urljs) = linkCssJs(3);
$class = '"table table-sm table-striped table-bordered"';
//$class = '"table table-striped table-bordered"';
$class02 = '"excel"';
diatas($pilih,$urlcss);
#--------------------------------------------------------------------------------------------------
//binaButang(null);
#--------------------------------------------------------------------------------------------------
echo "\n<hr>masa jana laporan = " . getTimeLoad() . "|";
//echo "\n<hr>msic = $cariMsic ada sebanyak $jumpaMsic data.";
foreach($isiData as $kunci03 => $rowDaa):
	$table = paparSemuaDataV02($rowDaa);
	echo "\n<table id=\"myTable\" class=$class>$table";
	echo "\n</table>";
endforeach;
#--------------------------------------------------------------------------------------------------
dibawah($pilih,$urljs);
echo "<script>\n";
jqueryExtendA();
jqueryExtendB();
jqueryExtendC();
gradeTable002(null);
echo "\n</script>";//*
echo "\n</body>\n</html>";//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################