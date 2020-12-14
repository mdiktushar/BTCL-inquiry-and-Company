<?php
        require_once "pdo.php";

        if (isset($_POST['confirm']) && $_POST['confirm']==='YES') {

                $delete = $pdo->prepare("DELETE FROM inquiry WHERE  Connection_Number = ".$_SESSION['ID_number'].";");
                $delete->execute();

                $data = [
                        ':value1' => '1',
                        ':id' => $_SESSION['ID_number'],
                ];

                $sql = "UPDATE customer SET Connection_Error = :value1 WHERE ID=:id";
                $pdo->prepare($sql)->execute($data);

                $stmt = $pdo->prepare('INSERT INTO inquiry (User_Name, Phone_Number, Address, aria_no, Connection_Number) VALUES ( :User_Name, :Phone_Number, :Address, :aria_no, :Connection_Number)');
                $stmt->execute(array(
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

<form method="post">
        <p>Write anything to confimr you are not a robort and then click the button: <br>
        <input type="text" name="confirm" /></p>
        
        <input type="submit" class="btn btn-primary" value="Complain">
        
</form>