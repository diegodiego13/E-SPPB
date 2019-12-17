   <!-- Page Heading -->
<h1 class="h2 mb-2" style="font-weight: bold; color: royalblue">Historia Clínica</h1>

<div class="mb-4" style="border-radius: 10px 10px; padding: 10px; background-color:royalblue; color: white;">
    Ingese la cédula del paciente para consultar su historia clinica.
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <form method="GET" action="{{ route('cedula') }}">
            <label class="sr-only" for="cedPac">Nombre</label>
            <input 
                id="cedPac" 
                type="text" 
                class="form-control mr-1"
                style="border-top-left-radius:6px;
                    border-bottom-left-radius:6px;
                    color:black;" 
                placeholder="Cédula del paciente" 
                name="cedula" 
                required
            >
            <br>
            <button type="submit" class="btn btn-success" >
                {{-- <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-white-400"></i> --}}
                Consultar
            </button>  
        </form>
    </div>  
</div>
<br>
@if (isset($cedul))
<div class="row">
    <div class="col-xl-12 col-lg-12 ">
    {{$cedul}}
    </div>  
</div>
@endif
      