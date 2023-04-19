<?php
$password_length = $_GET['length'];

function generatePassword($length){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?@&#=&%';
    return substr(str_shuffle($characters), 0, $length);
}
?>