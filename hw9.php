<?php

$array = array('value0', 'value1', 'value2', 'value3', 'value4', 'value5');
try
{
	$fp = fopen('file.csv', 'w');
}
//better exception handling
catch (Exception $e)
{
	echo 'Caught exception: ' . $e.getMessage() . 'n';
}


try
{
	foreach ($array as $fields)
	{
		fputcsv($fp, $fields);
	}
}
//better exception handling
catch (Exception $e)
{
	echo 'Caught exception: ' . $e.getMessage() . 'n';
}

fclose($fp);
?>