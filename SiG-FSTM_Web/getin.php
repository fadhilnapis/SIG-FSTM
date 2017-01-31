<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$passwd = $_POST['passwd'];

$sql = "SELECT * FROM crew WHERE github_name='$username' AND passwd='$passwd'";
$run = $conn->query($sql);

if($row = $run->fetch_assoc()){
    $_SESSION['username'] = $row['github_name']; 
    header('Location: index.php');
} else {
    echo "passwd or username not correct";
}

?>