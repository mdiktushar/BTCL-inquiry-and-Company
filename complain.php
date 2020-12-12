<?php
    require_once "pdo.php";


    if (isset($_POST['confirm'])) {

            $delete = $pdo->prepare("DELETE FROM inquiry WHERE  Connection_Number = ".$_SESSION['ID_number'].";");
            $delete->execute();

            $stmt = $pdo->prepare('INSERT INTO inquiry (User_Name, Phone_Number, Address, aria_no, Connection_Number) VALUES ( :User_Name, :Phone_Number, :Address, :aria_no, :Connection_Number)');
            $stmt->execute(array(
                    // ':User_Name' => $_POST['name'],
                    // ':Phone_Number' => $_POST['phone'],
                    // ':Address' => $_POST['Address'],
                    // ':Email' => $_POST['email'],
                    // ':aria_no' => $_POST['aria'],
                    // ':Connection_Number' => $_POST['number'])

                    ':User_Name' => $name,
                    ':Phone_Number' => $mobileNumber,
                    ':Address' => $address,
                    ':aria_no' => $areaCode,
                    ':Connection_Number' => $number,)
            );
            header("Location: home.php");
            return;

    } 

?>

