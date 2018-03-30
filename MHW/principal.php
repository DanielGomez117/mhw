<?php

    session_start();
    if (!isset($_SESSION['nickOrEmail'])) {
        echo "No has iniciado sesión. Redireccionando a página de login...";
        echo "<html><META HTTP-EQUIV='refresh' 
        content='2;URL=login.php'></html>";
    } else {
        ?>
<html>
<head>
<title>MHW</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="shortcut icon" href="favicon.png">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/fondo.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="principal.php">Monster Hunter World</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="principal.php">Inicio</a></li>
          <li><a class="drop" href="#">Monstruos</a>
            <ul>
              <li><a href="pages/gallery.php">Galería</a></li>
              <li><a href="pages/full-width.php">Información</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Sobre Nosotros</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
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
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <p> </p>
            <h3 class="heading">Bienvenido, cazador!</h3>
            <p> </p>
            <p> </p>
            <p> </p>
            <footer><a> </a></footer>
          </article>
        </li>
        <li>
          <article>
            <p>100/100</p>
            <h3 class="heading">GamesRadar+</h3>
            <p>A triumph for the series and one of this generation's greatest games yet. Monster Hunter World takes the beating heart of a vital, niche franchise and elevates it toward universal appeal.</p>
            <p> </p>
            <footer><a class="btn inverse" href="https://www.gamesradar.com/monster-hunter-world-review/" target="_blank">Ver review &raquo;</a></footer>
          </article>
        </li>
        <li>
          <article>
            <p>90/100</p>
            <h3 class="heading">Meristation</h3>
            <p>Monster Hunter World is huge in each and every aspect of the game. This brand new entry in the series marks a step forward not only in technical terms but also in the mechanics. </p>
            <p> </p>
            <footer><a class="btn" href="http://meristation.as.com/playstation-4/monster-hunter-world/analisis-juego/2203627" target="_blank">Ver Review &raquo;</a></footer>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
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
    <div class="btmspace-80 center">
      <h3 class="nospace">Próximos eventos</h3>
      <p class="nospace">Haz click para ver el video promocional!</p>
    </div>
    <ul class="nospace group services">
      <li class="one_third first">
        <article class="bgded overlay" style="background-image:url('images/event01.jpg');">
          <div class="txtwrap"><i class="block fa fa-4x fa-paw"></i>
            <h6 class="heading">Megaman CrossOver</h6>
            <p>Consigue un nuevo aspecto para tu nuevo compañero Palico&hellip;</p>
          </div>
          <footer><a href="https://www.youtube.com/watch?v=0Sdo-APuV9M" target="_blank">Ver Video &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article class="bgded overlay" style="background-image:url('images/event02.jpg');">
          <div class="txtwrap"><i class="block fa fa-4x fa-gears"></i>
            <h6 class="heading">Horizon Zero Dawn</h6>
            <p>Caza como Aloy y equipa a tu Palico con un atuendo inspirado en Zero Dawn&hellip;</p>
          </div>
          <footer><a href="https://www.youtube.com/watch?v=g0DYq5foe58" target="_blank">Ver Video &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article class="bgded overlay" style="background-image:url('images/event03.jpg');">
          <div class="txtwrap"><i class="block fa fa-4x fa-flash"></i>
            <h6 class="heading">Street Fighter X-Over</h6>
            <p>Métete en la piel de RYU y empieza a cazar monstruos a base de HADOUKEN!&hellip;</p>
          </div>
          <footer><a href="https://www.youtube.com/watch?v=TwfUQd-BFRE" target="_blank">Ver Video &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third first">
        <article class="bgded overlay" style="background-image:url('images/event04.jpg');">
          <div class="txtwrap"><i class="block fa fa-4x fa-lock"></i>
            <h6 class="heading">Deviljho</h6>
            <p>La primera gran actualización para MHW ya está disponible, el temible DEVILJHO!</p>
          </div>
          <footer><a href="https://www.youtube.com/watch?v=KaClSgzhmKA" target="_blank">Ver Video &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article class="bgded overlay" style="background-image:url('images/event05.jpg');">
          <div class="txtwrap"><i class="block fa fa-4x fa-rocket"></i>
            <h6 class="heading">Devil May Cry</h6>
            <p>Dante nos presta su clasico abrigo y sus dos espadas preferidas&hellip;</p>
          </div>
          <footer><a href="https://www.youtube.com/watch?v=i1tMQDMzkBM" target="_blank">Ver Video &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article class="bgded overlay" style="background-image:url('images/event06.png');">
          <div class="txtwrap"><i class="block fa fa-4x fa-gamepad"></i>
            <h6 class="heading">Armadura de USJ</h6>
            <p>Consigue esta increible armadura del evento japonés USJ.</p>
          </div>
          <footer><a>Próximamente en Europa&hellip;</a></footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper">
  <article id="shout" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="three_quarter first">
      <h2 class="heading btmspace-10">Adéntrate en una nueva aventura!</h2>
      <p class="nospace">Prepárate para la caza.</p>
    </div>
    <footer class="one_quarter"><a class="btn" href="https://www.game.es/VIDEOJUEGOS/ACCION/PLAYSTATION-4/MONSTER-HUNTER-WORLD/144090" target="_blank">Compra Aqui!</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="btmspace-80 center">
      <h3 class="nospace">Armas</h3>
      <p class="nospace">En estos vídeos se recogen las tres distintas categorias de armas.</p>
    </div>
    
      <article class="one_third first"><a><iframe width="306" height="200.81" src="https://www.youtube.com/embed/vgBhaRZhsFY">
      </iframe></a>
        <h6 class="nospace font-x1">Trailer Armas Pesadas</h6>
        <p>Aprende a controlar una variedad increible de armas, este vídeo contiene las armas pesadas&hellip;</p>
      </article>
      <article class="one_third"><a><iframe width="306" height="200.81" src="https://www.youtube.com/embed/Gt_Dn65jdSQ">
      </iframe></a>
        <h6 class="nospace font-x1">Trailer Armas Técnicas</h6>
        <p>Aprende a controlar una variedad increible de armas, este vídeo contiene las armas técnicas&hellip;</p>
      </article>
      <article class="one_third"><a><iframe width="306" height="200.81" src="https://www.youtube.com/embed/e_bBd7v0PUA">
      </iframe></a>
        <h6 class="nospace font-x1">Trailer Armas Ligeras</h6>
        <p>Aprende a controlar una variedad increible de armas, este vídeo contiene las armas ligeras&hellip;</p>
      </article><div class="group">
          <div class="one_third first">
              <h6 class="nospace font-x1"> </h6>
              <p></p>
              <footer></footer>
            </div>
            <br>
      <div class="one_third">
        <h6 class="nospace font-x1">Visita la web oficial</h6>
        <p>Si quieres saber más haz click en el botón&hellip;</p>
        <footer><a class="btn" href="http://www.monsterhunterworld.com/us/" target="_blank">Web Oficial</a></footer>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('images/fondo.jpg');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h3 class="heading">MH: World</h3>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/monsterhunter/" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com/monsterhunter?lang=es" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-google-plus" href="https://plus.google.com/communities/112618191187987333727" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-google-plus" href="https://www.youtube.com/channel/UCVS0xBpOtXBAl12rdG67-OQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
        <li><a class="faicon-instagram" href="https://www.instagram.com/monsterhuntergame/" target="_blank"><i class="fa fa-instagram"></i></a></li>

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
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>
<?php
}
?>