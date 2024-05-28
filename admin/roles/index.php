<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');
include('../../app/controllers/roles/listado_de_roles.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
        <h1>Listado de Roles</h1>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Roles registrados</h3>
              <div class="card-tools">
                <a href="create.php" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Crear nuevo rol</a>
              </div>

            </div>

            <div class="card-body">
            <table class="table table-striped table-bordered table-hover table-sm">
        <thead>
          <tr>
            <th><center>#</center></th>
            <th><center>Rol</center></th>
            <th><center>Acciones</center></th>
          </tr>
        <tbody>
          <?php
          $contador_rol = 0;
          foreach ($roles as $role) {
            $id_rol = $role['id_rol'];
            $contador_rol++; ?>

            <tr>
              <td style="text-align: center;"><?= $contador_rol ?></td>
              <td><?= $role['nombre_rol'] ?></td>
              <td style="text-align: center;">
              <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></button>
  <button type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
  <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
</div>
              </td>
            </tr>

          <?php

          }
          ?>
        </tbody>
        </thead>
      </table>
            </div>

          </div>

        </div>

       

      </div>

      
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include('../../admin/layout/parte2.php');
include('../../layout/mensajes.php');
?>