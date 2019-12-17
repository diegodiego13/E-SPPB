   <!-- Page Heading -->
<h1 class="h2 mb-2" style="font-weight: bold; color: royalblue">Gestión de usuraios</h1>

<div class="mb-4" style="border-radius: 10px 10px; padding: 10px; background-color:royalblue; color: white;">
    <h2 class="h4 mb-2" style="font-weight: bold">Solicitud</h2>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam praesentium, cum et labore provident possimus
    eligendi ex voluptatibus voluptate, error odit doloremque veritatis asperiores fuga repudiandae repellendus unde
    maxime fugit.
</div>


<div class="mb-4 shadow" style="border-radius: 10px 10px; padding: 10px;">
    <b class="blue">Nombre:</b> {{$ver->nombre}} <br>
    <b class="blue">Apellidos:</b>  {{$ver->apellidos}}<br>
    <b class="blue">E-Mail:</b>  {{$ver->email}}<br>
    <b class="blue">Fecha de nacimiento:</b>  {{$ver->fecha}}<br>
    <b class="blue">Profesión:</b>  {{$ver->profesion}}<br>
    <b class="blue">Institución:</b>  {{$ver->institucion}}<br>
    <b class="blue">Motivo:</b>  {{$ver->motivo}}<br>


    {{-- <div class="md-form mb-2">

        <b class="blue"><label for="rol">Asignar rol:</label></b>
        <select name="rol" required>
        <option value="Especialista" selected>Especialista</option>
        <option value="Investigador" >Investigador</option>
        </select>
    </div>

    <br><br> --}}

    {{-- {{$opcion='Especialista'}} --}}

    <a  href="{{ route('usuarioSolicitud') }}">
        <button  class="btn btn-blue" >Regresar</button> 
    </a> 
    <a href="{{ route('aceptar',$ver->id)}}">
        <button type="submit"  class="btn btn-success" >Aceptar</button>
    </a> 
    <a href="{{ route('rechazar',$ver->id)}}">
        <button  class="btn btn-danger" >Rechazar</button> 
    </a>

    
</div>


