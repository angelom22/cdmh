@extends('layouts.app')

@section('content')

<!-- Header-->
@include('layouts.menu-2')
<!-- End Header-->


<!-- Google Map -->
<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125573.64452024593!2d-66.84346966733693!3d10.407561188952231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2af78c0e633dd3%3A0x634852002b1e0351!2sEl%20Hatillo%2C%201083%2C%20Miranda!5e0!3m2!1ses!2sve!4v1581993647164!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
<!-- End Google Map -->

<!-- Section Area - Content Central -->
<section class="content-info">

    <div class="container">
        <div class="row paddings-mini">
            <!-- Left Content -->
            <div class="col-md-4">
                <aside class="panel-box">
                    <div class="titles no-margin">
                        <h4>Oficinas</h4>
                    </div>
                    <div class="info-panel">
                        <address>
                            <strong>El Hatillo, los naranjos.</strong><br>
                            <i class="fa fa-map-marker"></i><strong>Dirrección: </strong>Estado Miranda, Municipio el Hatillo, Avenida Este 3 de los Naranjos<br>
                            <i class="fa fa-phone"></i> <abbr title="Phone">Cel:</abbr> <a href="https://api.whatsapp.com/send?phone=584168384486" target="_blank"> +58 (0416) 838-44-86</a>
                            <br>
                            <i class="fa fa-phone"></i> <abbr title="Phone">Cel:</abbr> <a href="https://api.whatsapp.com/send?phone=584242919556" target="_blank"> +58 (0424) 291-95-56</a>
                        </address>
                    </div>
                </aside>

                <aside class="panel-box">
                    <div class="titles no-margin">
                        <h4>Correo de Contacto</h4>
                    </div>
                    <div class="info-panel">
                        <address>
                            <i class="fa fa-envelope"></i><strong>Correo:</strong><a href="mailto:#"> info@cdmh.com</a><br>
                            <i class="fa fa-envelope"></i><strong>Correo:</strong><a href="mailto:#"> comunicaciones@cdmh.com</a>
                        </address>
                    </div>
                </aside>
            </div>
            <!-- End Left Content -->

            <!-- Right Content -->
            <div class="col-md-8">
                <div class="panel-box">
                    <div class="titles no-margin">
                        <h4>Formulario Contacto</h4>
                    </div>
                    <div class="info-panel">
                        <!-- Form Contact -->
                        <form class="form-theme" action="php/send-mail.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Su Nombre *</label>
                                    <input type="text" required="required" value="" maxlength="100" class="form-control" name="Name" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label>Su Correo Electronico*</label>
                                    <input type="email" required="required" value="" maxlength="100" class="form-control" name="Email" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Asunto *</label>
                                    <input type="text" required="required" value="" maxlength="100" class="form-control" name="Email" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Comentario *</label>
                                    <textarea maxlength="5000" rows="10" class="form-control" name="message" style="height: 138px;" required="required"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Enviar Mensaje" class="btn btn-lg btn-primary">
                                </div>
                            </div>
                        </form>
                        <!-- End Form Contact -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Right Content -->
        </div>
    </div>

    <!-- Newsletter -->
    @include('secciones.suscripcion')
    <!-- End Newsletter -->

</section>
<!-- End Section Area -  Content Central -->

@include('secciones.siguenosInstagram')

@endsection
