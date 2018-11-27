<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="index.php">CardCloud</a>
        <img src="C:\wamp\www\proyecto 2\trunk\SmartTarget\assets\img
        logo.jpg" alt="">
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Registro
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="alumnos.php">Alumnos</a>
                    <a class="dropdown-item" href="padres.php">Padres</a>
                    <a class="dropdown-item" href="maestros.php">Maestros</a>
                    <a class="dropdown-item" href="escuelaCRUD.php">Escuela</a>
                    <a class="dropdown-item" href="Registro.php">Registro</a>
                    <a class="dropdown-item" href="lista de asistencia.php">Lista de asistencia</a>
                    <a class="dropdown-item" href="r_comportamiento.php">Registro de compotamiento</a>
                    <a class="dropdown-item" href="alertas.php">alerta de conductas</a>
                  </div>
                </li>
                <!-- <li class="nav-item"><a href="Lista.php" class="nav-link">Alumnos</a></li> -->
                <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="dashboard.php" class="nav-link">Maestros</a></li>

                <li class="nav-item"><a href="aboutUs.php" class="nav-link">Sobre nosotros</a></li>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="modal" data-target="#modallogin" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Modal de recuperacionde contraseña -->
<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Forgot password</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Reset your password..</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- modal de login -->
<div id="modallogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Inicio sesion</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
               <form class="form" role="form">
                    <div class="form-group">
                        <input id="email" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                    </div>
                    <div class="form-group">
                        <input id="contrasena" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                    </div>
                    <div class="form-group">
                        <button type="button" onclick="ingresar()" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <div class="form-group text-center">
                        <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
    </div>
</div><br><br><br>