<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $addr = $_POST['addr'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    $aname = $_POST['aname'];
    $anum = $_POST['anum'];
    $cscore = $_POST['cscore'];

    $text = $fname . "," . $lemail . "," . $id . "," . $addr . "," . $city . "," . $state . "," . $zip . "," . $aname . "," . $anum . "," . $cscore . "\n";
    $fp = fopen('data.txt', 'a+');
    if (fwrite($fp, $text)) {
        echo 'Saved!';
    }
    fclose($fp);
}
?>