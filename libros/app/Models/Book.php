<?php
require_once __DIR__ . '/Database.php';

class Book extends Database {
    public function getAll() {
        $stmt = $this->pdo->query("
            SELECT b.id, b.title, b.description, b.year, a.name AS author, b.author_id
            FROM books b
            LEFT JOIN authors a ON a.id = b.author_id
            ORDER BY b.title ASC
        ");
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM books WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($data) {
        $stmt = $this->pdo->prepare("INSERT INTO books (title, author_id, description, year) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            trim($data['title']),
            $data['author_id'] !== '' ? (int)$data['author_id'] : null,
            trim($data['description']),
            $data['year'] !== '' ? (int)$data['year'] : null
        ]);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE books SET title=?, author_id=?, description=?, year=? WHERE id=?");
        return $stmt->execute([
            trim($data['title']),
            $data['author_id'] !== '' ? (int)$data['author_id'] : null,
            trim($data['description']),
            $data['year'] !== '' ? (int)$data['year'] : null,
            (int)$id
        ]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM books WHERE id=?");
        return $stmt->execute([(int)$id]);
    }
}
