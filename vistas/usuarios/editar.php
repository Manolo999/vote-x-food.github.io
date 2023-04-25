<div class="card">
    <div class="card-header">
        Editar usuario
    </div>
    <div class="card-body">

        <form action="" method="post">

        <div class="mb-3">
          <label for="id" class="form-label">ID:</label>
          <input readonly type="text"class="form-control" 
          value="<?php echo $usuario ->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID usuario">
 
        </div>

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre:</label>
          <input required value="<?php echo $usuario ->nombre; ?>" type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del usuario">

        </div>
        
        <div class="mb-3">
          <label for="documento" 
          class="form-label">Documento de identidad:</label>
          <input required value="<?php echo $usuario ->documento; ?>" type="text" class="form-control" name="documento" id="documento" aria-describedby="HelpId" placeholder="Documento del usuario">

        </div>
        <div class="mb-3">
          <label for="correo" 
          class="form-label">Correo:</label>
          <input required value="<?php echo $usuario ->correo; ?>" type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del usuario">

        </div>

        <div class="mb-3">
          <label for="" 
          class="form-label">Contraseña:</label>
          <input required value="<?php echo $usuario ->clave; ?>" type="password" class="form-control" name="clave" id="clave" placeholder="Contraseña del usuario">
          
        </div>
        
        <input type="submit" name="" id="" class="btn btn-success" value="Editar usuario">
        <a name="" id="" class="btn btn-info" href="?controlador=usuarios&accion=registro" role="button">Cancelar</a>
       
      </form> 
      </div>
    
    </div>

