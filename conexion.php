
    <?php


$conexion = 'mysql:dbname=grupo_1;host=132.226.219.27';
  $usuario = 'grupo_1';
  $contra = 'afa_3239';
  $db = new PDO($conexion, $usuario, $contra);

  $sql = "SELECT nombre FROM grupo1";
  $consulta = $db->query($sql);
?>
