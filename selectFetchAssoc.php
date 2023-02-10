<?php
try {
    require 'connect.php';
    $sql = "SELECT customer.CustomerID , customer.Name, customer.OutstandingDebt, country.CountryName, customer.Birthdate
    FROM customer,country
    WHERE customer.CountryCode=country.CountryCode";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    //แบบที่ 1
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<br>' .
            'รหัสลูกค้า : ' .
            $result['CustomerID'] .
            ' วันเกิด : ' .
            $result['Birthdate'] .
            ' ยอดหนี้ : ' .
            $result['OutstandingDebt'];
    }
 
} catch (PDOException $e) {
    echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
}
 
$conn = null;
?>

