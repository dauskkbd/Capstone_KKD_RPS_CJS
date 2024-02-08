<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 100;
        box-shadow: 5px 5px 10px #8C564A;
        background: #A69F92;
        /* Adjust the z-index based on your needs */
        
    }

    #name {
        margin-right: 10px
    }


    


</style>

<script>

</script>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg  w-100 nav-color">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Toggle button -->
        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="/images/Roll.png" height="60" alt="MDB Logo" loading="lazy" />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item" id="n1">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item" id="n2">
                    <a class="nav-link" href="/shop">Shop</a>
                </li>
                <li class="nav-item" id="n3">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item" id="n4">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">

            <!-- Notifications -->
            <div class="dropdown">
                <a data-mdb-dropdown-init class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Notification</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Messages</a>
                    </li>
                </ul>
            </div>
            <div id="name">
                <strong>{{Session::get('first_name')}} {{Session::get('last_name')}}</strong>
            </div>
            <!-- Avatar -->
            
            <div class="dropdown">
                
                <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="50" alt="Black and White Portrait of a Man" loading="lazy" />
                </a>
                
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                        <a class="dropdown-item" href="/profile">My profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/register">Register</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->