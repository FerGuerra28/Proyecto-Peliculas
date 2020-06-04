<?php
//header( 'X-Content-Type-Options: nosniff' );
//header( 'X-Frame-Options: SAMEORIGIN' );
//header("X-XSS-Protection: 1; mode=block");

?>


<script>

            $("#notificacionLink").click(function(){
                $("#notification_count").fadeOut("slow");

                <?php
                $cod = $_SESSION["cod"];
                $sql="UPDATE notificaciones SET visto = 1 where para = $cod";
                ejecutar($sql);
                ?>

            });
</script>
