<section class="section">
  <div class="container contacto" style="display: flex; align-items: center; justify-content: space-between; gap: 24px; flex-wrap: wrap;">
    <div class="formulario" style="flex: 1; min-width: 300px;">
      <h1>Contacto</h1>
      <p class="muted">Este formulario es solo de demostración (no envía correo).</p>
      <br>
      <form class="form" onsubmit="event.preventDefault(); alert('Gracias por tu mensaje 👋');">
        <div class="form-group">
          <label>Nombre</label>
          <input type="text" placeholder="Tu nombre">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" placeholder="tu@email.com">
        </div>
        <div class="form-group">
          <label>Mensaje</label>
          <textarea rows="4" placeholder="Escribí tu consulta…"></textarea>
        </div>
        <div class="form-actions">
          <button class="btn">Enviar</button>
        </div>
      </form>
    </div>

    <div class="gif" style="max-width: 380px; flex-shrink: 0; margin-top: 40px;">
      <img src="/libros/contact.png" alt="Contacto" style="width: 100%; height: auto; border-radius: 0; box-shadow: none;">
    </div>

  </div>
</section>
