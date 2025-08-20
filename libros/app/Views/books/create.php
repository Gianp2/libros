<section style="display: flex; align-items: flex-start; gap: 40px;">
  <div style="flex: 1;">
    <h1>Nuevo Libro</h1>
    <br>
    <form class="form" method="post" action="">
      <div class="form-group">
        <label>Título</label>
        <input type="text" name="title" required>
      </div>
      <div class="form-group">
        <label>Autor</label>
        <select name="author_id">
          <option value="">— Seleccionar —</option>
          <?php foreach ($authors as $a): ?>
            <option value="<?= (int)$a['id'] ?>"><?= htmlspecialchars($a['name']) ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label>Año</label>
        <input type="number" name="year" min="0" max="<?= date('Y') ?>">
      </div>
      <div class="form-group">
        <label>Descripción</label>
        <textarea name="description" rows="4"></textarea>
      </div>
      <div class="form-actions">
        <a class="btn btn-outline" href="index.php?controller=book&action=index">Cancelar</a>
        <button class="btn" type="submit">Guardar</button>
      </div>
    </form>
  </div>

  <div class="gif" style="max-inline-size: 380px; flex-shrink: 0; margin-block-start: 80px;">
    <img src="/libros/libro.png" alt="Libro animado" style="inline-size: 100%; block-size: auto; border-radius: 0; box-shadow: none;">
  </div>
</section>
<br>
<p class="muted">¿No encontrás el autor? <a href='index.php?controller=author&action=create'>Creá uno nuevo</a>.</p>

