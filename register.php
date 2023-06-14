<?php
    //Base de Datos
    include 'config/conexion.php';


    // Creamos Variables
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];


    //Encriptacion Basica
    $clave =hash('sha512',$clave);
    //Insertar valores
    $query = "INSERT INTO usuarios(usuario,clave,rol_id) VALUES('$usuario','$clave',1)";


    //Evala si hay datos repetidos

     //Verificar repetidos
    $verificar_usuario =mysqli_query ($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");

    //Si hay mas de 1, no se ejecuta
    if(mysqli_num_rows($verificar_usuario)>0){
        echo '
            <script>
                alert("Este usuario ya esta registrado,intenta con otro diferente")
                window.location ="login.php";
            </script>
        ';
        exit();
    }


    $ejecutar = mysqli_query($conexion, $query);
   //  Si cuadra, lo ejecuta
if($ejecutar){
    echo'
        <script>alert("usuario almacenado exitosamente");
        window.location ="login.php";
        </script>';

}else{
    echo'
        <script>alert("Intentalo de nuevo");
        window.location ="login.php";
        </script>';  
}
    
mysqli_close($conexion);
