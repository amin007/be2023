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
/*
$_POST=>
Array
(
$_POST['id'] => ***
$_POST['msic'] => 47113
$_POST['peratusan'] => 1.0087
)
*/
###################################################################################################
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($kp337,'kp337',0);
//semakPembolehubah($_POST,'_POST',0);
#--------------------------------------------------------------------------------------------------
$msic = null;
$idSebenar = bersih($_POST['idSebenar']);
$idProksi = bersih($_POST['idProksi']);
# set pembolehubah untuk gaji
$peratusGaji = bersih($_POST['peratusGaji']);
$pekerja['peratusGaji'] = $peratusGaji;
$anggar['peratusGaji'] = $peratusGaji;
$pengurus = bersih($_POST['gajiPengurus']);
$pekerja['pengurus'] = $pengurus;
$anggar['gajiPengurus'] = $pengurus;
$staf = bersih($_POST['gajiStaf']);
$pekerja['asas'] = $staf;
$anggar['gajiStaf'] = $staf;
# set pembolehubah untuk 5 data utama
$anggar['peratusan'] = bersih($_POST['peratusan']);
$anggar['hasil'] = bersih($_POST['hasil']);
$anggar['belanja'] = bersih($_POST['belanja']);
$anggar['gaji'] = $pengurus + $staf;
$anggar['staf'] = bersih($_POST['bilStaf']);
$anggar['harta'] = bersih($_POST['harta']);
$anggar['stok'] = bersih($_POST['stok']);
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($anggar,'anggar',0);
//semakPembolehubah($staf,'staf',0);
#--------------------------------------------------------------------------------------------------
$sql[$myJadual[8]] = sqlBarcode($myJadual[8],$idSebenar);
$sql[$myJadual[5]] = sqlRangkaKwspV06($myJadual[5],$idSebenar,$anggar['peratusan'],$pekerja);
$sql['SemuaNewss'] = sqlCariIDBe($kp337[0],$kp337[2],$msic,$idProksi);
for($i = 1; $i <= 18;$i++):
	$sql[$kp337[$i]] = sqlcariIDKp337($kp337[0],$kp337[$i],$msic,$idProksi);
endfor;
#--------------------------------------------------------------------------------------------------
//echo '<hr>semakPembolehubah<hr>';
//semakPembolehubah($myJadual,'myJadual',0);
//semakPembolehubah($kp337,'kp337',0);
//semakTatasusunanIni($sql,'pre');
#--------------------------------------------------------------------------------------------------
//$data = dbMysqli00(DB_HOST,DB_NAME,DB_USER,DB_PASS,$sql);
$data = dbMysqli01(DB_HOST,DB_NAME,DB_USER,DB_PASS,$sql);
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($data,'data',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
$pilih = null;
list($urlcss,$urljs) = linkCssJs(2);
$class = '"table table-sm table-striped table-bordered"';
$class02 = '"excel"';
diatas($pilih, $urlcss);
#--------------------------------------------------------------------------------------------------
binaButang(null);
#--------------------------------------------------------------------------------------------------
$cariTab = ['hasil','belanja','gaji','harta','stok'];
#--------------------------------------------------------------------------------------------------
echo "\n" . '<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
	<button class="nav-link active" id="home-tab" data-bs-toggle="tab"
	data-bs-target="#home-tab-pane" type="button" role="tab"
	aria-controls="home-tab-pane" aria-selected="true">Carian</button>
</li>';
foreach($cariTab as $namaTabLi):
echo "\n" . '<li class="nav-item" role="presentation">
	<button class="nav-link" id="' . $namaTabLi . '-tab" data-bs-toggle="tab"
	data-bs-target="#' . $namaTabLi . '-tab-pane" type="button" role="tab"
	aria-controls="' . $namaTabLi . '-tab-pane"
	aria-selected="false" tabindex="-1">' . $namaTabLi . '</button>
</li>';
endforeach;
echo "\n" . '<li class="nav-item" role="presentation">
	<button class="nav-link" id="disabled-tab" data-bs-toggle="tab"
	data-bs-target="#disabled-tab-pane" type="button" role="tab"
	aria-controls="disabled-tab-pane"
	aria-selected="false" disabled="" tabindex="-1">disabled</button>
</li>
</ul>
<div class="tab-content" id="myTabContent">
';
#--------------------------------------------------------------------------------------------------
echo '<div class="tab-pane fade active show" id="home-tab-pane" role="tabpanel"'
. ' aria-labelledby="home-tab" tabindex="0">';
#--------------------------------------------------------------------------------------------------
foreach($data as $myJadualDaa => $rowDaa):
	$table = paparSemuaData($rowDaa,$myJadualDaa);
	echo "<h2>$myJadualDaa</h2>";
	echo "\r<table id=\"allTable\" class=$class>$table</table>\r<hr>";
endforeach;
#--------------------------------------------------------------------------------------------------
echo '</div><!-- class="tab-pane fade" id="home-tab-pane" -->';
#--------------------------------------------------------------------------------------------------
//$data[$kp337[9]]
//semakPembolehubah($data[$kp337[9]],'data belanja',0);
$jumHasil = $data[$kp337[8]][0]['F080099'];
$jumBelanja = $data[$kp337[9]][0]['F090099'];
$belanjaSewaTanah = $data[$kp337[9]][0]['F090019'];
$belanjaSewaBangunan = $data[$kp337[9]][0]['F090020'];
$belanjaSusut = $data[$kp337[9]][0]['F090024'];
$belanjaGaji = $data[$kp337[9]][0]['F090036'];
$jumGaji = $data[$myJadual[5]][0]['Gaji'];
$jumGaji = str_replace(',','',$jumGaji);
$anggar['gaji'] = $jumGaji;
$anggar['belanjagaji'] = $belanjaGaji;
$barcode = $data[$myJadual[8]][0]['barcode'];
$nama = $data[$myJadual[8]][0]['nama'];
//semakPembolehubah($jumBelanja,'jumBelanja',0);
#--------------------------------------------------------------------------------------------------
foreach($data as $myJadualV02 => $rowV02):
if($myJadualV02 == $kp337[8]):
	echo paparTableTab('hasil',$class02,$myJadualV02,$rowV02,$jumHasil,$anggar);
endif;
if($myJadualV02 == $kp337[9]):
	echo paparTableTab('belanja',$class02,$myJadualV02,$rowV02,$jumBelanja,$anggar);
endif;
endforeach;//*/
#--------------------------------------------------------------------------------------------------
echo "\n\t" . '<div class="tab-pane fade" id="gaji-tab-pane" role="tabpanel"'
. ' aria-labelledby="gaji-tab" tabindex="0">';
echo "\n\t<p>untuk gaji</p>";
echo "\n\t<p>id = $barcode|nama = $nama</p>\n\t";
echo "\n\t<p>gajiAnggar = $jumGaji</p>\n\t";
echo "\n\t<p>belanjaGaji[F090036] = $belanjaGaji</p>\n\t";
//semakPembolehubah($anggar,'anggar',0);
echo paparTableTabV02('staf',$class,$kp337[18],$data[$kp337[18]],$jumGaji,$anggar);
echo paparTableTabV02('lelaki',$class,$kp337[4],$data[$kp337[4]],$jumGaji,$anggar);
echo paparTableTabV02('wanita',$class,$kp337[5],$data[$kp337[5]],$jumGaji,$anggar);
echo '</div><!-- class="tab-pane fade" id="gaji-tab-pane" -->';//*/
#--------------------------------------------------------------------------------------------------
echo "\n\t" . '<div class="tab-pane fade" id="harta-tab-pane" role="tabpanel"'
. ' aria-labelledby="harta-tab" tabindex="0">';
echo "\n\t<p>untuk harta</p>";
$susutAnggar = bersihNombor(kiraAnggarBelanja($jumBelanja,$anggar['peratusan'],$belanjaSusut));
echo "\n\t<p>belanjaSusut[F090024] = $belanjaSusut</p>\n\t";
echo "\n\t<p>anggarSusut[F090024] = $susutAnggar</p>\n\t";
echo "\n\t<p>belanjaSewaTanah[F090019] = $belanjaSewaTanah</p>\n\t";
echo "\n\t<p>belanjaSewaBangunan[F090020] = $belanjaSewaBangunan</p>\n\t";
/*$anggar['belanjaSusut'] = $belanjaSusut;
$anggar['anggarSusut'] = $susutAnggar;
$anggar['belanjaSewaTanah'] = $belanjaSewaTanah;
$anggar['belanjaSewaBangunan'] = $belanjaSewaBangunan;//*/
semakPembolehubah($anggar,'anggar',0);
echo paparTableTabV02('harta',$class,$kp337[3],$data[$kp337[3]],$susutAnggar,$anggar);
echo '</div><!-- class="tab-pane fade" id="harta-tab-pane" -->';//*/
#--------------------------------------------------------------------------------------------------
echo "\n\t" . '<div class="tab-pane fade" id="stok-tab-pane" role="tabpanel"'
. ' aria-labelledby="stok-tab" tabindex="0">';
echo "\n\t<p>untuk stok</p>";
echo paparTableTabV02('stok',$class,$kp337[10],$data[$kp337[10]],$jumBelanja,$anggar);
echo '</div><!-- class="tab-pane fade" id="stok-tab-pane" -->';//*/
#--------------------------------------------------------------------------------------------------
echo "\n\t";
echo '<div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel"'
. ' aria-labelledby="disabled-tab" tabindex="0">';
echo '<p>This is some placeholder content the <strong>harta</strong> associated content.</p>';
echo '</div><!-- class="tab-pane fade" id="disabled-tab-pane" -->';
#--------------------------------------------------------------------------------------------------
echo '</div><!-- / class="tab-content" -->';
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
#--------------------------------------------------------------------------------------------------
//if ( ! function_exists('abc')):
	function kiraAnggarBelanja($jumBelanja,$peratus,$data)
	{
		$belanjaBaru = $jumBelanja * $peratus;
		$kiraPeratus = $data / $jumBelanja;
		$papar = number_format(($kiraPeratus * $belanjaBaru), 0);

		return $papar;
	}
//endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('abc')):
	function abc()
	{
		return $papar;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
