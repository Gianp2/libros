<section class="flex-between">
  <h1>Autores</h1>
  <?php if (isset($_SESSION['user']) && $_SESSION['user'] === 'admin'): ?>
    <a class="btn" href="index.php?controller=author&action=create">+ Nuevo autor</a>
  <?php endif; ?>
</section>

<br>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <?php if (isset($_SESSION['user']) && $_SESSION['user'] === 'admin'): ?>
          <th class="center">Acciones</th>
        <?php endif; ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($authors as $a): ?>
      <tr>
        <td><?= htmlspecialchars($a['name']) ?></td>
        <td><?= nl2br(htmlspecialchars($a['description'] ?? '—')) ?></td>
        <?php if (isset($_SESSION['user']) && $_SESSION['user'] === 'admin'): ?>
        <td class="center">
          <a class="btn btn-small" href="index.php?controller=author&action=edit&id=<?= (int)$a['id'] ?>">Editar</a>
          <a class="btn btn-small btn-danger" href="index.php?controller=author&action=delete&id=<?= (int)$a['id'] ?>" onclick="return confirm('¿Eliminar autor?')">Eliminar</a>
        </td>
        <?php endif; ?>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
