<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../Models/Book.php';
require_once __DIR__ . '/../Models/Author.php';

class BookController extends BaseController {
    private $bookModel;
    private $authorModel;

    public function __construct() {
        $this->bookModel = new Book();
        $this->authorModel = new Author();
    }

    public function index() {
        $books = $this->bookModel->getAll();
        $this->render('books/index', ['books' => $books]);
    }

    public function create() {
        $this->requireAdmin();
        $authors = $this->authorModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->bookModel->create($_POST);
            header('Location: index.php?controller=book&action=index');
            exit;
        }
        $this->render('books/create', ['authors' => $authors]);
    }

    public function edit() {
        $this->requireAdmin();
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: index.php?controller=book&action=index');
            exit;
        }
        $authors = $this->authorModel->getAll();
        $book = $this->bookModel->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->bookModel->update($id, $_POST);
            header('Location: index.php?controller=book&action=index');
            exit;
        }
        $this->render('books/edit', ['book' => $book, 'authors' => $authors]);
    }

    public function delete() {
        $this->requireAdmin();
        $id = $_GET['id'] ?? null;
        if ($id) $this->bookModel->delete($id);
        header('Location: index.php?controller=book&action=index');
        exit;
    }
}
