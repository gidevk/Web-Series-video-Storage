<?php
session_start();

if(isset($_SESSION["email"]))
{
    session_unset();

    // echo "<script> locatoin.href='../includes/footer.php'</script>";
    session_destroy();
    header ('location:../html/index.php');
}
else{
    header("Location:../html/index.php");
}

?>