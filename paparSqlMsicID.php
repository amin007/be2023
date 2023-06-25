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
$id = bersih($_POST['id']);
$peratus = bersih($_POST['peratusan']);
#--------------------------------------------------------------------------------------------------
$sql['SemuaNewss'] = sqlCariIDBe($kp337[0],$kp337[2],$msic,$id);
for($i = 1; $i <= 17;$i++):
	$sql[$kp337[$i]] = sqlcariIDKp337($kp337[0],$kp337[$i],$msic,$id);
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
diatas($pilih, $urlcss);
#--------------------------------------------------------------------------------------------------
binaButang(null);
#--------------------------------------------------------------------------------------------------
echo '<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<li class="nav-item" role="presentation">
	<button class="nav-link active" id="home-tab" data-bs-toggle="tab"
	data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
	aria-selected="true">Carian</button>
</li>
<li class="nav-item" role="presentation">
	<button class="nav-link" id="belanja-tab" data-bs-toggle="tab"
	data-bs-target="#belanja-tab-pane" type="button" role="tab" aria-controls="belanja-tab-pane"
	aria-selected="false" tabindex="-1">belanja</button>
</li>
<li class="nav-item" role="presentation">
	<button class="nav-link" id="gaji-tab" data-bs-toggle="tab"
	data-bs-target="#gaji-tab-pane" type="button" role="tab" aria-controls="gaji-tab-pane"
	aria-selected="false" tabindex="-1">gaji</button>
</li>
<li class="nav-item" role="presentation">
	<button class="nav-link" id="disabled-tab" data-bs-toggle="tab"
	data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane"
	aria-selected="false" disabled="" tabindex="-1">harta</button>
</li>
</ul>
<div class="tab-content" id="myTabContent">
';
#--------------------------------------------------------------------------------------------------
echo '<div class="tab-pane fade active show" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">';
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
$jumBelanja = $data[$kp337[9]][0]['F090099'];
//semakPembolehubah($jumBelanja,'jumBelanja',0);
#--------------------------------------------------------------------------------------------------
foreach($data as $myJadualV02 => $rowV02):
if($myJadualV02 == $kp337[9]):
	//$table = paparSatuJe($rowV02,$myJadualV02);
	$table = paparSatuDataAnggar($rowV02,$myJadualV02,$jumBelanja,$peratus);
	#----------------------------------------------------------------------------------------------
	echo '<div class="tab-pane fade" id="belanja-tab-pane" role="tabpanel" aria-labelledby="belanja-tab" tabindex="0">';
	#----------------------------------------------------------------------------------------------
	echo "<h2>$myJadualV02</h2>";
	echo "\r<table id=\"allTable\" class=$class>$table</table>\r<hr>";
	#----------------------------------------------------------------------------------------------
	echo '</div><!-- class="tab-pane fade" id="belanja-tab-pane" -->';
	#----------------------------------------------------------------------------------------------
endif;
endforeach;//*/
#--------------------------------------------------------------------------------------------------
echo '<div class="tab-pane fade" id="gaji-tab-pane" role="tabpanel" aria-labelledby="gaji-tab" tabindex="0">';
echo '<p>untuk gaji</p>';
echo '</div><!-- class="tab-pane fade" id="gaji-tab-pane" -->';
#--------------------------------------------------------------------------------------------------
echo '<div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">';
echo '<p>This is some placeholder content the <strong>harta</strong> associated content.</p>';
echo '</div><!-- class="tab-pane fade" id="disabled-tab-pane" -->';
#--------------------------------------------------------------------------------------------------
echo '</div><!-- / class="tab-content" ->';
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
