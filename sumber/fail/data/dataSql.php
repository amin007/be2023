<?php
###################################################################################################
//require 'fungsi_global.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
/*
$tajuk['xxx'] = '#,-';
$data['xxx'] = array(
	array('','',''),
	array('','',''),
	array('','',''),
);//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx2')):
	function sqlXxx2($fe)
	{
		$sqlFeBarcode = sqlFeBarcode($fe);
		$sql = '';
		// $sqlXxx2 = sqlXxx2($fe);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlFeBarcode')):
	function sqlSelectBintang($jadual,$fe,$id,$peratus)
	{
		$sql = "SELECT * FROM `$jadual` LIMIT 10";
		// $sqlFeBarcode = sqlFeBarcode($fe);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlFeBarcode')):
	function sqlFeBarcode($jadualBe,$fe,$id)
	{
		$sql = "SELECT `barcode` FROM `$jadualBe` WHERE fe like '%$fe%'"
		. "and `barcode` = '$id' ";
		// $sqlFeBarcode = sqlFeBarcode($fe);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlDataAesV00')):
	function sqlDataAesV00($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		$sql = 'select * from `'.$jadual.'` '
		. "where `Serial No` in ( $sqlFeBarcode )";
		// $sqlDataAesV00 = sqlDataAesV00($jadualBe,$jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlDataAesV01')):
	function sqlDataAesV01($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		$sql = "select `Serial No`,`Name Pertubuhan`,`KP`,`F010028`,`F010029`,`F010030`
		from `$jadual` where `Serial No` in ( $sqlFeBarcode )
		union
		select `F041799`,`F041899`,`F050799`,`F051699`,`F050899`,`F051799`
		from `$jadual` where `Serial No` in ( $sqlFeBarcode )
		union
		select
		`F080099`,`F090024`,`F090036`,`F090099`,`F100299`,`F110001`
		from `$jadual` where `Serial No` in ( $sqlFeBarcode )
		union
		select
		`Kod Industri (MSIC)`,`Nilai Jualan Barangan & Perkhidmatan (RM)`,`Kos Barangan Yang Dijual (RM)`
		from `$jadual` where `Serial No` in ( $sqlFeBarcode )
		union
		select
		`Jumlah Pendapatan (RM)`,`Jumlah Perbelanjaan (RM)`,`Nilai output kasar (RM)`,`Nilai input perantaraan (RM)`
		from `$jadual` where `Serial No` in ( $sqlFeBarcode )
		union
		select
		`Nilai ditambah (RM)`,`Jumlah pekerja`,`Gaji & upah yang dibayar (RM)`,`Nilai harta yang dimiliki pada akhir tahun (RM)`
		from `$jadual` where `Serial No` in ( $sqlFeBarcode )";
		// $sqlDataAesV01 = sqlDataAesVV01($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlCariMsicAes')):
	function sqlCariMsicAes($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		$sql = "SELECT * FROM `$jadualBe`
		WHERE barcode in(
		SELECT `Serial No` FROM `$jadual`
		WHERE `Kod Industri (MSIC)` = '46491')";
		// $sqlCariMsicAes = sqlCariMsicAes($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx2')):
		data newss be2023 5p.csv
		data ssm roc servis.csv
endif;//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx2')):
#https://stackoverflow.com/questions/15930514/mysql-auto-increment-temporary-column-in-select-statement
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlNewssV00')):
	function sqlNewssV00($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		$sql = "/*sql v00*/
		SELECT * FROM `$jadual`
		CROSS JOIN (SELECT @cnt := 0) AS dummy
		WHERE `NO_SIRI` IN ($sqlFeBarcode)";
		// $sqlNewssV00 = sqlNewssV00($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlNewssV01')):
	function sqlNewssV01($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);/*sql v01*/
		$sql = "SELECT (@cnt := @cnt + 1) AS Bil,
		`NO_SIRI`,CONCAT_WS('-',BUSINESS_REG_NO,CHECK_DIGIT) as NOSSM,
		CONCAT_ws('|',`NAMA_PENDAFTARAN`,`NAMA_PERNIAGAAN`) as syarikat,
		`PEGAWAI LUAR`,`ID_FE`,`BORANG PANJANG/ PENDEK`,
		`YR_REFERENCE_YEAR`,`YR_WORKER_HEAD_COUNT` as staf ,`YR_SALARY_AMT` as gaji,
		`YR_FIXED_ASSET_AMT` as harta,
		`YR_CLOSE_STOCKS_AMT` as stok,
		`YR_SALES_AMT` as jualan,
		`YR_REVENUE_AMT` as hasil,
		`YR_OTHER_WORK_AMT`,
		`YR_INCOME_AMT` as pendapatan,
		`YR_EXPENDITURE_AMT` belanja
		FROM `$jadual`
		CROSS JOIN (SELECT @cnt := 0) AS dummy
		WHERE `NO_SIRI` IN ($sqlFeBarcode)";
		// $sqlNewssV01 = sqlNewssV01($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlNewssV02')):
	function sqlNewssV02($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);/*sql v02*/
		$sql = "SELECT (@cnt := @cnt + 1) AS Bil,
		`NO_SIRI`,CONCAT_WS('-',BUSINESS_REG_NO,CHECK_DIGIT) as NOSSM,
		CONCAT_ws('|',`NAMA_PENDAFTARAN`,`NAMA_PERNIAGAAN`) as syarikat,
		`ID_FE`,`BORANG PANJANG/ PENDEK`,
		CONCAT_ws('|',`TAHUN DAFTAR`,`PENDUA`,`CATATAN SEMAKAN`) as nota,
		`YR_WORKER_HEAD_COUNT` as staf ,`YR_SALARY_AMT` as gaji,
		`YR_FIXED_ASSET_AMT` as harta,
		`YR_CLOSE_STOCKS_AMT` as stok,
		`YR_SALES_AMT` as jualan,
		`YR_REVENUE_AMT` as hasil,
		`YR_EXPENDITURE_AMT` belanja,
		`YR_IMPORT_GOODS_AMT`,
		`YR_IMPORT_SERVICES_AMT`,
		`YR_EXPORT_SERVICES_AMT`,
		`YR_OUTPUT_AMT`,
		`YR_INPUT_AMT`
		FROM `$jadual`
		CROSS JOIN (SELECT @cnt := 0) AS dummy
		WHERE `NO_SIRI` IN ($sqlFeBarcode)";
		// $sqlNewssV02 = sqlsqlNewssV02($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlNewssV03')):
	function sqlNewssV03($jadualBe,$jadual,$fe,$id,$peratus)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);/*sql v03*/
		$sql = "SELECT (@cnt := @cnt + 1) AS Bil,
		`NO_SIRI`,CONCAT_WS('-',BUSINESS_REG_NO,CHECK_DIGIT) as NOSSM,
		CONCAT_ws('|',`NAMA_PENDAFTARAN`,`NAMA_PERNIAGAAN`) as syarikat,
		`ID_FE`,`msic 2008`,`BORANG PANJANG/ PENDEK` AS JenisBrg,
		`TAHUN DAFTAR`,`PENDUA`,
		`CATATAN SEMAKAN` as Nota02,
		`YR_WORKER_HEAD_COUNT` as staf ,`YR_SALARY_AMT` as gaji,
		`YR_FIXED_ASSET_AMT` as harta,
		`YR_CLOSE_STOCKS_AMT` as stok,
		`YR_SALES_AMT` as jualan,
		FORMAT(`YR_REVENUE_AMT`,0) as hasil,
		FORMAT(`YR_EXPENDITURE_AMT`,0) belanja,
		FORMAT((YR_REVENUE_AMT * $peratus),0) as anggarHasil,
		FORMAT((YR_EXPENDITURE_AMT * $peratus),0) as anggarBelanja,
		FORMAT((`YR_FIXED_ASSET_AMT` * $peratus),0) as anggarHarta,
		FORMAT((`YR_SALARY_AMT` * $peratus),0) as anggarGaji

		FROM `$jadual`
		CROSS JOIN (SELECT @cnt := 0) AS dummy
		WHERE `NO_SIRI` IN ($sqlFeBarcode)";
		// $sqlNewssV03 = sqlNewssV03($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlNewssV04')):
	function sqlNewssV04($jadualBe,$jadual,$fe,$id,$peratus)
	{
		$sql = "SELECT `NO_SIRI`,CONCAT_WS('-',BUSINESS_REG_NO,CHECK_DIGIT) as NOSSM,
		CONCAT_ws('|',`NAMA_PENDAFTARAN`,`NAMA_PERNIAGAAN`) as syarikat,
		`ID_FE`,`kp`,`msic`,`msic 2008`,`BORANG PANJANG/ PENDEK` AS JenisBrg,
		`TAHUN DAFTAR`,`PENDUA`,`CATATAN SEMAKAN` as Nota02,
		`YR_WORKER_HEAD_COUNT` as staf ,`YR_SALARY_AMT` as gaji,
		`YR_FIXED_ASSET_AMT` as harta,
		`YR_CLOSE_STOCKS_AMT` as stok,
		`YR_SALES_AMT` as jualan,
		FORMAT(`YR_REVENUE_AMT`,0) as hasil,
		FORMAT(`YR_EXPENDITURE_AMT`,0) belanja,
		FORMAT((YR_REVENUE_AMT * $peratus),0) as anggarHasil,
		FORMAT((YR_EXPENDITURE_AMT * $peratus),0) as anggarBelanja,
		FORMAT((`YR_FIXED_ASSET_AMT` * $peratus),0) as anggarHarta,
		FORMAT((`YR_SALARY_AMT` * $peratus),0) as anggarGaji,
		concat_ws('|',orang,notel,nofax,email,orangB,notelB,nofaxB,email1,emailB) as DataNewss,
		`DataRespon`,`Akauntan`,`DataMKO`,`DataSumberLuar`,
		concat_ws('|',format(DataHasil,0),DataHasil) as DataHasil,
		concat_ws('|',format(DataBelanja,0),DataBelanja) as DataBelanja,
		concat_ws('|',format(DataGaji,0),DataGaji) as DataGaji,
		concat_ws('|',format(DataHarta,0),DataHarta) as DataHarta,
		concat_ws('|',format(DataPekerja,0),DataPekerja) as DataPekerja,
		concat_ws('|',format(DataStok,0),DataStok) as DataStok

		FROM `$jadual` a INNER JOIN `$jadualBe` b
		ON a.NO_SIRI = b.barcode
		WHERE `NO_SIRI` = '$id' ";
		// $sqlNewssV03 = sqlNewssV03($jadual,$fe,$id);
		//echo $sql;
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx2')):

		MSIC,KP,sektor,ESTABLISHMENT_ID,BUSINESS_REG_NO,REGISTERED_NAME,
		TRADING_NAME,ROC_vchcompanyno,ROC_vchcompanyname,ROC_Tahun_Kewangan_Terkini
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSsmRocHartaV00')):
	function sqlSsmRocHartaV00($jadualBe,$jadual,$fe,$id,$peratus)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		$sql = "SELECT ESTABLISHMENT_ID,
		BUSINESS_REG_NO,REGISTERED_NAME,TRADING_NAME,
		ROC_vchcompanyno NOSSM,ROC_vchcompanyname NAMESSM,
		MSIC,KP,sektor,
		ROC_Tahun_Kewangan_Terkini AS thnkewangan,ROC_dtdateoftabling,
		ROC_chraccrualaccount,ROC_dtdatefinancialyearend datefinancial,
		ROC_chrtypefinancialreport,
		FORMAT(ROC_dblfixedasset,0) as fixedAsset,
		FORMAT((ROC_dblfixedasset * $peratus),0) as anggarFixedAsset,
		FORMAT(ROC_dblpaidupcapital,0) as paidupcapital,
		ROC_dblsharepremium

		FROM `$jadual`
		where `ESTABLISHMENT_ID` in ($sqlFeBarcode)";
		// $sqlSsmRocHartaV00 = sqlSsmRocHartaV00($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSsmRocHartaV01')):
	function sqlSsmRocHartaV01($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		$sql = "SELECT (@cnt := @cnt + 1) AS Bil,ESTABLISHMENT_ID,
		BUSINESS_REG_NO,REGISTERED_NAME,TRADING_NAME,ROC_vchcompanyno,ROC_vchcompanyname,MSIC,KP,sektor,
		ROC_Tahun_Kewangan_Terkini AS thnkewangan,ROC_dtdateoftabling,
		/*ROC_chraccrualaccount,ROC_dtdatefinancialyearend,ROC_chrtypefinancialreport,*/
		ROC_dblfixedasset,
		ROC_dbltotalinvestment,
		ROC_dblcurrentasset,
		ROC_dblothersasset,
		ROC_dblcontigentliability,
		ROC_dblpaidupcapital,
		ROC_dblsharepremium,
		ROC_dblinappropriateprofit,
		ROC_dblminorityinterest,
		ROC_dblshareapplaccount,
		ROC_dbllongtermliability,
		ROC_dblliability,
		ROC_dblreserves,

		FROM `$jadual`
		CROSS JOIN (SELECT @cnt := 0) AS dummy
		where `ESTABLISHMENT_ID` in ($sqlFeBarcode)";
		// $sqlSsmRocHartaV01 = sqlSsmRocHartaV01($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx2')):
		# nama medan
		id,STATE_A,PO_A,STATE_A,PO_A,
		ROC_vchauditfirmname,ROC_vchauditfirmaddr1,ROC_vchauditfirmaddr2,ROC_vchauditfirmaddr3,
		ROC_vchauditfirmpostcode,ROC_vchauditfirmtown,ROC_vchauditfirmstate,ROC_dtdateoftabling,
		ROC_chraccrualaccount,ROC_dtdatefinancialyearend,
		ROC_chrtypefinancialreport,
		ROC_dblfixedasset,
		ROC_dbltotalinvestment,
		ROC_dblcurrentasset,
		ROC_dblothersasset,
		ROC_dblcontigentliability,
		ROC_dblpaidupcapital,
		ROC_dblsharepremium,
		ROC_dblinappropriateprofit,
		ROC_dblminorityinterest,
		ROC_dblshareapplaccount,
		ROC_dbllongtermliability,
		ROC_dblliability,
		ROC_dblreserves,
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSsmRocUntungRugiV00')):
	function sqlSsmRocUntungRugiV00($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		$sql = "select * from `$jadual`
		where `ESTABLISHMENT_ID` in ( $sqlFeBarcode )";
		// $sqlSsmRocUntungRugiV00 = sqlSsmRocUntungRugiV00($jadualBe,$jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSsmRocUntungRugiV01')):
	function sqlSsmRocUntungRugiV01($jadualBe,$jadual,$fe,$id,$peratus)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		//$sql = "SELECT (@cnt := @cnt + 1) AS Bil,ESTABLISHMENT_ID,
		$sql = "SELECT ESTABLISHMENT_ID,
		BUSINESS_REG_NO,REGISTERED_NAME,TRADING_NAME,ROC_vchcompanyno NOSSM,
		ROC_vchcompanyname NAMESSM,
		MSIC,KP,sektor,ROC_PnL_Tahun_Kewangan_Terkini as ThnKewangan,
		ROC_PnL_dtdatefinancialyearend as DateFinancial,
		FORMAT(ROC_PnL_dblturnover,0) as turnoverJualan,
		FORMAT(ROC_PnL_dblrevenue,0) as dblrevenueHasil,
		FORMAT(ROC_PnL_dblrevenue * $peratus,0) as anggarDblrevenue,
		FORMAT(ROC_PnL_dblrevenue - ROC_PnL_dblprofitbeforetax,0) as belanja89,
		FORMAT((ROC_PnL_dblrevenue - ROC_PnL_dblprofitbeforetax)*0.04,0) as anggarStok,
		FORMAT(ROC_PnL_dblprofitbeforetax,0) as dblprofitbeforetax,
		FORMAT(ROC_PnL_dblprofitbeforetax * $peratus,0) as anggarProfitBeforeTax,
		FORMAT(ROC_PnL_dblrevenue - ROC_PnL_dblprofitaftertax,0) as belanja99,
		FORMAT(ROC_PnL_dblprofitaftertax,0) as dblprofitaftertax,
		FORMAT(ROC_PnL_dblprofitaftertax * $peratus,0) as anggarProfitAfterTax,
		FORMAT(ROC_PnL_dblprofitshareholder,0) as profitshareholder,
		FORMAT(ROC_PnL_dblnetdividend,0) as netdividend

		FROM `$jadual` where `ESTABLISHMENT_ID` in ( $sqlFeBarcode )";
		// $sqlSsmRocUntungRugiV01 = sqlSsmRocUntungRugiV01($jadualBe,$jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSsmRocInfoV00')):
	function sqlSsmRocInfoV00($jadualBe,$jadual,$fe,$id,$peratus)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		//$sql = "SELECT (@cnt := @cnt + 1) AS Bil,ESTABLISHMENT_ID,
		$sql = "SELECT ESTABLISHMENT_ID,BUSINESS_REG_NO,REGISTERED_NAME,TRADING_NAME,
		ROC_vchcompanyno NOSSM,ROC_vchcompanyname NAMESSM,
		MSIC,KP,sektor,	ROC_status,ROC_dtincorporationdate,
		ROC_dtdissolveddate,ROC_nama_pendaftaran_lama,
		ROC_vchbusinessdescription,
		ROC_vchcompanynumbernewformat
		FROM `$jadual` where `ESTABLISHMENT_ID` in ( $sqlFeBarcode )";
		// $sqlSsmRocInfoV00 = sqlSsmRocInfoV00($jadualBe,$jadual,$fe,$id,$peratus);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*
		a.ROC_status,ROC_dtincorporationdate,
		ROC_dtdissolveddate,ROC_nama_pendaftaran_lama,
		ROC_vchbusinessdescription,
		ROC_vchcompanynumbernewformat

		ROC_Tahun_Kewangan_Terkini AS thnkewangan,ROC_dtdateoftabling,
		ROC_chraccrualaccount,ROC_dtdatefinancialyearend datefinancial,
		ROC_chrtypefinancialreport,
		FORMAT(ROC_dblfixedasset,0) as fixedAsset,
		FORMAT((ROC_dblfixedasset * $peratus),0) as anggarFixedAsset,
		FORMAT(ROC_dblpaidupcapital,0) as paidupcapital,
		ROC_dblsharepremium,
		ROC_PnL_Tahun_Kewangan_Terkini as ThnKewangan,
		ROC_PnL_dtdatefinancialyearend as DateFinancial,
		FORMAT(ROC_PnL_dblturnover,0) as turnoverJualan,
		FORMAT(ROC_PnL_dblrevenue,0) as dblrevenueHasil,
		FORMAT(ROC_PnL_dblrevenue * $peratus,0) as anggarDblrevenue,
		FORMAT(ROC_PnL_dblrevenue - ROC_PnL_dblprofitbeforetax,0) as belanja89,
		FORMAT((ROC_PnL_dblrevenue - ROC_PnL_dblprofitbeforetax)*0.04,0) as anggarStok,
		FORMAT(ROC_PnL_dblprofitbeforetax,0) as dblprofitbeforetax,
		FORMAT(ROC_PnL_dblprofitbeforetax * $peratus,0) as anggarProfitBeforeTax,
		FORMAT(ROC_PnL_dblrevenue - ROC_PnL_dblprofitaftertax,0) as belanja99,
		FORMAT(ROC_PnL_dblprofitaftertax,0) as dblprofitaftertax,
		FORMAT(ROC_PnL_dblprofitaftertax * $peratus,0) as anggarProfitAfterTax,
		FORMAT(ROC_PnL_dblprofitshareholder,0) as profitshareholder,
		FORMAT(ROC_PnL_dblnetdividend,0) as netdividend
		#
*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSsmRocInfoAll')):
	function sqlSsmRocInfoAll($jadual,$fe,$id,$peratus,$staf)
	{
		$jadualBe = $jadual[0];
		$jadualInfo = $jadual[6];//info
		$jadualHarta = $jadual[3];//harta
		$jadualUntung = $jadual[4];//untung rugi
		#------------------------------------------------------------------------------------------
		$belanja89 = 'ROC_PnL_dblrevenue - ROC_PnL_dblprofitbeforetax';
		$cukaiLama = 'ROC_PnL_dblprofitaftertax - ROC_PnL_dblprofitbeforetax';
		$belanja99 = "($belanja89 + $cukaiLama)";
		#------------------------------------------------------------------------------------------
		$anggarHasil = "ROC_PnL_dblrevenue * $peratus";
		$anggarBelanja89 = "((ROC_PnL_dblrevenue - ROC_PnL_dblprofitbeforetax) * $peratus)";
		$cukaiBaru = "(ROC_PnL_dblprofitaftertax - ROC_PnL_dblprofitbeforetax) * $peratus";
		$anggarBelanja99 = "( ($anggarBelanja89 + $cukaiBaru) * $peratus)";
		$anggarProfitBeforeTax = "ROC_PnL_dblprofitbeforetax * $peratus";
		$anggarProfitAfterTax = "ROC_PnL_dblprofitaftertax * $peratus";
		$anggarHarta = "(ROC_dblfixedasset * $peratus)";
		$anggarStok = "$anggarBelanja89 * 0.04";
		#------------------------------------------------------------------------------------------
		$pengurus = $staf['pengurus']; $asas = $staf['asas']; $bil = $staf['bil'];
		$gajiAsas = "(($bil-1)*$asas*13)";
		$gajiPengurus = "($pengurus*13)";
		$gajiStaf = "($gajiPengurus+$gajiAsas)";
		#------------------------------------------------------------------------------------------
		//$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		//$sql = "SELECT (@cnt := @cnt + 1) AS Bil,ESTABLISHMENT_ID,
		$sql = "
		SELECT a.ESTABLISHMENT_ID,a.BUSINESS_REG_NO,a.REGISTERED_NAME,a.TRADING_NAME,
		a.MSIC,a.KP,ROC_Tahun_Kewangan_Terkini AS thnkewangan,ROC_dtdateoftabling,
		ROC_chraccrualaccount,ROC_dtdatefinancialyearend datefinancial,
		ROC_chrtypefinancialreport,ROC_dblsharepremium,
		FORMAT(ROC_dblfixedasset,0) as fixedAsset,
		FORMAT(ROC_dblpaidupcapital,0) as paidupcapital,
		ROC_PnL_Tahun_Kewangan_Terkini as ThnKewangan,
		ROC_PnL_dtdatefinancialyearend as DateFinancial,
		FORMAT(ROC_PnL_dblturnover,0) as turnoverJualan,
		FORMAT(ROC_PnL_dblrevenue,0) as dblrevenueHasil,
		FORMAT($belanja89,0) as belanja89,
		FORMAT($cukaiLama,0) as cukaiLama,
		FORMAT($belanja99,0) as belanja99,
		FORMAT(ROC_PnL_dblprofitbeforetax,0) as dblprofitbeforetax,
		FORMAT(ROC_PnL_dblprofitaftertax,0) as dblprofitaftertax,
		FORMAT(ROC_PnL_dblprofitshareholder,0) as profitshareholder,
		FORMAT(ROC_PnL_dblnetdividend,0) as netdividend,
		FORMAT($anggarHasil,0) as anggarHasil,
		FORMAT($anggarBelanja89,0) as anggarBelanja89,
		FORMAT($cukaiBaru,0) as cukaiBaru,
		FORMAT($anggarBelanja99,0) as anggarBelanja99,
		FORMAT($anggarProfitBeforeTax,0) as anggarProfitBeforeTax,
		FORMAT($anggarProfitAfterTax,0) as anggarProfitAfterTax,
		FORMAT($anggarHarta,0) as anggarHarta,
		FORMAT($gajiPengurus,0) as anggarGajiPengurus,
		FORMAT($gajiAsas,0) as anggarGajiAsas,
		FORMAT($gajiStaf,0) as anggarGaji,
		FORMAT($bil,0) as anggarStaf,
		FORMAT($anggarStok,0) as anggarStok

		FROM `$jadualHarta` a INNER JOIN `$jadualUntung` b
		on a.ESTABLISHMENT_ID = b.ESTABLISHMENT_ID
		WHERE a.ESTABLISHMENT_ID = '$id' ";
		// $sqlSsmRocInfoAll = sqlSsmRocInfoAll($jadual,$fe,$id,$peratus);
		//semakPembolehubah('<br>' . $sql,'sql',0);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx2')):

		id,STATE_A,PO_A,MSIC,KP,sektor,subsektor,ESTABLISHMENT_ID,BUSINESS_REG_NO,REGISTERED_NAME,TRADING_NAME,
		ROC_vchcompanyno,ROC_vchcompanyname,ROC_PnL_Tahun_Kewangan_Terkini,ROC_PnL_dtdatefinancialyearend,
		ROC_PnL_dblturnover,ROC_PnL_dblrevenue,ROC_PnL_dblprofitbeforetax,ROC_PnL_dblprofitaftertax,
		ROC_PnL_dblextraordinaryitem,ROC_PnL_dblminorityinterest,ROC_PnL_dblprofitshareholder,
		ROC_PnL_dblprioradjustment,ROC_PnL_dblnetdividend,ROC_PnL_dbltransferred,ROC_PnL_dblothers,
		ROC_PnL_dblinappropriateprofitcf,ROC_PnL_dblgrossdividendrate,ROC_PnL_dblinappropriateprofitbf
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlRangkaKwspV00')):
	function sqlRangkaKwspV00($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		$sql = "select * from `$jadual`
		where `ESTABLISHMENT_ID` in ( $sqlFeBarcode )";
		// $sqlRangkaKwspV00 = sqlRangkaKwspV00($jadualBe,$jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlRangkaKwspV01')):
	function sqlRangkaKwspV01($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		$sql = "select LPAD(ESTABLISHMENT_ID, 12, '0') as newss,BUSINESS_REG_NO as NOSSM,
		concat_ws(\"\r\",REGISTERED_NAME,TRADING_NAME) as NamaPerniagaan,
		STATUS_AKTIVITI as Status,BILANGAN_PEKERJA as Staf,
		NOMBOR_MAJIKAN,NO_TELEFON,NO_FAKS,EMEL_EMEL
		from `$jadual`
		where `ESTABLISHMENT_ID` in ( $sqlFeBarcode )";
		// $sqlRangkaKwspV01 = sqlRangkaKwspV01($jadualBe,$jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlRangkaKwspV02')):
	function sqlRangkaKwspV02($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		$sql = "select (@cnt := @cnt + 1) AS Bil,LPAD(ESTABLISHMENT_ID, 12, '0') as newss,
		BUSINESS_REG_NO as NOSSM,concat_ws(\"\r\",REGISTERED_NAME,TRADING_NAME) as NamaPerniagaan,
		STATUS_AKTIVITI as Status,BILANGAN_PEKERJA as Staf,
		NOMBOR_MAJIKAN,NO_TELEFON,NO_FAKS,EMEL_EMEL
		from `$jadual` CROSS JOIN (SELECT @cnt := 0) AS dummy
		where `ESTABLISHMENT_ID` in ( $sqlFeBarcode )";
		// $sqlRangkaKwspV02 = sqlRangkaKwspV02($jadualBe,$jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlRangkaKwspV03')):

	function sqlRangkaKwspV03($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		$sql = "SELECT @rownr:=@rownr+1 AS Bil,LPAD(ESTABLISHMENT_ID, 12, '0') as newss,
		BUSINESS_REG_NO as NOSSM,concat_ws(\"\r\",REGISTERED_NAME,TRADING_NAME) as NamaPerniagaan,
		STATUS_AKTIVITI as Status,BILANGAN_PEKERJA as Staf,
		NO_TELEFON,NO_FAKS,EMEL_EMEL
		from `$jadual`
		where `ESTABLISHMENT_ID` in ( $sqlFeBarcode )
		and  STATUS_AKTIVITI = 1
		ORDER BY 4";
		// $sqlRangkaKwspV03 = sqlRangkaKwspV03($jadualBe,$jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlRangkaKwspV04')):
	function sqlRangkaKwspV04($jadualBe,$jadual,$fe,$id)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id);
		$sql = "SELECT ROW_NUMBER() OVER (ORDER BY REGISTERED_NAME) as Bil,
		LPAD(ESTABLISHMENT_ID, 12, '0') as newss,
		BUSINESS_REG_NO as NOSSM,concat_ws(\"\r\",REGISTERED_NAME,TRADING_NAME) as NamaPerniagaan,
		STATUS_AKTIVITI as Status,BILANGAN_PEKERJA as Staf,
		NO_TELEFON,NO_FAKS,EMEL_EMEL
		from `$jadual`
		where `ESTABLISHMENT_ID` in ( $sqlFeBarcode )
		and STATUS_AKTIVITI = 1
		ORDER BY 4";
		// $sqlRangkaKwspV04 = sqlRangkaKwspV04($jadualBe,$jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlRangkaKwspV05')):
	function sqlRangkaKwspV05($jadualBe,$jadual,$fe,$id,$peratus,$staf)
	{
		$sqlFeBarcode = sqlFeBarcode($jadualBe,$fe,$id,$peratus);
		$pengurus = $staf['pengurus'];
		$asas = $staf['asas'];
		$peratusGaji = $staf['peratusGaji'];
		$stafPengurus = "($pengurus*13)";
		$stafBaki = "((BILANGAN_PEKERJA-1)*$asas*13)";
		$anggarGaji = "($stafPengurus + $stafBaki) * $peratus";
		$anggarBelanja = "$anggarGaji/(1 - $peratusGaji )";
		$anggarStok = "($anggarGaji/(1 - $peratusGaji ))*0.04";
		$anggarHasil = "$anggarBelanja/0.92";
		$anggarHarta = "$anggarHasil/0.18";
		//$sql = "SET @rownr=0;
		//SELECT @rownr:=@rownr+1 AS Bil,LPAD(ESTABLISHMENT_ID, 12, '0') as newss,
		$sql = "SELECT ESTABLISHMENT_ID,BUSINESS_REG_NO as NOSSM,
		concat_ws('|',REGISTERED_NAME,TRADING_NAME) as NamaPerniagaan,
		NO_TELEFON Tel,NO_FAKS Fax,EMEL_EMEL Emel,
		STATUS_AKTIVITI as Status,BILANGAN_PEKERJA as Staf,
		FORMAT($stafPengurus,0) as anggarGajiPengurus,
		FORMAT($stafBaki,0) as anggarGajiRM1500,
		FORMAT($stafPengurus + $stafBaki,0) as Gaji,
		FORMAT($anggarHasil,0) as anggarHasil,
		FORMAT($anggarBelanja,0) as anggarBelanja,
		FORMAT(($stafPengurus + $stafBaki) * $peratus,0) as anggarGaji,
		FORMAT($anggarHarta,0) as anggarHarta,
		BILANGAN_PEKERJA as Staf,
		FORMAT($anggarStok,0) as anggarStok
		from `$jadual`
		where `ESTABLISHMENT_ID` = '$id' ";
		// $sqlRangkaKwspV05 = sqlRangkaKwspV05($jadual,$fe,$id);
		//echo $sql;
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx2')):
		# nama medan
		ID,STATE_A,PO_A,MSIC,KP,sektor,subsektor,ESTABLISHMENT_ID,BUSINESS_REG_NO,REGISTERED_NAME,TRADING_NAME,
		NOMBOR_MAJIKAN,NAMA_MAJIKAN,
		ALAMAT_POS_BARIS1,ALAMAT_POS_BARIS2,ALAMAT_POS_BARIS3,ALAMAT_POS_BARIS4,ALAMAT_POS_BARIS5,ALAMAT_POS_BARIS6,
		ALAMAT_POS_POSKOD,ALAMAT_POS_NEGERI,ALAMAT_POS_NEGARA,ALAMAT_PERNIAGAAN_BARIS1,ALAMAT_PERNIAGAAN_BARIS2,
		ALAMAT_PERNIAGAAN_BARIS3,ALAMAT_PERNIAGAAN_BARIS4,ALAMAT_PERNIAGAAN_BARIS5,ALAMAT_PERNIAGAAN_BARIS6,
		ALAMAT_PERNIAGAAN_POSKOD,ALAMAT_PERNIAGAAN_NEGERI,
		NO_TELEFON,NO_FAKS,EMEL_EMEL,STATUS_AKTIVITI,BILANGAN_PEKERJA

endif;//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx2')):
		# nama medan
		`YR_IMPORT_GOODS_AMT`,
		`YR_IMPORT_SERVICES_AMT`,
		`YR_EXPORT_SERVICES_AMT`,
		`YR_OUTPUT_AMT`,
		`YR_INPUT_AMT`,
		`YR_AREA_SIZE`,
		`YR_OUTPUT_QTY`
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlCreateBe2023Newss5P')):
	function sqlCreateBe2023Newss5P($jadualBe,$jadual,$fe,$id)
	{
		$sql = 'CREATE TABLE `' . $jadual . '`(
		`BIL` int(11) DEFAULT NULL/*1:string:1*/,
		`SAMPLE_ESTABLISHMENT_ID` varchar(8) DEFAULT NULL/*12653602:string:8*/,
		`NO_SIRI` varchar(12) DEFAULT NULL/*000001543646:string:12*/,
		`NAMA_PENDAFTARAN` varchar(100) DEFAULT NULL/*BBC PELITA PLANTATION (JEPAK) SDN. BHD.:string:39*/,
		`NAMA_PERNIAGAAN` text DEFAULT NULL/*:string:0*/,
		`SEMUA ALAMAT` varchar(100) DEFAULT NULL/*NO.84 KAMPONG GELANG CHINCHIN SEGAMAT, 85000 Segamat:string:52*/,
		`ALAMAT` varchar(100) DEFAULT NULL/*NO.84 KAMPONG GELANG CHINCHIN SEGAMAT:string:37*/,
		`SAMA_ALAMAT` text DEFAULT NULL/*:string:0*/,
		`POSKOD` varchar(5) DEFAULT NULL/*85000:string:5*/,
		`Daerah Pentadbiran Asal Sampel` varchar(7) DEFAULT NULL/*Segamat:string:7*/,
		`Mukim` varchar(6) DEFAULT NULL/*Sermin:string:6*/,
		`ATTENTION_NAME_A` varchar(5) DEFAULT NULL/*HAMID:string:5*/,
		`TEL_NO_A` varchar(9) DEFAULT NULL/*137494920:string:9*/,
		`EMAIL_A` varchar(100) DEFAULT NULL/*angela.robert@bbcgroup.com.my:string:29*/,
		`ATTENTION_NAME2_A` text DEFAULT NULL/*:string:0*/,
		`TEL_NO2_A` text DEFAULT NULL/*:string:0*/,
		`EMAIL2_A` text DEFAULT NULL/*:string:0*/,
		`STRATA` text DEFAULT NULL/*4:string:1*/,
		`MSIC` varchar(5) DEFAULT NULL/*01131:string:5*/,
		`BBU_SBU` varchar(3) DEFAULT NULL/*SBU:string:3*/,
		`NGDBBP` varchar(7) DEFAULT NULL/*1144047:string:7*/,
		`OPERATION_ORGUNIT_ID` varchar(10) DEFAULT NULL/*JPN01_P003:string:10*/,
		`JPN_PO` varchar(100) DEFAULT NULL/*Pejabat Operasi Muar:string:20*/,
		`STATE_ID` text DEFAULT NULL/*1:string:1*/,
		`DISTRICT_ID` varchar(3) DEFAULT NULL/*108:string:3*/,
		`CENSUS_DISTRICT_ID` varchar(4) DEFAULT NULL/*1144:string:4*/,
		`ID_PEGAWAI` text DEFAULT NULL/*ismail.roslan:string:13*/,
		`ID_PENYELIA` varchar(11) DEFAULT NULL/*amran.bakar:string:11*/,
		`ID_FE` varchar(6) DEFAULT NULL/*PMS 20:string:6*/,
		`TR` varchar(4) DEFAULT NULL/*2022:string:4*/,
		`PROFILE_ID` varchar(100) DEFAULT NULL/*SSE101/2023/001:string:15*/,
		`EB_ID` varchar(6) DEFAULT NULL/*359355:string:6*/,
		`KOD_NEGERI` varchar(2) DEFAULT NULL/*01:string:2*/,
		`KOD_DP` varchar(2) DEFAULT NULL/*08:string:2*/,
		`ID_DAERAH` varchar(3) DEFAULT NULL/*108:string:3*/,
		`NAMA_DAERAH` varchar(7) DEFAULT NULL/*Segamat:string:7*/,
		`FE 2023` text DEFAULT NULL/*:string:0*/,
		`DAERAH` text DEFAULT NULL/*:string:0*/,
		`PENYIASATAN` text DEFAULT NULL/*:string:0*/,
		`FE SEMAKAN SSM` varchar(100) DEFAULT NULL/*NUR ARISA BINTI RAHMAN:string:22*/,
		`FE SEMAKAN KERJLUAR` text DEFAULT NULL/*:string:0*/,
		`Kod_Penyiasatan` varchar(3) DEFAULT NULL/*101:string:3*/,
		`sektor` varchar(9) DEFAULT NULL/*PERTANIAN:string:9*/,
		`subsektor` varchar(7) DEFAULT NULL/*TANAMAN:string:7*/,
		`KOD PENY` text DEFAULT NULL/*8:string:1*/,
		`MSIC 2008` varchar(5) DEFAULT NULL/*01131:string:5*/,
		`KETERANGAN MSIC 2008 (BM)` text DEFAULT NULL/*Penanaman sayur-sayuran berdaun atau berbatang:string:46*/,
		`JENIS_PENDAFTARAN` varchar(9) DEFAULT NULL/*SSM - ROC:string:9*/,
		`NEW_BUSINESS_REG_NO` varchar(8) DEFAULT NULL/*2.00E+11:string:8*/,
		`TAHUN DAFTAR` varchar(4) DEFAULT NULL/*1995:string:4*/,
		`BUSINESS_REG_NO` varchar(6) DEFAULT NULL/*358139:string:6*/,
		`CHECK_DIGIT` text DEFAULT NULL/*K:string:1*/,
		`PENDUA` text DEFAULT NULL/*:string:0*/,
		`KOD AWALAN MKO NEWSS` varchar(2) DEFAULT NULL/*11:string:2*/,
		`NAMA PMS SEMAK SSM` varchar(100) DEFAULT NULL/*NUR ARISA BINTI RAHMAN:string:22*/,
		`KES WAJIB A11 KP100 BE 2023` text DEFAULT NULL/*:string:0*/,
		`FE RUTIN 2023` text DEFAULT NULL/*:string:0*/,
		`PENYIASATAN RUTIN 2023` text DEFAULT NULL/*:string:0*/,
		`KOD SAMBUTAN JAN 2023` text DEFAULT NULL/*:string:0*/,
		`MOD OPERASI JAN 2023` text DEFAULT NULL/*:string:0*/,
		`FE RUTIN 2022` text DEFAULT NULL/*:string:0*/,
		`PENYIASATAN RUTIN 2022` text DEFAULT NULL/*:string:0*/,
		`CATATAN SEMAKAN` varchar(100) DEFAULT NULL/*Akaun aktif hingga 2022:string:23*/,
		`JENIS BORANG BE 2021` text DEFAULT NULL/*:string:0*/,
		`MAIN PO DOSM BE 2021` text DEFAULT NULL/*:string:0*/,
		`PO KERJALUAR BE 2021` text DEFAULT NULL/*:string:0*/,
		`PEGAWAI KERJALUAR BE 2021` text DEFAULT NULL/*:string:0*/,
		`Status Respon BE 2021` text DEFAULT NULL/*:string:0*/,
		`Status Rekod BE 2021` text DEFAULT NULL/*:string:0*/,
		`SEKSYEN JB` text DEFAULT NULL/*:string:0*/,
		`Kes Rutin 2023 Ekonomi` text DEFAULT NULL/*:string:0*/,
		`WARNA KERTAS F2` varchar(11) DEFAULT NULL/*Kuning Cair:string:11*/,
		`SEKSYEN` varchar(100) DEFAULT NULL/*PMS Banci Ekonomi (Operasi):string:27*/,
		`PENYELIA` varchar(100) DEFAULT NULL/*AMRAN BIN ABU BAKAR:string:19*/,
		`TEAM` text DEFAULT NULL/*2:string:1*/,
		`PEGAWAI LUAR` varchar(100) DEFAULT NULL/*MD ALIF HAIQAL BIN NORZAILAN:string:28*/,
		`ID_PEGAWAI2` text DEFAULT NULL/*ismail.roslan:string:13*/,
		`ID_PENYELIA2` varchar(11) DEFAULT NULL/*amran.bakar:string:11*/,
		`ID_FE2` varchar(10) DEFAULT NULL/*FEJohor267:string:10*/,
		`BORANG PANJANG/ PENDEK` varchar(100) DEFAULT NULL/*Borang Panjang (KP Khusus):string:26*/,
		`YR_REFERENCE_YEAR` int(11) DEFAULT NULL/*2021:string:4*/,
		`YR_WORKER_HEAD_COUNT` int(11) DEFAULT NULL/*5:string:1*/,
		`YR_OUTPUT_AMT` int(11) DEFAULT NULL/*:string:0*/,
		`YR_INPUT_AMT` int(11) DEFAULT NULL/*:string:0*/,
		`YR_FIXED_ASSET_AMT` bigint(20) DEFAULT NULL/*341145:string:6*/,
		`YR_SALARY_AMT` bigint(20) DEFAULT NULL/*120575:string:6*/,
		`YR_AREA_SIZE` int(11) DEFAULT NULL/*:string:0*/,
		`YR_OUTPUT_QTY` int(11) DEFAULT NULL/*:string:0*/,
		`YR_CLOSE_STOCKS_AMT` int(11) DEFAULT NULL/*:string:0*/,
		`YR_SALES_AMT` bigint(20) DEFAULT NULL/*:string:0*/,
		`YR_REVENUE_AMT` bigint(20) DEFAULT NULL/*255256:string:6*/,
		`YR_OTHER_WORK_AMT` int(11) DEFAULT NULL/*:string:0*/,
		`YR_INCOME_AMT` bigint(20) DEFAULT NULL/*:string:0*/,
		`YR_EXPENDITURE_AMT` bigint(20) DEFAULT NULL/*192358:string:6*/,
		`YR_BU_TYPE` text DEFAULT NULL/*:string:0*/,
		`YR_ABROAD_INVESTMENT_FLAG` varchar(5) DEFAULT NULL/*Tidak:string:5*/,
		`YR_NONRESIDENT_OWNERSHIP_PERC` text DEFAULT NULL/*:string:0*/,
		`YR_KATEGORI_EKS_PKS` varchar(5) DEFAULT NULL/*Mikro:string:5*/,
		`YR_NOT_IN_EKS_CATEGORY_FLAG` text DEFAULT NULL/*:string:0*/,
		`YR_IMPORT_GOODS_AMT` int(11) DEFAULT NULL/*:string:0*/,
		`YR_IMPORT_SERVICES_AMT` int(11) DEFAULT NULL/*:string:0*/,
		`YR_EXPORT_SERVICES_AMT` int(11) DEFAULT NULL/*:string:0*/
		)CHARACTER SET utf8 COLLATE utf8_general_ci;';
		// $sqlXxx2 = sqlXxx2($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx2')):endif;//*/
/*
$tajuk['xxx'] = '#,-';
$data['xxx'] = array(
	array('','',''),
	array('','',''),
	array('','',''),
);//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# data carian semua jadual
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlCariBintangDaa')):
	function sqlCariBintangDaa($jadual,$medan,$id)
	{
		$sql = "SELECT * FROM `$jadual` WHERE `$medan` like '$id'"
		. "";
		// $sqlCariBintangDaa = sqlCariBintangDaa($jadual,$medan,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlFeJe')):
	function sqlFeJe($jadualBe,$fe)
	{
		$sql = "SELECT `barcode` FROM `$jadualBe` WHERE fe like '%$fe%'"
		. "";
		// $sqlFeBarcode = sqlFeBarcode($fe);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSemuaAes')):
	function sqlSemuaAes($jadualBe,$jadual,$fe)
	{
		$sqlFeBarcode = sqlFeJe($jadualBe,$fe);
		$sql = 'select * from `'.$jadual.'` '
		. "where `Serial No` in ( $sqlFeBarcode )";
		// $sqlDataAesV00 = sqlDataAesV00($jadualBe,$jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSemuaNewss')):
	function sqlSemuaNewss($jadualBe,$jadual,$fe,$peratus)
	{
		$sqlFeBarcode = sqlFeJe($jadualBe,$fe);/*sql v03*/
		$sql = "SELECT (@cnt := @cnt + 1) AS Bil,
		`NO_SIRI`,CONCAT_WS('-',BUSINESS_REG_NO,CHECK_DIGIT) as NOSSM,
		CONCAT_ws('|',`NAMA_PENDAFTARAN`,`NAMA_PERNIAGAAN`) as syarikat,
		`ID_FE`,kp,msic,`BORANG PANJANG/ PENDEK` JenisBrg,
		CONCAT_ws('|',`TAHUN DAFTAR`,`PENDUA`,`CATATAN SEMAKAN`) as nota,
		`YR_WORKER_HEAD_COUNT` as staf ,`YR_SALARY_AMT` as gaji,
		`YR_FIXED_ASSET_AMT` as harta,
		`YR_CLOSE_STOCKS_AMT` as stok,
		`YR_SALES_AMT` as jualan,
		FORMAT(`YR_REVENUE_AMT`,0) as hasil,
		FORMAT(`YR_EXPENDITURE_AMT`,0) belanja,
		FORMAT((YR_REVENUE_AMT * $peratus),0) as anggarHasil,
		FORMAT((YR_EXPENDITURE_AMT * $peratus),0) as anggarBelanja,
		FORMAT((`YR_FIXED_ASSET_AMT` * $peratus),0) as anggarHarta,
		FORMAT((`YR_SALARY_AMT` * $peratus),0) as anggarGaji

		FROM `$jadual`
		CROSS JOIN (SELECT @cnt := 0) AS dummy
		WHERE `NO_SIRI` IN ($sqlFeBarcode)";
		// $sqlNewssV03 = sqlNewssV03($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSemuaSsmRocHarta')):
	function sqlSemuaSsmRocHarta($jadualBe,$jadual,$fe,$peratus)
	{
		$sqlFeBarcode = sqlFeJe($jadualBe,$fe);
		$sql = "SELECT ESTABLISHMENT_ID,
		BUSINESS_REG_NO,REGISTERED_NAME,TRADING_NAME,ROC_vchcompanyno,ROC_vchcompanyname,MSIC,KP,sektor,
		ROC_Tahun_Kewangan_Terkini AS thnkewangan,ROC_dtdateoftabling,
		ROC_chraccrualaccount,ROC_dtdatefinancialyearend,ROC_chrtypefinancialreport,
		FORMAT(ROC_dblfixedasset,0) as fixedAsset,
		FORMAT((ROC_dblfixedasset * $peratus),0) as anggarFixedAsset,
		FORMAT(ROC_dblpaidupcapital,0) as paidupcapital,
		ROC_dblsharepremium

		FROM `$jadual`
		where `ESTABLISHMENT_ID` in ($sqlFeBarcode)";
		// $sqlSsmRocHartaV00 = sqlSsmRocHartaV00($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSemuaSsmRocUntungRugi')):
	function sqlSemuaSsmRocUntungRugi($jadualBe,$jadual,$fe,$peratus)
	{
		$sqlFeBarcode = sqlFeJe($jadualBe,$fe);
		$sql = "SELECT ESTABLISHMENT_ID,
		BUSINESS_REG_NO,REGISTERED_NAME,TRADING_NAME,ROC_vchcompanyno,ROC_vchcompanyname,
		MSIC,KP,sektor,ROC_PnL_Tahun_Kewangan_Terkini,ROC_PnL_dtdatefinancialyearend,
		FORMAT(ROC_PnL_dblrevenue,0) as dblrevenue,
		FORMAT(ROC_PnL_dblrevenue * $peratus,0) as anggarDblrevenue,
		FORMAT(ROC_PnL_dblrevenue - ROC_PnL_dblprofitbeforetax,0) as belanja89,
		FORMAT(ROC_PnL_dblprofitbeforetax,0) as dblprofitbeforetax,
		FORMAT(ROC_PnL_dblprofitbeforetax * $peratus,0) as anggarDblprofitbeforetax,
		FORMAT(ROC_PnL_dblrevenue - ROC_PnL_dblprofitaftertax,0) as belanja99,
		FORMAT(ROC_PnL_dblprofitaftertax,0) as dblprofitaftertax,
		FORMAT(ROC_PnL_dblprofitaftertax * $peratus,0) as anggarDblprofitaftertax,
		FORMAT(ROC_PnL_dblprofitshareholder,0) as dblprofitshareholder,
		FORMAT(ROC_PnL_dblnetdividend,0) as dblnetdividend

		FROM `$jadual`
		where `ESTABLISHMENT_ID` in ( $sqlFeBarcode )";
		// $sqlSsmRocUntungRugiV01 = sqlSsmRocUntungRugiV01($jadualBe,$jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSemuaKwsp')):
	function sqlSemuaKwsp($jadualBe,$jadual,$fe,$peratus)
	{
		$sqlFeBarcode = sqlFeJe($jadualBe,$fe);
		//$sql = "SET @rownr=0;
		//SELECT @rownr:=@rownr+1 AS Bil,LPAD(ESTABLISHMENT_ID, 12, '0') as newss,
		$sql = "SELECT ESTABLISHMENT_ID,BUSINESS_REG_NO as NOSSM,
		concat_ws('|',REGISTERED_NAME,TRADING_NAME) as NamaPerniagaan,
		STATUS_AKTIVITI as Status,BILANGAN_PEKERJA as Staf,
		concat_ws('|',NO_TELEFON,NO_FAKS,EMEL_EMEL) as InfoTelMel
		from `$jadual`
		where `ESTABLISHMENT_ID` in ( $sqlFeBarcode )";
		// $sqlRangkaKwspV05 = sqlRangkaKwspV05($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSemuaKwspHarta')):
	function sqlSemuaKwspHarta($jadualBe,$jadualSSM,$jadual,$fe,$peratus)
	{
		$sqlFeBarcode = sqlFeJe($jadualBe,$fe);
		$sql = "SELECT ESTABLISHMENT_ID,BUSINESS_REG_NO as NOSSM,
		concat_ws('|',REGISTERED_NAME,TRADING_NAME) as NamaPerniagaan,
		STATUS_AKTIVITI as Status,BILANGAN_PEKERJA as Staf,
		concat_ws('|',NO_TELEFON,NO_FAKS,EMEL_EMEL) as InfoTelMel
		from `$jadual`
		where `ESTABLISHMENT_ID` in
		( SELECT ESTABLISHMENT_ID FROM `$jadualSSM` where `ESTABLISHMENT_ID`
		in ($sqlFeBarcode ) )";
		// $sqlRangkaKwspV05 = sqlRangkaKwspV05($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlMkoDaa')):
	function sqlMkoDaa($jadual,$id)
	{
		$sql ="SELECT `barcode`,`kp`,`msic`,`FE`,`NO SSM`,`nama`,
		concat_ws('|',orang,notel,nofax,email,orangB,notelB,nofaxB,email1,emailB) as DataNewss,
		`DataRespon`,`Akauntan`,`DataMKO`,`DataSumberLuar`,
		concat_ws('|',format(DataHasil,0),DataHasil) as DataHasil,
		concat_ws('|',format(DataBelanja,0),DataBelanja) as DataBelanja,
		concat_ws('|',format(DataGaji,0),DataGaji) as DataGaji,
		concat_ws('|',format(DataHarta,0),DataHarta) as DataHarta,
		concat_ws('|',format(DataPekerja,0),DataPekerja) as DataPekerja,
		concat_ws('|',format(DataStok,0),DataStok) as DataStok
		FROM `$jadual`
		WHERE `barcode` = '$id' ";
		// $sqlMkoDaa = sqlMkoDaa($jadual,$id);
		return $sql;
	}
endif;//*/

#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlUpdateMedan')):
	function sqlUpdateMedan($jadualBe,$jadual,$fe,$peratus)
	{
		$sql = "UPDATE `$jadual` SET `ESTABLISHMENT_ID`=LPAD(`ESTABLISHMENT_ID`, 12, '0');";
		// $sqlUpdateMedan = sqlUpdateMedan($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################