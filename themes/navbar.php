<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="?page=home"><img src="themes/images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="?page=home"><img src="themes/images/logo-mini.svg"
                alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <i class="input-group-text border-0 mdi mdi-magnify"></i>
                    </div>
                    <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
                </div>
            </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false">
                    <div class="nav-profile-img">
                        <img src="themes/images/faces/face28.png" alt="image">
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black"> <?= ucfirst($_SESSION['user']->prenom); ?>
                        </p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm"
                    aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                    <div class="p-3 text-center bg-primary">
                        <img class="img-avatar img-avatar48 img-avatar-thumb" src="themes/images/faces/face28.png"
                            alt="">
                    </div>
                    <div class="p-2">
                        <!-- <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                            href="?page=profil">
                            <span>Profile</span>
                            <span class="p-0"> -->
                        <!-- <span class="badge badge-success">1</span> -->
                        <!-- <i class="mdi mdi-account-outline ml-1"></i>
                            </span>
                        </a> -->
                        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                            href="?page=logout">
                            <span>Deconnexion</span>
                            <i class="mdi mdi-logout ml-1"></i>
                        </a>
                    </div>
                </div>
            </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>