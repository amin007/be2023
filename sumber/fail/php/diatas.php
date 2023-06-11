<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content=""><?php
$failIni = basename($_SERVER['PHP_SELF']);
$namaFail = explode('-', $failIni);
echo "\n<title>" . $namaFail[0] . "</title>";
if (isset($urlcss))
{
	foreach ($urlcss as $css)
	{
		echo "\n";
		?><link rel="stylesheet" type="text/css" href="<?php echo $css ?>"><?php
	}
}
echo "\n"; ?>
</head>
<body>

<a class="btn btn-primary" href="../">Kembali<i class="fa fa-binoculars"></i></a>
<a class="btn btn-warning" href="../kod2023.php">Kod2023</a>
<a class="btn btn-outline-secondary rounded-pill" href="msic-cari.html">
	Cari MSIC</a>
<a class="btn btn-outline-secondary rounded-pill" href="masco2020-cari.html">
	Cari MASCO2020</a>
<a class="btn btn-outline-secondary rounded-pill" href="komuniti-cari.html">
	Cari Komuniti</a>
<a class="btn btn-outline-secondary rounded-pill" href="produkmm-cari.html">
	Cari Produk</a>
<a class="btn btn-outline-secondary rounded-pill" href="negara-cari.html">
	Cari Negara</a>
<a class="btn btn-outline-secondary rounded-pill" href="institut-cari.html">
	Cari Institut</a>
<hr>
