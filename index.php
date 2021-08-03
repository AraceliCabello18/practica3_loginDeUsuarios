<?php include "header.php";?>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h2>Login usuario</h2>
                        <form action="servidor/loginUsuario.php" method="POST">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usario" class="form-control" require>
                            <label for="password">Password</label>
                            <input type="text" name="password" class="form-control" require>  
                            <br>
                            <button class="btn btn-primary">Entrar</button>
                            <a href="registro.php" class="btn btn-success">Registro de usuarios</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "footer.php";?>