<header class="main-header">
  <style type="text/css">
      .Latas{
        width: 38px;
        height: 38px;
      }
  </style>
    <!-- Logo -->
    <a href="/" class="logo">
      <span class="logo-mini"><img src="{{url('L1.png')}}" class="Latas" alt="User Image"></span>
      <span class="logo-lg"><img src="{{url('L1.png')}}" class="Latas" alt="User Image"> TEMAN KONBIS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- MESSAGE -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span id="coba2" class="label label-success">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Kamu memiliki 2 pesan</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img id="coba" src="{{url('merah.png')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Peringatan
                        <small><i class="fa fa-clock-o"></i> 5 Menit</small>
                      </h4>
                      <p>SP No. 8509 Sisa 7 Hari</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img id="coba1" src="{{url('kuning.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Peringatan
                        <small><i class="fa fa-clock-o"></i> 2 Jam</small>
                      </h4>
                      <p>SP No. 899 Sisa 38 Hari</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!--<li class="footer"><a href="#">See All Messages</a></li>-->
            </ul>
          </li>

          <!-- User Account: style can be found in dropdown.less -->

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                <p>
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>