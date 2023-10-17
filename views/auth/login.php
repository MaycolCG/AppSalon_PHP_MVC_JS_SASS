<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label class="email">Email:</label>
            <input type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Email"
            />
    </div>

    <div class="campo">
        <label for="password">Contraseña:</label>
        <input type="password" 
                id="password" 
                name="password" 
                placeholder="Tu Contraseña"
        />
    </div>

    <div class="container">
    <input type="submit" class="boton" value="Iniciar Sesión">
    </div>


    <div class="acciones">
        <a href="/crear-cuenta">¿Aún no tienes cuenta? Crear una</a>
        <a href="/olvide">¿Olvidaste tu Contraseña?</a>
    </div> 
</form>