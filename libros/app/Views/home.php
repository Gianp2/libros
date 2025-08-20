<section class="hero">
  <h1>Bienvenido al Catálogo de Libros</h1>
  <p class="subtitle">Explorá autores y obras destacadas. Iniciá sesión como <strong>admin</strong> para gestionar el catálogo.</p>
  <div class="actions">
    <a class="btn" href="index.php?controller=book&action=index">Ver Libros</a>
    <a class="btn btn-outline" href="index.php?controller=author&action=index">Ver Autores</a>
  </div>
</section>
<br>
<section>
  <h2>Últimos libros agregados</h2>
  <br>
  <div class="grid cards">
    <?php if (!empty($books)): foreach ($books as $b): ?>
      <article class="card">
        <h3><?= htmlspecialchars($b['title']) ?></h3>
        <p class="muted"><?= htmlspecialchars($b['author'] ?? 'Autor desconocido') ?> · <?= htmlspecialchars($b['year'] ?? '—') ?></p>
        <p><?= nl2br(htmlspecialchars(substr($b['description'] ?? '', 0, 120))) ?><?= strlen($b['description'] ?? '') > 120 ? '…' : '' ?></p>
        <a class="link" href="index.php?controller=book&action=index">Ver más</a>
      </article>
    <?php endforeach; else: ?>
      <p class="muted">Aún no hay libros en el catálogo.</p>
    <?php endif; ?>
  </div>
</section>
