@extends ('app')

@section('content')

 <!-- Quote Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-success text-uppercase">Formulario de contacto</h5>
                    <h1 class="mb-0">Contacto</h1>
                </div>
                <div class="row gx-3">
                    <!--
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="fa fa-reply text-success me-3"></i>Reply within 24 hours
                        </h5>
                    </div>
                    -->
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="fa fa-phone-alt text-dark me-3"></i>Soporte</h5>
                    </div>
                </div>
                <p class="mb-4"></p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="d-flex align-items-center justify-content-center rounded" id="color-empresa"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2"></h5>
                        <h4 class="text-success mb-0">+56990320634</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="rounded h-100 d-flex align-items-center p-5 wow zoomIn" id="color-empresa"
                    data-wow-delay="0.9s">
                    <form>
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input type="text" class="form-control bg-light border-0"
                                    placeholder="Nombre" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0"
                                    placeholder="Correo" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <select class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Seleccione el servicio</option>
                                    <option value="1">Desarrollo de sofware</option>
                                    <option value="2">Marketing redes sociales</option>
                                    <option value="3">Soporte</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3 text-white" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->
<!-- Back to Top -->
<a href="#spinner" class="btn btn-lg btn-lg-square rounded back-to-top" id="color-empresa"><i
        class="bi bi-arrow-up text-white"></i></a>

</div>

@endsection