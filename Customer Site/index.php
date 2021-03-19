<?php
    session_start();
    // $_SESSION['line_manLogin'] = 0;
    if($_SESSION['User_login']!=1)
        $_SESSION['User_login'] = 0;

?>

<script>

    window.location.replace("index1.php");
</script>