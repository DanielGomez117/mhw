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
<title>MHW | Información</title>
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
          <li class="active"><a class="drop" href="#">Monstruos</a>
            <ul>
              <li><a href="gallery.php">Galería</a></li>
              <li class="active"><a href="full-width.php">Información</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul>
          </li>
          <li><a href="#"><?php echo"".$_SESSION['nickOrEmail']; ?></a></li>
          <li><a href="logout.php">Desconectar</a></li>
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
        <li><a href="#">Monstruos</a></li>
        <li><a href="#">Información</a></li>
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
      <!-- ################################################################################################ -->
      <h1>Información básica sobre los tipos de daño</h1>
      <img class="imgr borderedbox inspace-5" style="width:150px;height:125px;" src="../images/demo/imgr.gif" alt="">
      <p>Hay distintos tipos de <a>daños elementales</a>, algunos de los cuales causan efectos que los pondremos entre paréntesis: daño normal, eléctrico(parálisis), fuego, hielo, agua, draco(Sello de los ancianos).</p>
      <p>El elemento <a>draco</a> es especial, pues su efecto <italic>'Sello de los Ancianos'</italic> solo se aplica a los Dragones Ancianos.
      <br>Este efecto neutraliza algunas habilidades de los Dragones Ancianos, por lo que puede ser mas fácil cazarlos, es un elemento a tener en cuenta.<br>
      Además de estos efectos se añaden los <a>estados alterados</a>: veneno, sueño, nitro, fatiga y sangrado.</p>
      <img class="imgl borderedbox inspace-5" style="width:125px;height:125px;" src="../images/demo/imgl.gif" alt="">
      <p>Ahora hablemos de la <a>munición</a>. La munición es exclusiva para las <a>ballestas(pesada y ligera)</a> cada una podrá llevar distintos tipos de munición que su contraria no podrá.</p>
      <p>Puedes fabricar municion recogiendo <a>plantas y setas</a> mientras exploras el mapa.<a> Hay muchos tipos de munición </a> y dependiendo de la ballesta que elijas, podrás escoger entre un set de munición u otro.</p>
      <p>Las municiones se clasifican en distintos <a>niveles</a> depende del tipo de <a>pólvora</a> que uses para fabricarla, siendo la pólvora de <a>nvl.3</a> la mas potente. Obviamente a más nivel de pólvora, mayor <a>daño</a>, pero también mayor <a>retroceso</a>.</p>
      <h1>Tipos de munición</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Municiones</th>
              <th>Nivel</th>
              <th>Descripción</th>
              <th>Eficaz contra</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a>Perforante</a></td>
              <td>1-2-3</td>
              <td>Munición que atraviesa en linea recta(varios impactos)</td>
              <td>Monstruos grandes con bastante armadura. <br>Ej: <a href="#" onClick="window.open('../images/demo/gallery/14.png','Bazelgeuse','resizable,height=260,left=1500,top=350,width=370');return false">Bazelgeuse</a></td>
            </tr>
            <tr>
            <td><a>Normal</a></td>
              <td>1-2-3</td>
              <td>Munición normal que impacta una vez</td>
              <td>Monstruos medianos débiles. <br>Ej: <a href="#" onClick="window.open('../images/demo/gallery/04.png','Gran Jagras','resizable,height=260,left=1500,top=350,width=370');return false">Gran Jagras</a></td>
            </tr>
            <tr>
            <td><a>D. Cortante</a></td>
              <td>1</td>
              <td>Munición se adhiere al objetivo y le asesta daño cortante múltiples veces</td>
              <td>Monstruos voladores especialmente eficaz en las alas. <br>Ej: <a href="#" onClick="window.open('../images/demo/gallery/01.png','Rathalos','resizable,height=260,left=1500,top=350,width=370');return false">Rathalos</a>,<a href="#" onClick="window.open('../images/demo/gallery/13.png','Rathian','resizable,height=260,left=1500,top=350,width=370');return false">Rathian</a></td>
            </tr>
            <tr>
            <td><a>D. Grupo</a></td>
              <td>1-2-3</td>
              <td>Munición de mortero que al caer se divide en varias cápsulas explosivas de daño en área</td>
              <td>Monstruos lentos y grandes pues se tarda en disparar este tipo de munición.<br> Ej: <a href="#" onClick="window.open('../images/demo/gallery/03.png','Radobaan','resizable,height=260,left=1500,top=350,width=370');return false">Radobaan</a>,<a href="#" onClick="window.open('../images/demo/gallery/11.png','Zorah Magdaros','resizable,height=260,left=1500,top=350,width=370');return false">Zorah Magdaros</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- ################################################################################################ -->
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
      <h3 class="heading">Geodarn</h3>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <div class="clear">
            <input type="text" value="" placeholder="Type Email Here&hellip;">
            <button class="fa fa-share" type="submit" title="Submit"><em>Submit</em></button>
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