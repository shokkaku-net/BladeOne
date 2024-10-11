<?php
/**
 * Copyright (c) 2014 Jorge Patricio Castro Castillo MIT License.
 */
include "../lib/BladeOne.php";
use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$compiledFolder = __DIR__ . '/compiled';
$blade=new BladeOne($views,$compiledFolder,BladeOne::MODE_DEBUG);


$products=[
    ["name"=>"cocacola","price"=>10],
    ["name"=>"fanta","price"=>20],
    ["name"=>"sprite","price"=>30],
];


try {
    echo $blade->run("Test2.stack", ['products'=>$products]);
} catch (Exception $e) {
    echo "error found ".$e->getMessage()."<br>".$e->getTraceAsString();
}

