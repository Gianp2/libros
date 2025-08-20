<section class="flex-between">
  <h1>Editar autor</h1>
  <a class="btn btn-outline" href="index.php?controller=author&action=index">Volver</a>
</section>

<form method="POST" action="index.php?controller=author&action=update" class="form">
  <input type="hidden" name="id" value="<?= (int)$author['id'] ?>">
  <div class="form-group">
    <label for="name">Nombre del autor</label>
    <input type="text" name="name" id="name" required value="<?= htmlspecialchars($author['name']) ?>">
  </div>
  <div class="form-group">
    <label for="description">Descripción (opcional)</label>
    <textarea name="description" id="description" rows="4"><?= htmlspecialchars($author['description'] ?? '') ?></textarea>
  </div>
  <button type="submit" class="btn">Guardar cambios</button>
</form>
