<?php

class Database {
    private static $connection = null;
    private $table;

    // Static method to establish and return the database connection
    public static function connection() {
        // Check if the connection is already established
        if (self::$connection === null) {
            // Load environment variables from .env file
            $env = self::loadEnv();

            // Get database credentials from the loaded environment variables
            $host = $env['DB_HOST'];
            $db_name = $env['DB_NAME'];
            $username = $env['DB_USER'];
            $password = $env['DB_PASSWORD'];

            // Try to establish a connection using PDO
            try {
                self::$connection = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }
        return self::$connection;
    }

    // Load .env file from the parent folder and return associative array of environment variables
    private static function loadEnv() {
        // Change this to the correct path to the .env file (in the parent directory)
        $envFile = __DIR__ . '/../.env';  // Accessing .env in the parent directory

        if (!file_exists($envFile)) {
            die("Error: .env file not found.");
        }

        // Read the .env file contents
        $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $env = [];

        // Parse each line of the .env file
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue;  // Skip comments
            }

            // Split each line by the first '=' to separate key and value
            list($key, $value) = explode('=', $line, 2);

            // Store key-value pairs in the $env array
            $env[trim($key)] = trim($value);
        }

        return $env;
    }

    // Method to set the table name
    public function setTable($tableName) {
        $this->table = $tableName;
    }

    // Method to fetch all rows from the set table
    public function fetchAllRows() {
        $connection = self::connection();  // Get the connection
        $query = "SELECT * FROM {$this->table}";  // Use the table name dynamically
        $statement = $connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
