<?php

$str = 'I_ES_WERNH_PLPP_O_YEDC';
$explode = explode('_', $str);
$plainStr = str_replace('_','',$str);
$strrev = strrev($plainStr);

$finalStr = '';
$chr = 0;
for($i=0;$i<count($explode);$i++) {
    $finalStr .=substr($strrev,$chr,strlen($explode[$i])).'_';
    $chr = $chr+strlen($explode[$i]);
}
echo rtrim($finalStr,'_');
