<?php
$host = 'host database';
$db = 'dp database';
$user = 'user database';
$pass = 'passwoord database';
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port);
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

$user_id = intval($_POST['user_id'] ?? 0);
$amount = intval($_POST['amount'] ?? 0);

$hour = date('H');
if ($hour >= 0 && $hour < 6) $time_of_day = 'Nacht (00:00 - 6:00)';
elseif ($hour < 12) $time_of_day = 'Ochtend (6:00 - 12:00)';
elseif ($hour < 18) $time_of_day = 'Middag (12:00 - 18:00)';
else $time_of_day = 'Avond (18:00 - 00:00)';

$stmt = $conn->prepare("INSERT INTO puffs (user_id, amount, time_of_day) VALUES (?, ?, ?)");
$stmt->bind_param("iis", $user_id, $amount, $time_of_day);
$stmt->execute();
$stmt->close();
$conn->close();
?>