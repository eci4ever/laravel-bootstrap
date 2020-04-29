<aside class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            @can('user_management_access')
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            @endcan
            <li class="nav-item">
                <a class="nav-link active" href="#collapseExample" data-toggle="collapse" aria-expanded="false">
                    <span data-feather="home"></span>
                    <span>Admins</span>
                    <span class="ml-4" data-feather="plus-circle"></span>
                </a>
            </li>
            <div class="collapse" id="collapseExample">
                <li class="nav-item ml-4">
                    <a class="nav-link" href="#">
                        <span class="feather-16" data-feather="circle"></span>
                        Users
                    </a>
                </li>
                <li class="nav-item ml-4">
                    <a class="nav-link" href="#">
                        <span class="feather-16" data-feather="circle"></span>
                        Roles
                    </a>
                </li>
                <li class="nav-item ml-4">
                    <a class="nav-link" href="#">
                        <span class="feather-16" data-feather="circle"></span>
                        Permissions
                    </a>
                </li>
            </div>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="shopping-cart"></span>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2"></span>
                    Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    Integrations
                </a>
            </li>
        </ul>


    </div>
</aside>
