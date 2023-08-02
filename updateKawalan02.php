<?php
###################################################################################################
//require '/sumber/fail/php/***.php';
require './tatarajah.php';
require './sumber/fail/php/fungsi_global.php';
//require '/sumber/fail/data/***.php';
//require './sumber/fail/data/dataSql.php';
//require './sumber/fail/data/dataSqlMysqli.php';
//require './sumber/fail/csv/***.php';//*/
###################################################################################################
#--------------------------------------------------------------------------------------------------
//$fungsi = get_defined_functions();// internal or user
//semakPembolehubah($fungsi,'fungsi',0);
//echo '<pre>$fungsi=>';//print_r($fungsi['user']);//echo '<br></pre>' . "\n";
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
# setkan nilai awalan
$tarikh = bersih($_POST['tarikhBatch']);
$nota = bersih($_POST['catatanBatch']);
$mko = bersih($_POST['DataMKO']);
$respon = huruf('BESAR',$respon);
$nota = huruf('BESAR',$nota);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
$urlAkhir = "?/$tarikh/$nota";
//echo "<hr>header(\"Location:\"" . URL . "cariKawalan.php$urlAkhir);";
//header("Location: anotherDirectory/anotherFile.php");
header('Location:' . URL . 'cariKawalan02.php' . $urlAkhir);
#--------------------------------------------------------------------------------------------------
###################################################################################################