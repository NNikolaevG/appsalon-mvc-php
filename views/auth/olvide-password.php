<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Restablecer tu password con email</p>

<?php 

include_once __DIR__ . "/../templates/alertas.php";

?>

<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input 
        type="text"
        id="email"
        placeholder="Tu Email"
        name="email"
        >
    </div>

    <input type="submit" class="boton" value="Enviar Email">
</form>

<div class="acciones">
    <a href="/">Login</a>
    <a href="/crear-cuenta">¿Aun no tienes una cuenta? Crea tu cuenta</a>
</div>