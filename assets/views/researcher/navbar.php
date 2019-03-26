<nav class="nav-sistema">
  <button class="navbar-toggler hidden-md-up pull-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-header2" aria-controls="navbar-header2" aria-expanded="false">☰</button>
   <div class="collapse navbar-toggleable-sm" id="navbar-header2">
      <ul id="navlist" class="nav navbar-primary navbar-nav pull-md-right">
          <li class="nav-item">
              <a class="a1 nav-link" aria-expanded="false" href="home.php">
                  Inicio

              </a>
              <!--[if gte IE 7]><!--><!--<![endif]--><!--[if lte IE 6]>
              <table>
                  <tr>
                      <td>
                          <![endif]-->



                          <!--[if lte IE 6]>
                      </td>
                  </tr>
              </table>
              </a><![endif]-->
          </li>


          <li class="nav-item">
              <a class="a1 nav-link" aria-expanded="false" href="my-tesis.php">
                  Mis Tesis

              </a>
              <!--[if gte IE 7]><!--><!--<![endif]--><!--[if lte IE 6]>
              <table>
                  <tr>
                      <td>
                          <![endif]-->



                          <!--[if lte IE 6]>
                      </td>
                  </tr>
              </table>
              </a><![endif]-->
          </li>
          <li class="nav-item">
              <a class="a1 nav-link" aria-expanded="false" href="solicitudes.php">
                  Solicitudes

              </a>
              <!--[if gte IE 7]><!--><!--<![endif]--><!--[if lte IE 6]>
              <table>
                  <tr>
                      <td>
                          <![endif]-->



                          <!--[if lte IE 6]>
                      </td>
                  </tr>
              </table>
              </a><![endif]-->
          </li>
          <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo ucwords(strtolower($atributos['givenName'][0])); ?>
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Mi Perfil</a>
              <a class="dropdown-item" href="assets/federacion/logout.php">Cerrar Sesión</a>
            </div>
         </li>

      </ul>
  </div>
</nav>
