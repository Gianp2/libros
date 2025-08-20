<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../Models/Author.php';

class AuthorController extends BaseController {
    private $authorModel;

    public function __construct() {
        $this->authorModel = new Author();
    }

    public function index() {
        $authors = $this->authorModel->getAll();
        $this->render('authors/index', ['authors' => $authors]);
    }

    public function create() {
        $this->requireAdmin();
        $this->render('authors/create');
    }

    public function store() {
        $this->requireAdmin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? null;
            if (trim($name) !== '') {
                $this->authorModel->insert($name, $description);
            }
        }
        header('Location: index.php?controller=author&action=index');
        exit;
    }

    public function edit() {
        $this->requireAdmin();
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: index.php?controller=author&action=index');
            exit;
        }
        $author = $this->authorModel->getById($id);
        if (!$author) {
            header('Location: index.php?controller=author&action=index');
            exit;
        }
        $this->render('authors/edit', ['author' => $author]);
    }

    public function update() {
        $this->requireAdmin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? null;
            if ($id && trim($name) !== '') {
                $this->authorModel->update($id, $name, $description);
            }
        }
        header('Location: index.php?controller=author&action=index');
        exit;
    }

    public function delete() {
        $this->requireAdmin();
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->authorModel->delete($id);
        }
        header('Location: index.php?controller=author&action=index');
        exit;
    }
}
