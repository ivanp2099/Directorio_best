<?PHP
include("functions/mainfile.php");
$accion = isset($_POST['accion']) ? $_POST['accion'] : (isset($_GET['accion']) ? $_GET['accion'] : null);

function registro(){
$user_email = isset($_POST['user_email']) ? $_POST['user_email'] : (isset($_GET['user_email']) ? $_GET['user_email'] : null);
$user_password = isset($_POST['user_password']) ? $_POST['user_password'] : (isset($_GET['user_password']) ? $_GET['user_password'] : null);
$user_confirm_password = isset($_POST['user_confirm_password']) ? $_POST['user_confirm_password'] : (isset($_GET['user_confirm_password']) ? $_GET['user_confirm_password'] : null);

echo '
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/maincss.css" rel="stylesheet">
		<link rel="shortcut icon" href="http://bestoficinasvirtuales.com/sites/default/files/favicon-best.png" type="image/png" />
		<title>Formulario</title>
	</head>
	<body>

<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        
<div class="col-sm-3 col-xs-9">
        <div id="logo"> <a href="index.php"><img src="images/logo.png" alt="Best Oficinas"></a> </div>
      </div>
   
      </div>
    </div>
  </div>
</div>
	<section id="contact-page" class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success">
					<strong>BEST</strong>
				</div> 
	<!-- INICIO FORMULARIO -->
				<form enctype="multipart/form-data" name="formularioRegistro" method="post" action="registro.php">
                    <input type="hidden" name="accion" value="nuevo">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<h4>Email a registrar (Usuario)</h4>
<!-- Validar que el email exista, si existe, que se despliegue los demas campos del formulario. -->
											<input type="text" name="usuario" value="'.$user_email.'" required="required" class="form-control" placeholder="Email"> 
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<h4>Contraseña</h4>
										<input type="password" name="password" value="'.$user_password.'" required="required" class="form-control" placeholder="mínimo 5 caracteres">
									</div>
									<div class="form-group">
										<h4>Confirmar Contraseña</h4>
										<input type="password" name="password_confirm" value="'.$user_confirm_password.'" required="required" class="form-control" placeholder="mínimo 5 caracteres">
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="regpanel" style="display:none;">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<h4>Nombre de la Empresa</h4>
											<input disabled type="text" name="nombre_empresa" required="required" class="elem form-control" placeholder="nombre empresa">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-6">
									<h4>Actividad Principal</h4>
										<input disabled type="text" name="actividad_principal" required="required" class="elem form-control" placeholder="actividad principal">
								</div>
							</div><br/>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-6">
									<h4>Sector</h4>
										<select disabled name="sector" required="" class="elem form-control" placeholder="sector">
<option value="Arquitectura">Arquitectura</option>
<option value="Call Center">Call Center</option>
<option value="Capacitación">Capacitación</option>
<option value="Coaching">Coaching</option>
<option value="Comercializadora">Comercializadora</option>
<option value="Consultoría">Consultoría</option>
<option value="Construcción">Construcción</option>
<option value="Contabilidad">Contabilidad</option>
<option value="Derecho">Derecho</option>
<option value="Desarrollo Web">Desarrollo Web</option>
<option value="Diseño">Diseño</option>
<option value="Farmacéutica">Farmacéutica</option>
<option value="Gestoría">Gestoría</option>
<option value="Inmobiliaria">Inmobiliaria</option>
<option value="Logística">Logística</option>
<option value="Marketing">Marketing</option>
<option value="Marketing Web">Marketing Web</option>
<option value="Recursos Humanos">Recursos Humanos</option>
<option value="Refrigeración">Refrigeración</option>
<option value="Salud">Salud</option>
<option value="Seguros">Seguros</option>
<option value="Transporte aéreo">Transporte aéreo</option>
<option value="Viajes">Viajes</option>
										</select>
								</div>
							</div><br/>
						</div>
					</div><hr>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-6">
									<h4>Descripción del negocio</h4><h5> Máximo 300 caracteres</h5>
										<textarea disabled type="text" id="descripcion" maxlength="300" name="descripcion" required="required" class="elem form-control" rows="5"></textarea>
								</div>
							</div><br/>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-6">
									<h4>&#191;Cuales son las necesidades de tu negocio?</h4><h5> Máximo 300 caracteres</h5>
										<textarea disabled type="text" id="que_buscas" maxlength="300" name="que_buscas" required="required" class="elem form-control" rows="5"></textarea>
								</div>
							</div><br/>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-6">
									<h4>&#191;Qué ofreces?</h4><h5> Máximo 300 caracteres</h5>
										<textarea disabled type="text" id="que_ofreces" maxlength="300" name="que_ofreces" required="required" class="elem form-control" rows="5"></textarea>
								</div>
							</div><br/>
								</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<h4>Persona de contacto</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Nombre:</h4>
										<input disabled type="text" id="nombre_contacto" name="nombre_contacto" required="required" class="elem form-control">
								</div>
								<div class="col-sm-6">
									<h4>Celular o Télefono</h4>
										<input disabled type="text" id="numero_contacto" name="numero_contacto" required="required" class="elem form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Email</h4>
										<input disabled type="text" id="email_contacto" name="email_contacto" required="required" class="elem form-control">
								</div>
								<div class="col-sm-6">
										<h4>Página Web / Fan Page</h4>
											<input disabled type="text" id="pagina_contacto" name="pagina_contacto" class="elem form-control">
								</div>
								<div class="col-sm-6">
									<h4>Asesora <strong>Best</strong> que lo atiende</h4>
										<select disabled id="asesora_best" name="asesora" required="required" class="elem form-control">
											<option value="0">Seleccione Asesora</option>
   											<option value="1">Alejandra Rojas</option> 
   											<option value="2">Gabriela Rubio</option> 
   											<option value="3">Paulina Guti&#233;rrez</option>
   											<option value="4">Jazm&#237;n S&#225;nchez</option> 
   											<option value="5">Citlalli Cerda</option> 
   											<option value="6">Monsherat Rojas</option> 
   											<option value="7">Karla Rubio</option> 
										</select>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Logo</h4>
										<h5>
											<ul>
												<li>Max. 1 Mb.</li>
												<li>800x800 pixeles.</li>
												<li>Formatos: <strong>.jpg</strong></li>
												<li>Nombre archivo<strong> sin espacios</strong></li>
											</ul></h5>
																							<input disabled class="elem" type="hidden" name="MAX_FILE_SIZE" value="10240000" />
												<input disabled type="file" size="60" id="logoImg_contacto" class="elem" name="archivo-a-subir" required="required"><br />
												<input disabled type="submit" value="Enviar" class="elem btn bnt-primary dropdown-button">
											
								</div>
							</div><br/>
						</div>
					</div><hr/>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<!--<input type="submit" data-activates="dropdown2" class="btn bnt-primary dropdown-button" value="Enviar"/>-->
							</div>
						</div>
					</div>
                    </div>
				</form>
			</div>
		</div>
	</section>
<!--</form>-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="js/info.js" type="text/javascript"></script>
<script src="js/all.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
';
}

function nuevo(){

global $config, $db;

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : (isset($_GET['usuario']) ? $_GET['usuario'] : null);
$password = isset($_POST['password']) ? $_POST['password'] : (isset($_GET['password']) ? $_GET['password'] : null);
$password_confirm = isset($_POST['password_confirm']) ? $_POST['password_confirm'] : (isset($_GET['password_confirm']) ? $_GET['password_confirm'] : null);
$nombre_empresa = isset($_POST['nombre_empresa']) ? $_POST['nombre_empresa'] : (isset($_GET['nombre_empresa']) ? $_GET['nombre_empresa'] : null);
$actividad_principal = isset($_POST['actividad_principal']) ? $_POST['actividad_principal'] : (isset($_GET['actividad_principal']) ? $_GET['actividad_principal'] : null);
$sector = isset($_POST['sector']) ? $_POST['sector'] : (isset($_GET['sector']) ? $_GET['sector'] : null);
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : (isset($_GET['descripcion']) ? $_GET['descripcion'] : null);
$que_buscas = isset($_POST['que_buscas']) ? $_POST['que_buscas'] : (isset($_GET['que_buscas']) ? $_GET['que_buscas'] : null);
$que_ofreces = isset($_POST['que_ofreces']) ? $_POST['que_ofreces'] : (isset($_GET['que_ofreces']) ? $_GET['que_ofreces'] : null);
$nombre_contacto = isset($_POST['nombre_contacto']) ? $_POST['nombre_contacto'] : (isset($_GET['nombre_contacto']) ? $_GET['nombre_contacto'] : null);
$numero_contacto = isset($_POST['numero_contacto']) ? $_POST['numero_contacto'] : (isset($_GET['numero_contacto']) ? $_GET['numero_contacto'] : null);
$email_contacto = isset($_POST['email_contacto']) ? $_POST['email_contacto'] : (isset($_GET['email_contacto']) ? $_GET['email_contacto'] : null);
$pagina_contacto = isset($_POST['pagina_contacto']) ? $_POST['pagina_contacto'] : (isset($_GET['pagina_contacto']) ? $_GET['pagina_contacto'] : null);
$asesora = isset($_POST['asesora']) ? $_POST['asesora'] : (isset($_GET['asesora']) ? $_GET['asesora'] : null);

    $sql = $db->query("SELECT count(*) FROM `" .$config['dbname']."`.`user` WHERE `username` IN ('$usuario')");
    $suma = $sql->fetchColumn(0);

echo '
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/maincss.css" rel="stylesheet">
		<link rel="shortcut icon" href="http://www.bestoficinasvirtuales.com/sites/default/files/favicon-best.png" type="image/png" />
		<title>Formulario</title>
	</head>
	<body>

<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        
<div class="col-sm-3 col-xs-9">
        <div id="logo"> <a href="index.html"><img src="images/logo.png" alt="logo"></a> </div>
      </div>
   
      </div>
    </div>
  </div>
</div>
	<section id="contact-page" class="container">
		<div class="row">
			<div class="col-md-12">
';
if(empty($usuario)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Necesitamos tu email de contacto. Es el identificador que utilizaras para conectarte.
				</div> 
    ';
}elseif($suma > 0){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> El email que has utilizado como identificador ya existe en nuestra base de datos.
				</div> 
    ';
}elseif(!filter_var($usuario, FILTER_VALIDATE_EMAIL)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> El email que has ingresado como identificador de contacto es invalido.
				</div> 
    ';
}elseif(empty($password)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> ¿Cual es tu contraseña? Te ha faltado llenar este campo en el formulario
				</div> 
    ';
}elseif(strlen($password) < 5){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Se necesitan minimo 5 caracteres para tu contraseña
				</div> 
    ';
}elseif($password != $password_confirm){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Confirmacion de contraseña incorrecta. Verifica que tu contraseña sea la misma en ambos campos
				</div> 
    ';
}elseif(empty($password_confirm)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Confirma tu contraseña. Te ha faltado llenar este campo en el formulario
				</div> 
    ';
}elseif(empty($nombre_empresa)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Dinos como se llama tu empresa, te ha faltado llenar este campo en el formulario
				</div> 
    ';
}elseif(empty($actividad_principal)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> ¿Cual es la actividad principal de tu negocio?
				</div> 
    ';
}elseif(empty($sector)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> ¿A que sector pertenece tu negocio?
				</div> 
    ';
}elseif(empty($descripcion)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Danos una descripcion de tu negocio
				</div> 
    ';
}elseif(empty($que_buscas)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Dinos que buscas, te ha faltado llenar este campo en el formulario
				</div> 
    ';
}elseif(empty($que_ofreces)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Dinos que ofreces, te ha faltado llenar este campo en el formulario
				</div> 
    ';
}elseif(empty($nombre_contacto)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Has olvidado tu nombre, te ha faltado llenar este campo en el formulario
				</div> 
    ';
}elseif(empty($numero_contacto)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Te ha faltado tu numero de contacto
				</div> 
    ';
}elseif(empty($email_contacto)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Se necesita un email de contacto, te ha faltado llenar este campo en el formulario
				</div> 
    ';
}elseif(!filter_var($email_contacto, FILTER_VALIDATE_EMAIL)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> El email de contacto que has ingresado es invalido
				</div> 
    ';
}elseif(empty($pagina_contacto)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Te ha faltado tu Página Web/ Fan Page
				</div> 
    ';
}elseif(empty($asesora)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Debes seleccionar una asesora de la lista
				</div> 
    ';
}elseif(!file_exists($_FILES['archivo-a-subir']['tmp_name']) || !is_uploaded_file($_FILES['archivo-a-subir']['tmp_name'])) {
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Se necesita un logotipo para subir al sistema
				</div> 
    ';
}else{
    $to_upload = "images/uploads/";
    $target_file = $to_upload."".rand(111111111,999999999)."-".basename($_FILES["archivo-a-subir"]["name"]);

        if (move_uploaded_file($_FILES["archivo-a-subir"]["tmp_name"], $target_file)) {
        echo '
		  		<div class="alert alert-success">
		  			<strong>Completado</strong>  El registro se ha completado correctamente
		  		</div> 
        ';
        $sql = "INSERT INTO `".$config['dbname']."`.`user` ( `id` , `username` , `password` , `business` , `activity` , `sector` , `description` , `needs` , `offers` , `name` , `email` , `phone` , `webpage` , `logo` , `agent`) VALUES ( NULL, '$usuario' , '$password', '$nombre_empresa' , '$actividad_principal' , '$sector' , '$descripcion' , '$que_buscas' , '$que_ofreces' , '$nombre_contacto' , '$email_contacto' , '$numero_contacto' , '$pagina_contacto' , '$target_file' , '$asesora')";
        $db->query($sql);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    
}

echo '
			</div>
		</div>
	</section>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="js/info.js" type="text/javascript"></script>
<script type="text/javascript" src="js/all.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>
</html>
';
}

function login(){
global $db, $config, $user;
$user_name = isset($_POST['user_name']) ? $_POST['user_name'] : (isset($_GET['user_name']) ? $_GET['user_name'] : null);
$user_password = isset($_POST['user_password']) ? $_POST['user_password'] : (isset($_GET['user_password']) ? $_GET['user_password'] : null);

	$query = 'SELECT * FROM `'.$config['dbname'].'`.`user` WHERE username IN ("'.$user_name.'")';
	$sql = $db->query($query);
	$row = $sql->fetch(PDO::FETCH_ASSOC);
		$uid = $row['id'];
		$uemail = $row['username'];
		$upassword = $row['password'];

    if(empty($user_name)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Ingrese email
				</div> 
                <a href="index.php"><button class="btn">Reintentar</button></a>
    ';
    }elseif(empty($uemail)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> No existe una cuenta en nuestro sistema con ese email
				</div> 
                <a href="index.php"><button class="btn">Reintentar</button></a>
    ';
    }elseif(empty($user_password)){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Ingrese contraseña
				</div> 
                <a href="index.php"><button class="btn">Reintentar</button></a>
    ';
    }elseif($user_password != $upassword){
    echo '
				<div class="alert alert-warning">
					<strong>Error</strong> Contraseña incorrecta
				</div> 
                <a href="index.php"><button class="btn">Reintentar</button></a>
    ';
    }else{
    echo '
				<div class="alert alert-success">
					<strong>Conectado</strong> Bienvenido al directorio Best
				</div>
                <a href="empresas.php"><button class="btn">Ok</button></a>
    ';
		$user = base64_encode('UID||||'.$uid.',UEmail||||'.$uemail.',UPass||||'.$upassword.',SesID||||1');

        setcookie("logged", $user, time()+86400);

    }
}

function logout(){
    unset($_COOKIE['logged']);
    @setcookie("logged", "", time()-3600);
    header("Location:index.php");
}

switch($accion){
    case"logout":logout();break;
    case"login":login();break;
    case"nuevo":nuevo();break;
    default:registro();break;
}