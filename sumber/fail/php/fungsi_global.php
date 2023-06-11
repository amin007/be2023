<?php
###################################################################################################
# fungsi global
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('semakPembolehubah')):
	function semakPembolehubah($senarai,$jadual='entahlah',$p)
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
	function tagVar($senarai,$jadual,$pilih=2)
	{
		# set pembolehubah utama
		$p1 = 'pre';#https://www.w3schools.com/tags/tag_var.asp
		$p2 = 'kbd';
		$p3 = 'code';
		$p4 = 'samp';
		# setkan tatasusunan
		$p[1] = "<$p1>\$$jadual = $senarai</$p1><br>\n";
		$p[2] = "<$p2>\$$jadual = $senarai</$p2><br>\n";
		$p[3] = "<$p3>\$$jadual = $senarai</$p3><br>\n";
		$p[4] = "<$p4>\$$jadual = $senarai</$p4><br>\n";
		#
		return $p[$pilih];
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('versiphp')):
	function versiphp()
	{
		//phpinfo();
		//echo PHPVERSION() . '<br>';
		//echo PHP_VERSION . '<br>';
		//echo PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION . '<br>';
		//echo '$_SERVER=><pre>'; print_r($_SERVER); echo '</pre>';
		$paparServer = array('PATH_INFO','REQUEST_URI','PATH_TRANSLATED','PHP_SELF','QUERY_STRING',
		'REQUEST_SCHEME','SERVER_PORT','HTTP_USER_AGENT');
		foreach($paparServer as $pelayan):
			echo (isset($_SERVER[$pelayan])) ?
				'<br>' . $pelayan . ' = <strong>' . $_SERVER[$pelayan] . '</strong>'
				: '<br><em> pembolehubah ' . $pelayan . ' tak wujud</em>';
		endforeach;
		$pecahan = explode('C:\\',$_SERVER['PATH']); echo '<hr>';
		foreach($pecahan as $kunci => $pecah):
			echo '<br>' . $kunci . ' = C:\<strong>' . $pecah . '</strong>';
		endforeach;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparVersiPhp')):
	function paparVersiPhp()
	{
		$p = 'PHP ' . PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION
		. '.' . PHP_RELEASE_VERSION . '';
		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('bersih')):
	/** */
	function bersih($papar)
	{
		# lepas lari aksara khas dalam SQL
		//$papar = mysql_real_escape_string($papar);
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
if ( ! function_exists('ImportCSV2Array01')):
	function ImportCSV2Array01($filename)
	{
		# baca fail csv dan convert kepada tatasusunan
		# https://stackoverflow.com/questions/37213674/create-array-from-file-get-contents-value
		$data = array();
		$file = file_get_contents($filename, true);
		$file = str_replace('"', '', $file);//semakPembolehubah($file,'file',1);
		$row = explode(PHP_EOL,$file);

		foreach ($row as $key => $val)
		{
			$val02 = bersih($val);
			$data[$key] = explode(";",$val02);
		}
		//semakPembolehubah($data,'data');

		return $data;//*/
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('ImportCSV2Array02')):
	function ImportCSV2Array02($filename)
	{
		# baca fail csv dan convert kepada tatasusunan
		# https://www.tutorialspoint.com/php/php_function_fgetcsv.htm
		# https://www.plus2net.com/php_tutorial/string-fgetcsv.php
		/*	fgetcsv(): Getting data from CSV file
			fgetcsv(f_pointer,int $length,string $delimiter, string $encloser,string $escape);
			Parameter : DESCRIPTION
			f_pointer : Required : a successful file pointer
			$length : Optional : Must be greater than the maximum line length
			$delimiter : Optional : One char only
			$encloser : Optional : Field encloser char
			$escape : Optional : escape parmeter sets the escape char
		//*/
		$file = fopen($filename, "r");
		while(! feof($file))
		{
			$data[] = fgetcsv($file,2000,";");
		}
		fclose($file);//semakPembolehubah($data,'data');

		return $data;//*/
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('ImportCsv2Array03')):
	function ImportCsv2Array03($filename)
	{
		$data = [];
		$i = 0;
		if (( $handle = fopen($filename, "r")) !== false)
		{
			$columns = fgetcsv($handle, 2000, ",");
			while ( $row = fgetcsv($handle, 2000, ",") !== false )
			{
				$data[$i] = array_combine($columns, $row);
				$i++;
			}
			fclose($handle);
		}
		return $data;//*/
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# bina tajuk medan
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('pecahArrayKeTH')):
	function pecahArrayKeTH($data)
	{
		$tajuk = null;
		$data1 = explode(',',$data);
		foreach($data1 as $d):
			$tajuk .= '<th>' . $d . '</th>';
		endforeach;

		return $tajuk;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('tajukMedanJadual')):
	function tajukMedanJadual($jadual,$kunci)
	{
		if($kunci==0) $p = '#';
		elseif($kunci==1) $p = 'Kod';
		elseif($kunci==2 & $jadual!='Pendidikan&Sijil 2022') $p = $jadual;
		elseif($kunci==2 & $jadual=='Pendidikan&Sijil 2022') $p = 'Pendidikan 2022';
		elseif($kunci==3 & $jadual=='Pendidikan&Sijil 2022') $p = 'Sijil';
		else $p = $kunci;

		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# untuk semak tajuk medan berasaskan json
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaJadualJson')):
	function binaJadualJson($tajuk,$pilih)
	{
		if(isset($tajuk[$pilih])):
			janaJadualJson($tajuk[$pilih],$pilih);
		else:
			//echo 'Jadual tak wujud';
		endif;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('janaJadualJson')):
	function janaJadualJson($tajuk,$pilih)
	{
		//$btn = 'btn btn-outline-secondary rounded-pill btn-lg btn-block';
		$btn = 'btn btn-dark btn-lg btn-block';
		$tableID = 'myTable';
		$tableClass = 'table table-striped table-bordered';
		$namaMedan = pecahArrayKeTH($tajuk);//semakPembolehubah($tajuk[$pilih],'tajuk',2);
		//semakPembolehubah($namaMedan,'namaMedan',2);
		#------------------------------------------------------------------------------------------
		echo "\n<!-- Table \n================================================================="
		. '============================== -->'
		. "\n\t" . '<h2 class="' . $btn . '" >Kod ' . ucfirst($pilih) . '</h2>'
		. "\n" . '<table id="' . $tableID . '" class="' . $tableClass . '" style="width:100%">'
		. "\n<thead><tr>$namaMedan</tr></thead>\n<tfoot><tr>$namaMedan</tr></tfoot>\n"
		. "</table>\n";
		#------------------------------------------------------------------------------------------
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaSatuJadual')):
	function binaSatuJadual($senarai,$pilih)
	{
		$class = 'table table-striped table-bordered';
		//$btn = 'btn btn-outline-secondary rounded-pill btn-lg btn-block';
		$btn = 'btn btn-dark btn-lg btn-block';
		foreach($senarai as $jadual => $row):
		if($jadual == $pilih):
			$output  = paparSatuJadual($row,$pilih);
			$output .= binaKakiJadual($row,$pilih);
			echo '<h2 class="' . $btn . '" >Kod ' . ucfirst($jadual) . '</h2>'
			. "\n\n\t" . '<table class="' . $class . '" id="allTable">'
			//echo "\r\t" . '<table border="1">'
			. "\r\t$output\r\n\t</table>\r\r";
		endif;
		endforeach;//*/
		#
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaKakiJadual')):
	function binaKakiJadual($row,$jadual)
	{
		$kira = 0;
		$output = null;
		#-----------------------------------------------------------------
		$output .= "\n\t<tfoot><tr>";
		foreach ( array_keys($row[$kira]) as $kunci ) :
			$tajuk = tajukMedanJadual($jadual,$kunci);
			$output .= "\n\t\t" . '<th>' . ucfirst($tajuk) . '</th>';
		endforeach;
		$output .= "\n\t" . '</tr></tfoot>';
		#-----------------------------------------------------------------

		return $output;//*/
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparSatuJadual')):
	function paparSatuJadual($row,$jadual)
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
				foreach ( array_keys($row[$kira]) as $kunci ) :
				$tajuk = tajukMedanJadual($jadual,$kunci);
				$output .= "\n\t\t" . '<th>' . ucfirst($tajuk) . '</th>';
				endforeach;
				$output .= "\n\t" . '</tr></thead>';
				$output .= "\n\t" . '<tbody>';
			##=================================================================
				$cetak_tajuk_utama = true;
			}
		#---------------------------------------------------------------------
			# papar baris data dari tatasusunan
			$output .= "\n\t<tr>";
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
if ( ! function_exists('binaJadual')):
	function binaJadual($senarai)
	{
		$class = 'table table-striped table-bordered';
		foreach($senarai as $jadual => $row):
		if($jadual == $pilih):
			$output = paparJadual($row,$jadual);
			//echo "\r\t" . '<table class="'.$class.'" id="allTable">'
			echo "\r\t" . '<table border="1">'
			. $output . "\r\t" . '</table>' . "\r\r";
		endif;
		endforeach;
		#
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparJadual')):
	function paparJadual($row,$jadual)
	{
		$output = null;
		$bil_baris = count($row);
		$printed_headers = false;# mula bina jadual
		#----------------------------------------------------------------------
		for ($kira=0; $kira < $bil_baris; $kira++)
		{	# print the headers once:
			if ( !$printed_headers )
			{##================================================================
				$output .= "\r\t<thead><tr>";
				foreach ( array_keys($row[$kira]) as $kunci ) :
				$tajuk = tajukMedanJadual($jadual,$kunci);
				$output .= "\r\t" . '<th>' . $tajuk . '</th>';
				endforeach;
				$output .= "\r\t" . '</tr></thead>';
				$output .= "\r\t" . '<tbody>';
			##=================================================================
				$printed_headers = true;
			}
		#----------------------------------------------------------------------
			# print the data row
			$output .= "\r\t<tr>";
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\r\t" . '<td>' . $data . '</td>';
			//$output .= "<!-- $key|$kira -->";# untuk debug di masa hadapan
			endforeach;
			$output .= "\r\t" . '</tr></tbody>';
		}#---------------------------------------------------------------------

		return $output;
	}
endif;
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaJadual02')):
	function binaJadual02($tajuk,$senarai,$pilih)
	{
		$namaMedan = isset($tajuk[$pilih]) ? pecahArrayKeTH($tajuk[$pilih]) : null;
		$class = 'table table-striped table-bordered';
		//$btn = 'btn btn-outline-secondary rounded-pill btn-lg btn-block';
		$btn = 'btn btn-dark btn-lg btn-block';
		foreach($senarai as $jadual => $row):
		if($jadual == $pilih):
			$output = paparDataSahaja($row);
			echo "\n\n<!-- Table \n============================================================="
			. '================================== -->'
			. "\n\t" . '<h2 class="' . $btn . '" >Kod ' . ucfirst($jadual) . '</h2>'
			. "\n\t" . '<table class="' . $class . '" id="allTable">'
			. "\n\t<thead>\n\t\t$namaMedan\n\t</thead>$output\n\t"
			. "\n\t<tfoot>\n\t\t$namaMedan\n\t</tfoot>\n\t"
			. '</table>' . "\n\n";
		endif;
		endforeach;//*/
		#
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparDataSahaja')):
	function paparDataSahaja($row)
	{
		$output = null;
		$bilBaris = count($row);
		$output .= "\n\t" . '<tbody>';
		#----------------------------------------------------------------------
		for ($kira=0; $kira < $bilBaris; $kira++)
		{#---------------------------------------------------------------------
			# papar baris data dari tatasusunan
			$output .= "\n\t<tr>";
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
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('kiraTahun')):
	function kiraTahun()
	{
		$thnAkhir = date("Y");

		for($i = 1921;$i <= $thnAkhir; $i++):
		    $umur = str_pad(($thnAkhir - $i), 3, '0', STR_PAD_LEFT);
		    echo '' . $i . '=' . $umur . '';
		    if (($i % 4) == 0) echo "\n";
		    else echo " | ";
		endfor;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('kiraTahunJadual')):
	function kiraTahunJadual($p0 = null)
	{
		$thnAkhir = date("Y");
		for($i = 1921;$i <= $thnAkhir; $i++):
			$umur = str_pad(($thnAkhir - $i), 3, '0', STR_PAD_LEFT);
			$kod = $i . '=' . $umur;
			if (($i % 4) == 0)
			{
				$p1[] = array_merge(array(null),explode('|',$p0 . $kod));
				$p0 = null;
			}
			else
				$p0 .= $kod . '|';
		endfor;
		list($p2,$cek) = kiraJadualTahun($p0);
		//semakPembolehubah($cek,'cek',2);
		if($cek != 'kosong')
			$p1[] = $p2;

		return $p1;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('kiraJadualTahun')):
	function kiraJadualTahun($p0)
	{
		$k0 = explode("|",$p0);
		$kira = count($k0);
		$cek = null;//"[$kira]";
		if($kira == 4) $p2 = array_merge(array(null),$k0);
		elseif($kira == 3) $p2 = array_merge(array(null),$k0,array($cek));
		elseif($kira == 2) $p2 = array_merge(array(null),$k0,array($cek,null));
		elseif($kira == 0) $p2 = array_merge(array(null),$k0,array($cek,null,null));
		else
		{// $kira = 1
			$p2 = '';//array_merge(array(null),array('',$cek,'test',''));
			$cek = 'kosong';
		}
		//semakPembolehubah($kira,' bil tatasusunan',2);
		return array($p2,$cek);
	}
endif;
#--------------------------------------------------------------------------------------------------
###################################################################################################
# bina nota kaki
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaNotaKaki')):
	function binaNotaKaki($tajuk,$data,$pilih)
	{
		echo '<blockquote class="blockquote text-center">'
		. "\n\t" . '<p class="mb-0">' . $pilih . '</p>'
		. "\n\t" . '<footer class="blockquote-footer">' . $tajuk[$pilih] . '|'
		. ' <cite title="Source Title">' . $data[$pilih] . '</cite></footer>'
		. "\n\t" . ' </blockquote>';
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# bina json dari tatasusunan php
# https://www.kodingmadesimple.com/2016/04/convert-csv-to-json-using-php.html
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dariCsvKeJson')):
	function dariCsvKeJson($namaFail)
	{
		# open csv file
		if (!($fp = fopen($namaFail, 'r'))) {
			die("Can't open file...");
		}
		# read csv headers
		$key = fgetcsv($fp,"1024",",");
		# parse csv rows into array
		$json = array();
		while ($row = fgetcsv($fp,"1024",","))
		{
			//$json[] = array_combine($key, $row);
			$json[] = $row;
		}

		fclose($fp); # release file handle

		return json_encode($json); # encode array to json
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaJson')):
	function binaJson($senarai,$pilih)
	{
		foreach($senarai as $jadual => $row):
		if($jadual == $pilih):
			$output = jsonDataTables($row,$jadual);
			echo $output;
		endif;
		endforeach;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jsonDataTables')):
	function jsonDataTables($row,$jadual)
	{
		$kira = count($row);
		# cara papar output guna json
		$output = array(
			"draw"	=>	intval(1),
			"recordsTotal"	=> 	$kira,
			"recordsFiltered" => $kira,
			"data" => $row
		);

		$output = mb_convert_encoding($output, 'UTF-8', 'UTF-8');
		//debugJson($output);
		return json_encode($output);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('debugJson')):
	function debugJson($output)
	{
		#how to check Malformed UTF-8 characters in php
		#https://medium.com/@onwuka_gideon/how-i-fixed-php-json-encode-returning-empty-result-e4ef97638ea1
		//semakPembolehubah($output,'<hr>output V2 daa');
		echo json_encode($output);
		echo '<hr>' . json_last_error_msg();# Print out the error if any
		die();# halt the script //*/
		#
	}
endif;
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('senaraiCssV01')):
	function senaraiCssV01($pilih = 0)
	{
		$papar[] = array(
			'https://use.fontawesome.com/releases/v5.11.2/css/all.css',
			//'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
			'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
		);
		$papar[] = array(
			'https://use.fontawesome.com/releases/v5.11.2/css/all.css',
			'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css',
		);

		return $papar[$pilih];
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('ulangCssV01')):
	function ulangCssV01($listCss)
	{
		$style = null;
		if (isset($listCss) && $listCss != null)
		{
			foreach ($listCss as $css)
			{
				$style .= "\n" . '<link rel="stylesheet" type="text/css" href="' . $css . '">';
			}
		}

		return $style;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('metaList')):
	function metaList()
	{
		$k01 = 'width=device-width, initial-scale=1,';
		$p[] = '<meta charset="utf-8">';
		$p[] = '<meta name="viewport" content="' . $k01 . ' shrink-to-fit=no">';
		//$p[] = '<meta name="viewport" content="' . $k01 . ' maximum-scale=1">';
		$p[] = '<meta name="description" content="">';
		//$p[] = '<meta name="keywords" content="derma,Crownfunding,">';
		$p[] = '<meta name="author" content="Amin007">';
		//$p[] = '';
		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('ulangMeta')):
	function ulangMeta($listMeta)
	{
		$p = null;
		if (isset($listMeta) && $listMeta != null)
		{
			foreach ($listMeta as $meta)
			{
				$p .= "\n" . $meta;
			}
		}

		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('diatasSimple')):
	function diatasSimple($title = 'List Folder')
	{
		print <<<END
<!doctype html>
<html lang="en">
<head>
<title>$title</title>
</head>
<body>

END;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('linkCssJs')):
	function linkCssJs()
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
		$fontawesome_510 = '//use.fontawesome.com/releases/v5.1.0/css/all.css';
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
		$urlcss = array($bootstrapCSS_413,$fontawesome_510,$datatablesCSS,$searchHighlightCSS);
		$urljs = array($jquery_cdn,$bootstrapJS_413,$datatablesJSS,$searchHighlightJSS);
		###########################################################################################

		return array($urlcss,$urljs);//list($urlcss,$urljs) = linkCssJs();
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('diatas')):
	function diatas($title = 'List Folder', $urlcss)
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
</head>
<body>
END;
		#
	}
endif;//*/
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
# jquery dan rakan2
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('gradeTable002')):
	function gradeTable002($url)
	{
		print <<<END
	var t = $('#allTable').DataTable({
	searchHighlight: true,
	"columnDefs": [{
		"searchable": false,
		"orderable": false,
		"targets": 0
	}],
	"order": []
	});
/* ***************************************************************************************** */
	t.on( 'order.dt search.dt', function (){
		t.column(0, {search:'applied', order:'applied'}).nodes().
		each( function (cell, i) {cell.innerHTML = i+1;});
	}).draw();
/* ***************************************************************************************** */
END;
		#
/* asal
	var t = $('#allTable').DataTable({
	/*"ajax": "$url/admin/gradeAction",*/
//*/
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jsPanggilFailJson')):
	function jsPanggilFailJson($failJson)
	{
		print <<<END
	var t = $('#myTable').DataTable({
	"ajax": "$failJson",
	searchHighlight: true,
	"columnDefs": [{
		"searchable": false,
		"orderable": false,
		"targets": 0
	}],
	"order": [[ 1, 'asc' ]]
    });
/* ***************************************************************************************** */
	t.on( 'order.dt search.dt', function (){
		t.column(0, {search:'applied', order:'applied'}).nodes().
		each( function (cell, i) {cell.innerHTML = i+1;});
    }).draw();
/* ***************************************************************************************** */

END;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
# jawapan kenapa data php yang tukar json, datatables tak boleh baca
#https://stackoverflow.com/questions/33582203/datatables-warning-table-usertable-invalid-json-response
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jsPhpJson')):
	function jsPhpJson($failJson)
	{
		print <<<END
	var t = $('#myTable').DataTable({
	"ajax" : {
		"url" : "$failJson",
		"type" : "POST",
	},
	searchHighlight: true,
	"columnDefs": [{
		"searchable": false,
		"orderable": false,
		"targets": 0
	}],
	"order": [[ 1, 'asc' ]]
    });
/* ***************************************************************************************** */
	t.on( 'order.dt search.dt', function (){
		t.column(0, {search:'applied', order:'applied'}).nodes().
		each( function (cell, i) {cell.innerHTML = i+1;});
    }).draw();
/* ***************************************************************************************** */

END;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
# nota untuk function jsBuatLimitPage($pilih=1)
#https://stackoverflow.com/questions/9443773/how-to-show-all-rows-by-default-in-jquery-datatable
#https://datatables.net/forums/discussion/69141/set-default-page-length-option-to-100-show-entries
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jsBuatLimitPage')):
	function jsBuatLimitPage($pilih=1)
	{
		$papar[] = '';
		$papar[] = 'pageLength: 10,' . "\n\t"
		. 'aLengthMenu: [[5, 10, 25, 50, 100, 200, -1],'
		. '[5, 10 ,25, 50, 100, 200, "All"]],'
		//. "\n\t". 'iDisplayLength: -1,'
		. '';

		return $papar[$pilih];
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jqueryExtendA')):
	function jqueryExtendA()
	{
		print <<<END
/* ***************************************************************************************** */
jQuery.extend({
	highlight: function (node, re, nodeName, className)
	{
		if (node.nodeType === 3)
		{
			var match = node.data.match(re);
			if (match)
			{
				var highlight = document.createElement(nodeName || 'span');
				highlight.className = className || 'highlight';
				var wordNode = node.splitText(match.index);
				wordNode.splitText(match[0].length);
				var wordClone = wordNode.cloneNode(true);
				highlight.appendChild(wordClone);
				wordNode.parentNode.replaceChild(highlight, wordNode);
				return 1; //skip added node in parent
			}
		}
		else if ((node.nodeType === 1 && node.childNodes) && //only element nodes that have children
			!/(script|style)/i.test(node.tagName) && //ignore script and style nodes
			!(node.tagName === nodeName.toUpperCase() && node.className === className))
		{//skip if already highlighted
			for (var i = 0; i < node.childNodes.length; i++)
			{
				i += jQuery.highlight(node.childNodes[i], re, nodeName, className);
			}
		}
		return 0;
	}
});
/* ***************************************************************************************** */

END;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jqueryExtendB')):
	function jqueryExtendB()
	{
		print <<<END
jQuery.fn.unhighlight = function (options)
{
	var settings = { className: 'highlight', element: 'span' };
	jQuery.extend(settings, options);

	return this.find(settings.element + "." + settings.className).each(function ()
	{
		var parent = this.parentNode;
		parent.replaceChild(this.firstChild, this);
		parent.normalize();
	}).end();
};
/* ***************************************************************************************** */

END;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jqueryExtendC')):
	function jqueryExtendC()
	{
		print <<<END
jQuery.fn.highlight = function (words, options)
{
	var settings = { className: 'highlight', element: 'span', caseSensitive: false, wordsOnly: false };
	jQuery.extend(settings, options);

	if (words.constructor === String){words = [words];}
	words = jQuery.grep(words, function(word, i){return word != '';});
	words = jQuery.map(words, function(word, i)
	{
		return word.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
	});
	if (words.length == 0) { return this; };

	var flag = settings.caseSensitive ? "" : "i";
	var pattern = "(" + words.join("|") + ")";
	if (settings.wordsOnly){pattern = "\\b" + pattern + "\\b";}
	var re = new RegExp(pattern, flag);

	return this.each(function ()
	{
		jQuery.highlight(this, re, settings.element, settings.className);
	});
};

/* *********** https://bartaz.github.io/sandbox.js/jquery.highlight.js ********************* */
/* ***************************************************************************************** */

END;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaButangV00')):
	function binaButangV00($senarai)
	{
		$output = "\r\t";
		$output .= '<a class="btn btn-primary" href="../">Kembali'
		. '<i class="fa fa-binoculars"></i></a>'
		. "\n\t" . '<a class="btn btn-success rounded-pill"'
		. ' target="_blank" href="../rujukan/utama/msic-cari.html">MSIC</a>'
		. "\n\t" . '<a class="btn btn-success rounded-pill"'
		. ' target="_blank" href="../rujukan/utama/masco-cari.html">MASCO2018</a>'
		. "\n\t" . '<a class="btn btn-success rounded-pill"'
		. ' target="_blank" href="../rujukan/utama/masco2020-cari.html">MASCO2020</a>'
		. "\n\t" . '<a class="btn btn-info rounded-pill"'
		. ' target="_blank" href="../rujukan/utama/institut-cari.html">Institut</a>'
		. "\n\t" . '<a class="btn btn-info rounded-pill"'
		. ' target="_blank" href="../rujukan/utama/negara-cari.html">Negara</a>'
		. "\n\t" . '<a class="btn btn-warning rounded-pill"'
		. ' target="_blank" href="./kod00.php">kod-lama</a>'
		. "\n\t" . '<a class="btn btn-warning rounded-pill"'
		. ' target="_blank" href="./kod2022.php">kod2022</a>'
		. "\n\t" . '<a class="btn btn-warning rounded-pill"'
		. ' target="_blank" href="./kod2022_v01.php">kod2022_v01</a>'
		. "\n\t" . '<a class="btn btn-outline-secondary rounded-pill"'
		. ' href="' . URL . '?/tahun">Tahun</a>';
		/*$koleksi = array(
			array('a'=>'primary','b'=>'../','c'=>'Kembalilah<i class="fa fa-binoculars"></i>'),
			array('a'=>'success','b'=>'../rujukan/utama/msic-cari.html','c'=>'MSIC'),
			array('a'=>'success','b'=>'../rujukan/utama/masco-cari.html','c'=>'MASCO2018'),
			array('a'=>'success','b'=>'../rujukan/utama/masco2020-cari.html','c'=>'MASCO2020'),
			array('a'=>'info','b'=>'../rujukan/utama/institut-cari.html','c'=>'Institut'),
			array('a'=>'info','b'=>'../rujukan/utama/negara-cari.html','c'=>'Negara'),
			array('a'=>'warning','b'=>'./kod00.php','c'=>'kod-lama'),
			array('a'=>'warning','b'=>'./kod2022.php','c'=>'kod2022'),
			array('a'=>'warning','b'=>'./kod2022_v01.php','c'=>'kod2022_v01'),
			array('a'=>'outline-secondary','b'=>URL . '?/tahun','c'=>'Tahun')
		);
		foreach($koleksi as $masa => $kini):
			$output .= "\n\t" . '<a class="btn btn-' . $kini['a'] . ' rounded-pill"'
			. ' href="' . URL . '/' . $kini['b'] . '">'
			. ucfirst($kini['c']) . '</a>';
		endforeach;//*/
		foreach($senarai as $jadual => $row):
			if($jadual != 'tahun')
			$output .= "\n\t" . '<a class="btn btn-outline-secondary rounded-pill"'
			. ' href="' . URL . '?/' .$jadual. '">'
			. ucfirst($jadual) . '</a>';
		endforeach;
		$output .= "\n\t<hr>";

		echo $output;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('tukarWarnaButang')):
	function tukarWarnaButang($pilih)
	{
		$p = null;
		if(in_array($pilih,['mascoMsicV2','mascoBMBI','mascoNewss','msic'])):
			$p = 'success';
		elseif(in_array($pilih,['bandar','negeri','negara','produkmm'])):
			$p = 'info';
		else:
			$p = 'outline-secondary';
		endif;

		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaPautan')):
	function binaPautan()
	{
		$folder = '../rujukan/utama/';
		$koleksi = array(
			array('a'=>'primary','b'=>'../','c'=>'Kembalilah<i class="fa fa-binoculars"></i>'),
			array('a'=>'success','b'=>$folder . 'msic-cari.html','c'=>'MSIC'),
			//array('a'=>'success','b'=>$folder . 'masco-cari.html','c'=>'MASCO2013'),
			//array('a'=>'success','b'=>$folder . 'masco2020-cari.html','c'=>'MASCO2020'),
			//array('a'=>'info','b'=>$folder . 'institut-cari.html','c'=>'Institut'),
			array('a'=>'info','b'=>$folder . 'negara-cari.html','c'=>'Negara'),
			array('a'=>'info','b'=>$folder . 'produkmm-cari.html','c'=>'ProdukMM'),
			array('a'=>'warning','b'=>'./kod00.php','c'=>'kod-lama'),
			array('a'=>'warning','b'=>'./kod2022_aes.php','c'=>'AES'),
			array('a'=>'warning','b'=>'./kod2023.php','c'=>'kod2023'),
			array('a'=>'outline-secondary','b'=>URL . '?/tahun','c'=>'Tahun'),
		);

		return $koleksi;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaButang')):
	function binaButang($senarai)
	{
		$output = '';
		foreach(binaPautan() as $masa => $kini):
			$output .= "\n\t" . '<a class="btn btn-' . $kini['a'] . ' rounded-pill"'
			. ' href="' . $kini['b'] . '">'
			. ucfirst($kini['c']) . '</a>';
		endforeach;
		foreach($senarai as $jadual => $row):
			$warnaButang = tukarWarnaButang($jadual);
			if($jadual != 'tahun')
			$output .= "\n\t" . '<a class="btn btn-' . $warnaButang . ' rounded-pill"'
			. ' href="' . URL . '?/' .$jadual. '">'
			. ucfirst($jadual) . '</a>';
		endforeach;
		$output .= "\n\t<hr>";

		echo "\n<!-- Pautan \n================================================================="
		. "============================== -->$output";
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('panggilDataTable')):
	function panggilDataTable($data,$pilih)
	{
		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);
		list($urlcss,$urljs) = linkCssJs();
		diatas($pilih, $urlcss);
		#------------------------------------------------------------------------------------------
		binaButang($data);//versiphp();
		binaSatuJadual($data,$pilih);
		#------------------------------------------------------------------------------------------
		dibawah($pilih,$urljs);
		echo "<script>\n";
		jqueryExtendA();
		jqueryExtendB();
		jqueryExtendC();
		gradeTable002(null);
		echo "\n</script>\n</body>\n</html>";
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('panggilDataTable01')):
	function panggilDataTable01($tajuk,$data,$pilih)
	{
		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);
		list($urlcss,$urljs) = linkCssJs();
		diatas($pilih, $urlcss);
		#------------------------------------------------------------------------------------------
		binaButang($data);//versiphp();
		if($pilih != '') binaJadual02($tajuk,$data,$pilih);
		#------------------------------------------------------------------------------------------
		dibawah($pilih,$urljs);
		echo "<script>\n";
		jqueryExtendA();
		jqueryExtendB();
		jqueryExtendC();
		gradeTable002(null);
		echo "\n</script>\n</body>\n</html>";
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('panggilDataTable02')):
	function panggilDataTable02($tajuk,$data,$pilih)
	{
		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);
		list($urlcss,$urljs) = linkCssJs();
		diatas($pilih, $urlcss);
		#------------------------------------------------------------------------------------------
		binaButang($data);//versiphp();
		if($pilih != '') binaJadualJson($tajuk,$pilih);
		//binaNotaKaki($tajuk,$data,$pilih);
		#------------------------------------------------------------------------------------------
		dibawah($pilih,$urljs);
		echo "<script>\n";
		jqueryExtendA();
		jqueryExtendB();
		jqueryExtendC();
		jsPanggilFailJson($data[$pilih]);
		echo "\n</script>\n</body>\n</html>";
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('panggilDataTable03')):
	function panggilDataTable03($tajuk,$data,$pilih)
	{
		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);
		list($urlcss,$urljs) = linkCssJs();
		diatas($pilih, $urlcss);
		#------------------------------------------------------------------------------------------
		binaButang($data);//versiphp();
		if($pilih != '') binaJadualJson($tajuk,$pilih);
		//binaNotaKaki($tajuk,$data,$pilih);
		#------------------------------------------------------------------------------------------
		dibawah($pilih,$urljs);
		echo "<script>\n";
		jqueryExtendA();
		jqueryExtendB();
		jqueryExtendC();
		jsPhpJson($data[$pilih]);
		echo "\n</script>\n</body>\n</html>";
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dibawah')):
	function dibawah($pilih,$urljs)
	{
		//$theme = (isset($theme)) ? $theme : null;# Null coalescing operator
		$theme = ( !isset($pilih) ) ? 'Asal Bootstrap Twitter' : $pilih;
		$senaraiJS = binaSenaraiJs($urljs);

		echo "\n";
		print <<<END
<!-- Footer
=============================================================================================== -->
<footer class="footer">
	<div class="container">
		<span class="badge badge-info">
		&copy; Hak Cipta Terperihara 2019. Theme $theme </span>
	</div>
</footer>

<!-- khas untuk jquery dan js2 lain
=============================================================================================== -->
$senaraiJS
END;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaSenaraiJs')):
	function binaSenaraiJs($urljs)
	{
		$p = '';
		if (isset($urljs))
		foreach ($urljs as $js)
			$p .= '<script type="text/javascript" src="' . $js . '"></script>' . "\n";
		$p .= "\n";

		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx')):
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('rutime')):
	function rutime($ru, $rus, $index)
	{
		return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
		- ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('getTimeLoad')):
	function getTimeLoad()
	{
		$masa = date('d M Y H:i:s', $_SERVER['REQUEST_TIME']);
		//$masa = date('d M Y h:i:s A', time());

		return $masa;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------