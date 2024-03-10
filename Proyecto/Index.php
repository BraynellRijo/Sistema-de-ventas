
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/Css/Index.css">
    <link rel="stylesheet" href="assets/Css/menuV.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

    <title>Inicio</title>
</head>
<body>

  <header class="menu-h">
      <!-- <form action="" method="post" enctype="multipart/form-data" class="InfoUser">
        <div class="TextoUser">

          <label for="">Nombre Usuario</label>
          <input type="text" readonly class="NombreUser" name="NombreUser">

          <label for="">cargo Usuario</label>
          <input type="text" readonly class="CargoUser" name="Cargo">

        </div>
        <img src="assets/Imagenes/User.png" class="User" draggable="false">
        <ion-icon name="menu-outline" class="IconMenu"></ion-icon>
        <ul class="MiniMenu-User">

          <div class="card">
            <li class="links-menuH">
              <label for="foto-usuario">Actualiza tu foto de perfil</label>
              <input type="file" id="foto-usuario" accept="image/jpeg, image/png, image/jpg" name="foto-usuario">
            </li>
  
            <li class="links-menuH">
              <a href="Login.html" class="Login">Login</a>
            </li>
  
            <li class="links-menuH">
              <button class="LogOut">Cerrar Sesión</button>
            </li>
          </div>
          

        </ul>
      </form> -->
</header>

<?php include('menuV.php');?>

<article class="contenedor-main">
      <div class="contenedor-estadistica">
        
        <?php
        include('ConexionDB.php');
          $dataPoints = array(
            array("label"=> "Producto", "y"=> 284935),
            array("label"=> "Entertainment", "y"=> 256548),
            array("label"=> "Lifestyle", "y"=> 245214),
            array("label"=> "Business", "y"=> 233464),
            array("label"=> "Music & Audio", "y"=> 200285),
            array("label"=> "Personalization", "y"=> 194422),
            array("label"=> "Tools", "y"=> 180337),
            array("label"=> "Books & Reference", "y"=> 172340),
            array("label"=> "Travel & Local", "y"=> 118187),
            array("label"=> "Puzzle", "y"=> 107530)
          );

          
        ?>
        <div id="chartContainer" class="chart"></div>
      </div>

    <div class="contenedor-preview">
      <div class="card-preview">
          <table id="TablaProductos">
            <thead id="HeaderProductos">

            </thead>

              <tbody id="BodyProductos">

            </tbody>
            </table>
      </div>
    </div>

    <div class="contenedor-preview2">
      <div class="card-preview2">

      </div>
    </div>

</article>


</body>    


    <!--Menu Horizontal Script-->

      <script>
        const menuIcon = document.querySelector('.IconMenu');
        const miniMenu = document.querySelector('.MiniMenu-User');

        menuIcon.addEventListener('click', toggleMenu);

        function toggleMenu() {
          miniMenu.classList.toggle('active');
}

</script>

<!-- Estadistica script -->
<script>
    window.onload = function () {
    
    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      theme: "light2", // "light1", "light2", "dark1", "dark2"
      title: {
        text: "Estadísticas de ventas"
      },
      axisY: {
        title: "Cantidad de ventas"
      },
      data: [{
        type: "column",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
      }]
    });
    chart.render();
    
    }

</script>


</html>