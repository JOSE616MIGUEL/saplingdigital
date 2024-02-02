<div class="sidebar-menu">
    <ul class="menu">
        <li class='sidebar-title'>Main Menu</li>
        <li class="sidebar-item active ">
            <a href="{{ route('dashboard') }}" class='sidebar-link text-dark'>
                <i data-feather="home" width="20"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link text-dark'>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px">
                    <path d="M0 80C0 53.5 21.5 32 48 32h96c26.5 0 48 21.5 48 48V96H384V80c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H432c-26.5 0-48-21.5-48-48V160H192v16c0 1.7-.1 3.4-.3 5L272 288h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H272c-26.5 0-48-21.5-48-48V336c0-1.7 .1-3.4 .3-5L144 224H48c-26.5 0-48-21.5-48-48V80z"/>
                </svg>
                <span>Projecto</span>
            </a>
            <ul class="submenu ">
                <li>
                    <a href="#">Crear un proyecto</a>
                </li>
                <li>
                    <a href="#">Listado de projectos</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link text-dark'>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20px" height="20px">
                    <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/>
                </svg>                
                <span>Clientes</span>
            </a>
            <ul class="submenu ">
                <li>
                    <a href="#">Ingresar cliente</a>
                </li>
                <li>
                    <a href="#">Listado de clientes</a>
                </li>
            </ul>
        </li>
        <li class='sidebar-title'>---- &amp; ----</li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link text-dark'>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="20px" height="20px">
                    <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                </svg>
                <span>Colaborador</span>
            </a>
            <ul class="submenu ">

                <li>
                    <a href="#">Ingresar colaborador</a>
                </li>

                <li>
                    <a href="#">Listado de colaboradores</a>
                </li>
            </ul>
        </li>
        <!--     
        <li class="sidebar-item  ">

            <a href="form-layout.html" class='sidebar-link'>
                <i data-feather="layout" width="20"></i>
                <span>Form Layout</span>
            </a>
        </li>
        <li class="sidebar-item  ">
            <a href="form-editor.html" class='sidebar-link'>
                <i data-feather="layers" width="20"></i>
                <span>Form Editor</span>
            </a>
        </li>
        <li class="sidebar-item  ">

            <a href="table.html" class='sidebar-link'>
                <i data-feather="grid" width="20"></i>
                <span>Table</span>
            </a>
        </li>
        <li class="sidebar-item  ">

            <a href="table-datatable.html" class='sidebar-link'>
                <i data-feather="file-plus" width="20"></i>
                <span>Datatable</span>
            </a>
        </li>
        <li class='sidebar-title'>Extra UI</li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="user" width="20"></i>
                <span>Widgets</span>
            </a>
            <ul class="submenu ">
                <li>
                    <a href="ui-chatbox.html">Chatbox</a>
                </li>
                <li>
                    <a href="ui-pricing.html">Pricing</a>
                </li>
                <li>
                    <a href="ui-todolist.html">To-do List</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="trending-up" width="20"></i>
                <span>Charts</span>
            </a>
            <ul class="submenu ">
                <li>
                    <a href="ui-chart-chartjs.html">ChartJS</a>
                </li>
                <li>
                    <a href="ui-chart-apexchart.html">Apexchart</a>
                </li>
            </ul>
        </li>
        <li class='sidebar-title'>Pages</li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="user" width="20"></i>
                <span>Authentication</span>
            </a>
            <ul class="submenu ">
                <li>
                    <a href="auth-login.html">Login</a>
                </li>
                <li>
                    <a href="auth-register.html">Register</a>
                </li>
                <li>
                    <a href="auth-forgot-password.html">Forgot Password</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="alert-circle" width="20"></i>
                <span>Errors</span>
            </a>
            <ul class="submenu ">
                <li>
                    <a href="error-403.html">403</a>
                </li>
                <li>
                    <a href="error-404.html">404</a>
                </li>
                <li>
                    <a href="error-500.html">500</a>
                </li>
            </ul>
        </li>
        -->
    </ul>
</div>
