<?php
    session_start();
    if (!isset($_SESSION['nickOrEmail'])) {
        echo "No has iniciado sesión. Redireccionando a página de login...";
        echo "<html><META HTTP-EQUIV='refresh' 
        content='2;URL=../login.php'></html>";
    } else {
        ?>
<html>
<head>
<title>MHW | Sugerencias</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="shortcut icon" href="../favicon.png">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/informacion.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../principal.php">MH: World</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../principal.php">Inicio</a></li>
          <li><a class="drop">Monstruos</a>
            <ul>
              <li><a href="gallery.php">Galería</a></li>
              <li><a href="full-width.php">Información</a></li>
            </ul>
          </li>
          <li class="active"><a class="drop">Social</a>
            <ul>
              <li class="active"><a>Buzón de Sugerencias</a></li>
              <li><a class="drop">Dónde estamos</a>
                <ul>
                  <li><a href="localizacion.php">Localizazión</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a><?php echo"".$_SESSION['nickOrEmail']; ?> <i class="fa fa-user"></i></a></li>
          <li><a href="../logout.php">Desconectar <i class="fa fa-sign-out"></i></a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul>
        <li><a>Social</a></li>
        <li><a>Buzón de Sugerencias</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
<div class="content"> 
    <div id="comments">
      <!-- ################################################################################################ -->
      <h1>¿Alguna sugerencia que quieras dejarnos?</h1>
      <img class="imgr borderedbox inspace-5" style="width:150px;height:150px;" src="../images/lightbulb.png" alt="">
      <p>Envianos tu <a>sugerencia</a> que tengas para que podamos <a>mejorar</a> la página, manteniendo así los datos actualizados o cualquier fallo que se nos ha pasado por alto.</p>
      <p>Está página <a>evoluciona</a> gracias a todas vuestras sugerencias, es importante para nosotros saber que pensais o que se podría mejorar.
      <br>Ya que, al ser vosotros los <a>usuarios</a>, pueden que os surjan en un futuro necesidades que aún no están implementadas.</p>
      
      <!-- ################################################################################################ -->
      <h2>Envíanos tu sugerencia</h2>
        <form action="insertarDudas.php" method="post">
          <div class="one_third first">
            <label for="name">Nombre <span>*</span></label>
            <input type="text" name="nombre" id="nombre" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Email <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" value="" size="22" required>
          </div>
          <div class="block clear">
            <label for="mensaje">Sugerencia</label>
            <textarea name="mensaje" id="mensaje" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Enviar">
            &nbsp;
            <input type="reset" name="reset" value="Limpiar">
          </div>
        </form>
    </div>
</div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('../images/informacion.jpg');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h3 class="heading">MH: World</h3>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/monsterhunter/"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com/monsterhunter?lang=es"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-google-plus" href="https://plus.google.com/communities/112618191187987333727"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-google-plus" href="https://www.youtube.com/channel/UCVS0xBpOtXBAl12rdG67-OQ"><i class="fa fa-youtube"></i></a></li>
        <li><a class="faicon-instagram" href="https://www.instagram.com/monsterhuntergame/"><i class="fa fa-instagram"></i></a></li>

      </ul>
    </div>
    <div class="one_third">
      <ul class="nospace meta">
        <li class="btmspace-15"></i></li>
        <li></i></li>
      </ul>
    </div>
    <div class="one_third">
      <form method="post" action="#">
        <fieldset>
          <legend>Suscripción:</legend>
          <div class="clear">
            <input type="text" value="" placeholder="Email&hellip;">
            <button class="fa fa-share"  title="Submit"><em>Submit</em></button>
          </div>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
<?php
}
?>