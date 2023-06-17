<?php
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('fieldName')):
	function fieldName($bil,$namaMedan)
	{
		$p = '<input name="fields[' . $bil . '][name]" value="' . $namaMedan . '"'
		. 'data-maxlength="64" autocapitalize="off" aria-labelledby="label-name">';

		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('fields')):
	function fieldType($bil)
	{
		$p = '<select name="fields[' . $bil . '][type]" class="type" aria-labelledby="label-type">'
		. '<optgroup label="Numbers"><option>tinyint<option>smallint<option>mediumint'
		. '<option selected>int<option>bigint<option>decimal<option>float<option>double</optgroup>'
		. '<optgroup label="Date and time"><option>date<option>datetime<option>timestamp'
		. '<option>time<option>year</optgroup>'
		. '<optgroup label="Strings"><option>char<option>varchar<option>tinytext<option>text'
		. '<option>mediumtext<option>longtext<option>json</optgroup>'
		. '<optgroup label="Lists"><option>enum<option>set</optgroup>'
		. '<optgroup label="Binary"><option>bit<option>binary<option>varbinary<option>'
		. 'tinyblob<option>blob<option>mediumblob<option>longblob</optgroup>'
		. '<optgroup label="Geometry"><option>geometry<option>point<option>linestring<option>polygon'
		. '<option>multipoint<option>multilinestring<option>multipolygon'
		. '<option>geometrycollection</optgroup>'
		. '</select>';

		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('fieldLength')):
	function fieldLength($bil)
	{
		$p = '<input name="fields[' . $bil . '][Length]" value="" data-maxlength="64"'
		. 'autocapitalize="off" aria-labelledby="label-name">';

		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx')):
	function xxx()
	{
		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
$jenisMedan = ['ayam','goreng','rempah'];
#--------------------------------------------------------------------------------------------------
echo '<form method="POST" action="paparPost.php" class="form-horizontal">';
#--------------------------------------------------------------------------------------------------
echo "\n" . 'Table name: <input name="name" data-maxlength="64" value="" autocapitalize="off">
<select name="engine"><option value="">(engine)
<option>InnoDB
<option>MRG_MYISAM
<option>MEMORY
<option>BLACKHOLE
<option>MyISAM
<option>CSV
<option>ARCHIVE
<option>PERFORMANCE_SCHEMA
</select>';
#--------------------------------------------------------------------------------------------------
echo "\n" . '<table>' . "\n\t" . '<tr><th>Column name</th><th>Type</th><th>Length</th></tr>';
foreach($jenisMedan as $key => $val):
	echo "\n\t" . '<tr>';
	echo '<td>' . fieldName($key,$val) . '</td>';
	echo '<td>' . fieldType($key) . '</td>';
	echo '<td>' . fieldLength($key) . '</td>';
	echo "\n\t" . '</tr>';
endforeach;
echo "\n\t" . '</table>';
#--------------------------------------------------------------------------------------------------
echo '<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary btn-large">';
#--------------------------------------------------------------------------------------------------
echo '</form>';
#--------------------------------------------------------------------------------------------------