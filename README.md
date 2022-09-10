Enlace para ver la página:
https://noeltejeda.github.io/electiva4/

-------------------Creando la Bd: ---------------------------------

* se puede usar como servidor xampp (para linux ó windows y alojar los codigos en C: .../htdocs) o wampp (para windows y aloja los codigos en C:... www)

* en phpmyadmin  / nuevo Bd / nombre / seleccionar los tipos de caracteres: utf8_general_ci etc...
* luego se crean las tablas y la cantidad de columnas.
* se le dan nombres a las columnas y se coloca el tipo (int, varchar, boolean, etc) e indicar cual será la llave primaria



-------------------en el código: ---------------------------------

* crear un archivo db.php : para la conexión con la Bd.

<?php
  $conex = mysqli_connect("localhost","root","","registro");
?>

recibe 4 parametros.(localhost,usuarioBd,clave(por defecto está vacia),nombre_de_la_Bd)
y la guardo en una variable llamada conex.

----------------------------------

en el formulario:

* en el form debe tener el metodo post(enviar) todo lo capturado del formulario a la Bd.

* en cada input con el atributo name:" " será llamado por el archivo registrar.php

* agregar las lineas:

			include("registrar.php");

 ------------------------------------

* crear otro archivo llamado registrar.php para la lógica:

en esta se incluye la conexion de la Bd:

include('con_db.php');

* le coloco una validación despues de presionar el boton submit
if (isset($_POST['register'])){

y para no enviar los datos vacios la cuenta de los caracteres(strlen) debe ser mayor a 1 caracter.


* guardo cada input traido del formulario con una variable ejemplo:
 $name=trim($_POST['nombre']);
 $email=trim($_POST['email']);
 $telefono=trim($_POST['telefono']);


* realizo un query de insert a la Bd :

 $consulta = "INSERT INTO datos(nombre, email, telefono, paginaweb, mensaje, usuario, userpass, fecha_reg) VALUES ('$name','$email','$telefono','$paginaweb','$mensaje','$usuario','$userpass','$fechareg')";

y lo guardo en una variable llamada $consulta.


* la conexion y la consulta la guardo en una variable $resultado:
      $resultado = mysqli_query($conex,$consulta);

* realizo un if de resultado.