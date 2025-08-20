<section class="flex-between">
  <h1>Libros</h1>
  <?php if (isset($_SESSION['user']) && $_SESSION['user'] === 'admin'): ?>
    <a class="btn" href="index.php?controller=book&action=create">+ Nuevo libro</a>
  <?php endif; ?>
</section>


<br>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Año</th>
        <th>Descripción</th>
        <?php if (isset($_SESSION['user']) && $_SESSION['user'] === 'admin'): ?>
          <th class="center">Acciones</th>
        <?php endif; ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($books as $b): ?>
      <tr>
        <td><?= htmlspecialchars($b['title']) ?></td>
        <td><?= htmlspecialchars($b['author'] ?? '—') ?></td>
        <td><?= htmlspecialchars($b['year'] ?? '—') ?></td>
        <td><?= nl2br(htmlspecialchars($b['description'] ?? '—')) ?></td>
        <?php if (isset($_SESSION['user']) && $_SESSION['user'] === 'admin'): ?>
        <td class="center">
          <a class="btn btn-small" href="index.php?controller=book&action=edit&id=<?= (int)$b['id'] ?>">Editar</a>
          <a class="btn btn-small btn-danger" href="index.php?controller=book&action=delete&id=<?= (int)$b['id'] ?>" onclick="return confirm('¿Eliminar este libro?')">Eliminar</a>
        </td>
        <?php endif; ?>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
