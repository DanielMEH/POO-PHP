<?php

require_once("../template/header.php");


?>

<main class="container">
    <h1 class="text-center">Editar Datos</h1>
    <a href="<?= DB_URL ?>views/personas">Lista de Persona</a>
    <br>
    <br>
    <br>
    <form>
        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="txtNombre" name="nombre" placeholder="ingrese su nombre" required>
        </div>
        <div class="mb-3">
            <label for="txtapellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="txtapellido" name="apellido" placeholder="ingrse su apellido" required>
        </div>
        <div class="mb-3">
            <label for="txttelefonp" class="form-label">Telefono</label>
            <input type="number" class="form-control" id="txttelefonp" name="telefono" placeholder="ingrse su Telefono" required>
        </div>
        <div class="mb-3">
            <label for="txtemail" class="form-label">Email</label>
            <input type="email" class="form-control" id="txtemail" name="apellido" placeholder="ingrse su Email" required>
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>


</main>
<script src="<?= DB_URL ?>assets/js/bootstrap.min.js"></script>