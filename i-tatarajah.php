<?php
# 4 folder utama
define('KAWAL', 'Aplikasi/Kelas/Utama/Kawal');
define('TANYA', 'Aplikasi/Kelas/Utama/Tanya');
define('PAPAR', 'Aplikasi/Fail/Papar');
define('KITAB', 'Aplikasi/Kelas/Kitab');
define('FUNGSI', 'Aplikasi/Fungsi');

# Fungsi Global
require FUNGSI . '/Fungsi_Utama.php';
require FUNGSI . '/Fungsi.php';

# Sentiasa menyediakan garis condong di belakang (/) pada hujung jalan
define('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']) . '/');
define('Tajuk_Muka_Surat', '***');

# setkan jquery, bootstrap dan font awesome sama ada local atau cdn
## cdn => tukar maxcdn kepada stackpath
      $jquery_cdn = 'https://code.jquery.com/jquery-2.2.3.min.js';
 $bootstrapJS_cdn = 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js';
$bootstrapCSS_cdn = 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css';
 $ceruleanCSS_cdn = 'https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/cerulean/bootstrap.min.css';
 $fontawesome_cdn = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
## 431
 $bootstrapJS_431 = 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js';
$bootstrapCSS_431 = 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css';
 $ceruleanCSS_431 = 'https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cerulean/bootstrap.min.css';
 $fontawesome_510 = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css';
 $fontawesome_514 = 'https://use.fontawesome.com/releases/v5.14.0/css/all.css';
## local
            $sumber = 'sumber/utama/';
      $jquery_local = $sumber . 'jquery/jquery-2.2.3.min.js';
 $bootstrapJS_local = $sumber . 'bootstrap/3.3.7/js/bootstrap.min.js';
$bootstrapCSS_local = $sumber . 'bootstrap/3.3.7/css/bootstrap.min.css'; 
 $fontawesome_local = $sumber . 'font-awesome/4.7.0/css/font-awesome.min.css';
############################################################################################
## isytihar konsan MYSQL dan GAMBAR ikut lokasi $server
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$server = $_SERVER['SERVER_NAME'];

/*
echo "<br>Alamat IP : <font color='red'>" . $ip . "</font> |
\r<br>Nama PC : <font color='red'>" . $hostname . "</font> |
\r<br>Server : <font color='red'>" . $server . "</font>\r";
//*/

if ($server == 'laman.web.anda')
{	# isytihar tatarajah mysql
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', '***');
	define('DB_USER', '***');
	define('DB_PASS', '***');
	# isytihar lokasi folder js
	define('SUMBER', 'http://' . $_SERVER['SERVER_NAME'] . '/sumberonline/');
	define('JQUERY', $jquery_cdn);
	define('FONTAWESOME', $fontawesome_cdn);
	define('BOOTSTRAPJS', $bootstrapJS_cdn);
	define('BOOTSTRAPCSS', $bootstrapCSS_cdn);
}
else 
{	# isytihar tatarajah mysql
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', '***');
	define('DB_USER', '***');
	define('DB_PASS', '***');
	# isytihar lokasi folder js
	define('SUMBER', 'http://' . $_SERVER['SERVER_NAME'] . '/sumberoffline/');
	define('JQUERY', $jquery_local);
	define('FONTAWESOME', $fontawesome_local);
	define('BOOTSTRAPJS', $bootstrapJS_local);
	define('BOOTSTRAPCSS', $bootstrapCSS_local);
	define('BOOTSTRAPJS431', $bootstrapJS_431);
	define('BOOTSTRAPCSS431', $bootstrapCSS_431);
	define('FONTAWESOME510', $fontawesome_510);
}
//echo DB_HOST . "," . DB_USER . "," . DB_PASS . ",," . DB_NAME . "<br>";
############################################################################################
# buat tatasusunan ikut serialize
define('KAKITANGAN', serialize( 
	array ('abu','bakar','umar','osman','ali','hasan')
	));
define('ALAMAT_IP', serialize( 
	array ('8.8.8.8','1.1.1.1')
	));
## data dalam database lain
# namaPenuh,namaPendek,kataLaluan,level 
$loginMedan01 = '`full_name` as namaPenuh,`user` as namaPendek,'
. '`password`,`level`';	
define('JADUAL_LOGIN', serialize( 
	array ('biodata','email','password',$loginMedan01)
	));