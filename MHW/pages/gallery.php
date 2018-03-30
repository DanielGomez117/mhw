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
<title>MHW | Galeria</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="shortcut icon" href="../favicon.png">
<link rel="stylesheet" type="text/css" href="../layout/styles/TitleTooltip.css">
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
              <li class="active"><a href="gallery.php">Galeria</a></li>
              <li><a href="full-width.php">Información</a></li>
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
        <li><a href="#">Galeria</a></li>
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
      <div id="gallery">
        <figure> 
          <header class="heading">MH: World Monstruos</header>
          <figcaption>Pasa el ratón por encima de una imagen para ver su nombre</figcaption>
          <p> </p>
          <ul class="nospace clear">
            <li class="one_half first"><a><img src="../images/demo/gallery/01.png" ><span class="green">Rathalos</span></a></li>
            <li class="one_half"><a><img src="../images/demo/gallery/02.png" ><span class="green">Nergigante</span></a></li>
            <li class="one_half first"><a><img src="../images/demo/gallery/03.png" ><span class="green">Radobaan</span></a></li>
            <li class="one_half"><a><img src="../images/demo/gallery/04.png" ><span class="green">Gran Jagras</span></a></li>
            <li class="one_half first"><a><img src="../images/demo/gallery/05.png" ><span class="green">Kirin</span></a></li>
            <li class="one_half"><a><img src="../images/demo/gallery/06.png" ><span class="green">Deviljho</span></a></li>
            <li class="one_half first"><a><img src="../images/demo/gallery/07.png" ><span class="green">Kushala Daora</span></a></li>
            <li class="one_half"><a><img src="../images/demo/gallery/08.png"><span class="green">Teostra</span></a></li>
            <li class="one_half first"><a><img src="../images/demo/gallery/09.png" ><span class="green">Paolumu</span></a></li>
            <li class="one_half"><a><img src="../images/demo/gallery/10.png" ><span class="green">Odogaron</span></a></li>
            <li class="one_half first"><a><img src="../images/demo/gallery/14.png" ><span class="green">Bazelgeuse</span></a></li>
            <li class="one_half"><a><img src="../images/demo/gallery/12.png" ><span class="green">Tobi Kadachi</span></a></li>
            <li class="one_half first"><a><img src="../images/demo/gallery/13.png" ><span class="green">Rathian</span></a></li>
            <li class="one_half"><a><img src="../images/demo/gallery/11.png" ><span class="green">Zorah Magdaros</span></a></li>
          </ul>
        </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <!--<nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li class="current"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav>-->
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