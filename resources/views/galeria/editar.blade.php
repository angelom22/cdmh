@extends('layouts.app')


@section('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="/css/select2/css/select2.css">
    <link rel="stylesheet" href="/css/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- DropZone -->
    <link rel="stylesheet" href="/css/dropzone/min/dropzone.min.css">
     <!-- BS Stepper -->
    <link rel="stylesheet" href="/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- DateRangePicker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">

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
            <h4>CREAR GALERIA</h4>
        </div>

        <div class="info-panel">

            <form action="{{route('galeria.update', $galerium)}}" class="form-horizontal padding-top-mini" method="post" enctype="multipart/form-data" files="true">

                @method('patch')
                @csrf

                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Carga de imagenes</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                                <!-- your steps here -->
                                <div class="step" data-target="#logins-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Editar Galería</span>
                                </button>
                                </div>

                                

                            </div>
                           
                            <div class="bs-stepper-content">
                                <!-- your steps content here -->
                                <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                    <div class="form-group {{$errors->has('nombre') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2"><strong>Nombre</strong> </label>
                                        <div class="col-sm-10">
                                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de la galería" required=""  value="{{old('nombre',  $galerium->nombre) }}">
                                            {!! $errors->first('nombre', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('categoria') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2"><strong>Categoría</strong> *</label>
                                        <div class="col-sm-10">
                                            <select class="select2" name="categoria_id" id="categoria_id" tabindex="5">
                                                <!-- <option value="">Seleccione una categorías</option> -->
                                                @foreach($categorias as $categoria)
                                                <option value=" {{$categoria->id }}"
                                                    {{ old('categoria') == $categoria->id ? 'selected' : '' }} >{{$categoria->name}}</option>
                                                @endforeach
                                            </select>
                                            {!! $errors->first('categoria', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('fecha') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2"><strong>Fecha</strong> *</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="date" class="form-control" id="fecha" name="fecha" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask required="" value="{{old('fecha', $galerium->fecha->format('d-m-y') )}}" >
                                            </div>
                                            
                                            {!! $errors->first('fecha', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('categoria') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2"><strong>Status Galería</strong> *</label>
                                        <div class="col-sm-10">
                                            <select class="select2" name="status" id="status" tabindex="5">
                                                <option value="{{$galerium->status}}">{{$galerium->status}}</option>

                                                <option value="BORRADOR">BORRADOR</option>

                                                <option value="PUBLICADO">PUBLICADO</option>
                                            </select>
                                            {!! $errors->first('categoria', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('imagen') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2"><strong>Imagenes</strong> *</label>
                                        <div class="col-sm-10">
                                            <!-- <input name="file" type="file" multiple /> -->
                                            <div class="dropzone"></div>
                                            <!-- <input type="file" id="file" name="file" multiple value="{{old('file')}}"> -->
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('video') ? 'has-error' : ''}}">
                                        <label class="control-label col-sm-2"><strong>URL Video</strong> </label>
                                        <div class="col-sm-10">
                                            <input type="text" id="video" name="video" class="form-control" placeholder="URL del video completo" value="{{old('video')}}">
                                            {!! $errors->first('video', '<span class="alert-danger">:message</span>') !!}
                                        </div>
                                    </div>

                                    <a class="btn btn-primary" href="{{route('galeria.index', $galerium )}}">Anterior</a>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>

                                </div>



                            </div>
                            </div>
                        </div>
                        
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->

            </form>

            <div class="row">
                @foreach($galerium->imagen as $imagen)
                <div class="col-md-4">
                <form action="{{route('fotos.destory', $imagen)}}" method="POST">
                @method('delete')
                @csrf
                        <button class="btn btn-danger btn-xs" style="position:absolute"><i class="fa fa-remove"></i></button>
                        <img class="img-responsive" src="{{ url($imagen->url) }}" alt="">
                    </form>
                </div>
                @endforeach
            </div>
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

<!-- DateRangePicker -->
<script src="/plugins/daterangepicker/daterangepicker.js"></script>


<script>


$(function () {

    //Initialize Select2 Elements
    $('.select2').select2({
        theme: 'bootstrap4'
    });

    //Datemask dd/mm/yyyy
    $('#fecha').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })

});

   

    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    });

    // Dropzone
    var myDropzone =  new Dropzone('.dropzone', {
        url:'/galeria/{{ $galerium->id }}/imagen',
        paramName: 'file',
        acceptedFiles: 'image/*',
        maxFilesize: 2,
        maxFiles: 10,
        headers:{
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
        dictDefaultMessage: 'Arrastre las imagenes aqui para subirlas',
    });

    myDropzone.on('error', function(file, res){
        console.log(res.file[0]);
        var msg = res.file[0];
        $('.dz-error-message:last > span').text(msg)
    });

    Dropzone.autoDiscover = false;


</script>



@endsection

