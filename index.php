<?php
$password_length = $_GET['length'];

function generatePassword($length){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?@&#=&%';
    return substr(str_shuffle($characters), 0, $length);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <h1>Strong Password Generator</h1>
    <form action="index.php" method="GET">
        <label for="length">Inserisci la lunghezza della password:</label>
        <input type="number" id="length" name="length">
        <button>Invia</button>
    </form>
    <?php if(!empty($password_length) && $password_length > 0){
        echo '<p> La Password è: ' .generatePassword($password_length);
    } ?>
</body>

</html>