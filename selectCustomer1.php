<html> <head>
<title> Udsanee-Display customer</title>
</head>
<body>
<?php
require "connect.php";
$sql = "SELECT customer.CustomerID , customer.Name,  customer.Birthdate,customer.Email, country.CountryName,country.CountryCode,customer.OutstandingDebt
FROM customer,country
WHERE customer.CountryCode=country.CountryCode";
 
$stmt = $conn->prepare($sql);
 
$stmt->execute();
?>
 
<table width="800" border="1">
  <tr>
    <th width="90"> <div align="center">รหัสผู้ใช้ </div></th>
    <th width="140"> <div align="center">ชื่อ </div></th>
    <th width="120"> <div align="center">วันเกิด </div></th>
    <th width="100"> <div align="center">Email </div></th>
    <th width="50"> <div align="center">ประเทศ </div></th>
    <th width="70"> <div align="center">ยอดหนี้</div></th>
  </tr>
 
<?php
 while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
   
?>
 
  <tr>
    <td>    <?php echo $result[0]; ?>     </td>
    <td>    <?php echo $result[1]; ?>     </td>
     <td>   <?php echo $result[2]; ?>  </td>
    <td>    <?php echo $result[3]; ?></td>
    <td>    <?php echo $result[4]; ?>  </td>
    <td>    <?php echo $result[6]; ?></td>
    
  </tr>
 
<?php
  }
?>
 
</table>
 
<?php
$conn = null;
?>
</body>  
</html>
