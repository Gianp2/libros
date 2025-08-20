<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../Models/Book.php';

class HomeController extends BaseController {
    public function index() {
        $bookModel = new Book();
        $books = $bookModel->getAll();
        $this->render('home', ['books' => $books]);
    }

    public function contact() {
        $this->render('contact');
    }
}
