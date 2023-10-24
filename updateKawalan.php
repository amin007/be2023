<?php
###################################################################################################
//require '/sumber/fail/php/***.php';
require './tatarajah.php';
require './sumber/fail/php/fungsi_global.php';
//require '/sumber/fail/data/***.php';
require './sumber/fail/data/dataSql.php';
require './sumber/fail/data/dataSqlMysqli.php';
//require './sumber/fail/csv/***.php';
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
$id = bersih($_POST['noSiri']);
$respon = bersih($_POST['respon']);
$nota = bersih($_POST['catatanBatch']);
//$mko = bersih($_POST['DataMKO']);
$respon = huruf('BESAR',$respon);
$nota = huruf('BESAR',$nota);
#--------------------------------------------------------------------------------------------------
# setkan arahan sql sahaja
list($sql[$myJadual[0]],$sql02[$myJadual[0]],$dataKhas)
= sqlUpdateKawalan($myJadual[0],$tarikh,$id,$respon,$nota,$mko);
#--------------------------------------------------------------------------------------------------
/*echo '<hr>semakPembolehubah<hr>';
semakPembolehubah($_POST,'_POST',0);
semakPembolehubah($myJadual,'myJadual',0);
semakPembolehubah($sql,'sql',0);
semakPembolehubah($sql02,'sql02',0);
semakPembolehubah($dataKhas,'dataKhas',0);//*/
#--------------------------------------------------------------------------------------------------
$data = dbUpdate01(DB_HOST,DB_NAME,DB_USER,DB_PASS,$sql,$dataKhas);
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($data,'data',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
$urlAkhir = "?/$tarikh/$respon/$nota/$mko/$id";
//echo "<hr>header(\"Location:\"" . URL . "cariKawalan.php$urlAkhir);";
//header("Location: anotherDirectory/anotherFile.php");
header('Location:' . URL . 'cariKawalan.php' . $urlAkhir);
#--------------------------------------------------------------------------------------------------
###################################################################################################