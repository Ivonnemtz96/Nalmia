<section class="contact" id="contact">
    <div class="info bg-gray pt-80 pb-80" style="background:#fff;">
        <div class="container">
            <h6 class="sub-title">Contáctanos</h6>
            <h2 class="mb-20 playfont">Descargue el folleto de Nalmia</h2>
            <p>
                ¿Está listo para saber más sobre NALMIA Villas? Rellene el siguiente formulario para descargar nuestro
                folleto con planos, precios y mucho más. <br>
                Un miembro del equipo NALMIA se pondrá en contacto con usted en breve.
            </p>
            <div class="row contacto-index" style="margin-bottom: -2rem;">
                <div class="col-md-6">
                    <img src="/img/50.jpg" alt="" style="margin-bottom: 2rem;">
                </div>
                <div class="col-lg-6 form" style="padding: 0;">
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
                                            <label for="phone-number-country" class="floating">Teléfono *</label>
                                            <input style="height: 2.6rem;" class="form-control" id="phone_number"
                                                name="phone_number" type="tel" required autocomplete="off">
                                            <input type="hidden" id="phone_number_full" name="phone_number_full" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="form_message" name="msj" placeholder="Message * " rows="4"
                                    required="required"></textarea>
                            </div>
                            <div class="row " style="margin-bottom: 3rem; margin-top:3rem;">
                                <div class="col-12 col-md-12">
                                    <div class="g-recaptcha" data-sitekey="6Lf92OAfAAAAAEy9m8sf2kbU0ojkdDs5CNOnaNYS"
                                        required></div>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn-curve btn-color"><span>Enviar</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>