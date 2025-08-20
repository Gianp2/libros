<section class="auth-box">
  <h1>Ingresar</h1>
  <?php if (!empty($error)): ?>
    <div class="alert"><?= htmlspecialchars($error) ?></div>
  <?php endif; ?>
  <form class="form" method="post" action="">
    <div class="form-group">
      <label>Usuario</label>
      <input type="text" name="username" required>
    </div>
    <div class="form-group">
      <label>Contraseña</label>
      <input type="password" name="password" required>
    </div>
    <button class="btn" type="submit">Ingresar</button>
  </form>
</section>
