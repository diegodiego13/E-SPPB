   <!-- Page Heading -->
<h1 class="h2 mb-2" style="font-weight: bold; color: royalblue">Gestión de usuraios</h1>

<div class="mb-4" style="border-radius: 10px 10px; padding: 10px; background-color:royalblue; color: white;">
    <h2 class="h4 mb-2" style="font-weight: bold">Registrar usuario</h2>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam praesentium, cum et labore provident possimus
    eligendi ex voluptatibus voluptate, error odit doloremque veritatis asperiores fuga repudiandae repellendus unde
    maxime fugit.
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <form method="POST" action="{{ route('formAdd') }}">
                
            @csrf
            <div class="form-group md-form mb-2">
                <div class="input-group">

                    <label class="sr-only" for="name">Nombre</label>
                    <input id="name" type="text" class="form-control mr-1"
                    style="border-top-left-radius:6px;
                    border-bottom-left-radius:6px;
                    color:black;" 
                    placeholder="Nombre" name="name" value="{{ old('name') }}" required>

                    <label class="sr-only" for="apellido">Apellidos</label>
                    <input id="apellido" type="text" class="form-control" 
                    style="color:black;"
                    placeholder="Apellidos" name="apellido" value="{{ old('apellido') }}"required>
                </div>
            </div>
            

            <div class="md-form mb-2">
                
                <label class="sr-only" for="email">E-mail</label>
                <input id="email" type="email" class="form-control" 
                style="color:black;"
                placeholder="E-mail" name="email" value="{{ old('email') }}" required >
            </div>

            <div class="md-form mb-2">
                <i class="far fa-calendar" style="color:#3E3E3E"aria-hidden="true"></i>
                <label for="date" style="color:#3E3E3E">Fecha de Nacimiento</label>
                <input id="date" type="date" class="form-control" style="color:black;" name="date" 
                value="{{ old('date') }}" required>
            </div>

             <div class="md-form mb-2">
                <label class="sr-only" for="profesion">Profesión</label>
                <input id="profesion" type="text" class="form-control" 
                style="color:black;"
                placeholder="Profesión" name="profesion" 
                value="{{ old('profesion') }}" required>
            </div>

            <div class="md-form mb-2">
                <label class="sr-only" for="institucion">Institución</label>
                <input id="institucion" type="text" class="form-control" 
                style="color:black;"
                placeholder="Institución" name="institucion" 
                value="{{ old('institucion') }}" required>
            </div>

            <div class="md-form mb-2">
                <select name="rol" required>
                <option value="Especialista">Especialista</option>
                <option value="Investigador" selected>Investigador</option>
                </select>
            </div>

            <div >
                <button type="submit" class="btn btn-success" >
                    {{-- <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-white-400"></i> --}}
                    Registrar
                </button>    
                                            
            </div>
        
        </form>        
    </div>
</div>

{{-- ------------------------------------------ --}}



{{-- <div class="modal fade" id="message" tabindex="-1" role="dialog" 
    aria-hidden="true" aria-labelledby="message">
        
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width:80%; left:10%">
            <div class="modal-header text-center" style="background-color:#4e73df">
                
                <div class="modal-title w-100 font-weight-bold text-white" style="font-size: 25px;" id="myModalLabel">Registro</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div> --}}


{{-- @endif --}}

<!-- Registrado-->
<div class="modal fade" id="regis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    @if (isset($errorEmail))
                        Error en el registro
                    @else
                        Registrado correctamente
                    @endif
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                @if (isset($errorEmail))
                    El usuario no se ha podido registrar, el correo pertenece a un usuario que ya se encuentra registrado.
                @else
                    El usuario se ha registrado correctamente, pronto se le enviara el usuario y contraseña al correo.
                @endif
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="button" data-dismiss="modal" >Aceptar</button>
                
            </div>
        </div>
    </div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
@if (isset($add))

    <script>                    
        $(document).ready(function()
        {
            $("#regis").modal("show");
        });
    </script>                                                
@endif  