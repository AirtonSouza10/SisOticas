<?php
if (!isset($_SESSION["cpf"])) {
    echo "<script>";
    echo "window.location.href = '../index.php';";
    echo "</script> ";
}
?>
