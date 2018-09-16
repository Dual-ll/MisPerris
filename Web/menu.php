<link rel="stylesheet" href="css/style.css">
            
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="contenido.php"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <div id="marca">
          <a href="contenido.php">
              <img  src="img/logo.png" id="perrisHead" alt="" >
          </a>
            </div>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="contenido.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mascotas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="ingresar.php">Agregar Mascota</a>
          <a class="dropdown-item" href="listar.php">Listar Mascota</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Postulante
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="ingresar_postulante.php">Agregar Postulante</a>
          <a class="dropdown-item" href="listar_postulantes.php">Listar Postulante</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cerrar.php">Cerrar Sesión</a>
      </li>
    </ul>
  </div>
  
</nav>
