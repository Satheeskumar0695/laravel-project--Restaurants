<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Restaurant Management</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">



        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>
    </head>
    <body class="sb-nav-fixed">
      <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <img src="{{asset('assets/img/company logo.jpeg')}}" alt="" class="h-10 rounded-lg ms-10" />
            {{-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> --}}

            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="{{url('/')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="{{url('admin')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link" href="#" data-toggle="collapse" data-target="#employeeSubmenu" aria-expanded="false">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Employee Management
                            </a>

                            <div class="collapse" id="employeeSubmenu">
                                <a class="nav-link" href="{{url('employee')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Add Employee
                                </a>
                                <a class="nav-link" href="{{url('employee/view')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    View Employee
                                </a>
                                <a class="nav-link" href="{{url('employee/update')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Update and Delete Employee
                                </a>
                            </div>


                            <a class="nav-link" href="#" data-toggle="collapse" data-target="#Submenu" aria-expanded="false">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Menu Management
                            </a>

                            <div class="collapse" id="Submenu">
                                <a class="nav-link" href="{{url('menu')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Add Menu
                                </a>
                                <a class="nav-link" href="{{url('category')}}">
                                 <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Add Category
                                </a>
                                <a class="nav-link" href="{{url('#')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    View Menu
                                </a>
                                <a class="nav-link" href="{{url('#')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Update  and Delete Menu
                                </a>
                            </div>





                                <a class="nav-link" href="#" data-toggle="collapse" data-target="#Suborder" aria-expanded="false">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Order Management
                                </a>

                                <div class="collapse" id="Suborder">
                                    <a class="nav-link" href="{{url('#')}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Dine IN
                                    </a>
                                    <a class="nav-link" href="{{url('#')}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Takeaway
                                    </a>
                                    <a class="nav-link" href="{{url('#')}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Delivery
                                    </a>
                                </div>


                                <a class="nav-link" href="#" data-toggle="collapse" data-target="#Subreservation" aria-expanded="false">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Reservation
                                </a>

                                <div class="collapse" id="Subreservation">
                                    <a class="nav-link" href="{{url('#')}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Table Rerservaton Details
                                    </a>

                                </div>


                                <a class="nav-link" href="#" data-toggle="collapse" data-target="#Subinventary" aria-expanded="false">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Inventory Management
                                </a>

                                <div class="collapse" id="Subinventary">
                                    <a class="nav-link" href="{{url('addinventry')}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Add Products
                                    </a>
                                    <a class="nav-link" href="{{url('view')}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        View Products
                                    </a>
                                    <a class="nav-link" href="{{url('update')}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Update and Delete Products
                                    </a>
                                </div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div> CRM  </a>

                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                            @yield('menu')
                            </div>
                            {{-- <script src="{{asset("assets/js/scripts.js")}}"></script> --}}
                            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
