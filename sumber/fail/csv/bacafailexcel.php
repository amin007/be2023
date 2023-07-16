<?php
###################################################################################################
/* This file contains no error or security checking. Use only for internal purposes or in trusted
 environments.
 You will need to customise lines 12 and 18 (the two starting "$csv[]=array") to your desired output.
 Optionally change the output filename in line 22.
 The example included is for converting a futures trading record from xlsx to csv for import
 to a different website.
https://github.com/TI-Tokyo/xlsxtocsv
*/
require_once 'SimpleXLSX.php';
###################################################################################################
# fungsi global
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
			echo "</$kodHtml>\n\n\n\n";
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
		$papar = trim($papar);
		# tukar kod %20 kepada space
		$papar = myUrlEncode($papar);

		return $papar;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('myUrlEncode')):
	function myUrlEncode($string)
	{
		# https://www.php.net/urlencode
		$entities = array('%20', '%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26',
		'%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
		$replacements = array(' ', '!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$",
		",", "/", "?", "%", "#", "[", "]");

		//return str_replace($entities, $replacements, urlencode($string));
		return str_replace($entities, $replacements, $string);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('getFileList')):
	function getFileList($dir)
	{
		# array to hold return value
		$retval = [];
		# add trailing slash if missing
		if(substr($dir, -1) != "/") { $dir .= "/"; }
		# open pointer to directory and read list of files
		$d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
		while(FALSE !== ($entry = $d->read()))
		{
			# skip hidden files
			if($entry{0} == ".") continue;
			if(is_dir("{$dir}{$entry}"))
			{
				$retval[] = [
				'name' => "{$dir}{$entry}/",
				'type' => filetype("{$dir}{$entry}"),
				'size' => 0,
				'lastmod' => filemtime("{$dir}{$entry}")
				];
			}
			elseif(is_readable("{$dir}{$entry}"))
			{
				$retval[] = [
				'name' => "{$dir}{$entry}",
				'type' => mime_content_type("{$dir}{$entry}"),
				'size' => filesize("{$dir}{$entry}"),
				'lastmod' => filemtime("{$dir}{$entry}")
				];
			}
		}

		$d->close();
		return $retval;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('pautan')):
	function pautan($name,$web)
	{
		return '<i class="far fa-folder fa-spin"></i>'
		. '<a target="_blank" href="?/' . $web . '">'
		. $name . '</a><hr>';
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('folderFiles')):
	function folderFiles($folder)
	{
		$dirlist = getFileList("./$folder/");
		//echo '<tr><td> name</td><td> type</td><td> size</td><td> lastmod</td></tr>';
		$folder = $files = array();
		foreach($dirlist as $key => $value):
			if ($value['type'] == 'dir'):
				$folder[$key]['name'] = $value['name'];
				$folder[$key]['type'] = $value['type'];
				$folder[$key]['size'] = $value['size'];
				$folder[$key]['lastmod'] = $value['lastmod'];
			else:
				$files[$key]['name'] = $value['name'];
				$files[$key]['type'] = $value['type'];
				$files[$key]['size'] = $value['size'];
				$files[$key]['lastmod'] = $value['lastmod'];
			endif;
		endforeach;

		return array($folder,$files);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('list_files')):
	function list_files($folder)
	{
		list($folder,$files) = folderFiles($folder);
		foreach($files as $key01 => $value01):
			echo "\n\t" . pautan($value01['name'],$value01['name']) . '';
		endforeach;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('bacaFailExcel')):
	function bacaFailExcel($filename,$fileCsv)
	{
		$xlsx = new SimpleXLSX($filename);
		if ( $xlsx->success() )
		{
			//semakPembolehubah($xlsx->rows(),'paparExcel=' . $filename,0);
			//echo $xlsx->toHTML();
			//print_r( $xlsx->rows() );
			downloadCsv($xlsx->rows(),$fileCsv);
		}
		else
		{
			echo 'xlsx error: ' . $xlsx->error();
		}
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('downloadCsv')):
	function downloadCsv($csv,$fileCsv)
	{
		$out = fopen('php://memory', 'w');
		foreach( $csv as $row ) {
			fputcsv($out, $row, ";");
		}
		fseek($out, 0);
		header('Content-Type: text/csv');
		header('Content-Disposition: attachment; filename="' . $fileCsv . '";');
		fpassthru($out);
		fclose($out);
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
/*$xlsx = new SimpleXLSX('./excel/book.xlsx');
if ( $xlsx->success() )
{
	print_r( $xlsx->rows() );
}
else
{
	echo 'xlsx error: '.$xlsx->error();
}
*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# kaedah 2.1
#--------------------------------------------------------------------------------------------------
$s = 'REQUEST_URI';//$s = 'PHP_SELF';//$s = 'QUERY_STRING';
//semakPembolehubah($_SERVER[$s],$s);
if (isset($_SERVER[$s])):
	$fail = explode('009/',$_SERVER[$s]);//semakPembolehubah($fail,'fail');
	$cari = explode('/',$fail[1]);//semakPembolehubah($cari,'pilih');

	if (isset($cari[3])):
		$folder = bersih($cari[2]);
		$failExcel = bersih($cari[3]);
		$failCsvDaa = explode('.',$failExcel);
		$failCsv = $failCsvDaa[0] . '.csv';;
		//semakPembolehubah($folder,'folder');
		//semakPembolehubah($failExcel,'failExcel');
		//semakPembolehubah($failCsv,'failCsv');
		//echo 'fail wujud';
		bacaFailExcel($folder . '/' . $failExcel, $failCsv);
	else:
		echo "\n\t" . 'senarai fail excel<hr>';
		list_files('excel');# panggil fungsi
	endif;
else:
	list_files('excel');# panggil fungsi
endif;//*/
#--------------------------------------------------------------------------------------------------