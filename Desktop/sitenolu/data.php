<?php
// Connexion à la base de données (assurez-vous de remplacer les valeurs appropriées)
$servername = "localhost";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "ma_base_de_donnees";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Exemple d'insertion d'un utilisateur (remplacez les valeurs par celles du formulaire)
$username = "utilisateur_test";
$password_hash = password_hash("mot_de_passe_test", PASSWORD_DEFAULT);

$sql = "INSERT INTO utilisateurs (username, password_hash) VALUES ('$username', '$password_hash')";

if ($conn->query($sql) === TRUE) {
    echo "Utilisateur enregistré avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
