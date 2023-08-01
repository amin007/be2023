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
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dbMysqli00')):
	function dbMysqli00($host,$dbName,$user,$pass,$sql)
	{
		#https://wiki.php.net/rfc/mysqli_default_errmode
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		#------------------------------------------------------------------------------------------
		//$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		try {
		$pdo = new PDO('mysql:host='.$host.';dbname='.$dbName,$user,$pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->exec('SET NAMES "utf8"');
		#------------------------------------------------------------------------------------------
		foreach($sql as $myTable => $sqlDaa):
			//semakPembolehubah($sqlDaa,'sqlDaa',0);
			#--------------------------------------------------------------------------------------
			$sql_stmt = $sqlDaa;
			$data[$myTable] = array();
			#--------------------------------------------------------------------------------------
			$result = $pdo->query($sql_stmt);
			$result->setFetchMode(PDO::FETCH_ASSOC);
			//$result->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $row)
			{
				$data[$myTable][] = $row;
			}
			#--------------------------------------------------------------------------------------
		endforeach;
		#------------------------------------------------------------------------------------------
		}
		catch (PDOException $e) { echo $e->getMessage(); }//*/
		#------------------------------------------------------------------------------------------
		return $data;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dbMysqli01')):
	function dbMysqli01($host,$dbName,$user,$pass,$sql)
	{
		#https://wiki.php.net/rfc/mysqli_default_errmode
		#https://www.php.net/manual/en/pdostatement.fetch.php
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		#------------------------------------------------------------------------------------------
		foreach($sql as $myTable => $sqlDaa)://semakPembolehubah($sqlDaa,'sqlDaa',0);
		#------------------------------------------------------------------------------------------
			try {
				$pdo = new PDO("mysql:host=$host;dbname=$dbName",$user,$pass);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$pdo->exec('SET NAMES "utf8"');
				#----------------------------------------------------------------------------------
				$result = $pdo->query($sqlDaa);
				//$result->setFetchMode(PDO::FETCH_ASSOC);
				$result->setFetchMode(PDO::FETCH_NAMED);
				#----------------------------------------------------------------------------------
				foreach ($result as $row)
					$data[$myTable][] = $row;
				#----------------------------------------------------------------------------------
			}
			catch (PDOException $e)
			{
				semakTatasusunanIni($sqlDaa,'pre');
				semakTatasusunanIni($e->getMessage(),'pre');
			}
		#------------------------------------------------------------------------------------------
		endforeach;
		#------------------------------------------------------------------------------------------
		return $data;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dbUpdate01')):
	function dbUpdate01($host,$dbName,$user,$pass,$sql,$dataKhas)
	{
		#https://wiki.php.net/rfc/mysqli_default_errmode
		#https://www.php.net/manual/en/pdostatement.fetch.php
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		#------------------------------------------------------------------------------------------
		foreach($sql as $myTable => $sqlDaa)://semakPembolehubah($sqlDaa,'sqlDaa',0);
		#------------------------------------------------------------------------------------------
			try {
				$pdo = new PDO("mysql:host=$host;dbname=$dbName",$user,$pass);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$pdo->exec('SET NAMES "utf8"');
				#----------------------------------------------------------------------------------
				# prepare statement
				$result = $pdo->prepare($sqlDaa);
				#----------------------------------------------------------------------------------
				# execute the UPDATE result
				if ($result->execute($data))
					$data = 'Data ' . $myTable . ' sudah dikemaskini!!!';
				else $data = 'Data ' . $myTable . ' gagal dikemaskini!!!';
				#----------------------------------------------------------------------------------
			}
			catch (PDOException $e)
			{
				semakTatasusunanIni($sqlDaa,'pre');
				semakTatasusunanIni($e->getMessage(),'pre');
			}
		#------------------------------------------------------------------------------------------
		endforeach;
		#------------------------------------------------------------------------------------------
		return $data;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
