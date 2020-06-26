
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
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Gestionar Peliculas</a></li>
          <ul class="sub-dropdown-menu" id="pelicula">
             <li><a href="listapeliculas.php"> Lista de Peliculas</a></li>
             <li><a href="registropelicula.php">Registrar pelicula</a></li>
             <li><a href="detallePelicula.php">Detalle Pelicula</a></li></ul>
          <li><a href="#">Gestionar Series</a></li>
          <ul class="sub-dropdown-menu" id="serie">
             <li><a href="listaseries.php">Lista de Series</a></li>
             <li><a href="registroserie.php">Registrar Series</a></li>
             <li><a href="detalleSerie.php">Detalle de Series</a></li></ul>
          <li><a href="#">Gestionar Noticias</a></li>
          <ul class="sub-dropdown-menu" id="noticia">
             <li><a href="registronew.php"> Registrar Noticia</a></li>
             <li><a href="listanew.php">Lista de Noticias</a></li></ul>
        <li><a href="#">Gestionar Foros</a></li>
        <ul class="sub-dropdown-menu" id="foro">
           <li><a href="listaforos.php">Lista de Foro</a></li></ul>
       <li><a href="#">Gestionar Criticas</a></li>
           <ul class="sub-dropdown-menu" id="critica">
              <li><a href="listacriticaspeliculas.php"> Criticas de peliculas</a></li>
              <li><a href="listacriticasseries.php">Criticas de series</a></li></ul>
       <li><a href="#">Gestionar Tematicas</a></li>
              <ul class="sub-dropdown-menu" id="critica">

                 <li><a href="registrartematica.php"> Registra Tematica</a></li>
                 <li><a href="listatematicas.php">Detalle Tematica</a></li></ul>
</ul>
      </li>
  <li class="active"><a href="panelcontrol.php">Panel de Control</a></li>
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
