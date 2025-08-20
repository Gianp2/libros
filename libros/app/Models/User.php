<?php
require_once __DIR__ . '/Database.php';

class User extends Database {
    public function findByUsername($username) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
        $stmt->execute([$username]);
        return $stmt->fetch();
    }

    public function verifyLogin($username, $password) {
        $user = $this->findByUsername($username);
        if (!$user) return false;
        return $user['password'] === md5($password);
    }
}
