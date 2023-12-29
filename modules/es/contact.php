<header class="pages-header bg-img valign" style="background-position:center bottom !important;"
    data-background="/img/48.jpg" data-overlay-dark="2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Contáctanos</h1>
                    <div class="path">
                        <a href="/">Inicio</a><span>/</span>Contacto
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="contact color-oscuro">
    <div class="info bg-gray pt-80 pb-80" style="background:#fff;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="sub-title">Contáctanos</h6>
                    <h2 class="mb-20 playfont">Descargue el folleto de Nalmia</h2>
                    <p>
                        ¿Está listo para saber más sobre NALMIA Villas? Rellene el siguiente formulario para descargar
                        nuestro
                        folleto con planos, precios y mucho más. <br>
                        Un miembro del equipo NALMIA se pondrá en contacto con usted en breve.
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mt-3 mb-3">
                            <img style="margin-top: 25px;" src="/img/50.jpg" alt="">
                        </div>
                        <div class="col-lg-6  form" style="padding:40px 1%;">
                            <form method="post" action="/php/archivo-esp.php">
                                <div class="messages"></div>
                                <div class="controls">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="nombre" placeholder="Nombre * "
                                            required="required">
                                    </div>

                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="Correo *"
                                            required="required">
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="phone-number-country" class="floating">País</label>
                                                <select class="form-control" id="phone-number-country"
                                                    name="phone-number-country" autocomplete="off"></select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="phone_number">
                                                    <div hidden class="form-control phone_number_prefix"
                                                        id="phone_number_prefix" name="phone_number_prefix">+1</div>
                                                    <label for="phone-number-country" class="floating">Teléfono
                                                        *</label>
                                                    <input style="height: 2.6rem;" class="form-control"
                                                        id="phone_number" name="phone_number" type="tel" required
                                                        autocomplete="off">
                                                    <input type="hidden" id="phone_number_full"
                                                        name="phone_number_full" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <textarea id="form_message" name="msj" placeholder="Mensaje * " rows="4"
                                            required="required"></textarea>
                                    </div>

                                    <div class="row " style="margin-bottom: 3rem; margin-top:3rem;">
                                        <div class="col-12 col-md-12">
                                            <div class="g-recaptcha"
                                                data-sitekey="6Lf92OAfAAAAAEy9m8sf2kbU0ojkdDs5CNOnaNYS" required></div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-curve btn-color"><span>Enviar</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-md-6 d-none d-md-block">
                <img src="/img/51.png?=2" style="width: 35rem;" class="d-none d-md-block" alt="">
            </div>
            <div class="col-md-6 d-block d-md-none" style="left:-1rem">
                <img src="/img/51.png?=2" style="width: 23rem;" class="d-block d-md-none" alt="">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 align-content-center" style="margin-bottom: 2rem;">
                <div class="exp-content nopat wow fadeInUp" data-wow-delay=".3s">
                    <h4 class="mt-20 playfont">Socios</h4>
                    <p>
                        DC Arq : Architect <br>
                        Mexlaw : Lawyer and legal advice <br>
                        De La Torre : Accounting services <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>