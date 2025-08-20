<section class="flex-between">
  <h1>Agregar autor</h1>
  <a class="btn btn-outline" href="index.php?controller=author&action=index">Volver</a>
</section>

<div style="display: flex; align-items: center; justify-content: flex-start; gap: 2rem; margin-block-start: 1.5rem;">
  <form method="POST" action="index.php?controller=author&action=store" class="form" style="flex: 1;">
    <div class="form-group">
      <label for="name">Nombre del autor</label>
      <input type="text" name="name" id="name" required>
    </div>
    <div class="form-group">
      <label for="description">Descripción (opcional)</label>
      <textarea name="description" id="description" rows="4"></textarea>
    </div>
    <button type="submit" class="btn">Guardar</button>
  </form>

  <!-- Imagen a la derecha -->
  <div style="text-align: center; flex: 0 0 auto;">
  <img src="autor.png" alt="Autor"
      style="max-inline-size:300px; border-radius:0px; box-shadow:0 2px 6px rgba(250, 250, 250, 0);" />
  </div>
</div>
