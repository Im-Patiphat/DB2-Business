<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="selectCountry1.css">
<title> Udsanee-Display customer</title>
</head>
<body>
<?php
require "connect.php";
$sql = "SELECT * FROM Country
";
 
$stmt = $conn->prepare($sql);
 
$stmt->execute();
?>
 
<table width="250" border="1">
  <tr>
    <center><th width="90"> <div align="center">รหัสประเทศ </div></th></center>
    <center><th width="30"> <div align="center">ชื่อประเทศ </div></th></center>
  </tr>
 
<?php
 while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
   
?>
 
  <tr>
    <center><td>    <div align="center"><?php echo $result[0]; ?>     </td></center>
    <center><td>    <div align="center"><?php echo $result[1]; ?>     </td></center>
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
