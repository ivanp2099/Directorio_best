<?php

require_once __DIR__ . '/config.php';

echo "<strong>Nombre del Archivo:</strong>" . $_FILES["archivo-a-subir"]["name"] . "<br/>";
echo "<strong>Archivo de tipo:</strong>" . $_FILES["archivo-a-subir"]["type"] . "<br/>";
echo "<strong>Peso del Archivo:</strong>" . $_FILES["archivo-a-subir"]["size"] . "<br/>";
if ((($_FILES["archivo-a-subir"]["type"] == "image/jpeg")
        || ($_FILES["archivo-a-subir"]["type"] == "image/png"))
    && ($_FILES["archivo-a-subir"]["size"] < 1024000))
{
    $target_path = "logos/";
    $target_path = $target_path . basename( $_FILES['archivo-a-subir']['name']);
    if(move_uploaded_file($_FILES['archivo-a-subir']['tmp_name'], $target_path))
    {
        echo "<center><span style='color:#00FF00;font-weight:bold;'>El archivo ". basename( $_FILES['archivo-a-subir']['name'])." ha sido subido exitosamente!</span></center>";
    }
    else
    {
        echo "<center><span style='color:#FF0000;font-weight:bold;'>Hubo un error al subir tu archivo! Por favor intenta de nuevo.</span></center>";
    }
}
else
{
    echo "<center><span style='color:#FF0000;font-weight:bold;'>Archivo Invalido!!, comprueba las restricciones.</span></center>";
}
 

    $username=$_POST['usuario'];
    $password1=$_POST['password'];
    $password2=$_POST['password_confirm'];
    $companyname=$_POST['nombre_empresa'];
    $activity=$_POST['actividad_principal'];
    $sector=$_POST['sector'];
    $description=$_POST['descripcion'];
    $needs=$_POST['que_buscas'];
    $offers=$_POST['que_ofreces'];
    $contactname=$_POST['nombre_contacto'];
    $contactnumber=$_POST['numero_contacto'];
    $contactemail=$_POST['email_contacto'];
    $contactpage=$_POST['pagina_contacto'];
    $logoDirection=$_FILES["archivo-a-subir"]["name"];

//$db = new CONNECT();
$dsn = 'mysql:dbname='.DB_DATABASE.';host='.DB_SERVER;
$usuario = DB_USER;
$contraseña = DB_PASSWORD;

try {
    $conn = new PDO($dsn, $usuario, $contraseña);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO user (username,password,business,activity,sector,description,needs,offers,name,email,phone,webpage,logo) 
    VALUES (:username,:password,:business,:activity,:sector,:description,:needs,:offers,:name,:email,:phone,:webpage,:logo)";

    $consulta = $conn->prepare($sql);
    $datos = array(':username' => $username, ':password' => $password1, ':business' =>$companyname, ':activity' => $activity, ':sector' => $sector,':description' => $description, ':needs' => $needs, ':offers' => $offers, ':name' => $contactname, ':email' => $contactemail, ':phone' => $contactnumber, ':webpage' => $contactpage, ':logo' => $logoDirection);
    $rows = $consulta->execute($datos);

    if( $rows == 1 ){
        echo 'Inserción correcta';
       echo '<script type="text/javascript">
           window.location = "http://bestoficinasvirtuales.com/directorio/enviado.html";
      </script>';
        echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
    }

} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
?>