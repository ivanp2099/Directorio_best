<?PHP
$limit = 4;
$page = isset($_POST['page']) ? $_POST['page'] : (isset($_GET['page']) ? $_GET['page'] : 1);
$search = isset($_POST['search']) ? $_POST['search'] : (isset($_GET['search']) ? $_GET['search'] : NULL);
$start = ($page - 1) * $limit;
include("functions/mainfile.php");
global $db, $config, $user;
echo '
<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style>
<style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Directorio | Best Offices</title>
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="http://bestoficinasvirtuales.com/sites/default/files/favicon-best.png">

<!-- Style Sheets -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/animate.css" type="text/css">
<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
<link rel="stylesheet" href="css/responsive_style.css" type="text/css">

<!-- Google Fonts-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CMontserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/28/14/intl/es_ALL/common.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/28/14/intl/es_ALL/util.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/28/14/intl/es_ALL/stats.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/28/14/intl/es_ALL/map.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/28/14/intl/es_ALL/marker.js"></script>
<style type="text/css">.gm-style {
        font: 400 11px Poppins, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style>
      <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/28/14/intl/es_ALL/onion.js"></script>
      <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/28/14/intl/es_ALL/infowindow.js"></script>
      <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/28/14/intl/es_ALL/controls.js"></script>
      <style type="text/css">@-webkit-keyframes _gm7125 {
         0% { -webkit-transform: translate3d(0px,-500px,0); -webkit-animation-timing-function: ease-in; }
         50% { -webkit-transform: translate3d(0px,0px,0); -webkit-animation-timing-function: ease-out; }
         75% { -webkit-transform: translate3d(0px,-20px,0); -webkit-animation-timing-function: ease-in; }
         100% { -webkit-transform: translate3d(0px,0px,0); -webkit-animation-timing-function: ease-out; }}
      </style>
</head>

<body>
<div id="vfx_loader_block" style="display: none;">
  <div class="vfx-loader-item"> <img src="images/loading.gif" alt=""> </div>
</div>
<div id="logo-header">
    <div class="row">
      <div class="col-sm-3 col-xs-9">
        <div id="logo"> <a href="http://bestoficinasvirtuales.com"><img src="images/logo.png" alt="logo"></a> </div>
      </div>
      <div class="col-sm-9 text-right">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#thrift-1" aria-expanded="false"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
            <div id="nav_menu_list">
              <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="empresas.php">Empresas</a></li>
                <span class="btn_item">
';

if($user['logged']){

echo '
                <li><a href="editar_perfil.php">Mi Perfil</a></li>
                <li><a href="logout.php">Salir</a></li>
';

}else{

echo '
                <li><a class="btn_register" data-toggle="modal" data-target="#register">Registro</a></li>
                <li><a class="btn_login" data-toggle="modal" data-target="#login">Login</a></li>
';
    
}

echo '
                </span>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
<div id="slider-banner-section">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 text-center">
            <div id="home-slider-item"> <span class="helpyou_item">Haz negocios con la <span>comunidad</span> BEST.</span>
               <p>Conecta con empresas para ofrecer y recibir sus servicios.</p>
            </div>
            <div id="search-categorie-item-block">
               <form id="categorie-search-form">
                  <div class="col-sm-9 col-md-10 nopadding">
                     <div id="search-input">
                        <div class="col-sm-3 nopadding">
                           <select id="location-search-list" class="form-control">
                              <option>Todas las Categorías</option>
                              <option>Arquitectura</option>
                              <option>Call Center</option>
                              <option>Capacitación</option>
                              <option>Coaching</option>
                              <option>Comercializadora</option>
                              <option>Construcción</option>
                              <option>Consultoría</option>
                              <option>Contabilidad</option>
                              <option>Derecho</option>
                              <option>Desarrollo Web</option>
                              <option>Diseño</option>
                              <option>Farmacéutica</option>
                              <option>Gestoría</option>
                              <option>Inmobiliaria</option>
                              <option>Logística</option>
                              <option>Recursos Humanos</option>
                              <option>Refrigeración</option>
                              <option>Salud</option>
                              <option>Seguros</option>
                              <option>Transporte aéreo</option>
                              <option>Viajes</option>
                           </select>
                        </div>
                        <div class="col-sm-9 nopadding">
                           <div class="form-group">
                              <input id="location-search-data-store" class="form-control" name="search" placeholder="Escriba palabra clave" required="">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-3 col-md-2 text-right nopadding-right">
                     <div id="location-search-btn">
                        <button type="submit" id="search-btn"><i class="fa fa-search"></i>Buscar</button>
                     </div>
                  </div>
               </form>
            </div>

          <br />
          <br />
            
         </div>
      </div>
   </div>
</div>
<div id="search-categorie-item" class="carousel">
   <div class="container">
      <div class="col-sm-12 text-center">
         <div class="row">
            <div class="col-md-12 categories-heading bt_heading_3">
               <h1>Empresas <span>Destacadas</span></h1>
                  <div class="blind line_1"></div>
                     <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
                        <div class="blind line_2"></div>
            </div>
         </div>
      ';
         $query = "
            SELECT *
            FROM `" .$config['dbname']."`.`user` ORDER BY id DESC LIMIT 4
      ";
            $sql = $db->query($query);
            while($row = $sql->fetch(PDO::FETCH_ASSOC)){
            $busID = $row['id'];
            $busPHONE = $row['phone'];
            $busLOGO = $row['logo'];
            $buBUSINESS = $row['business'];
            $buACTIVITY = $row['activity'];
            $buSECTOR = $row['sector'];
            $buDESC = $row['description'];
            $buNEEDS = $row['needs'];
            $buOFFERS = $row['offers'];
            $buNAME = $row['name'];
            $buMAIL = $row['email'];
            $buWEB = $row['webpage'];
            $face = $row['facebook'];
            $twit = $row['twitter'];
            $inst = $row['instagram'];
            $link = $row['linkedin'];
echo '
            <div class="col-md-4 col-sm-6 col-xs-12">
               <div class="feature-item-container-box listing-item">
                  <a href="empresa.php?id='.$busID.'">
                  <div class="feature-title-item">
                     
                     <h1>'.$buSECTOR.'</h1>
                        <img src="'.$busLOGO.'" alt="img1"> 
                  </div>
                  </a>
                  <div class="hover-overlay">
                     <div class="hover-overlay-inner">                  
                        <ul class="listing-links">
                           <!-- <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li> -->
                           <li><a href="empresa.php?id='.$busID.'"><i class="fa fa-share yallow-1"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
';
    }
echo '
            
      </div>
   </div>
         <br/>
   <div class="col-sm-12 text-center">
      <div class="row">
         <div class="col-md-12 categories-heading bt_heading_3">
            <h1>Empresas <span>afiliadas</span></h1>
            <div class="blind line_1"></div>
                <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
                  <div class="blind line_2"></div>
          </div>
          <!-- ************* Deberá incluirse logo por cada empresa ************** -->
';

  $query = "
        SELECT *
        FROM `" .$config['dbname']."`.`user` ORDER BY id DESC
    ";
  $sql = $db->query($query);
  while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    $busID = $row['id'];
    $busPHONE = $row['phone'];
    $busLOGO = $row['logo'];
        $buBUSINESS = $row['business'];
        $buACTIVITY = $row['activity'];
        $buSECTOR = $row['sector'];
        $buDESC = $row['description'];
        $buNEEDS = $row['needs'];
        $buOFFERS = $row['offers'];
        $buNAME = $row['name'];
        $buMAIL = $row['email'];
        $buWEB = $row['webpage'];
        $face = $row['facebook'];
        $twit = $row['twitter'];
        $inst = $row['instagram'];
        $link = $row['linkedin'];

echo '
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="categorie_item">
              <div class="cate_item_block hi-icon-effect-8">
              <a href="empresa.php?id='.$busID.'">
                <div class="cate_item_social hi-icon" style="background-image:url('.$busLOGO.'); background-size:cover;"></div>
                <h1>'.$buBUSINESS.'</h1></a>
              </div>
            </div>
          </div>
';
    }

echo '
          
        </div>
      </div>
    </div>

<div clas="row">
  <div id="pricing-item-block" class="white_gr_block text-center feature-item-listing-heading bt_heading_3">
    <div class="container">
  <h4>Tu red de <span>contactos</span> y el networking, es vital para el desarrollo de tu empresa; construila, mantenerla sólida y efectiva es esencial. El equilibrio está en más que pedir ayuda, <span>ofrecerla</span>.</h4>
  <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
    </div>
  </div>
  
  <div class="container">  <div class="row"><div class="col-sm-12 text-center"><div class="row">
';
 
if(!empty($search)){
    $run = " WHERE business LIKE '%$search%' OR sector LIKE '%$search%' OR description LIKE '%$search%' OR activity LIKE '%$search%' OR needs LIKE '%$search%' OR offers LIKE '%$search%'";
}else{
    $run = "";
}

  $query = "
        SELECT *
        FROM `" .$config['dbname']."`.`user`$run ORDER BY id DESC LIMIT $start,$limit
    ";
  $sql = $db->query($query);
  $cuenta = 0;
  $resultados = "";
  while($row = $sql->fetch(PDO::FETCH_ASSOC)){
      $busID = $row['id'];
    $busPHONE = $row['phone'];
    $busLOGO = $row['logo'];
        $buBUSINESS = $row['business'];
        $buACTIVITY = $row['activity'];
        $buSECTOR = $row['sector'];
        $buDESC = $row['description'];
        $buNEEDS = $row['needs'];
        $buOFFERS = $row['offers'];
        $buNAME = $row['name'];
        $buMAIL = $row['email'];
        $buWEB = $row['webpage'];
        $face = $row['facebook'];
        $twit = $row['twitter'];
        $inst = $row['instagram'];
        $link = $row['linkedin'];

$resultados .= '
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon" style="background-image:url('.$busLOGO.'); background-size:cover;"></div>
                <h1><a href="empresa.php?id='.$busID.'">'.$buBUSINESS.'</a></h1>
              </div>
            </div>
          </div>
';
$cuenta++;
    }
  
  
  if($search){
  echo "<div class='col-md-12'><div><div class='search-container'><a name='search'></a>";
    if($cuenta <= 0){
      echo "<h3>Tus resultados de busqueda:</h3><div class='pb-2'>No se han encontrado resultados.</div>";
    }else{
      echo "<h3>Tus resultados de busqueda:</h3>";
    }
  
  echo $resultados;
  echo "</div>";
  }
 echo ' </div></div>
  </div></div>
  </div></div>

<!--================================ Login and Register Forms ===========================================--> 

<!-- login form -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel"> Login</h4>
      </div>
      <div class="modal-body">
        <div class="logPOPResult"></div>
        <div class="listing-login-form">
          <form class="logPOP">
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input class="form-field bgwhite" type="text" name="user_name" placeholder="E-mail">
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_pass" placeholder="Contraseña">
            </div>
          <!--  <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
              <input type="checkbox" id="checkbox-1-1" class="regular-checkbox">
              <label for="checkbox-1-1"></label>
            <label class="checkbox-lable">Recuérdame</label>
             <a href="#">No recuerdo mi contraseña</a> 
            </div> -->
            <div class="listing-form-field">
              <input class="form-field submit" type="submit" value="login">
            </div>
          </form>
          <!-- <div class="bottom-links">
            <p>not a member?<a href="#">create account</a></p>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- registration form -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel2">Registro</h4>
      </div>
      <div class="modal-body">
        <div class="listing-register-form">
          <form action="registro.php" method="POST">
            <div class="listing-form-field"> <i class="fa fa-envelope blue-1"></i>
              <input class="form-field bgwhite" type="email" name="user_email" placeholder="email">
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_password" placeholder="Contraseña">
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_confirm_password" placeholder="Confirme Contraseña">
            </div>
            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
              <input type="checkbox" id="checkbox-1-2" class="regular-checkbox">
              <label for="checkbox-1-2"></label>
              <label class="checkbox-lable">Estoy de acuerdon con</label>
              <a href="/directorio/assets/docs/aviso_privacidad_best_oficinas.pdf" target="_blank">Términos y condiciones del sitio</a> </div>
            <div class="listing-form-field">
              <input class="form-field submit" type="submit" value="crear cuenta">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
';
?>

<!-- Scripts --> 
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/waypoints.js"></script> 
<script type="text/javascript" src="js/all.js"></script> 
<script type="text/javascript" src="js/jquery_counterup.js"></script> 
<script type="text/javascript" src="js/jquery_custom.js"></script> 
<script src="js/all.js" type="text/javascript"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript">
$(document).ready(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollup').fadeIn();
    } else {
      $('.scrollup').fadeOut();
    }
  });
  $('.scrollup').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
});
</script> 

</body>
</html>