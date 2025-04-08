<?php
require_once __DIR__ . '/vendor/autoload.php';

use MongoDB\Client;
use Dotenv\Dotenv;

try {
    // Cargar variables del archivo .env
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // Leer la URI de MongoDB desde .env
    $mongoUri = $_ENV['MONGODB_URI'];

    // Conexión a MongoDB
    $client = new Client($mongoUri);
    $db = $client->Contact;
    $collection = $db->contact;

} catch (Exception $e) {
    die("Error al conectar con MongoDB: " . $e->getMessage());
}
?>