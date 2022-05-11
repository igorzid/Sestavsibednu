<?php
class User {
    private mysqli $connection;

    public function __construct(Database $db) {
        $this->connection = $db->getConnection();
    }

    public function readProductsOfType($type) : mysqli_result {
        $query = "SELECT * FROM products WHERE type = ?";

        $stmt = $this->connection->prepare($query);

        $stmt->bind_param('s', $type);

        $stmt->execute();

        return $stmt->get_result();
    }
}
?>