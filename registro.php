<?php include "header.php";?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h2>Registro de usuario</h2>
                    <form action="servidor/registros.php" method="POST">
                    <div class="row">
                        <div class="col-sm-4">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" require>
                        </div>
                        <div class="col-sm-4">
                        <label for="paterno">Apellidos Paterno</label>
                        <input type="text" name="paterno" class="form-control" require>
                        </div>
                        <div class="col-sm-4">
                        <label for="materno">Apellidos Materno</label>
                        <input type="text" name="materno" class="form-control" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                        <label for="sexo" class="form-label">Sexo</label>
                        <select class="form-control" id="sexo" name="sexo">
                        <option>Seleciona el Sexo</option>
                        <option>Femenino</option>
                        <option>Masculino</option>
                        </select>  
                        </div>
                        <div class="col-sm-4">
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" class="form-control" require>
                        </div>
                        <div class="col-sm-4">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" require> 
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-4">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usario" class="form-control" require>
                        </div>
                        <div class="col-sm-4">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" require>
                        </div>
                    </div>
                        <br>
                        <button class="btn btn-primary">Registro</button>
                        <a href="index.php" class="btn btn-success">ir a login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";?>