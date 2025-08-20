<?php
require_once __DIR__ . '/Database.php';

class Author extends Database {
    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM authors ORDER BY name ASC");
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM authors WHERE id = ?");
        $stmt->execute([(int)$id]);
        return $stmt->fetch();
    }

    public function insert($name, $description = null) {
        $stmt = $this->pdo->prepare("INSERT INTO authors (name, description) VALUES (:name, :description)");
        $stmt->bindValue(':name', trim($name));
        $stmt->bindValue(':description', $description !== null ? trim($description) : null);
        return $stmt->execute();
    }

    public function update($id, $name, $description = null) {
        $stmt = $this->pdo->prepare("UPDATE authors SET name = :name, description = :description WHERE id = :id");
        $stmt->bindValue(':name', trim($name));
        $stmt->bindValue(':description', $description !== null ? trim($description) : null);
        $stmt->bindValue(':id', (int)$id, \PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM authors WHERE id = ?");
        return $stmt->execute([(int)$id]);
    }
}
