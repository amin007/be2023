<?php
###################################################################################################
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
if ( ! function_exists('output337')):
	function output337()
	{
		$p = 'The VALUE OF OUTPUT, (F088501+ F088502+ F088503+ F088504+ F088505+ '
		. ' F080011- F090009+ F080014+ F080022+ F080034+ F080035+ F080039+ F080034+ '
		. 'F080061+ F080062+ F080013+ F041399) ';
		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('input337')):
	function input3337()
	{
		$p = 'COST OF INPUT (F098501+ F090002+ F090003+ F090005+ F090057+ F090058+ '
		. ' F090006+ F090007+ F090008+ F090063+ F090017+ F090119+ F090020+ F090021+ F090022+ '
		. ' F090023+ F090026+ F090027+ F090035+ F090045+ F090046+ F090047)';
		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('namaMedanOutputKp337')):
	function namaMedanOutputKp337()
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
		['Lain-lain pendapatan bukan operasi (sila nyatakan)','F080074'],
		['Lain-lain pendapatan operasi (sila nyatakan)','F080016'],
		['Adakah pertubuhan ini mempunyai pendapatan daripada aktiviti e-sukan?','F080075'],
		['Jika Ya, sila nyatakan jumlah pendapatan dalam aktiviti e-sukan ini','F080076'],
		['Jumlah pendapatan (8.1 hingga 8.10) ','F080089'],
		['Pindahan modal yang diterima','F080017'],
		['JUMLAH BESAR (8.11 hingga 8.12)','F080099'],
		];

		return array($tajuk,$data);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('namaMedanInputKp337')):
	function namaMedanInputKp337()
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
if ( ! function_exists('namaMedanKp337')):
	function namaMedanKp337()
	{
		$tajuk['kp337'] = 'nama medan,kod medan';
		$data['kp337'] = [
		['Jumlah Harta Binn Sendiri*','F041399'],
		['Jualan barang-barang*','F088501'],
		//['Sila nyatakan peratus (%) eksport berdasarkan jumlah nilai jualan pada tahun rujukan','F080002'],
		//['Sila nyatakan peratus (%) eksport produk halal berdasarkan jumlah nilai jualan pada tahun rujukan','F080060'],
		['(%)eksport jualan','F080002'],
		['(%)eksport produk halal dari jualan','F080060'],
		['Jualan kenderaan bermotor*','F088502'],
		['Jualan alat ganti dan aksesori*','F088503'],
		['Jualan petrol dan gas*','F088504'],
		['Pendapatan dari bayaran perkhidmatan pembaikan pemasangan dan penyelenggaraan*','F088505'],
		['Komisen dan brokeraj dan yuran yang diterima*','F080011'],
		['Pendapatan daripada perkhidmatan pengurusan','F080010'],
		['Royalti, hakcipta, pelesenan dan yuran francais*','F080014'],
		['Pendapatan perkhidmatan yang diterima*','F080022'],
		['Hasil Sewa Tanah','F080012'],
		['Hasil Sewa Bangunan tempat kediaman*','F080034'],
		['Hasil Sewa Bangunan bukan tempat kediaman*','F080035'],
		['Hasil Sewa Alat pengangkutan*','F080039'],
		['Hasil Sewa Jentera dan kelengkapan*','F080061'],
		['Hasil Sewa Perabot dan pemasangan*','F080062'],
		['Hasil Sewa Lain-lain*','F080013'],
		['Subsidi','F080063'],
		['Subsidi gaji dan upah','F080064'],
		['Subsidi produk','F080065'],
		['Subsidi pengeluaran','F080066'],
		['Tuntutan dan pampasan yang diterima','F080067'],
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
		['Kos pembaikan, pemasangan dan penyelenggaraan**','F098501'],
		['Nilai bekalan-Bahan dan bekas pembungkus**','F090002'],
		['Nilai bekalan-Bahan-bahan untuk pembaikan dan penyelenggaraan**','F090003'],
		['Nilai bekalan-Alat tulis dan bekalan pejabat**','F090005'],
		['Nilai bekalan-Lain-lain**','F090057'],
		['Kos percetakan**','F090058'],
		['Air yang dibeli**','F090006'],
		['Tenaga elektrik yang dibeli**','F090007'],
		['Bahan pembakar, pelincir dan gas**','F090008'],
		['Bayaran pembaikan dan penyelenggaraan semasa yang dibuat oleh pihak lain bagi harta tetap pertubuhan ini','F090011'],
		['Pengiklanan dan promosi**','F090063'],
		['Bayaran pemprosesan data dan lain-lain perkhidmatan yang berkaitan dengan teknologi maklumat','F090016'],
		['Bayaran telekomunikasi (cth. Telefon, internet dsb.)**','F090017'],
		['Komisen dan bayaran agensi','F090109'],
		['Pembelian perkhidmatan pengangkutan**','F090119'],
		['Perbelanjaan perjalanan (termasuk perjalanan dalam dan luar negara, bil petrol/diesel dan bayaran letak kereta sendiri','F091002'],
		['Bayaran pos (termasuk perkhidmatan kurier)','F091007'],
		['Bayaran perakaunan, kesetiausahaan dan audit','F091003'],
		['Bayaran guaman','F091004'],
		['Bayaran pengurusan','F091005'],
		['Perbelanjaan keraian','F091006'],
		['Bayaran bank','F091008'],
		['Premium insurans dibayar ke atas bangunan, jentera, alat pengangkutan dan barang','F091009'],
		['Bayaran faedah','F090025'],
		['Bayaran perkhidmatan profesional lain (cth. Bayaran perundingan arkitek, kejuruteraan, juruukur dsb.)','F090080'],
		['Perbelanjaan penyelidikan dan pembangunan','F090012'],
		['R&D Dalaman => %','F090013'],
		['R&D Sumber luaran => %','F090014'],
		['Bayaran Sewa Tanah','F090019'],
		['Bayaran Sewa Bangunan**','F090020'],
		['Bayaran Sewa Jentera dan kelengkapan**','F090021'],
		['Bayaran Sewa Kenderaan bermotor dan jenis pengangkutan lain**','F090022'],
		['Bayaran Sewa Lain-lain**','F090023'],
		['Susut nilai/perlunasan semasa ke atas harta tetap','F090024'],
		['Bayaran Royalti kepada Kerajaan/Badan berkanun (sila nyatakan jenis royalti)**','F090026'],
		['Bayaran Royalti kepada Organisasi bukan kerajaan/tajaan korporat (sila nyatakan jenis royalti)**','F090027'],
		['Taksiran (ke atas tanah dan bangunan) dan cukai tanah','F090030'],
		['Cukai jalan','F090031'],
		['Bayaran pendaftaran perniagaan, lesen memandu dsb.','F090032'],
		['Cukai perkhidmatan dan cukai jualan','F090010'],
		['Kerugian daripada pertukaran wang asing/aset kewangan','F091011'],
		['Kerugian daripada jualan/penilaian semula harta','F091012'],
		['Hutang lapuk dihapuskan','F091013'],
		['Pindahan semasa seperti pindahan wang, hadiah, derma, denda, dsb.','F091014'],
		['Lain-lain perbelanjaan bukan operasi (sila nyatakan)','F091015'],
		['Adakah pertubuhan ini terlibat dengan aktiviti e-sukan?','F091016'],
		['Jika Ya, sila nyatakan jumlah perbelanjaan dalam aktiviti e-sukan ini?','F091017'],
		['Lain-lain perbelanjaan operasi (sila nyatakan butir-butir di bawah)**','F091035'],
		['Gaji & upah dibayar','F090036'],
		['Bayaran pampasan, persaraan/pemberhentian kepada pekerja','F090037'],
		['Rawatan perubatan percuma','F090038'],
		['Bayaran berbentuk manfaat - Lain-lain seperti makanan percuma, tempat tinggal percuma dsb.','F090039'],
		['Kumpulan Wang Simpanan Pekerja (KWSP)','F090040'],
		['Kumpulan wang simpanan lain','F090041'],
		['Pertubuhan Keselamatan Sosial (PERKESO)','F090042'],
		['Skim keselamatan sosial persendirian (cth. Insurans pampasan pekerja dsb.)','F090043'],
		['Skim bayaran pampasan, persaraan/pemberhentian','F090044'],
		['Bayaran kepada pengarah tidak bekerja kerana kehadiran mereka dalam mesyuarat Lembaga Pengarah**','F090045'],
		['Nilai pakaian percuma yang disediakan**','F090046'],
		['Kos latihan kepada pekerja**','F090047'],
		['Kos pengangkutan pekerja (pergi dan balik dari tempat kerja)','F090048'],
		['Bayaran levi pekerja','F090049'],
		['Perbelanjaan pembayaran berasaskan saham kepada pekerja (termasuk saham & pilihan saham)','F090050'],
		['Kos pekerja lain (sila nyatakan)','F090051'],
		['Bayaran kepada pertubuhan lain yang membekalkan pekerja','F090057'],
		['Bayaran bagi perkhidmatan keselamatan','F090067'],
		['Jumlah perbelanjaan (9.1 hingga 9.34)','F090089'],
		['Pindahan modal yang dibuat','F090053'],
		['Perbelanjaan pajakan kewangan','F090054'],
		['Dividen berbayar','F090055'],
		['Cukai langsung dibayar (cth. Cukai syarikat dan duti setem)','F090056'],
		['JUMLAH BESAR (9.35 hingga 9.39)','F090099'],
		];

		return array($tajuk,$data);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('cariNilai')):
	function cariNilai($data, $kod)
	{
		foreach ($data as $key => $values):
			if($kod == $values[1]):
				//echo "<hr>$kod($key) = " . $values[0];
				return $values[0];
			endif;
		endforeach;

		return null;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*$nilai[] = cariNilai($data['kp337'], 'F090036');
$nilai[] = cariNilai($data['kp337'], 'F090024');
$nilai[] = cariNilai($data['kp337'], 'Bayaran levi pekerja');
$nilai[] = cariNilai($data['kp337'], 'F090019');
//*/
#--------------------------------------------------------------------------------------------------