  <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post">
              <h1>Login Form</h1>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" name="ingEmail" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="ingPassword" />
              </div>
              <div>
                <button type="submit" class="btn btn-lg btn-primary">Log in</button>
                
              </div>
                <?php
                  $login = new ControladorAdministradores();
                  $login -> ctrIngresoAdministrador();
                ?>
              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-ship"></i> Bay Moorings | Inventory</h1>
                  <p>©2020 All Rights Reserved Jose Luis Santiago Marquez! . Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>