<?php
include('con_db.php');

if (isset($_POST['register'])){

  if (strlen($_POST['nombre']) > 1 &&
     strlen($_POST['email']) > 1 &&
     strlen($_POST['telefono']) > 1 &&
     strlen($_POST['paginaweb']) > 1 &&
     strlen($_POST['mensaje']) > 1 &&
     strlen($_POST['usuario']) > 1 &&
     strlen($_POST['userpass']) > 1)  {
      
      $name=trim($_POST['nombre']);
      $email=trim($_POST['email']);
      $telefono=trim($_POST['telefono']);
      $paginaweb=trim($_POST['paginaweb']);
      $mensaje=trim($_POST['mensaje']);
      $usuario=trim($_POST['usuario']);
      $userpass=trim($_POST['userpass']);
      $fechareg=date("d/m/y");

      $consulta = "INSERT INTO datos(nombre, email, telefono, paginaweb, mensaje, usuario, userpass, fecha_reg) VALUES ('$name','$email','$telefono','$paginaweb','$mensaje','$usuario','$userpass','$fechareg')";
      $resultado = mysqli_query($conex,$consulta);
        if($resultado){
          ?>
          <h3 class="ok"> te has registrado correctamente </h3>
          <?php
        }else{
          ?>
          <h3 class="bad"> Intente más tarde </h3>
          <?php
        }

    }else{
      ?>
         <h3 class="bad"> Por favor complete los campos </h3>
      <?php
    }
}
?>

<!-- 
strlen es para contar la cantidad de letras ingresadas en el formulario, es una manera de validar que no se guarden espacios vacios en la bd.

lo que esta dentro del ($_POST['nombre']); es lo que proviene del formulario con el atributo name, y lo guardamos en una variable. trim es para borrar los espacios dejados delante de lo que se coloque en el input.

 -->