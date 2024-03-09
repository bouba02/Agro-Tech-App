<?php
    // connect to database
// $servername="localhost";
// $username="root";
// $password="root ";
// $dbname="agriculture_portal";
// $conn = mysqli_connect($servername, $username, $password, $dbname);
//   // $conn = mysqli_connect('us-cdbr-east-03.cleardb.com','b310794f5353e9','d9f40fcf','heroku_f1cacb29cd6455f');
//     if(!$conn){
//         echo 'Connection error' . mysqli_connect_error();
//     } 
?>


<?php
$servername = "localhost"; // L'hôte MySQL (dans ce cas, c'est généralement "localhost")
$username = "root";        // Votre nom d'utilisateur MySQL par défaut (souvent "root" dans MAMP)
$password = "root"; // Votre mot de passe MySQL (par défaut, il peut être vide ou "root" dans MAMP)
$database = "agriculture_portal"; // Le nom de votre base de données

// Créez une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
} else {
    // Vous pouvez maintenant exécuter des requêtes MySQL ici
    // Par exemple : $result = $conn->query("SELECT * FROM ma_table");
}

// N'oubliez pas de fermer la connexion lorsque vous avez terminé
// $conn->close();
?>
