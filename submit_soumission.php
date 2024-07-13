<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adproprete";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$details = $_POST['details'];

// Préparer et exécuter la requête SQL
$sql = "INSERT INTO soumissions (nom, email, telephone, details) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $phone, $details);

if ($stmt->execute()) {
    echo "<script>
            alert('Soumission envoyée avec succès!');
            window.location.href = 'soumission.php';
          </script>";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$stmt->close();
$conn->close();
