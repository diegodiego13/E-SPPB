@section('content')

<div class="container-fluid">
* Configuración de variables; dentro de está opción se despliegan las opciones de agregar
variable, editar variable, eliminar variable, Cantidad de variables a graficar.
<br>
* Gestión de plataformas; al abrir esta lo único que habrá será un label donde estará la URL
de la plataforma de recolección de datos, de tal forma que, si cambia en algún momento,
solo sea cambiar la URL en dicho label y dar guardar y que se almacene en la base de datos
del sistema.
<br>
* Configuración de gráficos; se deben listar los tipos de gráficos que en el sistema se
permitirán visualizar y los que estén seleccionados son los que podrá ver los demás
usuarios.
<br>
* Gestión de usuarios; agregar usuario, editar usuario, eliminar usuario, listar usuarios.
</div>
@endsection

<!-- Sidebar -->
@section('mainMenu')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center" style="justify-content: flex-end;" href="#">
            {{-- justify-content-center --}}
        <div class="sidebar-brand-icon rotate-n-15" >
            <i style="font-size: 15px;">{{ config('app.name') }}</i>
            {{-- class="fas fa-laugh-wink" --}}
        </div   >
        
        <div class="sidebar-brand-text mx-0" style="padding-left: 11px;">
            <img src="/img/logoMain2.png" alt="Logo App" style="width: 200px">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('main') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading" style="color: white">
        {{Auth::user()->rol}}
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" data-parent="#accordionSidebar">
                {{-- aria-labelledby="headingTwo"  --}}
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Componentes:</h6>
                <a class="collapse-item"  href="#">Buttons</a>
                <a class="collapse-item"  href="#">Cards</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" 
            data-parent="#accordionSidebar">
            {{-- aria-labelledby="headingUtilities" --}}
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Componentes:</h6>
                <a class="collapse-item" href="#">Colors</a>
                <a class="collapse-item" href="#">Borders</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <!-- RETURN -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"  aria-labelledby="descriptionMenu"></button>
        <div id="descriptionMenu" style="display: none;">Este boton permite expandir y/o contraer el menu</div>
    </div>

</ul>
@endsection
<!-- End of Sidebar -->