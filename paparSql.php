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
$_POST=>
Array
(
    $_POST[namaFe] => muhaimin
    $_POST[noSiri] => 000003985740
    $_POST[peratusan] => 1.87
    [Simpan] => Simpan
)
*/
###################################################################################################
#--------------------------------------------------------------------------------------------------
semakPembolehubah($_POST,'_POST',0);
$fe = bersih($_POST['namaFe']);//'muhaimin';
$id = bersih($_POST['noSiri']);//'000002791307';
$peratus = bersih($_POST['peratusan']);
#--------------------------------------------------------------------------------------------------
//$sql['FeBarcode'] = sqlFeBarcode($myJadual[0],$fe,$id);
$sql['DataAesV00'] = sqlDataAesV00($myJadual[0],$myJadual[1],$fe,$id,$peratus);
//$dataSql[] = sqlDataAesV01($myJadual[0],$myJadual[1],$fe,$id);
//$dataSql[] = sqlCariMsicAes($myJadual[0],$myJadual[1],$fe,$id);
//$dataSql[] = sqlNewssV00($myJadual[0],$myJadual[2],$fe,$id);
//$dataSql[] = sqlNewssV01($myJadual[0],$myJadual[2],$fe,$id);
//$dataSql[] = sqlNewssV02($myJadual[0],$myJadual[2],$fe,$id);
$sql['NewssV03'] = sqlNewssV03($myJadual[0],$myJadual[2],$fe,$id,$peratus);
$sql['SsmRocHartaV00'] = sqlSsmRocHartaV00($myJadual[0],$myJadual[3],$fe,$id,$peratus);
//$sql['SsmRocHartaV01'] = sqlSsmRocHartaV01($myJadual[0],$myJadual[3],$fe,$id);
//$dataSql[] = sqlSsmRocUntungRugiV00($myJadual[0],$myJadual[4],$fe,$id);
$sql['SsmRocUntungRugiV01'] = sqlSsmRocUntungRugiV01($myJadual[0],$myJadual[4],$fe,$id,$peratus);
//$dataSql[] = sqlRangkaKwspV00($myJadual[0],$myJadual[5],$fe,$id);
//$dataSql[] = sqlRangkaKwspV01($myJadual[0],$myJadual[5],$fe,$id);
//$dataSql[] = sqlRangkaKwspV02($myJadual[0],$myJadual[5],$fe,$id);
//$dataSql[] = sqlRangkaKwspV03($myJadual[0],$myJadual[5],$fe,$id);
//$dataSql[] = sqlRangkaKwspV04($myJadual[0],$myJadual[5],$fe,$id);
$sql['RangkaKwspV05'] = sqlRangkaKwspV05($myJadual[0],$myJadual[5],$fe,$id,$peratus);
//$dataSql[] = sqlCreateBe2023Newss5p($fe);
//$dataSql[] = '';//*/
#--------------------------------------------------------------------------------------------------
//echo '<hr>semakPembolehubah<hr>';
//semakPembolehubah($myJadual,'myJadual',0);
//semakPembolehubah($sql,'sql',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($sqlDaa,'sqlDaa',0);
#https://wiki.php.net/rfc/mysqli_default_errmode
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
#--------------------------------------------------------------------------------------------------
	//$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	try {
	$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER,DB_PASS);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');

		#----------------------------------------------------------------------------------------------
		foreach($sql as $myTable => $sqlDaa):
		//semakPembolehubah($sqlDaa,'sqlDaa',0);
		#----------------------------------------------------------------------------------------------
		//$sql_stmt = "SELECT * FROM `my_contacts`";
		$sql_stmt = $sqlDaa;
		#----------------------------------------------------------------------------------------------
		$result = $pdo->query($sql_stmt);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$tajuk[$myTable] = $myTable;
		$data[$myTable] = array();
		foreach ($result as $row)
		{
			$data[$myTable][] = $row;
		}
		#----------------------------------------------------------------------------------------------
		endforeach;
		#----------------------------------------------------------------------------------------------
	}
	catch (PDOException $e) { echo $e->getMessage(); }//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($data,'data',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
$pilih = null;
list($urlcss,$urljs) = linkCssJs();
$class = 'table table-striped table-bordered';
diatas($pilih, $urlcss);
#--------------------------------------------------------------------------------------------------
binaButang(null);
echo "\r<hr>\r<table class=$class><tr>";
#--------------------------------------------------------------------------------------------------
	foreach($data as $myJadualDaa => $rowDaa):
	#--------------------------------------------------------------------------------------------------
	$table = paparSatuJe($rowDaa,$myJadualDaa);
	echo "\r<td><table class=$class>$table</table></td>\r";
	#--------------------------------------------------------------------------------------------------
	endforeach;
#--------------------------------------------------------------------------------------------------
echo "\r</tr></table>\r";
#--------------------------------------------------------------------------------------------------
dibawah($pilih,$urljs);
echo "<script>\n";
jqueryExtendA();
jqueryExtendB();
jqueryExtendC();
gradeTable002(null);
echo "\n</script>\n</body>\n</html>";//*/
#--------------------------------------------------------------------------------------------------
/*# kaedah 2.1
$s = 'REQUEST_URI';//$s = 'PHP_SELF';//$s = 'QUERY_STRING';
//semakPembolehubah($_SERVER[$s],$s);
if (isset($_SERVER[$s])):
	$fail = explode('be20023/',$_SERVER[$s]);//semakPembolehubah($fail,'fail');
	$cari = explode('/',$fail[1]);semakPembolehubah($cari,'pilih');

	if(isset($cari[1])):
		$cariApa = bersih($cari[1]);
		if($cariApa == 'json'):
			$pilih = isset($cari[2]) ? $cari[2] : null;
			$cariApa = bersih($pilih);
			binaJson($data,$cariApa);
		elseif($cariApa == 'tahun'):
			$tajuk['tahun'] = '#,-,-,-,-';
			$data['tahun'] = kiraTahunJadual();
			panggilDataTable01($tajuk,$data,$cariApa);# panggil fungsi
		elseif(in_array($cariApa,$dataPhpJson)):# panggil fungsi untuk tatasusunan php => json
			panggilDataTable03($tajuk,$data,$cariApa);
		elseif(in_array($cariApa,$dataJson)):
			panggilDataTable02($tajuk,$data,$cariApa);# panggil fungsi untuk data json
		else:
			panggilDataTable01($tajuk,$data,$cariApa);# panggil fungsi
		endif;
	else:
		panggilDataTable01($tajuk,$data,null);# panggil fungsi
	endif;
else:
	panggilDataTable01($tajuk,$data,null);# panggil fungsi
endif;//*/
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################