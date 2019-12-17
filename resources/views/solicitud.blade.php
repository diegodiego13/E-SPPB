<h1 class="h2 mb-2" style="font-weight: bold; color: royalblue">Gestión de usuarios</h1>

<div class="mb-4" style="border-radius: 10px 10px; padding: 10px; background-color:royalblue; color: white;">
    <h2 class="h4 mb-2" style="font-weight: bold">Listar usuarios</h2>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam praesentium, cum et labore provident possimus
    eligendi ex voluptatibus voluptate, error odit doloremque veritatis asperiores fuga repudiandae repellendus unde
    maxime fugit.
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
                        <th>Respuesta</th>
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
                        <th>Respuesta</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($soli as $user)
                    <tr>
                        <td>{{ $user->nombre}}</td>
                        <td>{{ $user->apellidos }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->fecha }}</td>
                        <td>{{ $user->profesion }}</td>
                        <td>{{ $user->institucion }}</td>
                        <td>
                            <a href="{{ route('ver',$user->id)}}"><button class="btn btn-success"> Ver</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
