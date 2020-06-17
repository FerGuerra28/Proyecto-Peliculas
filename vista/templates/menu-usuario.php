<?php
header( 'X-Content-Type-Options: nosniff' );
header( 'X-Frame-Options: SAMEORIGIN' );
header("X-XSS-Protection: 1; mode=block");

?>




<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php"style="color:#DAA520;
                                                        font-size: 40px;
                                                        font-family: Garamond">www.PurOcio.com</a></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Inicio</a></li>
      <li><a href="listapeliculas.php">Peliculas</a></li>
      <li><a href="listaseries.php">Series</a></li>
      <li><a href="listanew.php">Noticias</a></li>
      <li><a href="listaforos.php">Foros</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Critica
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="listacriticaspeliculas.php">Critica de Peliculas</a></li>
          <li><a href="listacriticasseries.php">Critica de Series </a></li>
      </ul>
</li>

  </ul>
    <ul class="nav navbar-nav navbar-right">

    <li><a href="../vista/miperfil.php" style="color:#FFFFFF"><span class="glyphicon glyphicon-user "></span> <?php echo $_SESSION["usuario"]; ?></a></li>
    <li><a href="../controlador/usuariocontrolador.php?action=logout" style="color:#FFFFFF"><span class="glyphicon glyphicon-log-in"> </span> Cerrar Sesión</a></li>
    </ul>

  </div>
</nav>
  </div>
</nav>
</div>
