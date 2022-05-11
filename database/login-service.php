<?php
class User {
    private mysqli $connection;

    public function __construct(Database $db) {
        $this->connection = $db->getConnection();
    }

    public function readOneUser($username, $userPassword) : mysqli_result {
        $query = "SELECT * FROM users WHERE username = ? AND userPassword = ?";

        $stmt = $this->connection->prepare($query);

        $stmt->bind_param('ss', $username, $userPassword);

        $stmt->execute();

        return $stmt->get_result();
    }
}
?>