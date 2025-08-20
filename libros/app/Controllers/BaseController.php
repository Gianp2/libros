<?php
class BaseController {
    protected function render($view, $data = []) {
        extract($data);
        $viewFile = __DIR__ . '/../Views/' . $view . '.php';
        $header = __DIR__ . '/../Views/layout/header.php';
        $footer = __DIR__ . '/../Views/layout/footer.php';
        if (file_exists($viewFile)) {
            include $header;
            include $viewFile;
            include $footer;
        } else {
            http_response_code(404);
            echo "<div class='container'><h2>404 - Vista no encontrada</h2></div>";
        }
    }

    protected function isAdmin() {
        return isset($_SESSION['user']) && $_SESSION['user'] === 'admin';
    }

    protected function requireAdmin() {
        if (!$this->isAdmin()) {
            header("Location: index.php?controller=auth&action=login");
            exit;
        }
    }
}
