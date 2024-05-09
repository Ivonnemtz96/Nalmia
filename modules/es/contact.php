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

                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-4 align-content-center">
                                            <label for="" style="margin-right: 1rem;">Teléfono</label>
                                        </div>
                                        <div class="col-md-8 align-content-center">
                                            <div class="form-group" style="background: #f7f7f7;">
                                                <div hidden class="result">Type a phone number</div>
                                                <input type="tel" name="tel" class="phone" required="required"/>
                                                <input required="required" type="hidden" class="full_tel" id="full_tel" name="full_tel" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <textarea id="form_message" name="msj" placeholder="Mensaje * " rows="4"
                                            required="required"></textarea>
                                    </div>

                                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                    <button type="submit" name="submit" class="btn-curve btn-color"><span>Enviar</span></button>
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