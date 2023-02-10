<?php
    if (!empty($_POST['CountryCode'])&& !empty($_POST['CountryName'])):
    require 'connect.php';
    $sql_insert = "insert into country values (:CountryCode,:CountryName)";
    
    $stmt = $conn->prepare($sql_insert);
    $stmt->bindParam(':CountryCode',$_POST['CountryCode']);
    $stmt->bindParam(':CountryName',$_POST['CountryName']);

    if($stmt->execute()):
        $message ='Suscessfully add new  country';
        header("Location:/business/selectCountry1.php");
    else:
    $message = 'Fail to add country';
    endif;
    echo $message;
    $conn = null;
endif;
?>