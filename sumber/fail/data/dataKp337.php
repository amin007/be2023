<?php
#--------------------------------------------------------------------------------------------------
###################################################################################################
# cari data dalam tatasusunan
#--------------------------------------------------------------------------------------------------
/*
The VALUE OF OUTPUT, (F088501+ F088502+ F088503+ F088504+ F088505+ F080011- F090009+ F080014
+ F080022+ F080034+ F080035+ F080039+ F080034+ F080061+ F080062+ F080013+ F041399)
(F041399= jumlah harta diy)
must be > COST OF INPUT (F098501+ F090002+ F090003+ F090005+ F090057+ F090058+ F090006+ F090007
+ F090008+ F090063+ F090017+ F090119+ F090020+ F090021+ F090022+ F090023+ F090026+ F090027
+ F090035+ F090045+ F090046+ F090047)
*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('apaOutput337')):
	function apaOutput337()
	{
		$p = 'The VALUE OF OUTPUT, (F088501+ F088502+ F088503+ F088504+ F088505+ '
		. ' F080011- F090009+ F080014+ F080022+ F080034+ F080035+ F080039+ F080034+ '
		. 'F080061+ F080062+ F080013+ F041399) ';
		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('apaInput337')):
	function apaInput337()
	{
		$p = 'COST OF INPUT (F098501+ F090002+ F090003+ F090005+ F090057+ F090058+ '
		. ' F090006+ F090007+ F090008+ F090063+ F090017+ F090119+ F090020+ F090021+ F090022+ '
		. ' F090023+ F090026+ F090027+ F090035+ F090045+ F090046+ F090047)';
		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('kodOutput337')):
	function kodOutput337()
	{
		$tajuk['kp337'] = 'nama medan,kod medan';
		$data['kp337'] = [
		['Jumlah Harta Bina Sendiri*','F041399'],
		['Jualan barang-barang*','F088501'],
		['Jualan kenderaan bermotor*','F088502'],
		['Jualan alat ganti dan aksesori*','F088503'],
		['Jualan petrol dan gas*','F088504'],
		['Pendapatan dari bayaran perkhidmatan pembaikan pemasangan dan penyelenggaraan*','F088505'],
		['Komisen dan brokeraj dan yuran yang diterima*','F080011'],
		['(-)Kos barang yang dijual*','F090009'],
		['Royalti, hakcipta, pelesenan dan yuran francais*','F080014'],
		['Pendapatan perkhidmatan yang diterima*','F080022'],
		['Hasil Sewa Bangunan tempat kediaman*','F080034'],
		['Hasil Sewa Bangunan bukan tempat kediaman*','F080035'],
		['Hasil Sewa Alat pengangkutan*','F080039'],
		['Hasil Sewa Jentera dan kelengkapan*','F080061'],
		['Hasil Sewa Perabot dan pemasangan*','F080062'],
		['Hasil Sewa Lain-lain*','F080013'],
		];

		return array($tajuk,$data);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('kodInputKp337')):
	function kodInputKp337()
	{
		$tajuk['kp337'] = 'nama medan,kod medan';
		$data['kp337'] = [
		['Kos pembaikan, pemasangan dan penyelenggaraan**','F098501'],
		['Nilai bekalan-Bahan dan bekas pembungkus**','F090002'],
		['Nilai bekalan-Bahan-bahan untuk pembaikan dan penyelenggaraan**','F090003'],
		['Nilai bekalan-Alat tulis dan bekalan pejabat**','F090005'],
		['Nilai bekalan-Lain-lain**','F090057'],
		['Kos percetakan**','F090058'],
		['Air yang dibeli**','F090006'],
		['Tenaga elektrik yang dibeli**','F090007'],
		['Bahan pembakar, pelincir dan gas**','F090008'],
		['Pengiklanan dan promosi**','F090063'],
		['Bayaran telekomunikasi (cth. Telefon, internet dsb.)**','F090017'],
		['Pembelian perkhidmatan pengangkutan**','F090119'],
		['Bayaran Sewa Bangunan**','F090020'],
		['Bayaran Sewa Jentera dan kelengkapan**','F090021'],
		['Bayaran Sewa Kenderaan bermotor dan jenis pengangkutan lain**','F090022'],
		['Bayaran Sewa Lain-lain**','F090023'],
		['Bayaran Royalti kepada Kerajaan/Badan berkanun**','F090026'],
		['Bayaran Royalti kepada NGO/tajaan korporat**','F090027'],
		['Lain-lain perbelanjaan operasi (sila nyatakan butir-butir di bawah)**','F091035'],
		['Rawatan perubatan percuma**','F090038'],
		['Bayaran kepada pengarah tidak bekerja kerana kehadiran mereka dalam mesyuarat Lembaga Pengarah**','F090045'],
		['Nilai pakaian percuma yang disediakan**','F090046'],
		['Kos latihan kepada pekerja**','F090047'],
		];

		return array($tajuk,$data);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dataKp337')):
	function dataKp337()
	{
		$tajuk['kp337'] = 'nama medan,kod medan';
		$data['kp337'] = [
		['Jumlah Harta Bina Sendiri*','F041399'],
		['Jualan barang-barang*','F088501'],
		//['Sila nyatakan peratus (%) eksport berdasarkan jumlah nilai jualan pada tahun rujukan','F080002'],
		//['Sila nyatakan peratus (%) eksport produk halal berdasarkan jumlah nilai jualan pada tahun rujukan','F080060'],
		['(%)eksport jualan','F080002'],
		['(%)eksport produk halal dari jualan','F080060'],
		['Jualan kenderaan bermotor*','F088502'],
		['Jualan alat ganti & aksesori*','F088503'],
		['Jualan petrol & gas*','F088504'],
		['Pendapatan dari bayaran perkhidmatan pembaikan pemasangan & penyelenggaraan*','F088505'],
		['Komisen & brokeraj & yuran yang diterima*','F080011'],
		['Pendapatan daripada perkhidmatan pengurusan','F080010'],
		['Royalti, hakcipta, pelesenan & yuran francais*','F080014'],
		['Pendapatan perkhidmatan yang diterima*','F080022'],
		['Hasil Sewa Tanah','F080012'],
		['Hasil Sewa Bangunan tempat kediaman*','F080034'],
		['Hasil Sewa Bangunan bukan tempat kediaman*','F080035'],
		['Hasil Sewa Alat pengangkutan*','F080039'],
		['Hasil Sewa Jentera & kelengkapan*','F080061'],
		['Hasil Sewa Perabot & pemasangan*','F080062'],
		['Hasil Sewa Lain-lain*','F080013'],
		['Subsidi','F080063'],
		['Subsidi gaji & upah','F080064'],
		['Subsidi produk','F080065'],
		['Subsidi pengeluaran','F080066'],
		['Tuntutan & pampasan yang diterima','F080067'],
		['Pemulihan hutang lapuk','F080068'],
		['Pendapatan daripada faedah','F080069'],
		['Pendapatan daripada dividen','F080070'],
		['Keuntungan daripada jualan/penilaian semula harta','F080071'],
		['Keuntungan daripada pertukaran mata wang asing/aset kewangan','F080072'],
		['Kiriman wang, hadiah atau geran yang diterima','F080073'],
		['Lain-lain pendapatan bukan operasi (sila nyatakan)','F080074'],
		['Lain-lain pendapatan operasi (sila nyatakan)','F080016'],
		['Adakah pertubuhan ini mempunyai pendapatan daripada aktiviti e-sukan?','F080075'],
		['Jika Ya, sila nyatakan jumlah pendapatan dalam aktiviti e-sukan ini','F080076'],
		['Jumlah pendapatan (8.1 hingga 8.10) ','F080089'],
		['Pindahan modal yang diterima','F080017'],
		['JUMLAH BESAR (8.11 hingga 8.12)','F080099'],
		//['Kos barang yang dijual (barang/bahan yang dibeli untuk dijual semula tanpa melalui proses selanjutnya)','F090009'],
		['Kos barang yang dijual*','F090009'],
		['Kos pembaikan, pemasangan & penyelenggaraan**','F098501'],
		['Nilai bekalan-Bahan & bekas pembungkus**','F090002'],
		['Nilai bekalan-Bahan-bahan untuk pembaikan & penyelenggaraan**','F090003'],
		['Nilai bekalan-Alat tulis & bekalan pejabat**','F090005'],
		['Nilai bekalan-Lain-lain**','F090057'],
		['Kos percetakan**','F090058'],
		['Air yang dibeli**','F090006'],
		['Tenaga elektrik yang dibeli**','F090007'],
		['Bahan pembakar, pelincir & gas**','F090008'],
		['Bayaran pembaikan & penyelenggaraan semasa yang dibuat oleh pihak lain bagi harta tetap pertubuhan ini','F090011'],
		['Pengiklanan & promosi**','F090063'],
		['Bayaran pemprosesan data & lain-lain perkhidmatan yang berkaitan dengan teknologi maklumat','F090016'],
		['Bayaran telekomunikasi (cth. Telefon, internet dsb.)**','F090017'],
		['Komisen & bayaran agensi','F090109'],
		['Pembelian perkhidmatan pengangkutan**','F090119'],
		['Perbelanjaan perjalanan (termasuk perjalanan dalam & luar negara, bil petrol/diesel & bayaran letak kereta sendiri','F091002'],
		['Bayaran pos (termasuk perkhidmatan kurier)','F091007'],
		['Bayaran perakaunan, kesetiausahaan & audit','F091003'],
		['Bayaran guaman','F091004'],
		['Bayaran pengurusan','F091005'],
		['Perbelanjaan keraian','F091006'],
		['Bayaran bank','F091008'],
		['Premium insurans dibayar ke atas bangunan, jentera, alat pengangkutan & barang','F091009'],
		['Bayaran faedah','F090025'],
		['Bayaran perkhidmatan profesional lain (cth. Bayaran perundingan arkitek, kejuruteraan, juruukur dsb.)','F090080'],
		['Perbelanjaan penyelidikan & pembangunan','F090012'],
		['R&D Dalaman => %','F090013'],
		['R&D Sumber luaran => %','F090014'],
		['Bayaran Sewa Tanah','F090019'],
		['Bayaran Sewa Bangunan**','F090020'],
		['Bayaran Sewa Jentera & kelengkapan**','F090021'],
		['Bayaran Sewa Kenderaan bermotor & jenis pengangkutan lain**','F090022'],
		['Bayaran Sewa Lain-lain**','F090023'],
		['Susut nilai/perlunasan semasa ke atas harta tetap','F090024'],
		['Bayaran Royalti kpd Kerajaan/Ba& berkanun (sila nyatakan jenis royalti)**','F090026'],
		['Bayaran Royalti kpd NGO/tajaan korporat (sila nyatakan jenis royalti)**','F090027'],
		['Taksiran (ke atas tanah & bangunan) & cukai tanah','F090030'],
		['Cukai jalan','F090031'],
		['Bayaran pendaftaran perniagaan, lesen memandu dsb.','F090032'],
		['Cukai perkhidmatan & cukai jualan','F091010'],# salah kod daa
		['Kerugian daripada pertukaran wang asing/aset kewangan','F091011'],
		['Kerugian daripada jualan/penilaian semula harta','F091012'],
		['Hutang lapuk dihapuskan','F091013'],
		['Pindahan semasa seperti pindahan wang, hadiah, derma, denda, dsb.','F091014'],
		['Lain-lain perbelanjaan bukan operasi (sila nyatakan)','F091015'],
		['Adakah pertubuhan ini terlibat dengan aktiviti e-sukan?','F091016'],
		['Jika Ya, sila nyatakan jumlah perbelanjaan dalam aktiviti e-sukan ini?','F091017'],
		['Lain-lain perbelanjaan operasi (sila nyatakan butir-butir di bawah)','F090035'],# salah kod daa
		['Gaji & upah dibayar','F090036'],
		['Bayaran pampasan, persaraan/pemberhentian kpd pekerja','F090037'],
		['Rawatan perubatan percuma','F090038'],
		['Bayaran berbentuk manfaat - Lain-lain seperti makanan percuma, tempat tinggal percuma dsb.','F090039'],
		['Kumpulan Wang Simpanan Pekerja (KWSP)','F090040'],
		['Kumpulan wang simpanan lain','F090041'],
		['Pertubuhan Keselamatan Sosial (PERKESO)','F090042'],
		['Skim keselamatan sosial persendirian (cth. Insurans pampasan pekerja dsb.)','F090043'],
		['Skim bayaran pampasan, persaraan/pemberhentian','F090044'],
		['Bayaran kpd pengarah tidak bekerja kerana kehadiran mereka dalam mesyuarat Lembaga Pengarah**','F090045'],
		['Nilai pakaian percuma yg disediakan**','F090046'],
		['Kos latihan kpd pekerja**','F090047'],
		['Kos pengangkutan pekerja (pergi & balik dari tempat kerja)','F090048'],
		['Bayaran levi pekerja','F090049'],
		['Perbelanjaan pembayaran berasaskan saham kpd pekerja (termasuk saham & pilihan saham)','F090050'],
		['Kos pekerja lain (sila nyatakan)','F090051'],
		['Bayaran kpd pertubuhan lain yg membekalkan pekerja','F090052'],# salah kod daa
		['Bayaran bagi perkhidmatan keselamatan','F090067'],
		['Jumlah perbelanjaan (9.1 hingga 9.34)','F090089'],
		['Pindahan modal yg dibuat','F090053'],
		['Perbelanjaan pajakan kewangan','F090054'],
		['Dividen berbayar','F090055'],
		['Cukai langsung dibayar (cth. Cukai syarikat & duti setem)','F090056'],
		['JUMLAH BESAR (9.35 hingga 9.39)','F090099'],
		];
		#
		return $data;//return array($tajuk,$data);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('belanjaKp337V01')):
	function belanjaKp337V01()
	{
		// belanja | hasil | stok
		$data['kp337'] = [
		['nama medan Belanja','kodMedan','IO','Asal'],
		['Kos barang yg dijual','F090009','*',1534294],
		['Kos pembaikan, pemasangan & penyelenggaraan','F098501','**',69333],
		['Nilai bekalan-Bahan & bekas pembungkus','F090002','**',null],
		['Nilai bekalan-Bahan-bahan utk pembaikan & penyelenggaraan','F090003','**',1385],
		['Nilai bekalan-Alat tulis & bekalan pejabat','F090005','**',null],
		['Nilai bekalan-Lain2','F090057','**',206294],
		['Kos percetakan','F090058','**',1626],
		['Air yg dibeli','F090006','**',780],
		['Tenaga elektrik yg dibeli','F090007','**',5561],
		['Bahan pembakar, pelincir & gas','F090008','**',null],
		['Bayaran pembaikan & penyelenggaraan semasa yg dibuat oleh pihak lain bagi harta tetap pertubuhan ini','F090011','',807],
		['Pengiklanan & promosi','F090063','**',null],
		['Bayaran pemprosesan data & lain2 perkhidmatan yg berkaitan dengan teknologi maklumat','F090016','',null],
		['Bayaran telekomunikasi (cth. Telefon, internet dsb.)','F090017','**',5185],
		['Komisen & bayaran agensi','F090109','',33520],
		['Pembelian perkhidmatan pengangkutan','F090119','**',3000],
		['Perbelanjaan perjalanan (termasuk perjalanan dalam & luar negara, bil petrol/diesel & bayaran letak kereta sendiri','F091002','',325],
		['Bayaran pos (termasuk perkhidmatan kurier)','F091007','',null],
		['Bayaran perakaunan, kesetiausahaan & audit','F091003','',7180],
		['Bayaran guaman','F091004','',null],
		['Bayaran pengurusan','F091005','',null],
		['Perbelanjaan keraian','F091006','',990],
		['Bayaran bank','F091008','',292],
		['Premium insurans dibayar ke atas bangunan, jentera, alat pengangkutan & barang','F091009','',121214],
		['Bayaran faedah','F090025','',null],
		['Bayaran perkhidmatan profesional lain (cth. Bayaran perundingan arkitek, kejuruteraan, juruukur dsb.)','F090080','',null],
		['Perbelanjaan penyelidikan & pembangunan','F090012','',null],
		['R&D Dalaman => %','F090013','',null],
		['R&D Sumber luaran => %','F090014','',null],
		['Bayaran Sewa Tanah','F090019','',null],
		['Bayaran Sewa Bangunan','F090020','**',24000],
		['Bayaran Sewa Jentera & kelengkapan','F090021','**',null],
		['Bayaran Sewa Kenderaan bermotor & jenis pengangkutan lain','F090022','**',null],
		['Bayaran Sewa Lain2','F090023','**',null],
		['Susut nilai/perlunasan semasa ke atas harta tetap','F090024','',5159],
		['Bayaran Royalti kepada Kerajaan/Ba& berkanun','F090026','**',null],
		['','F090026a','',null],
		['Bayaran Royalti kepada NGO/tajaan korporat','F090027','**',null],
		['','F090027a','',null],
		['Taksiran (ke atas tanah & bangunan) & cukai tanah','F090030','',null],
		['Cukai jalan','F090031','',null],
		['Bayaran pendaftaran perniagaan, lesen memandu dsb.','F090032','',2850],
		['Cukai perkhidmatan & cukai jualan','F091010','',17732],
		['Kerugian daripada pertukaran wang asing/aset kewangan','F091011','',null],
		['Kerugian daripada jualan/penilaian semula harta','F091012','',257],
		['Hutang lapuk dihapuskan','F091013','',null],
		['Pindahan semasa seperti pindahan wang, hadiah, derma, denda, dsb.','F091014','',1200],
		['Lain2 perbelanjaan bukan operasi (sila nyatakan)','F091015','',null],
		['','F091015a','',null],
		['Adakah pertubuhan ini terlibat dengan aktiviti e-sukan?','F091016','',null],
		['Jika Ya, sila nyatakan jumlah perbelanjaan dalam aktiviti e-sukan ini?','F091017','',null],
		['Lain2 perbelanjaan operasi (sila nyatakan butir-butir di bawah)','F090035','**',578],
		['','F090035a','',null],
		['Gaji & upah dibayar','F090036','',151656],
		['Bayaran pampasan, persaraan/pemberhentian kepada pekerja','F090037','',null],
		['Rawatan perubatan percuma','F090038','**',null],
		['Bayaran berbentuk manfaat - Lain2 spt makanan percuma, tempat tinggal percuma dsb.','F090039','',262],
		['Kumpulan Wang Simpanan Pekerja (KWSP)','F090040','',9702],
		['Kumpulan wang simpanan lain','F090041','',null],
		['Pertubuhan Keselamatan Sosial (PERKESO)','F090042','',1842],
		['Skim keselamatan sosial persendirian (cth. Insurans pampasan pekerja dsb.)','F090043','',null],
		['Skim bayaran pampasan, persaraan/pemberhentian','F090044','',null],
		['Bayaran kepada pengarah tak bekerja kerana kehadiran mereka dalam mesyuarat Lembaga Pengarah','F090045','**',null],
		['Nilai pakaian percuma yg disediakan','F090046','**',null],
		['Kos latihan kepada pekerja','F090047','**',null],
		['Kos pengangkutan pekerja(pergi & balik dari tempat kerja)','F090048','',null],
		['Bayaran levi pekerja','F090049','',null],
		['Perbelanjaan pembayaran berasaskan saham kpd pekerja','F090050','',null],
		['Kos pekerja lain (sila nyatakan)','F090051','',null],
		['','F090051a','',null],
		['Bayaran kepada pertubuhan lain yg membekalkan pekerja','F090052','',null],
		['Bayaran bagi perkhidmatan keselamatan','F090067','',null],
		['Jumlah perbelanjaan (9.1 hingga 9.34)','F090089','',2207024],#74
		//['Pindahan modal yg dibuat','F090053','',null],
		//['Perbelanjaan pajakan kewangan','F090054','',null],
		//['Dividen berbayar','F090055','',null],
		//['Cukai langsung dibayar (cth. Cukai syarikat & duti setem)','F090056','',null],
		//['BELANJA JUMLAH BESAR (9.35 hingga 9.39)','F090099','',2207024],#79
		];
		#
		return $data;//return array($tajuk,$data);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('hasilKp337V01')):
	function hasilKp337V01()
	{
		// belanja | hasil | stok
		$data['kp337'] = [
		['nama medanHasil','kodMedan','IO','Asal'],
		['Jualan barang-barang','F088501','*',2007664],
		['Jualan kenderaan bermotor','F088502','*',null],
		['Jualan alat ganti & aksesori','F088503','*',null],
		['Jualan petrol & gas','F088504','*',null],
		['Pendapatan dari bayaran perkhidmatan pembaikan pemasangan & penyelenggaraan','F088505','*',null],
		['Komisen & brokeraj & yuran yg diterima','F080011','*',32718],
		['Pendapatan daripada perkhidmatan pengurusan','F080010','',130638],
		['Royalti, hakcipta, pelesenan & yuran francais','F080014','*',null],
		['Pendapatan perkhidmatan yg diterima','F080022','',7448],
		['Hasil Sewa Tanah','F080012','',null],
		['Hasil Sewa Bangunan tempat kediaman','F080034','*',null],
		['Hasil Sewa Bangunan bukan tempat kediaman ','F080035','*',null],
		['Hasil Sewa Alat pengangkutan','F080039','*',null],
		['Hasil Sewa Jentera & kelengkapan','F080061','*',null],
		['Hasil Sewa Perabot & pemasangan','F080062','*',null],
		['Hasil Sewa Lain2','F080013','*',null],
		['Subsidi gaji & upah','F080064','',null],
		['Subsidi produk','F080065','',null],
		['Subsidi pengeluaran','F080066','',null],
		['Tuntutan & pampasan yg diterima','F080067','',null],
		['Pemulihan hutang lapuk','F080068','',null],
		['Pendapatan daripada faedah','F080069','',38],
		['Pendapatan daripada dividen','F080070','',null],
		['Keuntungan daripada jualan/penilaian semula harta','F080071','',null],
		['Keuntungan daripada pertukaran mata wang asing/aset kewangan','F080072','',null],
		['Kiriman wang, hadiah atau geran yg diterima','F080073','',3874],
		['Lain2 pendapatan bukan operasi (sila nyatakan)','F080074','',null],
		['Lain2 pendapatan operasi (sila nyatakan)','F080016','',null],
		['Jika Ya, sila nyatakan jumlah pendapatan dalam aktiviti e-sukan ini','F080076','',null],
		['Jumlah pendapatan (8.1 hingga 8.10)','F080089','',2182380],#32
		//['Pindahan modal yg diterima','F080017','',null],
		//['HASIL JUMLAH BESAR (8.11 hingga 8.12)','F080099','',2182380],#34
		];
		#
		return $data;//return array($tajuk,$data);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('stokKp337V01')):
	function stokKp337V01()
	{
		// belanja | hasil | stok
		$data['kp337'] = [
		['nama medan stok','kodMedan','IO','Asal'],
		['stok-awal','F100199','',384350],
		['stok akhir','F100299','',173600],
		];
		#
		return $data;//return array($tajuk,$data);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('cariDataNilai')):
	function cariDataNilai($data,$kod)
	{
		foreach ($data as $key => $values):
			if($kod == $values[1]):
				//echo "<hr>$kod($key) = " . $values[0];
				return $values[0];
			endif;
		endforeach;

		return null;
		//$nilai[] = cariNilai($dataKp['kp337'],'F090036');# utk debug
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('cariPeratusKp337')):
	function cariPeratusKp337($anggar,$asal,$data)
	{
		if(is_numeric($data)):
			$peratus = $data / $asal;
			$anggaran = number_format($peratus * $anggar,0,'','');
			$peratus = number_format($peratus,4,'.','');
			//$jumAnggar += $data;
		else:
			$peratus = $anggaran = 0;
		endif;
		#
		return [$peratus,$anggaran];
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('kiraBakiKp337')):
	function kiraBakiKp337($kira,$jumAnggar,$anggaran,$anggar,$kodJadual)
	{
		if(is_numeric($anggaran)):
			//$peratus = number_format($peratus,4,'.','');
			if($kira == '73' && $kodJadual == 'belanja'):
				$jumAnggar = 'baki=' . ($anggar - $jumAnggar);
			elseif($kira == '30' && $kodJadual == 'hasil'):
				$jumAnggar = 'baki=' . ($anggar - $jumAnggar);
			else:
				$jumAnggar += $anggaran;
			endif;
		endif;
		#
		return $jumAnggar;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################