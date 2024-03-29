<div class="content-wrapper" style="win-height: 717px">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administrar roles</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-header">
                        <button type="button" class="btn  btn-success crear-perfil" data-toggle="modal" data-target="#modal-crear-perfil">
                            crear nuevo perfil
                        </button> <br/>
                    </div><br/>

                    <div class="card-body">
                         <table class="table table-bordered table-striped dt-responsive tablaperfil" with="100">
                          <thead>
                          <tr>
                                <th style="width:10px">#</th>
                                <th>Nombre</th>
                                <th>usuario</th>
                                <th>foto</th>
                                <th>rol</th>
                                <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>

                          </tbody>

                         </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!---modal crear usuario-->

<div class="modal modal-default fade" id="modal-crear-perfil">
    <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                <h4 class="alert alert-success alert-dismissible">agregar nuevo usuario</h4>
            </div>

            <form action="" method="post" enctype="multipart/form-data">

                <!--incian inputs de ingreo de informacion --->

                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre completo">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="text" name="nom_usuario" class="form-control" id="nom_usuario" placeholder="nombre de usuario">
                    <span class="glyphicon glyphicon-eye-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="password" name="user_pass" id="user_pass" placeholder="introduce password" class="form-control">
                    <span class="glyphicon glyphicon-eye-close form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback" bis_skin_checked="1">
                    <div class="btn btn-default btn-file" bis_skin_checked="1">
                        <i class="fas fa-paperclip"></i> Adjuntar imagen de perfil
                        <input type="file" name="subirImagenPerfil">
                    </div>
                    <img class="previzualizarImgPerfil img-fluid py-2" width="200" height="200">
                    <p class="help-block small">Dimensiones: 400px * 300px | Peso Max 279 | Formato: JPG o PNG</p>
                </div>

                <div class="form-group has-feedback">
                    <label>Rol</label>
                    <select name="rol_user" id="rol_user">
                        <option value="#">selecciona rol</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                    <button tyoe="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>
       </div>
    </div>
</div>