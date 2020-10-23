<?php
include_once 'app/conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Blog de JavaDevOne';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

?> 
          </div><br><br><br><br><br><br>
          
          <main role="main" class="container">
            <div class="jumbotron">
              <h1>BLOG DE JavaDevOne</h1>
              <p class="lead">Curso de desarrollo en PHP</p>
              <a class="btn btn-lg btn-primary" href="/docs/4.5/components/navbar/" role="button">View navbar docs &raquo;</a>
            </div>
          </main>
            <div class="container">
              <div class="row">
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-heading btn btn-lg btn-primary">
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                          </svg>   Busqueda
                        </div>
                      </div class="panel-body">
                      <div class="form-group">
                        <input type="search" class="form-control" placeholder="?Que buscas?">
                      </div>
                      <button class="form-control">Buscar</button>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-8">
                <div class="panel-heading btn btn-lg btn-primary">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-watch" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86A5.985 5.985 0 0 1 14 8a5.985 5.985 0 0 1-2 4.472v1.861c0 .92-.746 1.667-1.667 1.667H5.667C4.747 16 4 15.254 4 14.333zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z"/>
                    <path d="M13.918 8.993A.502.502 0 0 0 14.5 8.5v-1a.5.5 0 0 0-.582-.493 6.044 6.044 0 0 1 0 1.986z"/>
                    <path fill-rule="evenodd" d="M8 4.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H6a.5.5 0 0 1 0-1h1.5V5a.5.5 0 0 1 .5-.5z"/>
                  </svg> Ultimas Entradas
              </div>
              
                <p type="search" class="form-control" placeholder="Todavia no hay entradas que buscar">Todavia no hay entrada que mostrar

                </p>
                
                
              </div>
              <div class="col-md-4"><br>
                <div class="panel-heading btn btn-lg btn-primary">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-funnel-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                  </svg>Filtro
              </div>
              
                <input type="search" class="form-control " placeholder="">
              </div>  
        </div>
         <div class="col-md-4"><br>
                <div class="panel-heading btn btn-lg btn-primary">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                  </svg>Archivo
              </div>
              
                <input type="search" class="form-control" placeholder="">
              </div>  
        </div>
        
          </div>
        </div>
          </div>
          
        </div>
          
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
          
          
       <?php
       include_once 'plantillas/documento-cierre.inc.php';
       ?>
