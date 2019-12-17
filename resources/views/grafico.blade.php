
<div class="row">
    <!-- Bar column Chart -->
    <div class="col-xl-12 col-lg-12">
        <center>
            <!-- Bar row Chart -->
            <div class="card shadow mb-4">
                <div class="pt-2 pr-1">
                    <center>
                        @if ($grafico==11)
                            <div id="Hrow5" style="height: 500px;"></div>
                        @endif
                        
                    </center>
                </div>
            </div>
        </center>
    </div>
</div>

<a  href="{{ route('map') }}">
    <button  class="btn btn-blue" >Regresar</button> 
</a> 

@if ($grafico==11)
    <div id="consulta_11" data-user=@json($consulta_11)></div>
@endif