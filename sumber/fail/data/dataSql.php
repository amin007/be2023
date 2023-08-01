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
if ( ! function_exists('sqlSelectBintang')):
	function sqlSelectBintang($jadual,$fe,$id,$peratus)
	{
		$sql = "SELECT * FROM `$jadual` LIMIT 10";
		// $sql['SelectBintang'] = sqlSelectBintang($fe);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlFeBarcode')):
	function sqlFeBarcode($jadualBe,$fe,$id)
	{
		$sql = "SELECT `barcode` FROM `$jadualBe` WHERE fe like '%$fe%'"
		. "and `barcode` = '$id' ";
		// $sql['FeBarcode'] = sqlFeBarcode($fe);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlBarcode')):
	function sqlBarcode($jadualBe,$id)
	{
		$sql = "SELECT * FROM `$jadualBe` WHERE `barcode` = '$id';";
		// $sql['FeBarcode'] = sqlFeBarcode($fe);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSelectBatch')):
	function sqlSelectBatch($jadual,$tarikh)
	{
		//$sql = "SELECT * FROM `$jadual` WHERE tarikhBatch = '$tarikh' ";
		$sql = "SELECT /*(@cnt := @cnt + 1) AS Bil,*/"
		. "\rbarcode `NO. SIRI`, kp `KP`,"
		. "\rconcat_ws('<br>',nama,perniagaan) `NAMA PERTUBUHAN`,"
		. "\rDataRespon `KOD RESPON`,"
		. "\rtarikhBatch `TARIKH SERAH`, catatanBatch `CATATAN`"
		. "\rFROM `$jadual`"
		//. "\rCROSS JOIN (SELECT @cnt := 0) AS dummy"
		. "\rWHERE tarikhBatch = '$tarikh' "
		. "\rORDER BY 3 ";
		// $sql['FeBarcode'] = sqlSelectBatch($jadual,$tarikh);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSelectMko')):
	function sqlSelectMko($jadual,$tarikh)
	{
		//$sql = "SELECT * FROM `$jadual` WHERE tarikhBatch = '$tarikh' ";
		$sql = "SELECT /*(@cnt := @cnt + 1) AS Bil,*/"
		. "\rbarcode `NO. SIRI`, /*kp `KP`,*/"
		. "\rconcat_ws('<br>',nama,perniagaan) `NAMA PERTUBUHAN`,"
		//. "\rDataRespon `KOD RESPON`,"
		. "\rtarikhBatch `TARIKH SERAH`, /*catatanBatch `CATATAN`,*/"
		. "Akauntan,concat_ws('<br>',nama,DataMKO) `DataMKO`,"
		. "DataHasil,DataBelanja,DataGaji,"
		. "DataHarta,DataPekerja,DataStok"
		. "\rFROM `$jadual`"
		//. "\rCROSS JOIN (SELECT @cnt := 0) AS dummy"
		. "\rWHERE tarikhBatch = '$tarikh' "
		. "\rORDER BY 2 ";
		// $sql['FeBarcode'] = sqlSelectMko($jadual,$tarikh);
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
		// $sql['DataAesV00'] = sqlDataAesV00($jadualBe,$jadual,$fe,$id);
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
		// $sql['DataAesV01'] = sqlDataAesVV01($jadual,$fe,$id);
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
		// $sql['CariMsicAes'] = sqlCariMsicAes($jadual,$fe,$id);
		return $sql;
	}
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
		// $sql['NewssV00'] = sqlNewssV00($jadual,$fe,$id);
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
		// $sql['NewssV01'] = sqlNewssV01($jadual,$fe,$id);
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
		// $sql['NewssV02'] = sqlsqlNewssV02($jadual,$fe,$id);
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
		// $sql['NewssV03'] = sqlNewssV03($jadual,$fe,$id);
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
		// $sql['NewssV03'] = sqlNewssV03($jadual,$fe,$id);
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
		// $sql['SsmRocHartaV00'] = sqlSsmRocHartaV00($jadual,$fe,$id);
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
		// $sql['SsmRocHartaV01'] = sqlSsmRocHartaV01($jadual,$fe,$id);
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
		// $sql['SsmRocUntungRugiV00'] = sqlSsmRocUntungRugiV00($jadualBe,$jadual,$fe,$id);
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
		// $sql['SsmRocUntungRugiV01'] = sqlSsmRocUntungRugiV01($jadualBe,$jadual,$fe,$id);
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
		// $sql['SsmRocInfoV00'] = sqlSsmRocInfoV00($jadualBe,$jadual,$fe,$id,$peratus);
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
		// $sql['SsmRocInfoAll'] = sqlSsmRocInfoAll($jadual,$fe,$id,$peratus);
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
		// $sql['RangkaKwspV00'] = sqlRangkaKwspV00($jadualBe,$jadual,$fe,$id);
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
		// $sql['RangkaKwspV01'] = sqlRangkaKwspV01($jadualBe,$jadual,$fe,$id);
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
		// $sql['RangkaKwspV02'] = sqlRangkaKwspV02($jadualBe,$jadual,$fe,$id);
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
		// $sql['RangkaKwspV03'] = sqlRangkaKwspV03($jadualBe,$jadual,$fe,$id);
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
		// $sql['RangkaKwspV04'] = sqlRangkaKwspV04($jadualBe,$jadual,$fe,$id);
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
		$anggarBelanja = "($anggarGaji/$peratusGaji)";
		$anggarStok = "$anggarBelanja*0.04";
		$anggarHarta = "$anggarBelanja*0.175";
		$anggarHasil = "$anggarBelanja/0.92";
		//$sql = "SET @rownr=0;
		//SELECT @rownr:=@rownr+1 AS Bil,LPAD(ESTABLISHMENT_ID, 12, '0') as newss,
		$sql = "SELECT ESTABLISHMENT_ID,BUSINESS_REG_NO as NOSSM,
		concat_ws('|',REGISTERED_NAME,TRADING_NAME) as NamaPerniagaan,
		NO_TELEFON Tel,NO_FAKS Fax,EMEL_EMEL Emel,STATUS_AKTIVITI as Status,
		BILANGAN_PEKERJA as Staf,'data bawah ini semua anggaran' as Anggaran,
		FORMAT($stafPengurus,0) as gajiPengurus,
		FORMAT($stafPengurus/13,0) as blnPengurus,
		FORMAT($stafBaki,0) as gajiStaf,
		FORMAT($stafBaki/(BILANGAN_PEKERJA-1)/13,0) as blnStaf,
		FORMAT($stafPengurus + $stafBaki,0) as JumGaji,
		FORMAT(($stafPengurus + $stafBaki)/BILANGAN_PEKERJA/13,0) as PurataGaji,
		concat_ws('|',FORMAT($anggarHasil,0),$anggarHasil) as Hasil,
		concat_ws('|',FORMAT($anggarBelanja,0),$anggarBelanja) as Belanja,
		concat_ws('|',FORMAT($anggarGaji,0),$anggarGaji) as Gaji,
		concat_ws('|',FORMAT($anggarHarta,0),$anggarHarta) as Harta,
		BILANGAN_PEKERJA as Pekerja,
		concat_ws('|',FORMAT($anggarStok,0),$anggarStok) as Stok
		from `$jadual`
		where `ESTABLISHMENT_ID` = '$id' ";
		// $sql['RangkaKwspV05'] = sqlRangkaKwspV05($jadual,$fe,$id);
		//echo $sql;
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlRangkaKwspV06')):
	function sqlRangkaKwspV06($jadual,$id,$peratus,$staf)
	{
		# set nilai awal
		$pengurus = $staf['pengurus'];
		$asas = $staf['asas'];
		$peratusGaji = $staf['peratusGaji'];
		$stafPengurus = "($pengurus*13)";
		$stafBaki = "((BILANGAN_PEKERJA-1)*$asas*13)";
		$anggarGaji = "($stafPengurus + $stafBaki) * $peratus";
		$anggarBelanja = "($anggarGaji/$peratusGaji)";
		$anggarStok = "$anggarBelanja*0.04";
		$anggarHarta = "$anggarBelanja*0.175";
		$anggarHasil = "$anggarBelanja/0.92";
		//$sql = "SET @rownr=0;
		//SELECT @rownr:=@rownr+1 AS Bil,LPAD(ESTABLISHMENT_ID, 12, '0') as newss,
		$sql = "\tSELECT ESTABLISHMENT_ID,BUSINESS_REG_NO as NOSSM,"
		. "\r\tconcat_ws('|',REGISTERED_NAME,TRADING_NAME) as NamaPerniagaan,"
		. "\r\tNO_TELEFON Tel,NO_FAKS Fax,EMEL_EMEL Emel,STATUS_AKTIVITI as Status,"
		. "\r\tBILANGAN_PEKERJA as Staf,'data bawah ini semua anggaran' as Anggaran,"
		. "\r\tFORMAT($stafPengurus,0) as gajiPengurus,"
		. "\r\tFORMAT($stafPengurus/13,0) as blnPengurus,"
		. "\r\tFORMAT($stafBaki,0) as gajiStaf,"
		. "\r\tFORMAT($stafBaki/(BILANGAN_PEKERJA-1)/13,0) as blnStaf,"
		. "\r\tFORMAT($stafPengurus + $stafBaki,0) as JumGaji,"
		. "\r\tFORMAT(($stafPengurus + $stafBaki)/BILANGAN_PEKERJA/13,0) as PurataGaji,"
		. "\r\tFORMAT($anggarHasil,0) as Hasil,"
		. "\r\tFORMAT($anggarBelanja,0) as Belanja,"
		. "\r\tFORMAT($anggarGaji,0) as Gaji,"
		. "\r\tFORMAT($anggarHarta,0) as Harta,"
		. "\r\tBILANGAN_PEKERJA as Pekerja,"
		. "\r\tFORMAT($anggarStok,0) as Stok"
		. "\r\tfrom `$jadual`"
		. "\r\twhere `ESTABLISHMENT_ID` = '$id' ";
		// $sql['RangkaKwspV05'] = sqlRangkaKwspV06($jadual,$fe,$id);
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
/*
https://www.digitalocean.com/community/tutorials/how-to-create-a-new-user-and-grant-permissions-in-mysql
CREATE USER '$username'@'$localhost' IDENTIFIED BY '$password';# simple
CREATE USER '$username'@'$host' IDENTIFIED WITH $authentication_plugin BY '$password';# kompleks
GRANT PRIVILEGE ON *.* TO '$username'@'$host'; # simple access to all database
GRANT PRIVILEGE ON $database.$table TO '$username'@'$host'; # simple access to one database only
## simple only
SELECT version();
ALTER USER 'root'@'localhost' IDENTIFIED BY '$newpassword';# reset root
CREATE USER '$username'@'$localhost' IDENTIFIED BY '$password';# simple
GRANT PRIVILEGE ON *.* TO '$username'@'$host';# simple access to all database
#https://blog.skyvia.com/how-to-import-csv-file-into-mysql-table-in-4-different-ways/
## insert csv to mysql
LOAD DATA INFILE '$filecsv'
INTO TABLE `$jadual`
FIELDS TERMINATED BY ';'
IGNORE 1 ROWS;
#https://blog.devart.com/rename-a-column-in-mysql.html
## tukar nama medan
ALTER TABLE $table_name
RENAME COLUMN $old_column_name TO $new_column_name;
ALTER TABLE `$table_name`
CHANGE `$column02` `$column02` varchar(255) NOT NULL AFTER `$column01`;
#https://hoststud.com/resources/resolved-mysql-error-incorrect-integer-value-for-column-id-at-row-1.493/
*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlServerVersion')):
	function sqlServerVersion($localhost,$username,$password,$newpassword)
	{
		$sql = "
		SELECT version();
		ALTER USER 'root'@'$localhost' IDENTIFIED BY '$newpassword';
		CREATE USER '$username'@'$localhost' IDENTIFIED BY '$password';
		GRANT PRIVILEGE ON *.* TO '$username'@'$localhost';
		";
		// $sql['ServerVersion'] = sqlServerVersion($localhost,$username,$password,$newpassword);
		//semakPembolehubah('<br>' . $sql,'sql',0);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlTukarNamaJadual')):
	function sqlTukarNamaJadual($jadual01,$jadual02)
	{
		#https://popsql.com/learn-sql/mysql/how-to-rename-a-table-in-mysql
		$sql = "
		ALTER TABLE `$jadual01` RENAME `$jadual02`;
		RENAME TABLE `$jadual01` TO `$jadual02`;
		";
		// $sql['TukarNamaJadual'] = sqlTukarNamaJadual($jadual01,$jadual02);
		//semakPembolehubah('<br>' . $sql,'sql',0);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlTukarNamaMedan')):
	function sqlTukarNamaMedan($jadual,$medan01,$medan02)
	{
		$sql = "
		ALTER TABLE `$jadual` RENAME COLUMN `$medan01` TO `$medan02`;
		ALTER TABLE `$jadual`
		CHANGE `$medan02` `$medan02` varchar(255) NOT NULL AFTER `$medan01`;
		ALTER TABLE `$jadual` MODIFY COLUMN `$medan01` INT(30) NULL DEFAULT NULL;
		";
		// $sql['TukarNamaMedan'] = sqlTukarNamaMedan($jadual,$filecsv);
		//semakPembolehubah('<br>' . $sql,'sql',0);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*
https://stackoverflow.com/questions/38363566/trouble-with-utf-8-characters-what-i-see-is-not-what-i-stored
https://dba.stackexchange.com/questions/203125/load-data-local-infile-changing-special-character
https://blog.skyvia.com/how-to-import-csv-file-into-mysql-table-in-4-different-ways/
https://mysql.rjweb.org/doc.php/charcoll#fixes_for_various_cases
https://www.mysqltutorial.org/import-csv-file-mysql-table/
https://konbert.com/convert/csv/to/mysql
//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlInsertCsv')):
	function sqlInsertCsv($jadual,$filecsv)
	{
		## insert csv to mysql
		$sql = ""
		. "\nLOAD DATA INFILE '$filecsv' "
		. "\nINTO TABLE `$jadual` "
		. "\nCHARACTER SET utf8mb4" //CHARACTER SET UTF8" //. "\nCHARACTER SET latin1"
		. "\nFIELDS TERMINATED BY ';' "
		. "\nENCLOSED BY '\"' "
		. "\nLINES TERMINATED BY '\\n' "
		. "\nIGNORE 1 ROWS; "
		. "\n";
		// $sql['InsertCsv'] = sqlInsertCsv($jadual,$filecsv);
		//semakPembolehubah('<br>' . $sql,'sql',0);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlCreateView')):
	function sqlCreateView($medanUlang,$medanKhas,$jadual)
	{
		$sql ="\nSELECT $medanUlang,\n$medanKhas\nFROM `$jadual`\nUNION";
		// $sql['lCreateView'] = sqlCreateView($jadual,$filecsv);
		//semakPembolehubah('<br>' . $sql,'sql',0);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx2')):
	function xxx2()
	{
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
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
		// $sql['Xxx2'] = sqlXxx2($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*
CREATE TABLE `$jadual`(
   Serial_No             VARCHAR(12) NOT NULL PRIMARY KEY
  ,Nama_Pertubuhan       VARCHAR(255) NOT NULL
  ,KP                    VARCHAR(3) NOT NULL
  ,F010028               VARCHAR(255)
  ,F010029               VARCHAR(5) NOT NULL
  ,F010030               VARCHAR(5)
  ,Kod_Industri          VARCHAR(5)
  ,Nilai_JualanRM        INT
  ,Kos_BaranganRM        INT
  ,Jumlah_PendapatanRM   BIGINT
  ,Jumlah_PerbelanjaanRM BIGINT
  ,OutputRM              BIGINT
  ,InputRM               BIGINT
  ,Nilai_TambahRM        BIGINT
  ,Jumlah_pekerjaBil     BIGINT
  ,GajiRM                BIGINT
  ,Nilai_hartaRM         BIGINT
  ,F041001               VARCHAR(30)
  ,F041002               VARCHAR(30)
  ,F041003               VARCHAR(30)
  ,F041004               VARCHAR(30)
  ,F041005               VARCHAR(30)
  ,F041006               VARCHAR(30)
  ,F041007               VARCHAR(30)
  ,F041008               VARCHAR(30)
  ,F041009               VARCHAR(30)
  ,F041010               VARCHAR(30)
  ,F041011               VARCHAR(30)
  ,F041012               VARCHAR(30)
  ,F041013               VARCHAR(30)
  ,F041014               VARCHAR(30)
  ,F041015               VARCHAR(30)
  ,F041016               VARCHAR(30)
  ,F041017               VARCHAR(30)
  ,F041018               VARCHAR(30)
  ,F041099               VARCHAR(30)
  ,F041101               VARCHAR(30)
  ,F041102               VARCHAR(30)
  ,F041103               VARCHAR(30)
  ,F041104               VARCHAR(30)
  ,F041105               VARCHAR(30)
  ,F041106               VARCHAR(30)
  ,F041107               VARCHAR(30)
  ,F041108               VARCHAR(30)
  ,F041109               VARCHAR(30)
  ,F041110               VARCHAR(30)
  ,F041111               VARCHAR(30)
  ,F041112               VARCHAR(30)
  ,F041113               VARCHAR(30)
  ,F041114               VARCHAR(30)
  ,F041115               VARCHAR(30)
  ,F041116               VARCHAR(30)
  ,F041117               VARCHAR(30)
  ,F041118               VARCHAR(30)
  ,F041199               VARCHAR(30)
  ,F041202               VARCHAR(30)
  ,F041203               VARCHAR(30)
  ,F041204               VARCHAR(30)
  ,F041206               VARCHAR(30)
  ,F041207               VARCHAR(30)
  ,F041208               VARCHAR(30)
  ,F041209               VARCHAR(30)
  ,F041211               VARCHAR(30)
  ,F041212               VARCHAR(30)
  ,F041213               VARCHAR(30)
  ,F041214               VARCHAR(30)
  ,F041218               VARCHAR(30)
  ,F041299               VARCHAR(30)
  ,F041302               VARCHAR(30)
  ,F041303               VARCHAR(30)
  ,F041304               VARCHAR(30)
  ,F041305               VARCHAR(30)
  ,F041309               VARCHAR(30)
  ,F041310               VARCHAR(30)
  ,F041311               VARCHAR(30)
  ,F041312               VARCHAR(30)
  ,F041313               VARCHAR(30)
  ,F041314               VARCHAR(30)
  ,F041315               VARCHAR(30)
  ,F041316               VARCHAR(30)
  ,F041317               VARCHAR(30)
  ,F041318               VARCHAR(30)
  ,F041399               VARCHAR(30)
  ,F041401               VARCHAR(30)
  ,F041402               VARCHAR(30)
  ,F041403               VARCHAR(30)
  ,F041404               VARCHAR(30)
  ,F041405               VARCHAR(30)
  ,F041406               VARCHAR(30)
  ,F041407               VARCHAR(30)
  ,F041408               VARCHAR(30)
  ,F041409               VARCHAR(30)
  ,F041410               VARCHAR(30)
  ,F041411               VARCHAR(30)
  ,F041412               VARCHAR(30)
  ,F041413               VARCHAR(30)
  ,F041414               VARCHAR(30)
  ,F041415               VARCHAR(30)
  ,F041416               VARCHAR(30)
  ,F041417               VARCHAR(30)
  ,F041418               VARCHAR(30)
  ,F041499               VARCHAR(30)
  ,F041501               VARCHAR(30)
  ,F041502               VARCHAR(30)
  ,F041503               VARCHAR(30)
  ,F041504               VARCHAR(30)
  ,F041505               VARCHAR(30)
  ,F041506               VARCHAR(30)
  ,F041507               VARCHAR(30)
  ,F041508               VARCHAR(30)
  ,F041509               VARCHAR(30)
  ,F041510               VARCHAR(30)
  ,F041511               VARCHAR(30)
  ,F041512               VARCHAR(30)
  ,F041513               VARCHAR(30)
  ,F041514               VARCHAR(30)
  ,F041515               VARCHAR(30)
  ,F041516               VARCHAR(30)
  ,F041517               VARCHAR(30)
  ,F041518               VARCHAR(30)
  ,F041599               VARCHAR(30)
  ,F041601               VARCHAR(30)
  ,F041602               VARCHAR(30)
  ,F041603               VARCHAR(30)
  ,F041604               VARCHAR(30)
  ,F041605               VARCHAR(30)
  ,F041606               VARCHAR(30)
  ,F041607               VARCHAR(30)
  ,F041608               VARCHAR(30)
  ,F041609               VARCHAR(30)
  ,F041610               VARCHAR(30)
  ,F041611               VARCHAR(30)
  ,F041612               VARCHAR(30)
  ,F041613               VARCHAR(30)
  ,F041614               VARCHAR(30)
  ,F041615               VARCHAR(30)
  ,F041616               VARCHAR(30)
  ,F041618               VARCHAR(30)
  ,F041699               VARCHAR(30)
  ,F041701               VARCHAR(30)
  ,F041702               VARCHAR(30)
  ,F041703               VARCHAR(30)
  ,F041704               VARCHAR(30)
  ,F041705               VARCHAR(30)
  ,F041706               VARCHAR(30)
  ,F041707               VARCHAR(30)
  ,F041708               VARCHAR(30)
  ,F041708a              VARCHAR(30)
  ,F041709               VARCHAR(30)
  ,F041710               VARCHAR(30)
  ,F041711               VARCHAR(30)
  ,F041712               VARCHAR(30)
  ,F041713               VARCHAR(30)
  ,F041714               VARCHAR(30)
  ,F041715               VARCHAR(30)
  ,F041716               VARCHAR(30)
  ,F041717               VARCHAR(30)
  ,F041718               VARCHAR(30)
  ,F041718a              VARCHAR(30)
  ,F041799               VARCHAR(30)
  ,F041801               VARCHAR(30)
  ,F041802               VARCHAR(30)
  ,F041803               VARCHAR(30)
  ,F041804               VARCHAR(30)
  ,F041806               VARCHAR(30)
  ,F041807               VARCHAR(30)
  ,F041808               VARCHAR(30)
  ,F041808a              VARCHAR(30)
  ,F041809               VARCHAR(30)
  ,F041810               VARCHAR(30)
  ,F041811               VARCHAR(30)
  ,F041812               VARCHAR(30)
  ,F041813               VARCHAR(30)
  ,F041814               VARCHAR(30)
  ,F041815               VARCHAR(30)
  ,F041816               VARCHAR(30)
  ,F041818               VARCHAR(30)
  ,F041818a              VARCHAR(30)
  ,F041899               VARCHAR(30)
  ,F041919               VARCHAR(30)
  ,F042019               VARCHAR(30)
  ,F042119               VARCHAR(30)
  ,F042219               VARCHAR(30)
  ,F042319               VARCHAR(30)
  ,F049919               VARCHAR(30)
);
*/
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
		// $sql['CariBintangDaa'] = sqlCariBintangDaa($jadual,$medan,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlFeJe')):
	function sqlFeJe($jadualBe,$fe)
	{
		$sql = "SELECT `barcode` FROM `$jadualBe` WHERE fe like '%$fe%'"
		. "";
		// $sql['FeBarcode'] = sqlFeBarcode($fe);
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
		// $sql['DataAesV00'] = sqlDataAesV00($jadualBe,$jadual,$fe,$id);
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
		`ID_FE`,`msic 2008`,`BORANG PANJANG/ PENDEK` JenisBrg,
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
		// $sql['NewssV03'] = sqlNewssV03($jadual,$fe,$id);
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
		// $sql['SsmRocHartaV00'] = sqlSsmRocHartaV00($jadual,$fe,$id);
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
		// $sql['SsmRocUntungRugiV01'] = sqlSsmRocUntungRugiV01($jadualBe,$jadual,$fe,$id);
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
		// $sql['RangkaKwspV05'] = sqlRangkaKwspV05($jadual,$fe,$id);
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
		// $sql['SemuaKwspHarta'] = sqlSemuaKwspHarta($jadual,$fe,$id);
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
		// $sql['MkoDaa'] = sqlMkoDaa($jadual,$id);
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
		// $sql['UpdateMedan'] = sqlUpdateMedan($jadual,$fe,$id);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# ubahsuai soalan harta
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSoalanHarta')):
	function sqlSoalanHarta($jadual,$id)
	{
		$k0 = "'BLANK'";
		//$dataUtama = 'SELECT Serial_No,Nama_Pertubuhan,KP,F010029,F010030,Kod_Industri';
		$dataUtama = 'SELECT Serial_No,Nama_Pertubuhan';
		//$dari = "FROM `$jadual` WHERE serial_no = '$id' \r";
		$dari = " FROM `$jadual` ";
		$sql = "\r"
		. "$dataUtama,'Kod' `4-Harta`,"
		. "'F0410' `Awal`,'F0411' `Baru`,'F0412' `Terpakai`,'F0413' `Bina`,'F0414' `Jual/Tamat`,"
		. "'F0415' `Jual Harta`,'F0416' `Susut`,'F0417' `Akhir`,'F0418' `Sewa` "
		. "$dari\rUNION\r"
		. "$dataUtama,'01' `01`,"
		. "F041001,F041101,$k0 F041201,$k0 F041301,F041401,F041501,F041601,F041701,F041801 "
		. "$dari\rUNION\r"
		. "$dataUtama,'02' `02`,"
		. "F041002,F041102,F041202,F041302,F041402,F041502,F041602,F041702,F041802"
		. "$dari\rUNION\r"
		. "$dataUtama,'03' `03`,"
		. "`F041003`,`F041103`,`F041203`,`F041303`,`F041403`,`F041503`,`F041603`,"
		. "`F041703`,`F041803`"
		. "$dari\rUNION\r"
		. "$dataUtama,'04' `04`,"
		. "`F041004`,`F041104`,`F041204`,`F041304`,`F041404`,`F041504`,`F041604`,"
		. "`F041704`,`F041804`"
		. "$dari\rUNION\r"
		. "$dataUtama,'05' `05`,"
		. "`F041005`,`F041105`,$k0 `F041205`,`F041305`,`F041405`,`F041505`,`F041605`,"
		. "`F041705`,$k0 `F041805`"
		. "$dari\rUNION\r"
		. "$dataUtama,'06' `06`,"
		. "`F041006`,`F041106`,`F041206`,$k0 `F041306`,`F041406`,`F041506`,`F041606`,"
		. "`F041706`,`F041806`"
		. "$dari\rUNION\r"
		. "$dataUtama,'07' `07`,"
		. "`F041007`,`F041107`,`F041207`,$k0 `F041307`,`F041407`,`F041507`,`F041607`,"
		. "`F041707`,`F041807`"
		. "$dari\rUNION\r"
		. "$dataUtama,'08' `08`,"
		. "`F041008`,`F041108`,`F041208`,$k0 `F041308`,`F041408`,`F041508`,`F041608`,"
		. "`F041708`,`F041808`"
		. "$dari\rUNION\r"
		. "$dataUtama,'09' `09`,"
		. "`F041009`,`F041109`,`F041209`,`F041309`,`F041409`,`F041509`,`F041609`,"
		. "`F041709`,`F041809`"
		. "$dari\rUNION\r"
		. "$dataUtama,'10' `10`,"
		. "`F041010`,`F041110`,$k0 `F041210`,`F041310`,`F041410`,`F041510`,`F041610`,"
		. "`F041710`,`F041810`"
		. "$dari\rUNION\r"
		. "$dataUtama,'11' `11`,"
		. "`F041011`,`F041111`,`F041211`,`F041311`,`F041411`,`F041511`,`F041611`,"
		. "`F041711`,`F041811`"
		. "$dari\rUNION\r"
		. "$dataUtama,'12' `12`,"
		. "`F041012`,`F041112`,`F041212`,`F041312`,`F041412`,`F041512`,`F041612`,"
		. "`F041712`,`F041812`"
		. "$dari\rUNION\r"
		. "$dataUtama,'13' `13`,"
		. "`F041013`,`F041113`,`F041213`,`F041313`,`F041413`,`F041513`,`F041613`,"
		. "`F041713`,`F041813`"
		. "$dari\rUNION\r"
		. "$dataUtama,'14' `14`,"
		. "`F041014`,`F041114`,`F041214`,`F041314`,`F041414`,`F041514`,`F041614`,"
		. "`F041714`,`F041814`"
		. "$dari\rUNION\r"
		. "$dataUtama,'15' `15`,"
		. "`F041015`,`F041115`,$k0 `F041215`,`F041315`,`F041415`,`F041515`,`F041615`,"
		. "`F041715`,`F041815`"
		. "$dari\rUNION\r"
		. "$dataUtama,'16' `16`,"
		. "`F041016`,`F041116`,$k0 `F041216`,`F041316`,`F041416`,`F041516`,`F041616`,"
		. "`F041716`,`F041816`"
		. "$dari\rUNION\r"
		. "$dataUtama,'17' `17`,"
		. "`F041017`,`F041117`,$k0 `F041217`,`F041317`,`F041417`,`F041517`,"
		. "$k0 `F041617`,`F041717`,$k0 `F041817`"
		. "$dari\rUNION\r"
		. "$dataUtama,'18' `18`,"
		. "`F041018`,`F041118`,`F041218`,`F041318`,`F041418`,`F041518`,`F041618`,"
		. "`F041718`,`F041818`"
		. "$dari\rUNION\r"
		. "$dataUtama,'99' `99`,"
		. "`F041099`,`F041199`,`F041299`,`F041399`,`F041499`,`F041599`,`F041699`,"
		. "`F041799`,`F041899`"
		. "$dari\n\n";
		// $sql['SoalanHarta'] = sqlSoalanHarta($jadual,$id);
		//semakTatasusunanIni($sql);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlSoalanHartaUmum')):
	function sqlSoalanHartaUmum()
	{
		$bangunan['Awal'] = '(F041001+F041002+F041003+F041004+F041005)';
		$bangunan['Baru'] = '(F041101+F041102+F041103+F041104+F041105)';
		$bangunan['Terpakai'] = '(F041202+F041203+F041204)';
		$bangunan['Bina'] = '(F041302+F041303+F041304+F041305)';
		$bangunan['JualTamat'] = '(F041401+F041402+F041403+F041404+F041405)';
		$bangunan['JualHarta'] = '(F041501+F041502+F041503+F041504+F041505)';
		$bangunan['Susut'] = '(F041601+F041602+F041603+F041604+F041605)';
		$bangunan['Akhir'] = '(F041701+F041702+F041703+F041704+F041705)';
		$bangunan['Sewa'] = '(F041801+F041802+F041803+F041804)';
		$jentera['Awal'] = '(F041006+F041007+F041008+F041012+F041013+F041014)';
		$jentera['Baru'] = '(F041106+F041107+F041108+F041112+F041113+F041114)';
		$jentera['Terpakai'] = '(F041206+F041207+F041208+F041212+F041213+F041214)';
		$jentera['Bina'] = '(F041312+F041313+F041314)';
		$jentera['JualTamat'] = '(F041406+F041407+F041408+F041412+F041413+F041414)';
		$jentera['JualHarta'] = '(F041506+F041507+F041508+F041512+F041513+F041514)';
		$jentera['Susut'] = '(F041606+F041607+F041608+F041612+F041613+F041614)';
		$jentera['Akhir'] = '(F041706+F041707+F041708+F041712+F041713+F041714)';
		$jentera['Sewa'] = '(F041806+F041807+F041808+F041812+F041813+F041814)';
		$hartaLain['Awal'] = '(F041009+F041010+F041011+F041015+F041016+F041017+F041018)';
		$hartaLain['Baru'] = '(F041110+F041111+F041115+F041116+F041117+F041118)';
		$hartaLain['Terpakai'] = '(F041209+F041211+F041218)';
		$hartaLain['Bina'] = '(F041309+F041310+F041311+F041315+F041316+F041317+F041318)';
		$hartaLain['JualTamat'] = '(F041409+F041410+F041411+F041415+F041416+F041417+F041418)';
		$hartaLain['JualHarta'] = '(F041509+F041510++F041511+F041515+F041516+F041517+F041518)';
		$hartaLain['Susut'] = '(F041609+F041610+F041611+F041615+F041616+F041718)';
		$hartaLain['Akhir'] = '(F041709+F041710+F041711+F041715+F041716+F041717+F041618)';
		$hartaLain['Sewa'] = '(F041809+F041810+F041811+F041815+F041816+F041818)';
		$harta = 'Jenis Harta';

		$sql = [
			["'01' `Bil`,'10-Awal' `$harta`," . $bangunan['Awal'] . " `Bangunan`,\r"
			. $jentera['Awal'] . " `Jentera`,\r" . $hartaLain['Awal'] . " `Hartalain`,"
			. "\rF041099 `Jumlah`"],
			["'02','11-Baru'," . $bangunan['Baru'] . " `Bangunan`,\r"
			. $jentera['Baru'] . " `Jentera`,\r" . $hartaLain['Baru'] . " `Hartalain`,"
			. "\rF041199 `Jumlah`"],
			["'03','12-Terpakai'," . $bangunan['Terpakai'] . " `Bangunan`,\r"
			. $jentera['Terpakai'] . " `Jentera`,\r" . $hartaLain['Terpakai'] . " `Hartalain`,"
			. "\rF041299 `Jumlah`"],
			["'04','13-Bina' `$harta`," . $bangunan['Bina'] . " `Bangunan`,\r"
			. $jentera['Bina'] . " `Jentera`,\r" . $hartaLain['Bina'] . " `Hartalain`,"
			. "\rF041399 `Jumlah`"],
			["'05','14-JualTamat'," . $bangunan['JualTamat'] . " `Bangunan`,\r"
			. $jentera['JualTamat'] . " `Jentera`,\r" . $hartaLain['JualTamat'] . " `Hartalain`,"
			. "\rF041499 `Jumlah`"],
			["'06','15-JualHarta' `$harta`," . $bangunan['JualHarta'] . " `Bangunan`,\r"
			. $jentera['JualHarta'] . " `Jentera`,\r" . $hartaLain['JualHarta'] . " `Hartalain`,"
			. "\rF041599 `Jumlah`"],
			["'07','16-Susut' `$harta`," . $bangunan['Susut'] . " `Bangunan`,\r"
			. $jentera['Susut'] . " `Jentera`,\r" . $hartaLain['Susut'] . " `Hartalain`,"
			. "\rF041699 `Jumlah`"],
			["'08','17-Akhir' `$harta`," . $bangunan['Akhir'] . " `Bangunan`,\r"
			. $jentera['Akhir'] . " `Jentera`,\r" . $hartaLain['Akhir'] . " `Hartalain`,"
			. "\rF041799 `Jumlah`"],
			["'09','18-Sewa' `$harta`," . $bangunan['Sewa'] . " `Bangunan`,\r"
			. $jentera['Sewa'] . " `Jentera`,\r" . $hartaLain['Sewa'] . " `Hartalain`,"
			. "\rF041899 `Jumlah`"],
			];

		return sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlViewTableHartaUmum')):
	function sqlViewTableHartaUmum($jadual,$id)
	{
		$sql = null;
		$medanUlang = sqlMedanUlang();
		$medanHartaUmum = sqlSoalanHartaUmum();
		foreach($medanHartaUmum as $key => $val):
		foreach($val as $key2 => $medan):
			$sql .= "SELECT $medanUlang,\n$medan\nFROM `$jadual`\nUNION\n";
		endforeach;endforeach;
		$sql .= "\nORDER BY 1,2";

		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlMedanKelulusan')):
	function sqlMedanKelulusan()
	{
		$sql = [
		['"0-Kelulusan" as `S06-Kelulusan`,"Lelaki" as Lelaki,"Wanita" as Wanita'],
		['"1-Pasca" as `S06-Kelulusan`,F060199,F061499'],
		['"2.1-Bacelor Akademik" as `S06-Kelulusan`,F060299,F061599'],
		['"2.2-Bacelor Teknikal" as `S06-Kelulusan`,F060399,F061699'],
		['"3.1-Diploma Akademik" as `S06-Kelulusan`,F060499,F061799'],
		['"3.2-Diploma Teknikal" as `S06-Kelulusan`,F060599,F061899'],
		['"4-STPM" as `S06-Kelulusan`,F060699,F061999'],
		['"5.1-Sijil Akademik" as `S06-Kelulusan`,F060799,F062099'],
		['"5.2-SKM Tahap 3" as `S06-Kelulusan`,F060899,F062199'],
		['"5.3-SKM Tahap 1&2" as `S06-Kelulusan`,F060999,F062299'],
		['"5.4-Sijil Kemahiran Lain" as `S06-Kelulusan`,F061099,F062399'],
		['"6-SPM" as `S06-Kelulusan`,F061199,F062499'],
		['"7-Bawah SPM" as `S06-Kelulusan`,F061299,F062599'],
		['"8-Jumlah" as `S06-Kelulusan`,F061399,F062699'],
		];
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlMedanJamOt')):
	function sqlMedanJamOt()
	{
		$sql = [
		//['"00-Tajuk" as `Syif`,"01" as `01`,"02" as `02`,"03" as `03`,"Jumlah" as `Jumlah`'],
		['"1-Bil Staf" as `Syif`,`F070101` as `01`,`F070201` as `02`,`F070301` as `03`,'
		. '"BLANK" as `Jumlah`'],
		['"2-Jum Hari Bekerja" as `Syif`,`F070102`,`F070202`,`F070302`,"BLANK" as `Jumlah`'],
		['"3-Jam Bekerja Sehari" as `Syif`,`F070103`,`F070203`,`F070303`,"BLANK" as `Jumlah`'],
		['"4-Jum 1*2*3" as `Syif`,`F070104`,`F070204`,`F070304`,`F070404`'],
		['"5-OT Bil Staf" as `Syif`,"BLANK" as `01`,"BLANK" as `02`,"BLANK" as `03`,`F070405`'],
		['"6-OT Jam" as `Syif`,"BLANK" as `01`,"BLANK" as `02`,"BLANK" as `03`,`F070499`'],
		['"7-OT Bayaran" as `Syif`,"BLANK" as `01`,"BLANK" as `02`,"RM=" as `03`,`F070507`'],
		];
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlMedanStok')):
	function sqlMedanStok()
	{
		$sql = [
		['"0-Tajuk" as `Stok`,"01" as `Stok Awal`,"02" as `Stok Akhir`'],
		['"1-Stok Trading" ,`F100104`,`F100204`'],
		['"2-Stok Lain",`F100105`,`F100205`'],
		['"3-Jum",`F100199`,`F100299`'],
		];
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlMedanUlang')):
	function sqlMedanUlang()
	{
		//$sql = 'Serial_No,Nama_Pertubuhan,KP,F010029,F010030,Kod_Industri';
		$sql = 'Serial_No,Nama_Pertubuhan';
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlViewTableDaa')):
	function sqlViewTableDaa($jadual01,$jadual02,$jadual03,$jadual04)
	{
		$sql = '';
		$jadual = $jadual01;
		$medanUlang = sqlMedanUlang();
		$medanDaa['kelulusan'] = sqlMedanKelulusan();
		$medanDaa['jamot'] = sqlMedanJamOt();
		$medanDaa['stok'] = sqlMedanStok();
		foreach($medanDaa as $key0 => $medanKhas):
		foreach($medanKhas as $key => $val):
		foreach($val as $key2 => $medan):
			$sql .= "SELECT $medanUlang,\n$medan\nFROM `$jadual`\nUNION\n";
		endforeach;
		endforeach;
		endforeach;
		$sql .= "\nORDER BY 1,3\n\n";

		// $sql['ViewTableDaa'] = sqlViewTableDaa($jadualBe,$jadual,$msic,$fe);
		//semakTatasusunanIni($sql);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlViewTableKelulusan')):
	function sqlViewTableKelulusan($jadual01,$jadual02,$jadual03,$jadual04)
	{
		$sql = '';
		$jadual = $jadual02;
		$medanUlang = sqlMedanUlang();
		$medanKhas = sqlMedanKelulusan();
		foreach($medanKhas as $key => $val):
		foreach($val as $key2 => $medan):
			$sql .= "SELECT $medanUlang,\n$medan\nFROM `$jadual`\nUNION\n";
		endforeach;
		endforeach;
		$sql .= "\nORDER BY 1,3\n\n";

		// $sql['ViewTableKelulusan'] = sqlViewTableKelulusan($jadualBe,$jadual,$msic,$fe);
		//semakTatasusunanIni($sql);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlViewTableJamot')):
	function sqlViewTableJamot($jadual01,$jadual02,$jadual03,$jadual04)
	{
		$sql = '';
		$jadual = $jadual03;
		$medanUlang = sqlMedanUlang();
		$medanKhas = sqlMedanJamOt();
		foreach($medanKhas as $key => $val):
		foreach($val as $key2 => $medan):
			$sql .= "SELECT $medanUlang,\n$medan\nFROM `$jadual`\nUNION\n";
		endforeach;
		endforeach;
		$sql .= "\nORDER BY 1,3\n\n";

		// $sql['ViewTableJamot'] = sqlViewTableJamot($jadualBe,$jadual,$msic,$fe);
		//semakTatasusunanIni($sql);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlViewTableStok')):
	function sqlViewTableStok($jadual01,$jadual02,$jadual03,$jadual04)
	{
		$sql = '';
		$jadual = $jadual04;
		$medanUlang = sqlMedanUlang();
		$medanKhas = sqlMedanStok();
		foreach($medanKhas as $key => $val):
		foreach($val as $key2 => $medan):
			$sql .= "SELECT $medanUlang,\n$medan\nFROM `$jadual`\nUNION\n";
		endforeach;
		endforeach;
		$sql .= "\nORDER BY 1,3\n\n";

		// $sql['ViewTableStok'] = sqlViewTableStok($jadualBe,$jadual,$msic,$fe);
		//semakTatasusunanIni($sql);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlViewStaf')):
	function sqlViewStaf($jadual)
	{
		$sql = '';
		$medanUlang = sqlMedanUlang();
		$medanLelaki = sqlMedanStafLelakiV02();
		$medanWanita = sqlMedanStafWanitaV02();
		foreach($medanLelaki as $key => $val):
		foreach($val as $key2 => $medan):
			$sql .= "SELECT $medanUlang,\n$medan\nFROM `$jadual`\nUNION\n";
		endforeach;endforeach;
		$key = $val = $key2 = $medan = null;
		foreach($medanWanita as $key => $val):
		foreach($val as $key2 => $medan):
			$sql .= "SELECT $medanUlang,\n$medan\nFROM `$jadual`\nUNION\n";
		endforeach;endforeach;
		$sql .= "\nORDER BY 1,3";

		// $sql['ViewStaf'] = sqlViewStaf($jadualBe,$jadual,$msic,$fe);
		//semakTatasusunanIni($sql);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlMedanStafLelaki')):
	function sqlMedanStafLelaki()
	{
		$k0 = "'BLANK'";
		$sql = [
		["'Lelaki' `5A - Staf`,'Warga' `F0520`,'XWarga' `F0506`,'Jum' `F0507`,"
		. "'PeratusBil' as `Staf%`,'< 3 thn' `F0521`,'> 3 thn' `F0522`, 'Jum'`F0509`,"
		. "$k0 `BLANK`,'WargaGaji' `F0526`,'xWargaGaji' `F0527`,'JumGaji' `F0508`"],
		["'01' `01`,`F052001`,`F050601`,`F050701`,(F050701/F050799) as `Staf%`,`F052101`,`F052201`,"
		. "$k0 `JumXWarga`,$k0 `BLANK`,$k0 `WargaGaji`,$k0 `WargaXGaji`,"
		. "$k0 `JumGaji`"],
		["'02' `02`,`F052002`,`F050602`,`F050702`,(F050702/F050799) as `Staf%`,`F052102`,`F052202`,"
		. "$k0 `JumXWarga`,$k0 `BLANK`,$k0 `WargaGaji`,$k0 `WargaXGaji`,"
		. "$k0 `JumGaji`"],
		["'03' `03`,`F052003`,`F050603`,`F050703`,(F050703/F050799) as `Staf%`,`F052103`,`F052203`,`F050903`,"
		. "$k0 `BLANK`,`F052603`,`F052703`,`F050803`"],
		["'04' `04`,`F052004`,`F050604`,`F050704`,(F050704/F050799) as `Staf%`,`F052104`,`F052204`,`F050904`,"
		. "$k0 `BLANK`,`F052604`,`F052704`,`F050804`"],
		["'05' `05`,`F052005`,`F050605`,`F050705`,(F050705/F050799) as `Staf%`,`F052105`,`F052205`,`F050905`,"
		. "$k0 `BLANK`,`F052605`,`F052705`,`F050805`"],
		["'06' `06`,`F052006`,`F050606`,`F050706`,(F050706/F050799) as `Staf%`,`F052106`,`F052206`,`F050906`,"
		. "$k0 `BLANK`,`F052606`,`F052706`,`F050806`"],
		["'07' `07`,`F052007`,`F050607`,`F050707`,(F050707/F050799) as `Staf%`,`F052107`,`F052207`,`F050907`,"
		. "$k0 `BLANK`,`F052607`,`F052707`,`F050807`"],
		["'08' `08`,`F052008`,`F050608`,`F050708`,(F050708/F050799) as `Staf%`,`F052108`,`F052208`,`F050908`,"
		. "$k0 `BLANK`,`F052608`,`F052708`,`F050808`"],
		["'09' `09`,`F052009`,`F050609`,`F050709`,(F050709/F050799) as `Staf%`,`F052109`,`F052209`,`F050909`,"
		. "$k0 `BLANK`,`F052609`,`F052709`,`F050809`"],
		["'16' `16`,`F052016`,`F050616`,`F050716`,(F050716/F050799) as `Staf%`,`F052116`,`F052216`,`F050916`,"
		. "$k0 `BLANK`,`F052616`,`F052716`,`F050816`"],
		["'12' `12`,`F052012`,`F050612`,`F050712`,(F050712/F050799) as `Staf%`,`F052112`,`F052212`,`F050912`,"
		. "$k0 `BLANK`,`F052612`,`F052712`,`F050812`"],
		["'89' `89`,`F052089`,`F050689`,`F050789`,(F050789/F050799) as `Staf%`,`F052189`,`F052289`,`F050989`,"
		. "$k0 `BLANK`,`F052689`,`F052789`,`F050889`"],
		["'13' `13`,`F052013`,`F050613`,`F050713`,(F050713/F050799) as `Staf%`,`F052113`,`F052213`,$k0 `F050913`,"
		. "$k0 `BLANK`,`F052613`,`F052713`,`F050813`"],
		["'99' `99`,`F052099`,`F050699`,`F050799`,(F050799/F050799) as `Staf%`,`F052199`,`F052299`,`F050999`,"
		. "$k0 `BLANK`,`F052699`,`F052799`,`F050899`"],
		];
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlMedanStafLelakiV02')):
	function sqlMedanStafLelakiV02()
	{
		$k0 = "'BLANK'";
		$jumL = '/F050799';
		$jumG = '/F050899';
		$sql = [
		["'00','5A-Lelaki' `Kategori`,'Warga' `F0520`,'XWarga' `F0506`,'Jum' `F0507`,"
		. "'PeratusBil' as `Staf%`,'Jum'`F0509`,"
		. "'WargaGaji' `F0526`,'xWargaGaji' `F0527`,'JumGaji' `F0508`,'GajiLelaki%'"],
		["'01' Bil,'01-Pemilik',`F052001` `Warga`,`F050601` `XWarga`,`F050701` `Jum`,"
		. "(F050701$jumL) as `StafLelaki%`,$k0 `BilSub`,$k0 `WargaGaji`,$k0 `WargaXGaji`,"
		. "$k0 `JumGaji`,$k0 `GajiLelaki%`"],
		["'02','02-Pekerja Keluarga',`F052002`,`F050602`,`F050702`,(F050702$jumL) as `Staf%`,"
		. "$k0 `BilSub`,$k0 `WargaGaji`,$k0 `WargaXGaji`,$k0 `JumGaji`,$k0 `Gaji%`"],
		["'03','03-Pengurus',`F052003`,`F050603`,`F050703`,(F050703$jumL) as `Staf%`,`F050903`,"
		. "`F052603`,`F052703`,`F050803`,(F050803$jumG) as `Gaji%`"],
		["'04','04-Profesional',`F052004`,`F050604`,`F050704`,(F050704$jumL) as `Staf%`,`F050904`,"
		. "`F052604`,`F052704`,`F050804`,(F050804$jumG) as `Gaji%`"],
		["'05','05-Penyelidik',`F052005`,`F050605`,`F050705`,(F050705$jumL) as `Staf%`,`F050905`,"
		. "`F052605`,`F052705`,`F050805`,(F050805$jumG) as `Gaji%`"],
		["'06','06-Juruteknik',`F052006`,`F050606`,`F050706`,(F050706$jumL) as `Staf%`,`F050906`,"
		. "`F052606`,`F052706`,`F050806`,(F050806$jumG) as `Gaji%`"],
		["'07','07-Kerani',`F052007`,`F050607`,`F050707`,(F050707$jumL) as `Staf%`,`F050907`,"
		. "`F052607`,`F052707`,`F050807`,(F050807$jumG) as `Gaji%`"],
		["'08','08-Jualan',`F052008`,`F050608`,`F050708`,(F050708$jumL) as `Staf%`,`F050908`,"
		. "`F052608`,`F052708`,`F050808`,(F050808$jumG) as `Gaji%`"],
		["'09','09-Kemahiran',`F052009`,`F050609`,`F050709`,(F050709$jumL) as `Staf%`,`F050909`,"
		. "`F052609`,`F052709`,`F050809`,(F050809$jumG) as `Gaji%`"],
		["'10','16-Operator',`F052016`,`F050616`,`F050716`,(F050716$jumL) as `Staf%`,`F050916`,"
		. "`F052616`,`F052716`,`F050816`,(F050816$jumG) as `Gaji%`"],
		["'11','12-Asas',`F052012`,`F050612`,`F050712`,(F050712$jumL) as `Staf%`,`F050912`,"
		. "`F052612`,`F052712`,`F050812`,(F050812$jumG) as `Gaji%`"],
		["'12','89-Jum Staf Bergaji',`F052089`,`F050689`,`F050789`,(F050789$jumL) as `Staf%`,`F050989`,"
		. "`F052689`,`F052789`,`F050889`,(F050889$jumG) as `Gaji%`"],
		["'13','13-Sambilan',`F052013`,`F050613`,`F050713`,(F050713$jumL) as `Staf%`,$k0,"
		. "`F052613`,`F052713`,`F050813`,(F050813$jumG) as `Gaji%`"],
		["'14','99-JumPekerja',`F052099`,`F050699`,`F050799`,(F050799$jumL) as `Staf%`,`F050999`,"
		. "`F052699`,`F052799`,`F050899`,(F050899$jumG) as `Gaji%`"],
		];
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlMedanStafWanita')):
	function sqlMedanStafWanita()
	{
		$k0 = "'BLANK'";
		$sql = [
		["'Wanita' `5B - Staf`,'Warga' `F0523`,'XWarga' `F0515`,'Jum' `F0516`,"
		. "'< 3 thn' `F0524`,'> 3 thn' `F0525`, 'JumSub' `F0518`,"
		. "$k0 `5C - Gaji`,'WargaGaji' `F0528`,'XWargaGaji' `F0529`,'JumGaji' `F0517`"],
		["'01' `01`,`F052301`,`F051501`,`F051601`,`F052401`,`F052501`,$k0 `JumSub`,"
		. "$k0 `BLANK`,$k0 `WargaGaji`,$k0 `XWargaGaji`,$k0 `JumGaji`"],
		["'02' `02`,`F052302`,`F051502`,`F051602`,`F052402`,`F052502`,$k0 `JumSub`,"
		. "$k0 `BLANK`,$k0 `WargaGaji`,$k0 `XWargaGaji`,$k0 `JumGaji`"],
		["'03' `03`,`F052303`,`F051503`,`F051603`,`F052403`,`F052503`,`F051803`,"
		. "$k0 `BLANK`,`F052803`,`F052903`,`F051703`"],
		["'04' `04`,`F052304`,`F051504`,`F051604`,`F052404`,`F052504`,`F051804`,"
		. "$k0 `BLANK`,`F052804`,`F052904`,`F051704`"],
		["'05' `05`,`F052305`,`F051505`,`F051605`,`F052405`,`F052505`,`F051805`,"],
		["$k0 `BLANK`,`F052805`,`F052905`,`F051705`"],
		["'06' `06`,`F052306`,`F051506`,`F051606`,`F052406`,`F052506`,`F051806`,"
		. "$k0 `BLANK`,`F052806`,`F052906`,`F051706`"],
		["'07' `07`,`F052307`,`F051507`,`F051607`,`F052407`,`F052507`,`F051807`,"
		. "$k0 `BLANK`,`F052807`,`F052907`,`F051707`"],
		["'08' `08`,`F052308`,`F051508`,`F051608`,`F052408`,`F052508`,`F051808`,"
		. "$k0 `BLANK`,`F052808`,`F052908`,`F051708`"],
		["'09' `09`,`F052309`,`F051509`,`F051609`,`F052409`,`F052509`,`F051809`,"
		. "$k0 `BLANK`,`F052809`,`F052909`,`F051709`"],
		["'16' `16`,`F052316`,`F051516`,`F051616`,`F052416`,`F052516`,`F051816`,"
		. "$k0 `BLANK`,`F052816`,`F052916`,`F051716`"],
		["'12' `12`,`F052312`,`F051512`,`F051612`,`F052412`,`F052512`,`F051812`,"
		. "$k0 `BLANK`,`F052812`,`F052912`,`F051712`"],
		["'89' `89`,`F052389`,`F051589`,`F051689`,`F052489`,`F052589`,`F051889`,"
		. "$k0 `BLANK`,`F052889`,`F052989`,`F051789`"],
		["'13' `13`,`F052313`,`F051513`,`F051613`,`F052413`,`F052513`,$k0 `F051813`,"
		. "$k0 `BLANK`,`F052813`,`F052913`,`F051713`"],
		["'99' `99`,`F052399`,`F051599`,`F051699`,`F052499`,`F052599`,`F051899`,"
		. "$k0 `BLANK`,`F052899`,`F052999`,`F051799`"],
		];
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlMedanStafWanitaV02')):
	function sqlMedanStafWanitaV02()
	{
		$k0 = "'BLANK'";
		$jumP = '/F051699';
		$jumG = '/F051799';
		$sql = [
		["'15','5B-Wanita' `5B - Staf`,'Warga' `F0523`,'XWarga' `F0515`,'Jum' `F0516`,"
		. "'PeratusBil','JumSub' `F0518`,'WargaGaji' `F0528`,'XWargaGaji' `F0529`,"
		. "'JumGaji' `F0517`,'GajiP%'"],
		["'16','01-Pemilik',`F052301`,`F051501`,`F051601`,(F051601$jumP),$k0 `JumSub`,"
		. "$k0 `WargaGaji`,$k0 `XWargaGaji`,$k0 `JumGaji`,'GajiP%'"],
		["'17','02-Pekerja Keluarga',`F052302`,`F051502`,`F051602`,(F051602$jumP),$k0 `JumSub`,"
		. "$k0 `WargaGaji`,$k0 `XWargaGaji`,$k0 `JumGaji`,'GajiP%'"],
		["'18','03-Pengurus',`F052303`,`F051503`,`F051603`,(F051603$jumP),`F051803`,"
		. "`F052803`,`F052903`,`F051703`,(F051703$jumG) as `GajiW%`"],
		["'19','04-Profesional',`F052304`,`F051504`,`F051604`,(F051604$jumP),`F051804`,"
		. "`F052804`,`F052904`,`F051704`,(F051704$jumG) as `GajiW`"],
		["'20','05-Penyelidik',`F052305`,`F051505`,`F051605`,(F051605$jumP),`F051805`,"
		. "`F052805`,`F052905`,`F051705`,(F051705$jumG) as `GajiW`"],
		["'21','06-Juruteknik',`F052306`,`F051506`,`F051606`,(F051606$jumP),`F051806`,"
		. "`F052806`,`F052906`,`F051706`,(F051706$jumG) as `GajiW`"],
		["'22','07-Kerani',`F052307`,`F051507`,`F051607`,(F051607$jumP),`F051807`,"
		. "`F052807`,`F052907`,`F051707`,(F051707$jumG) as `GajiW`"],
		["'23','08-Jualan',`F052308`,`F051508`,`F051608`,(F051608$jumP),`F051808`,"
		. "`F052808`,`F052908`,`F051708`,(F051708$jumG) as `GajiW`"],
		["'24','09-Kemahiran',`F052309`,`F051509`,`F051609`,(F051609$jumP),`F051809`,"
		. "`F052809`,`F052909`,`F051709`,(F051709$jumG) as `GajiW`"],
		["'25','16-Operator',`F052316`,`F051516`,`F051616`,(F051616$jumP),`F051816`,"
		. "`F052816`,`F052916`,`F051716`,(F051716$jumG) as `GajiW`"],
		["'26','12-Asas',`F052312`,`F051512`,`F051612`,(F051612$jumP),`F051812`,"
		. "`F052812`,`F052912`,`F051712`,(F051712$jumG) as `GajiW`"],
		["'27','89-Jum Staf Bergaji',`F052389`,`F051589`,`F051689`,(F051689$jumP),`F051889`,"
		. "`F052889`,`F052989`,`F051789`,(F051789$jumG) as `GajiW`"],
		["'28','13-Sambilan',`F052313`,`F051513`,`F051613`,(F051613$jumP),$k0 `F051813`,"
		. "`F052813`,`F052913`,`F051713`,(F051713$jumG) as `GajiW`"],
		["'29','99-JumPekerja',`F052399`,`F051599`,`F051699`,(F051699$jumP),`F051899`,"
		. "`F052899`,`F052999`,`F051799`,(F051799$jumG) as `GajiW`"],
		];
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
/*
# https://stackoverflow.com/questions/63364923/mysql-cannot-add-constant-field-at-start-of-select-error-1064
*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlCariMsicBe')):
	function sqlCariMsicBe($jadualBe,$jadual,$msic,$fe)
	{
		$link = "concat_ws('','<a href=cariMsicID.php?/',`barcode`,'>',`barcode`,'<br>',"
		. "`nama`,'</a>') as MsicId";
		$sql = "SELECT $link,`$jadualBe`.* FROM `$jadualBe` WHERE msic = '$msic'"
		. " AND fe like '%$fe%';";
		// $sql['CariMsicBe'] = sqlCariMsicBe($jadualBe,$jadual,$msic,$fe);
		//semakTatasusunanIni($sql);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlCariIDBe')):
	function sqlCariIDBe($jadualBe,$jadual,$msic,$id)
	{
		$sql = "SELECT * FROM `$jadualBe` WHERE barcode = '$id';";
		// $sql['CariIDBe'] = sqlCariIDBe($jadualBe,$jadual,$msic,$id);
		//semakTatasusunanIni($sql);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlCariMsicKp337')):
	function sqlCariMsicKp337($jadualBe,$jadual,$msic,$id)
	{
		$link = "concat_ws('','<a href=cariMsicID.php?/',`Serial_No`,'>',`Serial_No`,'<br>',"
		. "`Nama_Pertubuhan`,'</a>') as MsicId";
		$sql = "SELECT $link,`$jadual`.* FROM `$jadual` WHERE F010029 = '$msic';";
		// $sql['CariMsicKp337'] = sqlCariMsicKp337($jadualBe,$jadual,$msic,$id);
		//semakTatasusunanIni($sql);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlCariIDKp337')):
	function sqlcariIDKp337($jadualBe,$jadual,$msic,$id)
	{
		$link = "concat_ws('','<a href=cariMsicID.php?/',`Serial_No`,'>',`Serial_No`,'<br>',"
		. "`Nama_Pertubuhan`,'</a>') as MsicId";
		$sql = "SELECT * FROM `$jadual` WHERE Serial_No = '$id';";
		// $sql['cariIDKp337'] = sqlCariIDKp337($jadualBe,$jadual,$msic,$id);
		//semakTatasusunanIni($sql);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('sqlUpdateKawalan')):
	function sqlUpdateKawalan($jadualBe,$tarikhBatch,$id,$catatanBatch)
	{
		$sql = "UPDATE `$jadualBe` SET"
		. " tarikhBatch = '$tarikhBatch',"
		. " catatanBatch = '$catatanBatch'"
		. " WHERE barcode = '$id';";
		// $sql['UpdateKawalan'] = sqlUpdateKawalan($jadualBe,$tarikhBatch,$id,$catatanBatch);
		//semakTatasusunanIni($sql);
		return $sql;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx2')):
	function xxx2()
	{
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################