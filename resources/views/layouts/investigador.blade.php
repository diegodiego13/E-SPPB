@section('content')

<div class="container-fluid" id="changeContent">

{{-- * Configuración de variables; dentro de está opción se despliegan las opciones de agregar
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
</div> --}}
<div id='content1' style='display:none'>
hola
</div>
<div id='content2' style='display:none'>
    
              <!-- Page Heading -->
    <h1 class="h2 mb-2" style="font-weight: bold; color: royalblue">Gestión de usuarios</h1>
    
    <div class="mb-4" style="border-radius: 10px 10px; padding: 10px; background-color:royalblue; color: white;">
        <h2 class="h4 mb-2" style="font-weight: bold">Listar usuarios</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam praesentium, cum et labore provident possimus eligendi ex voluptatibus voluptate, error odit doloremque veritatis asperiores fuga repudiandae repellendus unde maxime fugit.
    </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de solicitud de usuarios</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>E-mail</th>
                      <th>Fecha de Nacimiento</th>
                      <th>Profesión</th>
                      <th>Institución</th>
                      <th>Motivo</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>E-mail</th>
                      <th>Fecha de Nacimiento</th>
                      <th>Profesión</th>
                      <th>Institución</th>
                      <th>Motivo</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->nombre }}</td>
                            <td>{{ $user->apellidos }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->fecha }}</td>
                            <td>{{ $user->profesion }}</td>
                            <td>{{ $user->institucion }}</td>
                            <td>{{ $user->motivo }}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>


</div>
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
            <span>Configurar variables</span>
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
            <span>Gestionar plataformas</span>
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

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Configurar gráficos</span>
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

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
            aria-expanded="true" aria-controls="collapseUsers">
            <i class="fas fa-fw fa-cog"></i>
            <span> Gestionar usuarios</span>
        </a>
        <div id="collapseUsers" class="collapse" data-parent="#accordionSidebar">
                {{-- aria-labelledby="headingTwo"  --}}
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Componentes:</h6>
                <a class="collapse-item"  href="#">Agregar usuario</a>
                <a class="collapse-item"  href="#">Editar usuario</a>
                <a class="collapse-item"  href="#" onclick="loadContent(1)">Eliminar usuario</a>
                <a class="collapse-item"  href="#" onclick="loadContent(2)">Listar usuarios</a>
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

<script>
    function loadContent(indice){
        if(indice== 1){
            document.getElementById('content1').style.display='block';
            document.getElementById('content2').style.display='none';
        }
        if(indice== 2){
            document.getElementById('content2').style.display='block';
            document.getElementById('content1').style.display='none';
        }
    }

</script>
