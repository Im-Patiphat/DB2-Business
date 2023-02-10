<?php
require 'connect.php';
 
// ทดสอบเรียกดูข้อมูลจากฐานข้อมูล แบบ Loop
$sql = "SELECT * FROM `customer`";
//WHERE CustomerID = 'Cus005'
$stmt = $conn->prepare($sql);
$stmt->execute();

echo '<br/>';

$result = $stmt->fetchAll();
//print_r($result);
 
foreach ($result as $r){
    print $r['CustomerID'] . '--' . $r['Name'] .'--' . $r['OutstandingDebt'] . '--' .$r['CountryCode'] .'<br>';

}
?>