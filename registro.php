<?php
include_once 'app/conexion.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once "app/ValidadorRegistro.inc.php";

if (isset($_POST['enviar'])) {
  Conexion :: abrir_conexion();

    $validador = new ValidadorRegistro($_POST['nombre'], $_POST['email'],
    $_POST['clave1'], $_POST['clave2']);

    if ($validador -> registro_valido()) {
        $usuario = new Usuario('', $validador -> obtener_nombre(), $validador -> obtener_email(), $validador -> obtener_clave(), '', '');
        // introducir el usuario m
        $usuario_insertado = RepositorioUsuario :: insertar_usuario(Conexion :: obtener_conexion(), $usuario);

        if($usuario_insertado) {
          //Redirigir al login
        }
    }
    echo "<pre>";
    var_dump($validador);
    die();
    Conexion:: cerrar_conexion();
}
$titulo = 'Registro';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

?> <br><br>
          
          <main role="main" class="container text-center">
            <div class="jumbotron">
              <h1>Formulario de Registro</h1>
              <p class="lead ">Curso de desarrollo en PHP</p>
              <a class="btn btn-lg btn-primary" href="/docs/4.5/components/navbar/" role="button">View navbar docs &raquo;</a>
            </div>
          </main>

<div class="container">
              <div class="row">
              <div class="col-md-6 text-center">
                <div class="row">
                  <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-heading btn btn-lg btn-primary">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm4.354 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        </svg>  Instrucciones
                        </div>
                      </div class="panel-body">
                      <div class="form-group">
                          <p>Para unirte intrpduce un nombre de usuario, tu email y una contraseña. El email
                            que escrivas debe ser real ya que lo necesitaras para gestionar tu cuenta.</p>
                      </div>
                      <a href="#">¿Ya tienes cuenta?</a>
                      <br><br>
                      <a haref="#" class="primary">¿Olvidaste tu contraseña?</a>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                <div class="panel panel-default text-center">
                        <div class="panel-heading btn btn-lg btn-primary">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm4.354 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        </svg>  Introduce tus Datos
                        </div>
                      </div class="panel-body">
                    <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <?php
                            if (isset($_POST['enviar'])){
                                include_once 'plantillas/registro_validado.inc.php';
                            } else {
                                include_once 'plantillas/registro_vacio.inc.php';
                            }
                            ?>
                </form>
                    </div>
                  </div>
</div>

 <?php
       include_once 'plantillas/documento-cierre.inc.php';
       ?>