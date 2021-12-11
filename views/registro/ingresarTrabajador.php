<?php
include_once "conexion.php";
include_once "encabezado.php";

$trabajador = trabajador::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de trabajadores</h1>
        <a href="formulario_registro_trabajador.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Notas</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trabajador as $trabajador) { ?>
                    <tr>
                        <td><?php echo $trabajador["nombre"] ?></td>
                        <td><?php echo $trabajador["grupo"] ?></td>
                        <td>
                            <a href="notas_estudiante.php?id=<?php echo $trabajador["id"] ?>" class="btn btn-info">
                                Notas
                            </a>
                        </td>
                        <td>
                            <a href="editar_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include_once "pie.php";