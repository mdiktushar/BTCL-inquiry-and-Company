<?php
        require_once "pdo.php";

        if (isset($_POST['confirm']))
        {

                $delete = $pdo->prepare("DELETE FROM inquiry WHERE  Connection_Number = ".$_POST['confirm'].";");
                $delete->execute();

                $data = [
                        ':value1' => '0',
                        ':id' => $_POST['confirm'],
                ];

                $sql = "UPDATE customer SET Connection_Error = :value1 WHERE ID=:id";
                $pdo->prepare($sql)->execute($data);

                header("Location: home.php");
                return;
                

        } 

?>

<form method="post">
        <p>Enter the User Number you fixed and submit is: <br>
        <input type="text" name="confirm" /></p>
        
        <input type="submit" class="btn btn-primary" value="Fixed">
        
</form>