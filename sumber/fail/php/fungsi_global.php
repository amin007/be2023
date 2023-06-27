<?php
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
if ( ! function_exists('bersihV02')):
	/** */
	function bersihV02($papar)
	{
		# lepas lari aksara khas dalam SQL
		//$papar = mysql_real_escape_string($papar);
		# buang ruang kosong (atau aksara lain) dari mula & akhir
		$papar = trim((string)$papar);# tambah (string) pada $papar
		# tukar kod %20 kepada space
		$papar = myUrlEncode($papar);
		# nl2br - Inserts HTML line breaks before all newlines in a string
		$papar = nl2br($papar);

		return $papar;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('bersihNombor')):
	/** */
	function bersihNombor($papar)
	{
		# jika nombor ada coma seperti 10,000
		$papar = str_replace(',','',$papar);

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
if ( ! function_exists('paparTDKhas')):
	function paparTDKhas($key,$data,$jumBelanja,$anggar)
	{
		# papar nilai awal
		$papar = null;
		$data = bersihV02($data);
		list($peratus,$hasil,$belanja,$gaji,$staf,$harta,$stok) = pecahTatasusunan($anggar);
		$namaMedan = ['Serial_No','Nama_Pertubuhan','KP','F010028','F010029',
		'F010030','Kod_Industri','Semak'];
		# semak format kiraan
		$dataKp = namaMedanKp337();
		$keterangan = cariNilai($dataKp['kp337'],$key);
		$kiraPeratus = kiraV01($key,$data,$jumBelanja,$peratus);
		$paparData = kiraV02($key,$data,$peratus);
		$paparAnggar = kiraV03($key,$data,$jumBelanja,$peratus);
		# masuk dalam tr td
		$papar = (in_array($key,$namaMedan)) ? '' :
		"\n\t<tr>\n\t" . '<td align="right">' . $keterangan . '|' . $key . '</td>'
		. '<td align="right">' . $paparData . '</td>'
		. '<td>' . $kiraPeratus . '</td>'
		. '<td align="right">' . $paparAnggar . '</td>'
		//. "<!-- $key|$kira -->"# untuk debug di masa hadapan
		. "\n\t" . '</tr></tbody>';

		return $papar;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparTDKhasV02')):
	function paparTDKhasV02($key,$data,$jumF99,$anggar)
	{
		# papar nilai awal
		$papar = null;
		$data = bersihV02($data);
		list($peratus,$hasil,$belanja,$gaji,$staf,$harta,$stok) = pecahTatasusunan($anggar);
		# semak format kiraan
		$paparAnggar04 = kiraV04($key,$data,$jumF99,$peratus);
		$gajiSetahun = (int)bersihNombor($paparAnggar04);
		$bulan = kiraV02($key,($gajiSetahun/12),$peratus);
		# masuk dalam tr td - ['Staf%','GajiL%']
		/*if(in_array($key,['Susut%'])):
			$papar = "\n\t<td>$data<hr>"
			. $paparAnggar04
			. '</td>';//*/
		if(in_array($key,['GajiL%'])):
			$papar = "\n\t<td>$data</td>"
			. '<td>' . $paparAnggar04 . '</td>'
			. '<td>' . $bulan . '</td>'
			. '';
		else:
			$papar = "\n\t<td>$data</td>";
		endif;

		return $papar;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('pecahTatasusunan')):
	function pecahTatasusunan($anggar)
	{
		$peratus =  $anggar['peratusan'];
		$hasil = $anggar['hasil'];
		$belanja = $anggar['belanja'];
		$gaji = $anggar['gaji'];
		$staf = $anggar['staf'];
		$harta = $anggar['harta'];
		$stok = $anggar['stok'];
		/*$belanjaSusut = $anggar['belanjaSusut'];
		$susutAnggar = $anggar['anggarSusut'];
		$belanjaSewaTanah = $anggar['belanjaSewaTanah'];
		$belanjaSewaBangunan = $anggar['belanjaSewaBangunan'];*/


		return array($peratus,$hasil,$belanja,$gaji,$staf,$harta,$stok);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('kiraV01')):
	/** */
	function kiraV01($key,$data,$data02,$peratus)
	{
		# papar nilai awal
		$papar = null;
		$namaMedan = ['Serial_No','Nama_Pertubuhan','KP','F010028','F010029',
		'F010030','Kod_Industri','Semak'];
		# semak data adalah nombor atau tidak
		if(in_array($key,$namaMedan)):
			$papar = 'Kira %';
		elseif(is_numeric($data)):
			$papar = number_format(($data/$data02), 4);
		else:
			$papar = null;
		endif;

		return $papar;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('kiraV02')):
	/** */
	function kiraV02($key,$data,$peratus)
	{
		# papar nilai awal
		$papar = null;
		$namaMedanPanjang = ['Nama_Pertubuhan','F010028','Semak'];
		# semak data adalah panjang atau tidak
		if(in_array($key, $namaMedanPanjang)):
			$papar = '<= Rujuk Sebelah';
		elseif(is_numeric($data)):
			$papar = number_format($data, 0);
		else:
			$papar = $data;
		endif;

		return $papar;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('kiraV03')):
	/** */
	function kiraV03($key,$data,$jumBelanja,$peratus)
	{
		# papar nilai awal
		$papar = null;
		$namaMedan = ['Serial_No','Nama_Pertubuhan','KP','F010028','F010029',
		'F010030','Kod_Industri','Semak'];
		# semak data adalah nombor atau tidak
		if(in_array($key,$namaMedan)):
			$papar = 'Anggar';
		elseif(is_numeric($data)):
			$belanjaBaru = $jumBelanja * $peratus;
			$kiraPeratus = $data / $jumBelanja;
			$anggar = number_format(($kiraPeratus * $belanjaBaru), 0);
			$papar = $anggar;
		else:
			$papar = null;
		endif;

		return $papar;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('kiraV04')):
	/** */
	function kiraV04($key,$data,$jumF99,$peratus)
	{
		# papar nilai awal
		$papar = null;
		# semak data adalah nombor atau tidak
		if(is_numeric($data)):
			$papar = $data * $jumF99;
			$paoar = substr($papar,0);
			$papar = number_format($papar, 0);
		else:
			$papar = null;
		endif;

		return $papar;
	}
endif;
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
			//echo "\n\t" . '<table border="1">'
			. "\n\t$output\n\t</table>\n\n";
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
			$output .= "\n\t\t" . '<td>' . bersihV02($data) . '</td>';
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
			//echo "\n\t" . '<table class="'.$class.'" id="allTable">'
			echo "\n\t" . '<table border="1">'
			. $output . "\n\t" . '</table>' . "\n\n";
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
				$output .= "\n\t<thead><tr>";
				foreach ( array_keys($row[$kira]) as $kunci ) :
				$tajuk = tajukMedanJadual($jadual,$kunci);
				$output .= "\n\t" . '<th>' . $tajuk . '</th>';
				endforeach;
				$output .= "\n\t" . '</tr></thead>';
				$output .= "\n\t" . '<tbody>';
			##=================================================================
				$printed_headers = true;
			}
		#----------------------------------------------------------------------
			# print the data row
			$output .= "\n\t<tr>";
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\n\t" . '<td>' . bersihV02($data) . '</td>';
			//$output .= "<!-- $key|$kira -->";# untuk debug di masa hadapan
			endforeach;
			$output .= "\n\t" . '</tr></tbody>';
		}#---------------------------------------------------------------------

		return $output;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparTajukData')):
	function paparTajukData($row,$jadual)
	{
		$output = null;
		$bil_baris = count($row);
		$printed_headers = false;# mula bina jadual
		#----------------------------------------------------------------------
		for ($kira=0; $kira < $bil_baris; $kira++)
		{	# print the headers once:
			if ( !$printed_headers )
			{##================================================================
				$output .= "\n\t<thead><tr>";
				foreach ( array_keys($row[$kira]) as $tajuk ) :
				$output .= "\n\t" . '<th>' . $tajuk . '</th>';
				endforeach;
				$output .= "\n\t" . '</tr></thead>';
				$output .= "\n\t" . '<tbody>';
			##=================================================================
				$printed_headers = true;
			}
		#----------------------------------------------------------------------
			# print the data row
			$output .= "\n\t<tr>";
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\n\t" . '<td>' . bersihV02($data) . '</td>';
			//$output .= "<!-- $key|$kira -->";# untuk debug di masa hadapan
			endforeach;
			$output .= "\n\t" . '</tr></tbody>';
		}#---------------------------------------------------------------------

		return $output;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparSatuJe')):
	function paparSatuJe($row,$jadual)
	{
		$output = null;
		$bil_baris = count($row);
		$printed_headers = false;# mula bina jadual
		#----------------------------------------------------------------------
		for ($kira=0; $kira < $bil_baris; $kira++)
		{# print the headers once:
			if ( !$printed_headers )
			{##================================================================
				$output .= "\n\t<thead><tr>";
				$output .= "\n\t" . '<th colspan="2">' . $jadual . '</th>';
				$output .= "\n\t" . '</tr></thead>';
				$output .= "\n\t" . '<tbody>';
			##=================================================================
				$printed_headers = true;
			}
		#----------------------------------------------------------------------
			# print the data row
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\n\t<tr>\n\t" . '<td align="right">' . $key . '</td>';
			$output .= '<td>' . bersihV02($data) . '</td>';
			//$output .= "<!-- $key|$kira -->";# untuk debug di masa hadapan
			$output .= "\n\t" . '</tr></tbody>';
			endforeach;
		}#---------------------------------------------------------------------

		return $output;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparSatuDataAnggar')):
	function paparSatuDataAnggar($row,$jadual,$jumBelanja,$anggar)
	{
		$o = null;
		$bil_baris = count($row);
		$printed_headers = false;# mula bina jadual
		#----------------------------------------------------------------------
		for ($kira=0; $kira < $bil_baris; $kira++)
		{# print the headers once:
			if ( !$printed_headers )
			{##================================================================
				$o .= "\n\t<thead><tr>";
				$o .= "\n\t" . '<th colspan="2">' . $jadual . '</th>';
				$o .= "\n\t" . '<th>Peratus</th>';
				$o .= "\n\t" . '<th>Anggar</th>';
				$o .= "\n\t" . '</tr></thead>';
				$o .= "\n\t" . '<tbody>';
			##=================================================================
				$printed_headers = true;
			}
		#----------------------------------------------------------------------
			# print the data row
			foreach ( $row[$kira] as $key=>$data ) :
				$o .= paparTDKhas($key,$data,$jumBelanja,$anggar);
			endforeach;
		}#---------------------------------------------------------------------

		return $o;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparSemuaDataAnggar')):
	function paparSemuaDataAnggar($row,$jadual,$jumF99,$anggar)
	{
		$o = null;
		$bil_baris = count($row);
		$printed_headers = false;# mula bina jadual
		#----------------------------------------------------------------------
		for ($kira=0; $kira < $bil_baris; $kira++)
		{# print the headers once:
			if ( !$printed_headers )
			{##================================================================
				$o .= "\n\t<thead><tr>";
				$o .= "\n\t" . '<th>#</th>';
				foreach ( array_keys($row[$kira]) as $tajuk ) :
				$o .= "\n\t" . '<th>' . $tajuk . '</th>';
				endforeach;
				$o .= "\n\t" . '<th>Anggar</th>';
				$o .= "\n\t" . '<th>Sebulan</th>';
				$o .= "\n\t" . '</tr></thead>';
				$o .= "\n\t" . '<tbody>';
			##=================================================================
				$printed_headers = true;
			}
		#----------------------------------------------------------------------
			# print the data row
			$o .= "\n\t<tr>\r\t";
			$o .= "\n\t<td>".($kira+1)."</td>";
			foreach ( $row[$kira] as $key=>$data ) :
			$o .= paparTDKhasV02($key,$data,$jumF99,$anggar);
			//$o .= '<td>' . bersihV02($data) . '</td>';
			//$o .= "<!-- $key|$kira -->";# untuk debug di masa hadapan
			endforeach;
			$o .= "\n\t" . '</tr></tbody>';
		}#---------------------------------------------------------------------

		return $o;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparSemuaData')):
	function paparSemuaData($row,$jadual)
	{
		$output = null;
		$bil_baris = count($row);
		$printed_headers = false;# mula bina jadual
		#----------------------------------------------------------------------
		for ($kira=0; $kira < $bil_baris; $kira++)
		{# print the headers once:
			if ( !$printed_headers )
			{##================================================================
				$output .= "\n\t<thead><tr>";
				$output .= "\n\t" . '<th>#</th>';
				foreach ( array_keys($row[$kira]) as $tajuk ) :
				$output .= "\n\t" . '<th>' . $tajuk . '</th>';
				endforeach;
				$output .= "\n\t" . '</tr></thead>';
				$output .= "\n\t" . '<tbody>';
			##=================================================================
				$printed_headers = true;
			}
		#----------------------------------------------------------------------
			# print the data row
			$output .= "\n\t<tr>\r\t";
			$output .= "\n\t<td>".($kira+1)."</td>";
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= '<td>' . bersihV02($data) . '</td>';
			//$output .= "<!-- $key|$kira -->";# untuk debug di masa hadapan
			endforeach;
			$output .= "\n\t" . '</tr></tbody>';
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
			$output .= "\n\t\t" . '<td>' . bersihV02($data) . '</td>';
			//$output .= "<!-- $key|$kira -->";# untuk debug di masa hadapan
			endforeach;
			$output .= "\n\t" . '</tr>';
		}#---------------------------------------------------------------------
		$output .= "\n\t" . '</tbody>';

		return $output;//*/
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparTableTab')):
	function paparTableTab($namaTab,$class02,$myJadualV02,$rowV02,$jumF99,$anggar)
	{
		$papar = '';
		#------------------------------------------------------------------------------------------
		$table = paparSatuDataAnggar($rowV02,$myJadualV02,$jumF99,$anggar);
		#------------------------------------------------------------------------------------------
		$papar = "\n\t" . '<div class="tab-pane fade" id="' . $namaTab . '-tab-pane"'
		. ' role="tabpanel" aria-labelledby="' . $namaTab . '-tab" tabindex="0">'
		. "\n\t<h2>$myJadualV02</h2>"
		. "\n\t<table class=$class02>$table</table>\n\t<hr>\n\t"
		. '</div><!-- class="tab-pane fade" id="' . $namaTab . '-tab-pane" -->';
		#------------------------------------------------------------------------------------------
		return $papar;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparTableTabV02')):
	function paparTableTabV02($namaTab,$class02,$myJadualV02,$rowV02,$jumF99,$anggar)
	{
		$papar = '';
		#------------------------------------------------------------------------------------------
		//$table = paparSatuDataAnggar($rowV02,$myJadualV02,$jumF99,$anggar);
		//$table = paparSemuaData($rowV02,$myJadualV02);
		$table = paparSemuaDataAnggar($rowV02,$myJadualV02,$jumF99,$anggar);
		#------------------------------------------------------------------------------------------
		$papar = "\n\t<h2>$myJadualV02</h2>"
		. "\n\t<table class=$class02>$table</table>\n\t<hr>\n\t";
		#------------------------------------------------------------------------------------------
		return $papar;
	}
endif;//*/
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
# cari data dalam tatasusunan
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('namaMedanKp337')):
	function namaMedanKp337()
	{
		$tajuk['kp337'] = 'nama medan,kod medan';
		$data['kp337'] = [
		['Jualan barang-barang','F088501'],
		//['Sila nyatakan peratus (%) eksport berdasarkan jumlah nilai jualan pada tahun rujukan','F080002'],
		//['Sila nyatakan peratus (%) eksport produk halal berdasarkan jumlah nilai jualan pada tahun rujukan','F080060'],
		['(%)eksport jualan','F080002'],
		['(%)eksport produk halal dari jualan','F080060'],
		['Jualan kenderaan bermotor','F088502'],
		['Jualan alat ganti dan aksesori','F088503'],
		['Jualan petrol dan gas','F088504'],
		['Pendapatan dari bayaran perkhidmatan pembaikan pemasangan dan penyelenggaraan','F088505'],
		['Komisen dan brokeraj dan yuran yang diterima','F080011'],
		['Pendapatan daripada perkhidmatan pengurusan','F080010'],
		['Royalti, hakcipta, pelesenan dan yuran francais','F080014'],
		['Pendapatan perkhidmatan yang diterima','F080022'],
		['Hasil Sewa Tanah','F080012'],
		['Hasil Sewa Bangunan tempat kediaman','F080034'],
		['Hasil Sewa Bangunan bukan tempat kediaman ','F080035'],
		['Hasil Sewa Alat pengangkutan','F080039'],
		['Hasil Sewa Jentera dan kelengkapan','F080061'],
		['Hasil Sewa Perabot dan pemasangan','F080062'],
		['Hasil Sewa Lain-lain','F080013'],
		['Subsidi','F080063'],
		['Subsidi gaji dan upah','F080064'],
		['Subsidi produk','F080065'],
		['Subsidi pengeluaran','F080066'],
		['Tuntutan dan pampasan yang diterima','F080067'],
		['Pemulihan hutang lapuk','F080068'],
		['Pendapatan daripada faedah','F080069'],
		['Pendapatan daripada dividen','F080070'],
		['Keuntungan daripada jualan/penilaian semula harta','F080071'],
		['Keuntungan daripada pertukaran mata wang asing/aset kewangan','F080072'],
		['Kiriman wang, hadiah atau geran yang diterima','F080073'],
		['Lain-lain pendapatan bukan operasi (sila nyatakan)','F080074'],
		['Lain-lain pendapatan operasi (sila nyatakan)','F080016'],
		['Adakah pertubuhan ini mempunyai pendapatan daripada aktiviti e-sukan?','F080075'],
		['Jika Ya, sila nyatakan jumlah pendapatan dalam aktiviti e-sukan ini','F080076'],
		['Jumlah pendapatan (8.1 hingga 8.10) ','F080089'],
		['Pindahan modal yang diterima','F080017'],
		['JUMLAH BESAR (8.11 hingga 8.12)','F080099'],
		//['Kos barang yang dijual (barang/bahan yang dibeli untuk dijual semula tanpa melalui proses selanjutnya)','F090009'],
		['Kos barang yang dijual','F090009'],
		['Kos pembaikan, pemasangan dan penyelenggaraan','F098501'],
		['Nilai bekalan-Bahan dan bekas pembungkus','F090002'],
		['Nilai bekalan-Bahan-bahan untuk pembaikan dan penyelenggaraan','F090003'],
		['Nilai bekalan-Alat tulis dan bekalan pejabat','F090005'],
		['Nilai bekalan-Lain-lain','F090057'],
		['Kos percetakan','F090058'],
		['Air yang dibeli','F090006'],
		['Tenaga elektrik yang dibeli','F090007'],
		['Bahan pembakar, pelincir dan gas','F090008'],
		['Bayaran pembaikan dan penyelenggaraan semasa yang dibuat oleh pihak lain bagi harta tetap pertubuhan ini','F090011'],
		['Pengiklanan dan promosi','F090063'],
		['Bayaran pemprosesan data dan lain-lain perkhidmatan yang berkaitan dengan teknologi maklumat','F090016'],
		['Bayaran telekomunikasi (cth. Telefon, internet dsb.)','F090017'],
		['Komisen dan bayaran agensi','F090109'],
		['Pembelian perkhidmatan pengangkutan','F090119'],
		['Perbelanjaan perjalanan (termasuk perjalanan dalam dan luar negara, bil petrol/diesel dan bayaran letak kereta sendiri','F091002'],
		['Bayaran pos (termasuk perkhidmatan kurier)','F091007'],
		['Bayaran perakaunan, kesetiausahaan dan audit','F091003'],
		['Bayaran guaman','F091004'],
		['Bayaran pengurusan','F091005'],
		['Perbelanjaan keraian','F091006'],
		['Bayaran bank','F091008'],
		['Premium insurans dibayar ke atas bangunan, jentera, alat pengangkutan dan barang','F091009'],
		['Bayaran faedah','F090025'],
		['Bayaran perkhidmatan profesional lain (cth. Bayaran perundingan arkitek, kejuruteraan, juruukur dsb.)','F090080'],
		['Perbelanjaan penyelidikan dan pembangunan','F090012'],
		['R&D Dalaman => %','F090013'],
		['R&D Sumber luaran => %','F090014'],
		['Bayaran Sewa Tanah','F090019'],
		['Bayaran Sewa Bangunan','F090020'],
		['Bayaran Sewa Jentera dan kelengkapan','F090021'],
		['Bayaran Sewa Kenderaan bermotor dan jenis pengangkutan lain','F090022'],
		['Bayaran Sewa Lain-lain','F090023'],
		['Susut nilai/perlunasan semasa ke atas harta tetap','F090024'],
		['Bayaran Royalti kepada Kerajaan/Badan berkanun (sila nyatakan jenis royalti)','F090026'],
		['Bayaran Royalti kepada Organisasi bukan kerajaan/tajaan korporat (sila nyatakan jenis royalti)','F090027'],
		['Taksiran (ke atas tanah dan bangunan) dan cukai tanah','F090030'],
		['Cukai jalan','F090031'],
		['Bayaran pendaftaran perniagaan, lesen memandu dsb.','F090032'],
		['Cukai perkhidmatan dan cukai jualan','F090010'],
		['Kerugian daripada pertukaran wang asing/aset kewangan','F091011'],
		['Kerugian daripada jualan/penilaian semula harta','F091012'],
		['Hutang lapuk dihapuskan','F091013'],
		['Pindahan semasa seperti pindahan wang, hadiah, derma, denda, dsb.','F091014'],
		['Lain-lain perbelanjaan bukan operasi (sila nyatakan)','F091015'],
		['Adakah pertubuhan ini terlibat dengan aktiviti e-sukan?','F091016'],
		['Jika Ya, sila nyatakan jumlah perbelanjaan dalam aktiviti e-sukan ini?','F091017'],
		['Lain-lain perbelanjaan operasi (sila nyatakan butir-butir di bawah)','F091035'],
		['Gaji & upah dibayar','F090036'],
		['Bayaran pampasan, persaraan/pemberhentian kepada pekerja','F090037'],
		['Rawatan perubatan percuma','F090038'],
		['Bayaran berbentuk manfaat - Lain-lain seperti makanan percuma, tempat tinggal percuma dsb.','F090039'],
		['Kumpulan Wang Simpanan Pekerja (KWSP)','F090040'],
		['Kumpulan wang simpanan lain','F090041'],
		['Pertubuhan Keselamatan Sosial (PERKESO)','F090042'],
		['Skim keselamatan sosial persendirian (cth. Insurans pampasan pekerja dsb.)','F090043'],
		['Skim bayaran pampasan, persaraan/pemberhentian','F090044'],
		['Bayaran kepada pengarah tidak bekerja kerana kehadiran mereka dalam mesyuarat Lembaga Pengarah','F090045'],
		['Nilai pakaian percuma yang disediakan','F090046'],
		['Kos latihan kepada pekerja','F090047'],
		['Kos pengangkutan pekerja (pergi dan balik dari tempat kerja)','F090048'],
		['Bayaran levi pekerja','F090049'],
		['Perbelanjaan pembayaran berasaskan saham kepada pekerja (termasuk saham & pilihan saham)','F090050'],
		['Kos pekerja lain (sila nyatakan)','F090051'],
		['Bayaran kepada pertubuhan lain yang membekalkan pekerja','F090057'],
		['Bayaran bagi perkhidmatan keselamatan','F090067'],
		['Jumlah perbelanjaan (9.1 hingga 9.34)','F090089'],
		['Pindahan modal yang dibuat','F090053'],
		['Perbelanjaan pajakan kewangan','F090054'],
		['Dividen berbayar','F090055'],
		['Cukai langsung dibayar (cth. Cukai syarikat dan duti setem)','F090056'],
		['JUMLAH BESAR (9.35 hingga 9.39)','F090099'],
		];
		#
		return $data;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('cariNilai')):
	function cariNilai($data,$kod)
	{
		foreach ($data as $key => $values):
			if($kod == $values[1]):
				//echo "<hr>$kod($key) = " . $values[0];
				return $values[0];
			endif;
		endforeach;

		return null;
		//$nilai[] = cariNilai($dataKp['kp337'],'F090036');# untuk debug
	}
endif;//*/
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
# untuk versi fungsi diatas() sahaja
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
		# tamat print <<<END
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
if ( ! function_exists('diatasV01')):
	function diatasV01($title = 'List Folder', $urlcss = null)
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
.kotakAtas
{
	text-align: center;
	display: table-cell;
	vertical-align: middle;
}
.kotakTengah
{
	text-align: center;
	display: inline-block;
}
</style>
</head>
<body>
END;
		# tamat print <<<END
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('diatasV02')):
	function diatasV02($title = 'List Folder', $urlcss = null)
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
<style type="text/css">
.kotakAtas
{
	text-align: center;
	display: table-cell;
	vertical-align: middle;
}
.kotakTengah
{
	text-align: center;
	display: inline-block;
}
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
		# tamat print <<<END
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
		# tamat print <<<END
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
		# tamat print <<<END
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
		# tamat print <<<END
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
		# tamat print <<<END
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
		# tamat print <<<END
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
		if(semakTatasusunan($senarai) == 'array') :foreach($senarai as $jadual => $row):
			$warnaButang = tukarWarnaButang($jadual);
			if($jadual != 'tahun')
			$output .= "\n\t" . '<a class="btn btn-' . $warnaButang . ' rounded-pill"'
			. ' href="' . URL . '?/' .$jadual. '">'
			. ucfirst($jadual) . '</a>';
		endforeach;endif;
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

		echo "\n<hr>";
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
		# tamat print <<<END
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dibawahV02')):
	function dibawahV02($pilih,$urljs)
	{
		//$theme = (isset($theme)) ? $theme : null;# Null coalescing operator
		$theme = ( !isset($pilih) ) ? 'Asal Bootstrap Twitter' : $pilih;
		$senaraiJS = binaSenaraiJs($urljs);

		echo "\n<hr>";
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
		# tamat print <<<END
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
if ( ! function_exists('pilihJadual')):
	function pilihJadual($pilih)
	{
		# buat tatasusunan ikut serialize, rujuk fail tatarajah.php
		# define('ALAMAT_IP', serialize (array()) );
		if ($pilih == 'alamatIp') :
			$jadual = unserialize(ALAMAT_IP);
		//elseif ($pilih == 'kakitangan') :
		//	$jadual = unserialize(KAKITANGAN);
		elseif ($pilih == 'myJadualDaa') :
			$jadual = unserialize(MYJADUAL);
		else : $jadual = array(); //unserialize()
		endif;

		semakPembolehubah($pilih,'pilih',0);
		semakPembolehubah($$jadual,'$jadual',0);

		return $jadual;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------