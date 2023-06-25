<?php
###################################################################################################
//require '/sumber/fail/php/***.php';
require './tatarajah.php';
require './sumber/fail/php/fungsi_global.php';
//require '/sumber/fail/data/***.php';
require './sumber/fail/data/dataSql.php';
//require './sumber/fail/csv/***.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
//$fungsi = get_defined_functions();// internal or user
//semakPembolehubah($fungsi,'fungsi',0);
//echo '<pre>$fungsi=>';//print_r($fungsi['user']);//echo '<br></pre>' . "\n";
#--------------------------------------------------------------------------------------------------
/*
$_POST=>
Array
(
    [jadual01] => jadual01
    [jadual02] => test122
    [medan01] => ayam
    [medan02] => lembu
    [failcsv] => *.csv
    [dbLocalhost] => localhost
    [dbUser] => root
    [dbPass] => ***
)
*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
semakPembolehubah($_POST,'_POST',0);
//$sql['papar'] = bersih($_POST['sql']);
#--------------------------------------------------------------------------------------------------
$jadual01 = bersih($_POST['jadual01']);
$jadual02 = bersih($_POST['jadual02']);
$medan01 = bersih($_POST['medan01']);
$medan02 = bersih($_POST['medan02']);
$failcsv = bersih($_POST['failcsv']);
$dbPelayan = bersih($_POST['dbLocalhost']);
$dbNama = bersih($_POST['dbUser']);
$dbKatalaluan = bersih($_POST['dbPass']);
$dbKatalaluanBaru = '*****';
#--------------------------------------------------------------------------------------------------
$sql['ServerVersion'] = sqlServerVersion($dbPelayan,$dbNama,$dbKatalaluan,$dbKatalaluanBaru);
$sql['TukarNamaJadual'] = sqlTukarNamaJadual($jadual01,$jadual02);
$sql['TukarNamaMedan'] = sqlTukarNamaMedan($jadual01,$medan01,$medan02);
$sql['InsertCsv'] = sqlInsertCsv($jadual01,$failcsv);
$sql['ViewHarta'] = sqlSoalanHarta($jadual01,$medan01);
#--------------------------------------------------------------------------------------------------
//echo '<hr>semakPembolehubah<hr>';
//semakPembolehubah($myJadual,'myJadual',0);
//semakPembolehubah($sql,'sql',0);
semakTatasusunanIni($sql);
#--------------------------------------------------------------------------------------------------
###################################################################################################