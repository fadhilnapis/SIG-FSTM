<?php

include 'connect.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$ghusername = $_POST['ghusername'];
$phnumber = $_POST['phnumber'];
$course = $_POST['course'];
$passwd = $_POST['passwd'];
$repasswd = $_POST['re-passwd'];

if (empty($fullname || $email || $ghusername || $phnumber || $couse || $passwd || $repasswd)){

    header('Location: register.php?empty=error');
} else {
    if ($passwd == $repasswd) {

        $sql = 'SELECT github_name FROM crew WHERE github_name="$ghusername"';
        $result = mysqli_num_rows();        

        $sql = "INSERT INTO crew (fullname, email, github_name, phonenumber, coursename, passwd) VALUES ('$fullname','$email','$ghusername','$phnumber','$course','$repasswd')";
        $run = $conn->query($sql);

        header('Location: thankyou.php');

        }
        else {
        echo 'password do not match';
        header('Location: register.php?password=notmatch');
        }

        // header('Location: index.php');
}