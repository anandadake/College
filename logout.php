<!-- =======================================================
    20-MAR-19   A-01-01     aadake     ##1     Created.
    ======================================================= -->
<?php
    session_start();
    session_unset();
    session_destroy();
    

	header("Location: http://localhost/college/login.php");
?>