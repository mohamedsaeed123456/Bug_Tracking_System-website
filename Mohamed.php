<?php

class appledevice{
    public $ram = '1 GB' ;
    public $inch = '6 inch';
    public $space = '16 GB';
    public $color = 'Green';
    public $ownerName;




    Function SetOwnerName($owner){
    	if (strlen($owner) < 3){
	    	echo 'Owner Name Cant Be Less Than 3 Character';
    	}else{
    		echo 'Your Name Has Been Set';
    	}
    }

}
$iphone6plus =new appledevice();
$iphone6plus->ram='2GB';
$iphone6plus->inch='5 inch';
$iphone6plus->space='32 GB';
$iphone6plus->color='Red';
$iphone6plus->SetOwnerName('Mohamed');


echo '<pre>';
var_dump($iphone6plus);

echo '</pre>';
$iphone7plus =new appledevice();
$iphone7plus->ram='3GB';
$iphone7plus->inch='4 inch';
$iphone7plus->space='64 GB';
$iphone7plus->color='Blue';

echo '<pre>';
var_dump($iphone7plus);

echo '</pre>';


$iphone =new appledevice();
echo '<pre>';
var_dump($iphone);

echo '</pre>';
