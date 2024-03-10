<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/Css/registro.css">
    <link rel="stylesheet" href="./assets/Css/menuV.css">
    <title>Registrarse</title>
</head>
<body>
<?php include('menuV.php');?>
    <div class="container">

                <div class="card">
                    <div class="card-body">         
                    <form action="" method="post">
        
                        <div class="inputBox">
                            <div class="containerInput">
                                <label for="nombre" class="titleInput">Nombre</label>
                                <input type="text" name="nombre" class="inputs" autocomplete="off">
                            </div>        

                            <div class="containerInput">
                                <label for="apellido" class="titleInput">Apellido</label>
                                <input type="text" name="apellido" class="inputs" autocomplete="off">
                            </div>
                
                            <div class="containerInput">
                                <label for="correo" class="titleInput">Correo electronico</label>
                                <input type="email" name="correo" class="inputs" autocomplete="off">
                            </div>

                            <div class="containerInput">
                                <label for="password" class="titleInput">Contraseña</label>
                                <input type="password" name="password" class="inputs" autocomplete="off">
                            </div>  

                            <div class="containerInput">
                                <label for="confirmPassword" class="titleInput">Confirmar contraseña</label>
                                <input type="password" name="confirmPassword" class="inputs" autocomplete="off">
                            </div>  

                            <div class="containerInput">
                              <label for="confirmPassword" class="titleInput">Nombre producto</label>
                              <input type="password" name="confirmPassword" class="inputs" autocomplete="off">
                          </div>  

                          <div class="containerInput">
                            <label for="confirmPassword" class="titleInput">Cantidad producto</label>
                            <input type="password" name="confirmPassword" class="inputs" autocomplete="off">
                        </div>  

                        <div class="containerInput">
                          <label for="confirmPassword" class="titleInput">Id Lote</label>
                          <input type="password" name="confirmPassword" class="inputs" autocomplete="off">
                      </div>  

                      
                        </div>
                        <button type="submit" value="IniciarSesion" name="btn_agregar" class="btnAgregar">Agregar</button>
        

                        </div>
                    </form>
                </div>
    </div>
    </div>

    <script>
      function toggleSubMenu(button) {
        button.classList.toggle("active");
        let subMenu = button.nextElementSibling;
        if (subMenu.style.display === "block") {
          subMenu.style.display = "none";
        } else {
          subMenu.style.display = "block";
        }
    
    }
  </script> 
</body>
</html>