<?php

$conn = mysqli_connect('localhost','root','haha25%','sigCrew');

if (!$conn){
    die("Connection error :". mysqli_connect_error());
}