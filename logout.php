<?php // line 1 added to enable color highlight

session_start();
unset($_SESSION['ID_number']);
unset( $_SESSION['Name']);

// unset($_SESSION['Email']);

// unset($_SESSION['Address']);

// unset($_SESSION['Area_Code']);

// unset($_SESSION['Date_of_Birth']);

// unset($_SESSION['Connection_Type']);

// unset($_SESSION['City_and_Zip_Code']);

// unset( $_SESSION['Connection_Error']);

// unset( $_SESSION['Mobile_Number'] );

 header('Location: index.php');

?>