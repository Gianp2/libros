<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Catálogo de Libros</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<header class="navbar">
  <div class="container nav-inner">
    <a class="brand" href="index.php">📚 Catálogo de Libros</a>
    <nav class="menu">
      <a href="index.php">Inicio</a>
      <a href="index.php?controller=book&action=index">Libros</a>
      <a href="index.php?controller=author&action=index">Autores</a>
      <a href="index.php?controller=home&action=contact">Contacto</a>
    </nav>
    <div class="auth">
      <?php if(isset($_SESSION['user'])): ?>
        <span class="user">Hola, <?= htmlspecialchars($_SESSION['user']) ?></span>
        <a class="btn btn-outline" href="index.php?controller=auth&action=logout">Salir</a>
      <?php else: ?>
        <a class="btn" href="index.php?controller=auth&action=login">Ingresar</a>
      <?php endif; ?>
    </div>
  </div>
</header>
<main class="container">
