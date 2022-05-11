<?php
class Reg {
    private mysqli $connection;

    public function __construct(Database $db) {
        $this->connection = $db->getConnection();
    }

    public function create($userreg) : bool {
        $query = "INSERT INTO users (username, userPassword, email) VALUES (?, ?, ?)";

        $stmt = $this->connection->prepare($query);

        $stmt->bind_param('sss', $userreg->username, $userreg->userPassword, $userreg->email);

        return $stmt->execute();
    }
}
?>