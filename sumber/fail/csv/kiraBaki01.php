<?php
#--------------------------------------------------------------------------------------------------
		$data['kp337'] = [
		['kodMedan','IO','Asal','Peratusan','Anggar','Jum Terkumpul'],
		['F090009','*',1534294],
		['F098501','**',69333],
		['F090002','**',null],
		['F090003','**',1385],
		['F090005','**',null],
		['F090057','**',206294],
		['F090058','**',1626],
		['F090006','**',780],
		['F090007','**',5561],
		['F090008','**',null],
		['F090011','',807],
		['F090063','**',null],
		['F090016','',null],
		['F090017','**',5185],
		['F090109','',33520],
		['F090119','**',3000],
		['F091002','',325],
		['F091007','',null],
		['F091003','',7180],
		['F091004','',null],
		['F091005','',null],
		['F091006','',990],
		['F091008','',292],
		['F091009','',121214],
		['F090025','',null],
		['F090080','',null],
		['F090012','',null],
		['F090013','',null],
		['F090014','',null],
		['F090019','',null],
		['F090020','**',24000],
		['F090021','**',null],
		['F090022','**',null],
		['F090023','**',null],
		['F090024','',5159],
		['F090026','**',null],
		['F090026a','',null],
		['F090027','**',null],
		['F090027a','',null],
		['F090030','',null],
		['F090031','',null],
		['F090032','',2850],
		['F091010','',17732],
		['F091011','',null],
		['F091012','',257],
		['F091013','',null],
		['F091014','',1200],
		['F091015','',null],
		['F091015a','',null],
		['F091016','',null],
		['F091017','',null],
		['F090035','**',578],
		['F090035a','',null],
		['F090036','',151656],
		['F090037','',null],
		['F090038','**',null],
		['F090039','',262],
		['F090040','',9702],
		['F090041','',null],
		['F090042','',1842],
		['F090043','',null],
		['F090044','',null],
		['F090045','**',null],
		['F090046','**',null],
		['F090047','**',null],
		['F090048','',null],
		['F090049','',null],
		['F090050','',null],
		['F090051','',null],
		['F090051a','',null],
		['F090052','',null],
		['F090067','',null],
		['F090089','',2207024],#74
		];
#--------------------------------------------------------------------------------------------------
	function cariPeratusKp337($anggar,$asal,$data)
	{
		if(is_numeric($data)):
			$peratus = $data / $asal;
			$anggaran = number_format($peratus * $anggar,0,'','');
			$peratus = number_format($peratus,4,'.','');
		else:
			$peratus = $anggaran = 0;
		endif;
		#
		return [$peratus,$anggaran];
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
$asal = 2207024;
$anggar = 944762;

/*// Menghitung elemen ke-5 ('Peratusan') dan ke-6 ('Anggar')
$peratusan = $data['kp337'][count($data['kp337']) - 1][3] / $asal;
$anggar = $peratusan * $anggar;

// Menambahkan elemen ke-5 dan ke-6 dalam tatasusunan
$data['kp337'][count($data['kp337']) - 1][] = $peratusan;
$data['kp337'][count($data['kp337']) - 1][] = $anggar;
//$data['kp337'][$kira][3]
//*/

// Menghitung elemen ke-5 ('Peratusan') dan ke-6 ('Anggar') untuk setiap baris kecuali baris pertama
for ($i = 1; $i < count($data['kp337']); $i++) {
    //$peratusan = $data['kp337'][$i][2] / $asal;
    //$anggar = $peratusan * $anggar;
	list($peratusan,$anggaran) = cariPeratusKp337($anggar,$asal,$data['kp337'][$i][2]);
    $data['kp337'][$i][] = $peratusan;
    $data['kp337'][$i][] = $anggaran;
}

// Menghitung nilai terkumpul dari awal hingga akhir
$terkumpul = 0;
for ($i = 1; $i < count($data['kp337']); $i++) {
    $terkumpul += $data['kp337'][$i][4];
    if($data['kp337'][$i][4] == 0)
		$data['kp337'][$i][] = 0;
	else
		$data['kp337'][$i][] = $terkumpul;
}

// Membuat tabel HTML
echo '<table border=1>';
foreach ($data['kp337'] as $kira => $item)
{
	echo "\n\t" . '<tr>';
	foreach ($item as $value) {
		echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';