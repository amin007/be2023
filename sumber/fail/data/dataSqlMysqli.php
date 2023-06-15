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
			#--------------------------------------------------------------------------------------
			$result = $pdo->query($sql_stmt);
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$tajuk[$myTable] = $myTable;
			$data[$myTable] = array();
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
###################################################################################################
