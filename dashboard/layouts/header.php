<header class="pt-2" style="background-color: #BCABAE">
            <nav class="navbar navbar-expand-lg" style="background-color: #BCABAE">
                <div class="container-fluid" style="background-color: #BCABAE">
                        <a href="" class="navbar-brand">Bienvenido de Nuevo</a>
                        <div class="collapse navbar-collapse justify-content-end">
                            <ul class="navbar-nav">
                                <li class="navbar-item mx-4">
                                    <button type="button" class="btn position-relative">
                                        <i class="bi bi-bell-fill"></i>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                          99+
                                          <span class="visually-hidden">unread messages</span>
                                        </span>
                                      </button>
                                </li>
                                <li class="navbar-item mx-1">
                                    <img style="border:3px solid rgb(8,90,8); width:40px; height:40px; border-radius: 50%;" src="./img/inspectors-2023_01_24_130405@2x.jpg" alt="">
                                </li>
                                <li class="navbar-item dropdown">
                                    <a href="" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $user_data['name'].' '.$user_data['lastp'];?>
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="userDropdown">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i class="bi bi-person-heart"></i>
                                                Perfil</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider"/>
                                        </li>
                                        <li>
                                            <a href="../login.php" class="dropdown-item">
                                                <i class="bi bi-person-walking"></i>
                                                Cerrar Sesion</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
</header>