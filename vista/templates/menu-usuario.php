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
