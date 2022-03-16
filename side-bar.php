<div class="col-auto col-md-3  col-lg-2  col-xl-2 px-sm-2 px-0   side-bar">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2  min-vh-100">
          <h3 class="border-start border-info border-5 fw-bold  chadow fs-5 text-dark fs-3  d-flex "> E-C<span
              class="d-none d-sm-block ">lasse</span> </h3>

          <div class="d-inline-flex flex-column  justify-content-center row">

            <img class="logoo rounded-circle  d-none d-sm-block mt-4" src="InShot_20210224_213135139.jpg " alt="logo">

            <div class="paragraph ">
              <p class="fs-6 fw-bold mb-1 text-center text-dark   d-none d-sm-block "><?php echo $_SESSION["username"]; ?></p>
              <p class="fs-5 f text-center text-info  d-none d-sm-block">Admin</p>
            </div>

          </div>

          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start List_ ">
            <li class=" nav-item ">
              <a href="dash.php" class="nav-link align-middle px-0">
                <i class="fas fa-home text-dark"></i> <span class="ms-1 d-none d-sm-inline text-dark  ">Home</span>
              </a>
            </li>
            <li class="nav-item   ">
              <a href="courss.php" class="nav-link align-middle px-0 ">
                <i class="far fa-bookmark text-dark"></i><span class="ms-1 d-none d-sm-inline text-dark ">Course</span>
              </a>
            </li>
            <li class="nav-item   ">
              <a href="Listt_Student.php" class="nav-link align-middle px-0 ">
                <i class="fas fa-graduation-cap text-dark"></i> <span
                  class="ms-1 d-none d-sm-inline text-dark ">Students</span>
              </a>
            </li>
            <li class="nav-item   ">
              <a href="payment.php" class="nav-link align-middle px-0 ">
                <i class="fas fa-dollar-sign text-dark"></i><span
                  class="ms-1 d-none d-sm-inline text-dark ">Payment</span>
              </a>
            </li>
            <li class="nav-item   ">
              <a href="#" class="nav-link align-middle px-0 ">
                <i class="fal fa-file-chart-line text-dark"></i> <span
                  class="ms-1 d-none d-sm-inline text-dark ">Report</span>
              </a>
            </li>
            <li class="nav-item   ">
              <a href="#" class="nav-link align-middle px-0 ">
                <i class="fas fa-sliders-h text-dark"></i><span
                  class="ms-1 d-none d-sm-inline text-dark ">Setting</span>
              </a>
            </li>
          </ul>
          <!--********************************************** LOGOUT **********************************************-->
          <div class="Logout">
            <a href="logout.php" class="nav-link align-middle px-0 ">
              <span class="ms-1 d-none d-sm-inline text-dark fs-5 mp-5 ">Logout </span> <i
                class="fas fa-sign-out-alt text-dark"></i>
            </a>
          </div>

        </div>
      </div>