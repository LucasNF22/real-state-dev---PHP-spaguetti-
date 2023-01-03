<?php


// Importar conexion a la BD
require '../includes/config/database.php';
$db = conectarDB();

// Escribir el QUERY
$query = "SELECT * FROM propiedades";

// Consultar la BD
$resultadoConsulta = mysqli_query($db, $query);


$resultado = $_GET['resultado'] ?? null; // Mensaje de propiedade creada correctamente


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id){
        // Eliminar el archivo
        $query_imagen = " SELECT imagen FROM propiedades WHERE id = ${id} ";
        
        $resultado = mysqli_query($db, $query);
        $propeidad = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/' . $propiedad['imagen']);

            exit;
        // Eliminar propiedad
        $query_delete = " DELETE FROM propiedades WHERE id = ${id} ";
        $resultado_delete = mysqli_query($db, $query_delete) ;

        if($resultado_query) {
            header('location: /admin?resulado=3');
        }
    }
}


require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>ADMINISTRADOR DE PROPIEDADES</h1>

    <?php if (intval($resultado) === 1) : ?>
        <p class="alerta exito"> Anuncio Creado Correctamente</p>
        <?php elseif(intval($resultado) === 2) : ?>
        <p class="alerta exito"> Propiedad Editada Correctamente</p>
    <?php endif ?>

    <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>



    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <!-- Mostrar resultados de la BD -->
            <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td><?php echo $propiedad['id'] ?></td>
                    <td><?php echo $propiedad['titulo'] ?></td>
                    <td>
                        <img src="/imagenes/<?php echo $propiedad['imagen'] ?>" alt="Imagen propiedad" class="imagenTabla">
                    </td>
                    <td>$<?php echo $propiedad['precio'] ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" value="<?php echo $propiedad['id'] ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar" >
                        </form>
                        <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'] ?>" class="boton-amarillo-block ">Editar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>




<?php 
    // Cerrar la conexion
    mysqli_close($db);


    incluirTemplate('footer'); 
?>