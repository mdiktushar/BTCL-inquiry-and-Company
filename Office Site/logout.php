<?php // line 1 added to enable color highlight

    session_start();
    unset($_SESSION['Aris_ID']);
    unset($_SESSION['lineman_name']);
    unset($_SESSION['line_manLogin']);
    header('Location: index.php');

?>

<script>

    window.location.replace("index.php");
</script>