<div class="card">
  <div class="card-header">
    Usuarios
  </div>
  <div class="card-body">
        <table class="table table-bordered" style="padding:auto">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Accion</th>
          </tr>
        </thead>
        <?php foreach($usuarios as $key => $usuario){ ?>

        <tbody>
          <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $usuario ->nombre; ?></td>
            <td><?php echo $usuario ->documento; ?></td>
            <td><?php echo $usuario ->correo; ?></td>
            <td>
      <div class="btn-group">
      <a href="?controlador=usuarios&accion=editar&id=<?php echo $usuario ->id; ?>"  class="btn btn-warning">
      <i class='bx bx-edit-alt'></i>
        </a>
      <a href="?controlador=usuarios&accion=borrar&id=<?php echo $usuario ->id; ?>" class="btn btn-danger" >
        <i class='bx bx-trash' ></i>
        </a>

      </div>
        </td>

          </tr>

        <?php } ?>
        </tbody>
      </table>

  </div>
</div>

