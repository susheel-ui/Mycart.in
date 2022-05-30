<?php

$tamount = $_POST['name'];

$Address =$_POST['Add1'];
$mobileNo =$_POST['mobile'];
echo $tamount;
echo $Address;
echo $mobileNo;
$dataObject = $_POST['data'];
$json = json_decode($dataObject,true);

foreach($json as $key => $value){
    print" items : ".$value;

}





?>