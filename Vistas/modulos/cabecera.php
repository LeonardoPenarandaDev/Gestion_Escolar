 <header class="main-header">
    <!-- Logo -->
    <a href="https://app.emunah.edu.co/inicio" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="https://app.emunah.edu.co/Vistas/img/logo2.png" class="img-responsive" width="50px"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="https://app.emunah.edu.co/Vistas/img/logo3.png" class="img-responsive" width="150px"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
              <?php

              echo '<span class="hidden-xs">'.$_SESSION["nombre"]." ".$_SESSION["apellido"].'</span>';

              ?>

            </a>
            <ul class="dropdown-menu" style="border: 1px solid black">
              <!-- User image -->
              <li class="user-header" style="height: 100px;">

                <?php

                if($_SESSION["rol"] == "Administrador"){

                  echo '<p>'.$_SESSION["nombre"]." ".$_SESSION["apellido"].' - Administrador</p>';

                }elseif($_SESSION["rol"] == "Estudiante"){

                  echo '<p>
                  '.$_SESSION["nombre"]." ".$_SESSION["apellido"].' - Usuario: '.$_SESSION["libreta"].'
                  </p>';

                  $columna = "id";
                  $valor = $_SESSION["id_carrera"];

                  $carrera = CarrerasC::VerCarreras2C($columna, $valor);

                  echo '<p>'.$carrera["nombre"].'</p>';
                  
                }else{
                  echo '<p>'.$_SESSION["nombre"]." ".$_SESSION["apellido"].' - invitado</p>';
                }

                ?>
               
              </li>
              <!-- Menu Body -->
              
              <li class="user-footer">
                <div class="pull-left">
                  <a href="https://app.emunah.edu.co/mis-datos" class="btn btn-primary btn-flat">Mis Datos</a>
                </div>
                <div class="pull-right">
                  <a href="https://app.emunah.edu.co/salir" class="btn btn-danger btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>