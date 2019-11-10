@extends('layouts.app')

{{-- @section('title','Inicio') --}}

@section('content')
{{-- Hello Diego --}}

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2" style="font-weight: bold; color: royalblue">Dashboard</h1>
    
    <div class="mb-4" style="border-radius: 10px 10px; padding: 10px; background-color:royalblue; color: white;">
        <h2 class="h4 mb-2" style="font-weight: bold">Aspectos sociodemográficos</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam praesentium, cum et labore provident possimus eligendi ex voluptatibus voluptate, error odit doloremque veritatis asperiores fuga repudiandae repellendus unde maxime fugit.
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Bar column Chart -->
        <div class="col-xl-4 col-lg-6">
            <center>
            <!-- Bar row Chart -->
            <div class="card shadow mb-4">
                <div class="pt-2 pr-1">
                    <center><div id="Hcolumn1" style="height: 400px;"></div></center>
                </div>
            </div>
            </center>
            
        </div>
        
        <div class="col-xl-4 col-lg-6">
            <center>
            <!-- Bar row Chart -->
            <div class="card shadow mb-4">
                <div class="pt-2 pr-1">
                    <center><div id="Hrow1" style="height: 400px;"></div></center>
                </div>
            </div>
            </center>

        </div>

        <div class="col-xl-4 col-lg-6">
            <center>
            <!-- Pie Chart -->
            <div class="card shadow mb-4">
                <div class="pt-2 pr-1">
                    <center><div id="Hpie1" style="height: 400px;"></div></center>
                </div>
            </div>
            </center>

        </div>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Bar column Chart -->
        <div class="col-xl-4 col-lg-6">
            <center>
            <!-- Bar row Chart -->
            <div class="card shadow mb-4">
                <div class="pt-2 pr-1">
                    <center><div id="Hdispersion1" style="height: 400px;"></div></center>
                </div>
            </div>
            </center>
            
        </div>
        
        <div class="col-xl-4 col-lg-6">
            <center>
            <!-- Bar row Chart -->
            <div class="card shadow mb-4">
                <div class="pt-2 pr-1">
                    {{-- <center><div id="Hrow1" style="height: 400px;"></div></center> --}}
                </div>
            </div>
            </center>

        </div>

        <div class="col-xl-4 col-lg-6">
            <center>
            <!-- Pie Chart -->
            <div class="card shadow mb-4">
                <div class="pt-2 pr-1">
                    {{-- <center><div id="Hpie1" style="height: 400px;"></div></center> --}}
                </div>
            </div>
            </center>

        </div>

    </div>


    <hr class="sidebar-divider">



    <!-- Nav Item - ViewMore Collapse Menu -->
    <li class="nav-item  navbar-nav dropdown">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseV"
            aria-expanded="true" aria-controls="collapseV">
            {{-- <i class="fas fa-fw fa-folder"></i> --}}
            <span>Ver más &nbsp;</span>
            <i class="fa fa-angle-down"></i>
        </a>
        <div id="collapseV" class="collapse"  data-parent="#accordionSidebar">
    
            <div class="bg-white py-2 collapse-inner">

                <!-- Nav Item - ViewSD Collapse Menu -->
                <div class="nav-item  navbar-nav dropdown">
                        
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSD"
                        aria-expanded="true" aria-controls="collapseSD">
                        {{-- <i class="fas fa-fw fa-folder"></i> --}}
                        <span>Aspectos sociodemográficos &nbsp;</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div id="collapseSD" class="collapse"  data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner">
                            contenido 1
                        </div>
                    </div>
                </div>
                {{-- end --}}

                <!-- Nav Item - ViewSD Collapse Menu -->
                <div class="nav-item  navbar-nav dropdown">
                        
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCon"
                        aria-expanded="true" aria-controls="collapseCon">
                        {{-- <i class="fas fa-fw fa-folder"></i> --}}
                        <span>Conducta &nbsp;</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div id="collapseCon" class="collapse"  data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner">
                            contenido 2
                        </div>
                    </div>
                </div>
                {{-- end --}}

                <!-- Nav Item - ViewSD Collapse Menu -->
                <div class="nav-item  navbar-nav dropdown">
                        
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCM"
                        aria-expanded="true" aria-controls="collapseCM">
                        {{-- <i class="fas fa-fw fa-folder"></i> --}}
                        <span>Condiciones médicas&nbsp;</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div id="collapseCM" class="collapse"  data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner">
                            contenido 3
                        </div>
                    </div>
                </div>
                {{-- end --}}

                <!-- Nav Item - ViewSD Collapse Menu -->
                <div class="nav-item  navbar-nav dropdown">
                        
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMAS"
                        aria-expanded="true" aria-controls="collapseMAS">
                        {{-- <i class="fas fa-fw fa-folder"></i> --}}
                        <span>Medio ambiente social &nbsp;</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div id="collapseMAS" class="collapse"  data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner">
                            contenido 4
                        </div>
                    </div>
                </div>
                {{-- end --}}

                <!-- Nav Item - ViewSD Collapse Menu -->
                <div class="nav-item  navbar-nav dropdown">
                        
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVF"
                        aria-expanded="true" aria-controls="collapseVF">
                        {{-- <i class="fas fa-fw fa-folder"></i> --}}
                        <span>Valoración funcional &nbsp;</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div id="collapseVF" class="collapse"  data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner">
                            contenido 5
                        </div>
                    </div>
                </div>
                {{-- end --}}

            </div>
        </div>
    </li>


<hr class="sidebar-divider">
    {{-- <div class="mb-4" style="border-radius: 10px 10px; padding: 10px; background-color:royalblue; color: white;">
        <h2 class="h4 mb-2" style="font-weight: bold">Aspectos sociodemográficos</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam praesentium, cum et labore provident possimus eligendi ex voluptatibus voluptate, error odit doloremque veritatis asperiores fuga repudiandae repellendus unde maxime fugit.
    </div> --}}

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div id="user_data" data-user=@json($aspD)></div>
<div id="gd_1" data-user=@json($g2)></div>
{{-- {{$aspD}} --}}
{{-- {{$g2}} --}}

@endsection
