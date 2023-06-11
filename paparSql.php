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
$fungsi = get_defined_functions();// internal or user
//semakPembolehubah($fungsi,'fungsi',0);
//echo '<pre>$fungsi=>';//print_r($fungsi['user']);//echo '<br></pre>' . "\n";
#--------------------------------------------------------------------------------------------------
###################################################################################################
/*
senarai fungsi dalam fail dataSql =>Array
(
    [0] => sqlfebarcode
    [1] => sqldataaesv00
    [2] => sqldataaesv01
    [3] => sqlcarimsicaes
    [4] => sqlnewssv00
    [5] => sqlnewssv01
    [6] => sqlnewssv02
    [7] => sqlnewssv03
    [8] => sqlssmrochartav01
    [9] => sqlssmrocuntungrugiv00
    [10] => sqlssmrocuntungrugiv01
    [11] => sqlrangkakwspv00
    [12] => sqlxxx2
    [13] => sqlrangkakwspv02
    [14] => sqlrangkakwspv03
    [15] => sqlrangkakwspv04
    [16] => sqlrangkakwspv05
    [17] => sqlcreatebe2023newss5p
)
*/
###################################################################################################
#--------------------------------------------------------------------------------------------------
$fe = 'muhaimin';
$id = '000002791307';
#--------------------------------------------------------------------------------------------------
$sqlFeBarcode = sqlFeBarcode($myJadual[0],$fe,$id);
$dataSql[] = sqlDataAesV00($myJadual[0],$myJadual[1],$fe,$id);
$dataSql[] = sqlDataAesV01($myJadual[0],$myJadual[1],$fe,$id);
$dataSql[] = sqlCariMsicAes($myJadual[0],$myJadual[1],$fe,$id);
$dataSql[] = sqlNewssV00($myJadual[0],$myJadual[2],$fe,$id);
//$dataSql[] = sqlNewssV01($myJadual[0],$myJadual[2],$fe,$id);
$dataSql[] = sqlNewssV02($myJadual[0],$myJadual[2],$fe,$id);
$dataSql[] = sqlNewssV03($myJadual[0],$myJadual[2],$fe,$id);
$dataSql[] = sqlSsmRocHartaV01($myJadual[0],$myJadual[3],$fe,$id);
$dataSql[] = sqlSsmRocUntungRugiV00($myJadual[0],$myJadual[4],$fe,$id);
$dataSql[] = sqlSsmRocUntungRugiV01($myJadual[0],$myJadual[4],$fe,$id);
$dataSql[] = sqlRangkaKwspV00($myJadual[0],$myJadual[5],$fe,$id);
$dataSql[] = sqlRangkaKwspV01($myJadual[0],$myJadual[5],$fe,$id);
$dataSql[] = sqlRangkaKwspV02($myJadual[0],$myJadual[5],$fe,$id);
$dataSql[] = sqlRangkaKwspV03($myJadual[0],$myJadual[5],$fe,$id);
$dataSql[] = sqlRangkaKwspV04($myJadual[0],$myJadual[5],$fe,$id);
$dataSql[] = sqlRangkaKwspV05($myJadual[0],$myJadual[5],$fe,$id);
//$dataSql[] = sqlCreateBe2023Newss5p($fe);
//$dataSql[] = '';//*/
#--------------------------------------------------------------------------------------------------
echo '<hr>semakPembolehubah<hr>';
//semakPembolehubah($myJadual,'myJadual',0);
//semakPembolehubah($dataSql,'dataSql',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
//$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
try {
$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER,DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');

	#----------------------------------------------------------------------------------------------
	//$sql_stmt = "SELECT * FROM `my_contacts`";
	$sql_stmt = $sqlFeBarcode;
	#----------------------------------------------------------------------------------------------
	$result = $pdo->query($sql_stmt);
	$result->setFetchMode(PDO::FETCH_ASSOC);
	$data = array();
	foreach ($result as $row)
	{
		$data[] = $row;
	}
}
catch (PDOException $e) { echo $e->getMessage(); }
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
semakPembolehubah($data,'data',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################