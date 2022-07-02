<?php
$conexion = mysqli_connect('localhost','root','','datos') 
or die(mysqli_error($mysqli));

 function diferencia($conexion){
     if(isset($_POST['enviar'])){
         insertar($conexion);
     }
     if(isset($_POST['enviar'])){
         insertar($conexion);
     }
 }


insertar(($conexion));

function insertar($conexion){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $fechadenacimiento=$_POST['fecha de nacimiento'];
    $correo=$_POST['correo'];
    $sexo=$_POST['sexo'];
    $contraseña=$_POST['contraseña'];
    $telefono=$_POST['telefono'];
    
    $consulta = "INSERT INTO persona(nombre,apellido,fechadenacimiento,correo,sexo,contraseña,telefono,)
    VALUE('$nombre','$apellido','$fechadenacimiento','$correo','$sexo','$contraseña','$telefono')";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);

}

?>