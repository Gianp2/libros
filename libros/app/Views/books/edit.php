<section>
  <h1>Editar Libro</h1>
  <form class="form" method="post" action="">
    <div class="form-group">
      <label>Título</label>
      <input type="text" name="title" value="<?= htmlspecialchars($book['title']) ?>" required>
    </div>
    <div class="form-group">
      <label>Autor</label>
      <select name="author_id">
        <option value="">— Seleccionar —</option>
        <?php foreach ($authors as $a): ?>
          <option value="<?= (int)$a['id'] ?>" <?= ($book['author_id'] ?? null) == $a['id'] ? 'selected' : '' ?>>
            <?= htmlspecialchars($a['name']) ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label>Año</label>
      <input type="number" name="year" min="0" max="<?= date('Y') ?>" value="<?= htmlspecialchars($book['year'] ?? '') ?>">
    </div>
    <div class="form-group">
      <label>Descripción</label>
      <textarea name="description" rows="4"><?= htmlspecialchars($book['description'] ?? '') ?></textarea>
    </div>
    <div class="form-actions">
      <a class="btn btn-outline" href="index.php?controller=book&action=index">Cancelar</a>
      <button class="btn" type="submit">Actualizar</button>
    </div>
  </form>
</section>
