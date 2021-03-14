<?php
    session_start();
    if($_SESSION['line_manLogin'] == 1)
    {
        echo "
            <script >
                window.location.replace(\"home.php\");
            </script>
        ";
    }else{
        $_SESSION['line_manLogin'] = 0;
    }
    

?>

<script>

    window.location.replace("index1.php");
</script>