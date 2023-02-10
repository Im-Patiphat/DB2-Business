<?php
try {
    require 'connect.php';
    $sql = "SELECT customer.CustomerID , customer.Name, customer.OutstandingDebt, country.CountryName, customer.Birthdate
    FROM customer,country
    WHERE customer.CountryCode=country.CountryCode";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    //แบบที่ 2
    while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
        echo '<br>' .
            'รหัสลูกค้า : ' .
            $result[0] .
            '  วันเกิด : ' .
            $result[4] .
            'ประเทศ'. 
            $result[3]. 
           ' ยอดหนี้ '. 
            $result[2];
    }
 
} catch (PDOException $e) {
    echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
}
 
$conn = null;
?>