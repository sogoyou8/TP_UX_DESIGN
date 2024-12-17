<?php
require_once 'vendor/autoload.php'; // Inclure Composer

$faker = Faker\Factory::create();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

function escape($conn, $string) {
    return $conn->real_escape_string($string);
}

for ($i = 0; $i < 1000; $i++) {
    $name = escape($conn, $faker->word);
    $description = escape($conn, $faker->sentence);
    $price = $faker->randomFloat(2, 1, 100);
    $image_url = escape($conn, $faker->imageUrl(640, 480, 'technics'));

    $sql = "INSERT INTO products (name, description, price, image_url) VALUES ('$name', '$description', $price, '$image_url')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Nouveau produit créé avec succès<br>";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>