<?php

include_once('connection.php');

if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $stmt = $conn->prepare("SELECT * FROM adminlogin WHERE adminname = :username and password = :password");

    $stmt->execute([
        'username' => $_POST["adminname"],
        'password' => $_POST["password"]
    ]);
    $user = $stmt->fetch();

    if (is_array($user)) {
        echo "bemvindo " . $user['adminname'];
    } else {
        echo "auth fail";
    }

}
