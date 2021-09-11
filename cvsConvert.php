<?php

$filename = 'townships_of_burma.csv';

$header = null;
$data = array();
$handle = fopen($filename, 'r');

if($handle !== false)
{
    while (($row = fgetcsv($handle,1000,',')) !== false)
    {
        if(!$header)
        {
            $header = $row;
        }else{
            $data[] = array_combine($header, $row);
        }
    }
    fclose($handle);

}

$catter = count($data);

for($i=0; $i < $catter; $i++)
{
    print($i);
    print($data[$i]['Region']);
    print($data[$i]['State']);
    print($data[$i]['Name']);
    print($data[$i]['Township']);
    print("<br>");
}

   
