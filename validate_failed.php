<?php

include_once('connection.php');

if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $adminname = $_POST["adminname"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM adminlogin WHERE adminname = '$adminname' and password = '$password'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch();

    if (is_array($user)) {
        echo "bemvindo " . $user['adminname'];
    } else {
        echo "falhado";
    }

}
