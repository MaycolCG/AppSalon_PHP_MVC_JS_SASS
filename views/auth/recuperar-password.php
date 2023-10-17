<h1 class="nombre-pagina">Recuperar Contraseña</h1>
<p class="descripcion-pagina">Coloca tu nueva contraseña a continuación</p>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<?php if($error) return; ?>
<form class="formulario" method="post">
    <div class="campo">
        <label for="password">Contraseña:</label>
        <input type="password" 
                id="password" 
                name="password" 
                placeholder="Nueva Contraseña"
        />
    </div>

    <div class="container">
        <input type="submit" class="boton" value="Guardar Contraseña">
    </div>
    
</form>

<div class="acciones">
        <a href="/">¿Ya tienes una cuenta?... Inicia Sesión</a>
        <a href="/crear-cuenta">¿Aún no tienes cuenta?... Crea una</a>
    </div> 


