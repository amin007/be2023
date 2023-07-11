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
	$_POST[noSiri] => 000003985740
	[Simpan] => Simpan
)
*/
###################################################################################################
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($_POST,'_POST',0);
$id = bersih($_POST['noSiri']);//'000002791307';
//$peratus = bersih($_POST['peratusan']);
#--------------------------------------------------------------------------------------------------
//$sql[] = '';
$sql['barcode'] = sqlCariBintangDaa($myJadual[0],'barcode',$id);
$sql['aes'] = sqlCariBintangDaa($myJadual[1],'Serial No',$id);
$sql['limap'] = sqlCariBintangDaa($myJadual[2],'NO_SIRI',$id);
$sql['ssmharta'] = sqlCariBintangDaa($myJadual[3],'ESTABLISHMENT_ID',$id);
$sql['untungrugi'] = sqlCariBintangDaa($myJadual[4],'ESTABLISHMENT_ID',$id);
$sql['kwsp'] = sqlCariBintangDaa($myJadual[5],'ESTABLISHMENT_ID',$id);
$sql['mko'] = sqlMkoDaa($myJadual[0],$id);
#--------------------------------------------------------------------------------------------------
//echo '<hr>semakPembolehubah<hr>';
//semakPembolehubah($myJadual,'myJadual',0);
//semakPembolehubah($sql,'sql',0);
#--------------------------------------------------------------------------------------------------
$data = dbMysqli00(DB_HOST,DB_NAME,DB_USER,DB_PASS,$sql);
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($data,'data',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
$pilih = null;
list($urlcss,$urljs) = linkCssJs(2);
$class = '"table table-striped table-bordered"';
//$class = '"table table-sm table-striped table-bordered"';
$class02 = '"excel"';
diatas($pilih, $urlcss);
#--------------------------------------------------------------------------------------------------
binaButang(null);
#--------------------------------------------------------------------------------------------------
###################################################################################################
# untuk bina tab berasasan $data
#--------------------------------------------------------------------------------------------------
echo "\n<!-- ================================================================================ -->";
#--------------------------------------------------------------------------------------------------
echo "\n" . '<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
	<button class="nav-link active" id="home-tab" data-bs-toggle="tab"
	data-bs-target="#home-tab-pane" type="button" role="tab"
	aria-controls="home-tab-pane" aria-selected="true">Carian</button>
</li>';
#--------------------------------------------------------------------------------------------------
foreach($data as $namaTabLi => $barisDaa):
$senaraiJadualJumpa[] = $namaTabLi;
echo "\n" . '<li class="nav-item" role="presentation">
	<button class="nav-link" id="' . $namaTabLi . '-tab" data-bs-toggle="tab"
	data-bs-target="#' . $namaTabLi . '-tab-pane" type="button" role="tab"
	aria-controls="' . $namaTabLi . '-tab-pane"
	aria-selected="false" tabindex="-1">' . $namaTabLi . '</button>
</li>';
endforeach;
#--------------------------------------------------------------------------------------------------
echo "\n" . '<li class="nav-item" role="presentation">
	<button class="nav-link" id="disabled-tab" data-bs-toggle="tab"
	data-bs-target="#disabled-tab-pane" type="button" role="tab"
	aria-controls="disabled-tab-pane"
	aria-selected="false" disabled="" tabindex="-1">disabled</button>
</li>';
echo "\n" . '</ul>
<div class="tab-content" id="myTabContent">';
#--------------------------------------------------------------------------------------------------
echo "\n<!-- ================================================================================ -->";
#--------------------------------------------------------------------------------------------------
echo "\n" . '<div class="tab-pane fade active show" id="home-tab-pane" role="tabpanel"'
. ' aria-labelledby="home-tab" tabindex="0">';
//semakPembolehubah($_POST['noSiri'],'_POST[noSiri]',0);
semakPembolehubah($senaraiJadualJumpa,'dataYangJumpa',0);
echo "\n" . '</div><!-- class="tab-pane fade" id="home-tab-pane" -->';
#--------------------------------------------------------------------------------------------------
echo "\n<!-- ================================================================================ -->";
#--------------------------------------------------------------------------------------------------
foreach($data as $myJadualV02 => $rowV02):
	$table = paparSatuJe($rowV02,$myJadualV02);
	#------------------------------------------------------------------------------------------
	echo "\n\t" . '<div class="tab-pane fade" id="' . $myJadualV02 . '-tab-pane"'
	. ' role="tabpanel" aria-labelledby="' . $myJadualV02 . '-tab" tabindex="0">'
	. "\n\t<h2>$myJadualV02</h2>"
	. "\n\t<table class=$class02>$table</table>\n\t"
	. "\n" . '</div><!-- class="tab-pane fade" id="' . $myJadualV02 . '-tab-pane" -->'
	. "\n<!-- ========================================================================== -->";
	#------------------------------------------------------------------------------------------
endforeach;
#--------------------------------------------------------------------------------------------------
echo "\n\t";
echo '<div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel"'
. ' aria-labelledby="disabled-tab" tabindex="0">';
echo "\n\t" . '<p>This is some placeholder content the <strong>disabled</strong> associated'
. ' content.</p>';
echo "\n" . '</div><!-- class="tab-pane fade" id="disabled-tab-pane" -->';
#--------------------------------------------------------------------------------------------------
echo "\n" . '</div><!-- / class="tab-content" -->';
#--------------------------------------------------------------------------------------------------
echo "\n<!-- ================================================================================ -->";
//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
echo "\n<hr><!-- Senarai Jadual
==============================================================================================="
. " -->";
#--------------------------------------------------------------------------------------------------
	foreach($data as $myJadualDaa => $rowDaa):
	#----------------------------------------------------------------------------------------------
	echo "\n<table><tr>";
	if(semakTatasusunan($rowDaa) == 'array') :
		$table = paparSatuJe($rowDaa,$myJadualDaa);
		echo "\n<td valign=\"top\"><table class=$class>\n$table\n</table></td>";
	else: echo "\n<td valign=\"top\">Tiada Data</td>";
	endif;
	echo "\n</tr></table>\n";
	#----------------------------------------------------------------------------------------------
	endforeach;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
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