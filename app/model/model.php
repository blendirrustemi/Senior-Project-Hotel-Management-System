<?php


// Model layer
class DataModel
{
    private $conn;

    public function __construct()
    {
        // Connect to database
        $this->conn = new PDO("mysql:host=<hostname>;dbname=<database_name>", "<username>", "<password>");
    }

    public function getData()
    {
        // Query to fetch data
        $query = "SELECT * FROM <table_name>";

        // Prepare and execute the query
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        // Return the result set
        return $stmt->fetchAll();
    }
}


?>