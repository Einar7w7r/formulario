<?php

include("con_db.php");

if(isset($_POST["register"])){
if ((strlen($_POST["nombre"]) >= 1 &&
    strlen($_POST["apellidos"]) >= 1 &&
    strlen($_POST["email"]) >= 1 &&
    strlen($_POST["p1"]) >= 1 &&
    strlen($_POST["p2"]) >= 1 &&
    strlen($_POST["p3"]) >= 1 &&
    strlen($_POST["p4"]) >= 1 &&
    strlen($_POST["p5"]) >= 1 &&
    strlen($_POST["p6"]) >= 1 &&
    strlen($_POST["p7"]) >= 1 &&
    strlen($_POST["p9"]) >= 1 &&
    strlen($_POST["p10"]) >= 1 &&
    strlen($_POST["p11"]) >= 1 &&
    strlen($_POST["p12"]) >= 1 &&
    strlen($_POST["p13"]) >= 1 &&
    strlen($_POST["p14"]) >= 1 &&
    strlen($_POST["p15"]) >= 1 &&
    strlen($_POST["p16"]) >= 1 &&
    strlen($_POST["p17"]) >= 1) || true) {
   $nombre = trim($_POST["nombre"]);
   $apellidos = trim($_POST["apellidos"]);
   $email = trim($_POST["email"]);
   $p1 = trim($_POST["p1"]);
   $p2 = trim($_POST["p2"]);
   $p3 = trim($_POST["p3"]);
   $p4 = trim($_POST["p4"]);
   $p5 = trim($_POST["p5"]);
   $p6 = trim($_POST["p6"]);
   $p7 = trim($_POST["p7"]);
   $p8 = trim($_POST["p8"]);
   $p9 = trim($_POST["p9"]);
   $p10 = trim($_POST["p10"]);
   $p11 = trim($_POST["p11"]);
   $p12 = trim($_POST["p12"]);
   $p13 = trim($_POST["p13"]);
   $p14 = trim($_POST["p14"]);
   $p15 = trim($_POST["p15"]);
   $p16 = trim($_POST["p16"]);
   $p17 = trim($_POST["p17"]);
   $consulta = "INSERT INTO datos(nombre, apellidos, email, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17) VALUES ('$nombre', 
                                 '$apellidos',
                                 '$email',
                                 '$p1',
                                 '$p2',
                                 '$p3',
                                 '$p4',
                                 '$p5',
                                 '$p6',
                                 '$p7',
                                 '$p8',
                                 '$p9',
                                 '$p10',
                                 '$p11',
                                 '$p12',
                                 '$p13',
                                 '$p14',
                                 '$p15',
                                 '$p16',
                                 '$p17')";
   $resultado = mysqli_query($conectar,$consulta);
   if($resultado){
   } else{
   	?>
   	echo "Hubo algun error";
   	<?php
   }
 } else{
 	?>
   	echo "Por favor completa los datos";
   	<?php
 }
}

?>