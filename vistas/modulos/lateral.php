 <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php?ruta=inicio" class="site_title"><i class="fa fa-ship"></i> <span>Digital Orca</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <?php echo '<img src= "'.$_SESSION['foto'].'" alt="..." class="img-circle  profile_img">'?>
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['nombre'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php?ruta=inicio"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <!-- <li><a><i class="fa fa-th"></i> Categories <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="">Categories</a></li>
                      <li><a href="">Subcategories</a></li>
                    </ul>
                  </li> -->
                  <li><a href="index.php?ruta=hours"><i class="fa fa-calendar"></i> hours</a>
                  </li>
                  <li><a href="index.php?ruta=profile"><i class="fa fa-user"></i>profile</a>
                  </li>
                </ul>
              </div>
          

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="index.php?ruta=salir">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>