<?php

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $genre = $_POST['genre'];
    $date_naissance = $_POST['date_naissance'];
    $date_admistion = $_POST['date_admistion'];
    $personne_prevenir = $_POST['personne_prevenir'];

    include('connexionbd.php');
    try {

        $sql = "INSERT INTO form (nom, prenom, genre, date_naissance, date_admistion, personne_prevenir) VALUES (:nom, :prenom, :genre, :date_naissance, :date_admistion, :personne_prevenir)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':genre', $genre);
        $stmt->bindParam(':date_naissance', $date_naissance);
        $stmt->bindParam(':date_admistion', $date_admistion);
        $stmt->bindParam(':personne_prevenir', $personne_prevenir);
        $stmt->execute();

        $success = true;
        header('Location: tableau.php');
        exit();
    } 
    catch (PDOException $e) {

        die('Erreur : ' . $e->getMessage());
    }

    echo "Successful";
} 
