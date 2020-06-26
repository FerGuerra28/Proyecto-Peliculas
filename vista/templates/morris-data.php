<?php
//header( 'X-Content-Type-Options: nosniff' );
//header( 'X-Frame-Options: SAMEORIGIN' );
//header("X-XSS-Protection: 1; mode=block");

?>


<script type="text/javascript">
$(function() {
  //
  // Morris.Donut({
  //   element: 'donut-example',
  //   data: [
  //     {label: "Download Sales", value: 12},
  //     {label: "In-Store Sales", value: 30},
  //     {label: "Mail-Order Sales", value: 20}
  //   ]
  // });

  <?php



    $sql122 = "SELECT fecha from foro where estado=1 order by fecha desc";
    $rowwww = ejecutar($sql122);
    $rowwww21 = mysqli_fetch_array($rowwww);

  $sql1 = "SELECT COUNT(*) from series where estado=1";
  $fila1 = ejecutar($sql1);
  $filita1 = mysqli_fetch_array($fila1);


  $sql2 = "SELECT COUNT(*) from foro where estado=1";
  $fila2 = ejecutar($sql2);
  $filita2 = mysqli_fetch_array($fila2);

  $sql3 = "SELECT COUNT(*) from users where estado=1";
  $fila3 = ejecutar($sql3);
  $filita3 = mysqli_fetch_array($fila3);

  $sqld1 = "SELECT COUNT(*) FROM movies WHERE ESTADO=1";
  $filad1 = ejecutar($sqld1);
  $filitad1 = mysqli_fetch_array($filad1);

  $sqld2 = "SELECT COUNT(*) FROM series WHERE ESTADO=1";
  $filad2 = ejecutar($sqld2);
  $filitad2 = mysqli_fetch_array($filad2);


  ?>

  Morris.Donut({
      element: 'donut-example',
      data: [{
          label: "Películas",
          value: <?php echo $filitad1[0] ; ?>
      }, {
          label: "Series",
          value: <?php echo $filitad2[0] ; ?>
      }],
      resize: true
  });

  Morris.Donut({
      element: 'donut-example-2',
      data: [{
          label: "Usuarios",
          value: <?php echo $filita3[0] ; ?>
      }, {
          label: "Foros",
          value: <?php echo $filita2[0] ; ?>
      }],
      resize: true
  });




});
</script>
