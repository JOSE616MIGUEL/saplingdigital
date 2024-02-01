@extends ('app')

@section('content')
    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="shadow d-flex align-items-center justify-content-center p-4" id="color-empresa"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-success"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Clientes</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="shadow d-flex align-items-center justify-content-center p-4" id="color-empresa"
                        style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;" id="color-empresa">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Projectos realizados</h5>
                            <h1 class="mb-0 text-white" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;"
                        id="color-empresa">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-success"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Comentarios</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-success text-uppercase">Nosotros</h5>
                        <h1 class="mb-0">Entregamos soluciones tecnológicas</h1>
                    </div>
                    <p class="mb-4">La empresa de desarrollo de software aspira a convertirse en líder en la creación de
                        soluciones tecnológicas innovadoras que impulsen el crecimiento y la transformación digital de sus
                        clientes. Nos comprometemos con la excelencia en el servicio al cliente, buscando establecer
                        relaciones sólidas y duraderas. Ofrecemos asistencia oportuna y personalizada en todas las etapas,
                        desde la implementación hasta el soporte continuo.

                        Con un enfoque en el crecimiento de las pequeñas empresas, proporcionamos asesoría continua sobre
                        diversas necesidades, como sitios web, aplicaciones, software administrativo, diseño gráfico,
                        marketing digital y publicidad, entre otros. Nuestra capacidad para ofrecer soluciones de vanguardia
                        aborda eficientemente los desafíos empresariales.

                        Constantemente buscamos mejorar y perfeccionar nuestros productos y servicios para satisfacer las
                        necesidades en constante evolución de nuestros clientes. No obstante, también aceptamos los desafíos
                        asociados con grandes empresas, brindando un servicio personalizado y acompañándote en todo el
                        desarrollo de tu proyecto. Creamos presupuestos a medida para optimizar tus recursos.

                        Contamos con un equipo dedicado para el acompañamiento continuo de tu proyecto. En el caso de
                        grandes empresas, aceptamos el desafío, desarrollando un equipo multidisciplinario capaz de
                        adaptarse a tu proyecto. Realizamos las pruebas necesarias para garantizar el correcto
                        funcionamiento de las funciones, logrando resultados de calidad en nuestros productos software.
                    </p>
                    <!--
                                                  <div class="row g-0 mb-3">
                                <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                    <h5 class="mb-3"><i class="fa fa-check text-success me-3"></i>Award Winning</h5>
                                    <h5 class="mb-3"><i class="fa fa-check text-success me-3"></i>Professional Staff
                                    </h5>
                                </div>
                                <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                    <h5 class="mb-3"><i class="fa fa-check text-success me-3"></i>24/7 Support</h5>
                                    <h5 class="mb-3"><i class="fa fa-check text-success me-3"></i>Fair Prices</h5>
                                </div>
                            </div>
                                       
                                 <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                                <div class="bg-success d-flex align-items-center justify-content-center rounded"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5 class="mb-2">Call to ask any question</h5>
                                    <h4 class="text-success mb-0">+012 345 6789</h4>
                                </div>
                            </div>
                            <a href="quote.html" class="btn btn-success py-3 px-5 mt-3 wow zoomIn"
                                data-wow-delay="0.9s">Request A Quote</a>
                                        -->



                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Features Start
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-success text-uppercase">Why Choose Us</h5>
                        <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                    <div class="bg-success rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h4>Best In Industry</h4>
                                    <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam
                                        dolor</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="bg-success rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h4>Award Winning</h4>
                                    <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam
                                        dolor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                                    src="img/feature.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <div class="bg-success rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-users-cog text-white"></i>
                                    </div>
                                    <h4>Professional Staff</h4>
                                    <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam
                                        dolor</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                    <div class="bg-success rounded d-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </div>
                                    <h4>24/7 Support</h4>
                                    <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam
                                        dolor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-dark text-uppercase">Servicios</h5>
                <h1 class="mb-0">Soluciones de TI Personalizadas para tu Negocio Exitoso</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Seguridad de los datos</h4>
                        <p class="m-0"></p>
                        <a class="btn btn-lg btn-success rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Análisis de los datos</h4>
                        <p class="m-0"></p>
                        <a class="btn btn-lg btn-success rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Desarrollo web</h4>
                        <p class="m-0"></p>
                        <a class="btn btn-lg btn-success rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Desarrollo de aplicaciones</h4>
                        <p class="m-0"></p>
                        <a class="btn btn-lg btn-success rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">Optimización SEO</h4>
                        <p class="m-0"></p>
                        <a class="btn btn-lg btn-success rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5"
                        id="color-empresa">
                        <h3 class="text-white mb-3">Nuestro número de contacto</h3>
                        <p class="text-white mb-3"></p>
                        <h2 class="text-white mb-0">+56990320634</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Pricing Plan Start -->
    <!--
               <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-success text-uppercase">Pricing Plans</h5>
                        <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>
                    </div>
                    <div class="row g-0">
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                            <div class="bg-light rounded">
                                <div class="border-bottom py-4 px-5 mb-4">
                                    <h4 class="text-success mb-1">Basic Plan</h4>
                                    <small class="text-uppercase">For Small Size Business</small>
                                </div>
                                <div class="p-5 pt-0">
                                    <h1 class="display-5 mb-3">
                                        <small class="align-top"
                                            style="font-size: 22px; line-height: 45px;">$</small>49.00<small
                                            class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                            Month</small>
                                    </h1>
                                    <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                            class="fa fa-check text-success pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                            class="fa fa-check text-success pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                            class="fa fa-times text-danger pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i
                                            class="fa fa-times text-danger pt-1"></i></div>
                                    <a href="" class="btn btn-success py-2 px-4 mt-4">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                            <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                                <div class="border-bottom py-4 px-5 mb-4">
                                    <h4 class="text-success mb-1">Standard Plan</h4>
                                    <small class="text-uppercase">For Medium Size Business</small>
                                </div>
                                <div class="p-5 pt-0">
                                    <h1 class="display-5 mb-3">
                                        <small class="align-top"
                                            style="font-size: 22px; line-height: 45px;">$</small>99.00<small
                                            class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                            Month</small>
                                    </h1>
                                    <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                            class="fa fa-check text-success pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                            class="fa fa-check text-success pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                            class="fa fa-check text-success pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i
                                            class="fa fa-times text-danger pt-1"></i></div>
                                    <a href="" class="btn btn-success py-2 px-4 mt-4">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                            <div class="bg-light rounded">
                                <div class="border-bottom py-4 px-5 mb-4">
                                    <h4 class=success mb-1">Advanced Plan</h4>
                                    <small class="text-uppercase">For Large Size Business</small>
                                </div>
                                <div class="p-5 pt-0">
                                    <h1 class="display-5 mb-3">
                                        <small class="align-top"
                                            style="font-size: 22px; line-height: 45px;">$</small>149.00<small
                                            class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                            Month</small>
                                    </h1>
                                    <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                            class="fa fa-check text-success pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                            class="fa fa-check text-success pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                            class="fa fa-check text-success pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i
                                            class="fa fa-check text-success pt-1"></i></div>
                                    <a href="" class="btn btn-success py-2 px-4 mt-4">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
    <!-- Pricing Plan End -->


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
                                    <input type="text" class="form-control bg-light border-0" placeholder="Nombre"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Correo"
                                        style="height: 55px;">
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

    <!--
                  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-success text-uppercase">Testimonio</h5>
                        <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                        <div class="testimonial-item bg-light my-4">
                            <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                <img class="img-fluid rounded" src="img/testimonial-1.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-4">
                                    <h4 class="text-success mb-1">Client Name</h4>
                                    <small class="text-uppercase">Profession</small>
                                </div>
                            </div>
                            <div class="pt-4 pb-5 px-5">
                                Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                                diam
                            </div>
                        </div>
                        <div class="testimonial-item bg-light my-4">
                            <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                <img class="img-fluid rounded" src="img/testimonial-2.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-4">
                                    <h4 class="text-success mb-1">Client Name</h4>
                                    <small class="text-uppercase">Profession</small>
                                </div>
                            </div>
                            <div class="pt-4 pb-5 px-5">
                                Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                                diam
                            </div>
                        </div>
                        <div class="testimonial-item bg-light my-4">
                            <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                <img class="img-fluid rounded" src="img/testimonial-3.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-4">
                                    <h4 class="text-success mb-1">Client Name</h4>
                                    <small class="text-uppercase">Profession</small>
                                </div>
                            </div>
                            <div class="pt-4 pb-5 px-5">
                                Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                                diam
                            </div>
                        </div>
                        <div class="testimonial-item bg-light my-4">
                            <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                <img class="img-fluid rounded" src="img/testimonial-4.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-4">
                                    <h4 class="text-success mb-1">Client Name</h4>
                                    <small class="text-uppercase">Profession</small>
                                </div>
                            </div>
                            <div class="pt-4 pb-5 px-5">
                                Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                                diam
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-success text-uppercase">Team Members</h5>
                        <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                            <div class="team-item bg-light rounded overflow-hidden">
                                <div class="team-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                                    <div class="team-social">
                                        <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i
                                                class="fab fa-twitter fw-normal"></i></a>
                                        <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i
                                                class="fab fa-facebook-f fw-normal"></i></a>
                                        <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i
                                                class="fab fa-instagram fw-normal"></i></a>
                                        <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i
                                                class="fab fa-linkedin-in fw-normal"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-success">Full Name</h4>
                                    <p class="text-uppercase m-0">Designation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                            <div class="team-item bg-light rounded overflow-hidden">
                                <div class="team-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                                    <div class="team-social">
                                        <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i
                                                class="fab fa-twitter fw-normal"></i></a>
                                        <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i
                                                class="fab fa-facebook-f fw-normal"></i></a>
                                        <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i
                                                class="fab fa-instagram fw-normal"></i></a>
                                        <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i
                                                class="fab fa-linkedin-in fw-normal"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-success">Full Name</h4>
                                    <p class="text-uppercase m-0">Designation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                            <div class="team-item bg-light rounded overflow-hidden">
                                <div class="team-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                                    <div class="team-social">
                                        <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i
                                                class="fab fa-twitter fw-normal"></i></a>
                                        <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i
                                                class="fab fa-facebook-f fw-normal"></i></a>
                                        <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i
                                                class="fab fa-instagram fw-normal"></i></a>
                                        <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i
                                                class="fab fa-linkedin-in fw-normal"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-success">Full Name</h4>
                                    <p class="text-uppercase m-0">Designation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

               <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-success text-uppercase">Latest Blog</h5>
                        <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-1.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-success text-white rounded-end mt-5 py-2 px-4"
                                        href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-success me-2"></i>John
                                            Doe</small>
                                        <small><i class="far fa-calendar-alt text-success me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                    <a class="text-uppercase" href="">Read More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-2.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-success text-white rounded-end mt-5 py-2 px-4"
                                        href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-success me-2"></i>John
                                            Doe</small>
                                        <small><i class="far fa-calendar-alt text-success me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                    <a class="text-uppercase" href="">Read More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-3.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-success text-white rounded-end mt-5 py-2 px-4"
                                        href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-success me-2"></i>John
                                            Doe</small>
                                        <small><i class="far fa-calendar-alt text-success me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                    <a class="text-uppercase" href="">Read More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5 mb-5">
                    <div class="bg-white">
                        <div class="owl-carousel vendor-carousel">
                            <img src="img/vendor-1.jpg" alt="">
                            <img src="img/vendor-2.jpg" alt="">
                            <img src="img/vendor-3.jpg" alt="">
                            <img src="img/vendor-4.jpg" alt="">
                            <img src="img/vendor-5.jpg" alt="">
                            <img src="img/vendor-6.jpg" alt="">
                            <img src="img/vendor-7.jpg" alt="">
                            <img src="img/vendor-8.jpg" alt="">
                            <img src="img/vendor-9.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            -->



    <!-- Team Start -->

    <!-- Team End -->


    <!-- Blog Start -->

    <!-- Blog Start -->


    <!-- Vendor Start -->

    <!-- Vendor End -->
@endsection
