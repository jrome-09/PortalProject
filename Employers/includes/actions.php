<?php
require "../../includes/db_connection.inc.php";

$status;
$id;
if (isset($_POST['approve'])) {
    $status = 'Approved';
    $id = str_replace("app_", "", $_POST['approve']);
}

if (isset($_POST['disapprove'])) {
    $status = 'Disapproved';
    $id = str_replace("app_", "", $_POST['disapprove']);
}

if (isset($_POST['approve']) || isset($_POST['disapprove'])) {

    $stmt = $conn->prepare("UPDATE `application` SET `application_status`= ? WHERE _id = ?");
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        echo "Success";
    } else {
        echo 'failed:' . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
