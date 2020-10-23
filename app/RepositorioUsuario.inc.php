<?php
 class RepositorioUsuario {
     public static function obtener_todos($conexion) {

        $usuario = array();

        if (isset($conexion)) {

            try {

                include_once 'Usuario.inc.php';

                $sql = "SELECT * FROM usuario";

                $sentencia = $conexion -> prepare($sql);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();
                
                if (count($resultado)) {
                    foreach ($resultado as $fila){
                        $usuarios[] = new Usuario (
                            $fila['id'], $fila['nombre'], $fila['email'], $fila['password']
                            , $fila['fecha_registro']
                        );
                        }
                    } else {
                        print 'No hay usuarios';
                    }
            } catch (PDOException $ex) {
                print "error" . $ex -> getMessage();
            }
        }
        return $usuarios;
     }

     public static function obtener_numero_usuarios($conexion) {
         $total_usuarios = null;

         if (isset($conexion)) {
             try {
                $sql = "SELECT COUNT(*) as total FROM usuario";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                $total_usuarios = $resultado['total'];
             }catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
             }
         }
         return $total_usuarios;
     }

     public static function insertar_usuario($conexion, $usuario) {
         $usuario_insertado = false;

         if (isset($conexion)) {
             try {
                 $sql = "INSERT INTO usuario(nombre, email, password, fecha_registro, activo) VALUES(:nombre,
                 :email, :password, NOW(), 0)";

                 $sentencia = $conexion -> prepare($sql);

                 $sentencia -> bindValue(':nombre', $usuario -> obtener_nombre(), PDO::PARAM_STR);
                 $sentencia -> bindValue(':email', $usuario -> obtener_email(), PDO::PARAM_STR);
                 $sentencia -> bindValue(':password', $usuario -> obtener_password(), PDO::PARAM_STR);

                 var_dump($usuario);

                 $usuario_insertado = $sentencia -> execute();
             } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
             } 
         }
        return $usuario_insertado;
     }
 }