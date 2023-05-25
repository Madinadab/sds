<?php
// Connexion à la base de données
$servername = 'localhost';
$dbname = 'madina';
$username = 'root';
$password = '';

// $conn = mysqli_connect('localhost','root','','madina') or die(mysqli_error());
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>