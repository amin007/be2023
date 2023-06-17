<?php
###################################################################################################
###################################################################################################
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
		$papar = trim($papar);
		# tukar kod %20 kepada space
		$papar = myUrlEncode($papar);
		# nl2br - Inserts HTML line breaks before all newlines in a string
		$papar = nl2br($papar);

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
/*echo "DROP TABLE IF EXISTS `$namaJadual`;
CREATE TABLE `$namaJadual`(
`BIL` int(11) DEFAULT NULL/*1:string:1*,
`SAMPLE_ESTABLISHMENT_ID` varchar(8) DEFAULT NULL/*12653602:string:8*,
)ENGINE=$namaEngin CHARACTER SET utf8 COLLATE utf8_general_ci;
";
$_POST['fields'][]['name']
$_POST['fields'][]['type']
$_POST['fields'][]['Length']

//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('ulangNamaMedan')):
	function ulangNamaMedan($namaMedan)
	{
		$p = null;
		foreach($namaMedan as $key => $val):
			$namaMedan = bersih($_POST['fields'][$key]['name']);
			$type = bersih($_POST['fields'][$key]['type']);
			$length = bersih($_POST['fields'][$key]['Length']);
			$length = ($lengthMedan == null) ? '':"($lengthMedan)";
			$p .= "`$namaMedan` $type$length /**/,\n";
		endforeach;

		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx')):
	function xxx()
	{
		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
echo '<pre>';print_r($_POST);echo '</pre>';
#--------------------------------------------------------------------------------------------------
/*
Array
(
$_POST['name']
$_POST['engine']
$_POST['fields'][]['name']
$_POST['fields'][]['type']
$_POST['fields'][]['Length']
                )

            ['1'] => Array
                (
                    ['name'] => kp
                    ['type'] => char
                    ['Length'] => 3
                )

            ['2'] => Array
                (
                    ['name'] => msic
                    ['type'] => int
                    ['Length'] => 
                )

        )

    ['Simpan'] => Simpan
)//*/
#--------------------------------------------------------------------------------------------------
$namaJadual = bersih($_POST['name']);
$namaEngin = bersih($_POST['engine']);
$senaraiMedan = ulangNamaMedan($_POST['fields']);
#--------------------------------------------------------------------------------------------------
echo "<pre>DROP TABLE IF EXISTS `$namaJadual`;
CREATE TABLE `$namaJadual`(
$senaraiMedan)ENGINE=$namaEngin CHARACTER SET utf8 COLLATE utf8_general_ci;
</pre>";
#--------------------------------------------------------------------------------------------------
###################################################################################################