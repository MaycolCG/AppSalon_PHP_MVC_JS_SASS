<h1 class="nombre-pagina">Olvidaste tu Contraseña</h1>
<p class="descripcion-pagina">Restablece tu Contraseña escribiendo
    tu email a continuación
</p>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label class="email">Email:</label>
            <input type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Email"
            />
    </div>

    <div class="container">
        <input type="submit" class="boton" value="Recuperar Contraseña">
    </div>
    <div class="acciones">
        <a href="/">¿Ya tienes una cuenta?... Inicia Sesión</a>
        <a href="/crear-cuenta">¿Aún no tienes cuenta?... Crea una</a>
    </div>  
</form>

