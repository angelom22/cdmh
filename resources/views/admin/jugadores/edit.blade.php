@extends('layouts.app')


@section('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="/css/select2/css/select2.css">
    <link rel="stylesheet" href="/css/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- DropZone -->
    <link rel="stylesheet" href="/css/dropzone/min/dropzone.min.css">
     <!-- BS Stepper -->
    <link rel="stylesheet" href="/plugins/bs-stepper/css/bs-stepper.min.css">
    
@endsection


@section('content')

<!-- menu content -->
@include('layouts.menu-2')
<!-- menu content -->

<!-- Section Area - Content Central -->
<section class="content-info">

<div class="container paddings">
    <!-- Content Text-->
    <div class="panel-box block-form">
        <div class="titles text-center">
            <h4>REGISTRAR JUGADOR</h4>
        </div>

        <div class="info-panel">

            <form action="{{route('JugadorUpdate', $jugador->id)}}" class="form-horizontal padding-top-mini"  method="POST" enctype="multipart/form-data" files="true">
                @method('patch')
                @csrf

                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Formulario para el registro de jugadores por categorías</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                                <!-- your steps here -->
                                <div class="step" data-target="#logins-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Información Personal</span>
                                </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#information-part-2">
                                <button type="button" class="step-trigger" role="tab" aria-controls="information-part-2" id="information-part-2-trigger">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Información Deportiva</span>
                                </button>
                                </div>
                                <!-- <div class="line"></div>
                                <div class="step" data-target="#information-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                    <span class="bs-stepper-circle">3</span>
                                    <span class="bs-stepper-label">Foto Del Atleta</span>
                                </button>
                                </div> -->
                            </div>
                            <div class="bs-stepper-content">
                                <!-- your steps content here -->
                                <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                    <div class="form-group {{$errors->has('nombre') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2">Nombre Completo*</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre completo" required=""  value="{{old('nombre',$jugador->nombre)}}">
                                            {!! $errors->first('nombre', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('fecha_nacimiento') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2">Fecha Nacimiento*</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask required="" value="{{old('fecha_nacimiento', $jugador->fecha_nacimiento )}}"  placeholder="Fecha de nacimiento">
                                            </div>
                                            <!-- <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required="" value="{{old('fecha_nacimiento')}}"> -->
                                            {!! $errors->first('fecha_nacimiento', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('edad') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2">Edad*</label>
                                        <div class="col-sm-10">
                                            <input type="number" id="edad" name="edad" class="form-control" required=""  placeholder="edad" value="{{old('edad',$jugador->edad)}}" data-mask>
                                            {!! $errors->first('edad', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('nacionalidad') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2">Nacionalidad*</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="nacionalidad" name="nacionalidad" class="form-control" required=""  placeholder="nacionalidad" value="{{old('nacionalidad',$jugador->nacionalidad)}}">
                                            {!! $errors->first('nacionalidad', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('telefono') ? 'has-error' : ''}}">
                                        
                                        <label class="control-label col-sm-2">telefono*</label>

                                        <div class="col-sm-10">
                                            
                                            <input type="text" id="telefono" name="telefono" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask required="" value="{{old('telefono',$jugador->telefono)}}" placeholder="telefono de contacto">
                                            {!! $errors->first('telefono', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                        
                                    </div>
                                    <div class="form-group {{$errors->has('sexo') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2">Sexo*</label>
                                        <div class="col-sm-10">
                                            <select id="sexo" name="sexo" class="select2bs4" required="">
                                                <option value="{{$jugador->sexo}}" 
                                                {{ old('sexo', $jugador->sexo ) == $jugador->sexo ? 'disabled' : '' }}    
                                                >{{$jugador->sexo}}</option>
                                                
                                                <option value="hombre">Hombre</option>
                                                <option value="mujer">Mujer</option>
                                            </select>
                                            {!! $errors->first('sexo', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('direccion') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2">Dirección*</label>
                                        <div class="col-sm-10">
                                            <textarea id="direccion" name="direccion" class="form-control" placeholder="dirección">
                                            {{old('direccion',$jugador->direccion)}}
                                            </textarea>
                                            {!! $errors->first('direccion', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('correo') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2">Correo*</label>
                                        <div class="col-sm-10">
                                            <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo Electronico" required="" value="{{old('correo',$jugador->correo)}}">
                                            {!! $errors->first('correo', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" onclick="stepper.next()">Siguiente</button>

                                </div>

                                <div id="information-part-2" class="content" role="tabpanel" aria-labelledby="information-part-2-trigger">
                                    
                                    <div class="form-group {{$errors->has('posicion') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2">Posición*</label>
                                        <div class="col-sm-10">
                                            <select id="posicion" name="posicion" class="select2bs4" required="">
                                                <option value="{{$jugador->posicion}}" 
                                                {{ old('posicion', $jugador->posicion ) == $jugador->posicion ? 'selected' : '' }}    
                                                >{{$jugador->posicion}}</option>
                                                
                                                <option value="Portero">Portero</option>
                                                <option value="Defensa">Defensa</option>
                                                <option value="Medio Campo">Medio Campo</option>
                                                <option value="Delantero">Delantero</option>
                                            </select>
                                            {!! $errors->first('posicion', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('categoria_jugador') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2">Categoría*</label>
                                        <div class="col-sm-10">
                                            <select id="categoria_jugador" name="categoria_jugador" class="select2bs4" required="">
                                                <option value="{{$jugador->categoria_jugador}}" 
                                                {{ old('categoria_jugador', $jugador->categoria_jugador ) == $jugador->categoria_jugador ? 'selected' : '' }}    
                                                >{{$jugador->categoria_jugador}}</option>

                                                <option value="sub12"> sub10-12</option>
                                                <option value="sub14"> sub13-14</option>
                                                <option value="sub15-16">sub15-16</option>
                                                <option value="sub18-19">sub18-19</option>
                                                <option value="sub20-21">sub20-21</option>
                                                <option value="libre">libre</option>
                                                <option value="primera">primera</option>
                                            </select>
                                            {!! $errors->first('categoria_jugador', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group {{$errors->has('partidos') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2">Partidos</label>
                                        <div class="col-sm-10">
                                            <input type="number" id="partidos" name="partidos" class="form-control" placeholder="cantidad de partidos" value="{{old('partidos',$jugador->partidos)}}">
                                            {!! $errors->first('partidos', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('goles') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2">Goles</label>
                                        <div class="col-sm-10">
                                                <input type="number" id="goles" name="goles" class="form-control" placeholder="cantidad de goles" value="{{old('goles',$jugador->goles)}}">
                                            
                                            {!! $errors->first('goles', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('nombre') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2">foto*</label>
                                        <div class="col-sm-10">
                                            <div class="col-sm-5">
                                                <button class="btn btn-danger btn-sm" style="position:absolute"><i class="fas fas-remove"></i>x</button>
                                                <img class="card-img-top img-responsive" src="{{asset('storage/'.$jugador->foto)}}" alt="{{$jugador->nombre}}">
                                            </div>
                                            <div class="col-sm-5">
                                                <!-- <div class="dropzone"> -->
                                                <input type="file" id="file" name="file" value="{{old('file')}}">
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                

                                    <button class="btn btn-primary" onclick="stepper.previous()">Anterior</button>
                                    <button type="submit" class="btn btn-primary">Registrar</button>

                                </div>

                                <!-- <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                    
                                
                            
                                </div> -->
                            </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <p>Complete toda la información necesaria para el registro del atleta</p>
                        </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->

            </form>
        </div>

    </div>
    <!-- End Content Text-->
</div>


</section>
<!-- End Section Area -  Content Central -->

@endsection

@section('js')

<!-- DropZone -->
<script src="/js/dropzone/min/dropzone.min.js"></script>

<!-- Select2 -->
<script src="/js/select2/js/select2.full.js"></script>

<!-- InputMask -->
<script src="/js/moment/moment.min.js"></script>
<script src="/js/inputmask/jquery.inputmask.min.js"></script>

<!-- BS-Stepper -->
<script src="/plugins/bs-stepper/js/bs-stepper.min.js"></script>


<script>
    

$(function () {
    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    
    //Money Euro
    $('[data-mask]').inputmask()


});

    
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // Dropzone
    new Dropzone('.dropzone', {
        url:'/jugador',
        headers:{
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        dictDefaultMessage: 'Arrastre las fotos aqui para subirlas',
        // acceptedFiles: '.jpeg,.jpg,.png,.gif',
        // maxFiles: 1,    
    //     paramName: 'foto',
    });

    myDropzone.on('error', function(file, res){
        console.log(res.file);
        var msg = res.file[0];
        $('.dz-error-message:last > span').text(msg)
    });
    
    Dropzone.autoDiscover = false;


</script>



@endsection

