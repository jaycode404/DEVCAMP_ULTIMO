<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="descripcion__texto">Inicia Session en DevWebCamp</p>

    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>
    <form action="/login" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input id="email" name="email" type="email" class="formulario__input" placeholder="Tu email">
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input id="password" name="password" type="password" class="formulario__input" placeholder="Tu password">
        </div>
        <input type="submit" class="formulario__submit" value="Iniciar Session" />
    </form>
    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aun no tienes cuenta? Crea una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>