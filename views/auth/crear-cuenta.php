<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente 
    formulario para crear la cuenta</p>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form class="formulario" method="POST" action="/crear-cuenta">

    <div class="campo">
        <label for="nombre">Nombre:</label>
        <input 
            type="text" 
            name="nombre"
            id="nombre"
            placeholder="Tu Nombre"
            value="<?php echo s($usuario->nombre); ?>"
        />
    </div>

    <div class="campo">
        <label for="apellido">Apellidos:</label>
        <input 
            type="text" 
            name="apellido"
            id="apellido"
            placeholder="Tus Apellidos"
            value="<?php echo s($usuario->apellido); ?>"
        />
    </div>

    <div class="campo">
        <label for="telefono">Telefono:</label>
        <input 
            type="tel" 
            name="telefono"
            id="telefono"
            placeholder="Tu Telefono"
            value="<?php echo s($usuario->telefono); ?>"
        />
    </div>

    <div class="campo">
        <label for="email">Email:</label>
        <input 
            type="email" 
            name="email"
            id="email"
            placeholder="Tu Email"
            value="<?php echo s($usuario->email); ?>"
        />
    </div>

    <div class="campo">
        <label for="password">Contraseña:</label>
        <input 
            type="password" 
            name="password"
            id="password"
            placeholder="Tu Contraseña"
        />
    </div>

    <div class="container">
    <input type="submit" class="boton" value="Crear Cuenta">
    </div>

    <div class="acciones">
    <a href="/">¿Ya tienes una cuenta?... Inicia Sesión</a>
    <a href="/olvide">¿Olvidaste tu Contraseña?</a>
</div>  
</form>
