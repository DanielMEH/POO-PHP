<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <main class="container">
        <h1 class="text-center">Lista de personas</h1>
        <a href="crear-persona.php" class="btn btn-success"><i class="fas fa-plus"></i> Crear Persona</a>
        <table id="tblPersonas" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opciones</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>
                        <a href="editar-persona.php" class="btn btn-outline-primary btn-sm" title="Editar Registro"> <i class="fas fa-user-edit"></i></a>
                        <button  class="btn btn-outline-danger btn-sm" title="Eliminar Registro"> <i class="fas fa-trash-alt" onclick="error(1)"></i></button>

                    </td>
                </tr>

        </table>
    </main>
    <script src="<?= DB_URL ?>assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?= DB_URL ?>assets/js/functions.js"></script>

</body>

</html>