<nav class="menu-v">
  <ul class="navegacion">
  
    <li class="logo"><a href="Index.php" draggable="false"><img src="assets/Imagenes/logoprovicional.png" alt="" class="imgLogo" draggable="false"></a></li>

    <li>
      <button class="AccionesDirectos" onclick="toggleSubMenu(this)">
        <ion-icon name="cart-outline" class="Icono"></ion-icon>
        <span class="link">Compras</span>
      </button>
      <ul class="sub-menu-v">
        <li class="sub-link"><a href="TablaCompras.php">Ver Compras</a></li>
        <li class="sub-link"><a href="#">Ver Proveedores</a></li>
        <li class="sub-link"><a href="#"></a></li>
      </ul>
    </li>
    
    <li>
      <button class="AccionesDirectos" onclick="toggleSubMenu(this)">
        <ion-icon name="stats-chart-outline" class="Icono"></ion-icon>
        <span class="link">Ventas</span>
      </button>
      <ul class="sub-menu-v">
        <li class="sub-link"><a href="TablaVentas.php">Ver Ventas</a></li>
        <li class="sub-link"><a href="#"></a></li>
        <li class="sub-link"><a href="#"></a></li>
      </ul>
    </li>
    
    <li>
      <button class="AccionesDirectos" onclick="toggleSubMenu(this)">
        <ion-icon name="cube-outline" class="Icono"></ion-icon>
        <span class="link">Inventario</span>
      </button>
      <ul class="sub-menu-v">
        <li class="sub-link"><a href="TablaInventario.php">Ver Inventario</a></li>
        <li class="sub-link"><a href="#"></a></li>
        <li class="sub-link"><a href="#"></a></li>
      </ul>
    </li>
     </ul>
</nav>


    <!--Menu Vertical Script-->
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