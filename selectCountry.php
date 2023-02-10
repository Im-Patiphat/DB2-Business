<?php
try {
    require 'connect.php';
    $sql = "SELECT customer.CustomerID , customer.Name, customer.OutstandingDebt, country.CountryName,country.CountryCode
    FROM customer,country
    WHERE customer.CountryCode=country.CountryCode";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    //  //แบบที่ 1
    //  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //      echo '<br>' .
    //          '--: ' .
    //          $result['ConutryCode'].
    //          '--'.
    //          $result['ConutryName'];
     //แบบที่ 2
      while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
         echo '<br>' .
             '--'. 
             $result[3].
             '--' .
             $result[4] ;
    }
   
 
} catch (PDOException $e) {
    echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
}
 
$conn = null;
?>
