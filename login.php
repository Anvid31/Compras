<?php
   session_start();
   include 'config/conexion.php';

   $usuario = $_POST ['usuario'];
   $clave =$_POST ['clave'];

   // validamos 
   $validar_login ="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
   $resultado = mysqli_query ($conexion,$validar_login);
   $filas = mysqli_fetch_array($resultado);



   if (mysqli_num_rows($resultado)>0){

   if($filas['rol_id']==2){
       $_SESSION['usuario'] =$usuario;
       header("location:index.php");
       exit;
   }

   if($filas['rol_id']==3){
       $_SESSION['usuario'] =$usuario;
       header("location:index.php");
       exit;
   }

   if ($filas['rol_id']==1)  {
       header("location:index.php");
       exit;


   }
}
else{        echo '
       <script>

       alert("Usuario no existe, por favor veifique los datos introducidos ");
       window.location ="admin/index.php"; 
       
       </script>'; exit;
}

?>