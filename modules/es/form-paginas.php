<section class="contact" id="contact">
    <div class="info bg-gray pt-80 pb-80" style="background:#fff;">
        <div class="container">
            <h6 class="sub-title">Contáctanos</h6>
            <h2 class="mb-20 playfont">Saber más sobre NALMIA</h2>
            <p>
                ¿Estás listo para saber más sobre NALMIA Villas? Estaremos encantados de ayudarte. Por favor, completa
                el formulario a continuación y un representante se pondrá en contacto contigo en breve.
            </p>
            <div class="row contacto-index" style="margin-bottom: -2rem;">
                <div class="col-md-6">
                    <img src="/img/50.jpg" alt="" style="margin-bottom: 2rem;">
                </div>
                <div class="col-lg-6 form" style="padding: 0;">
                    <form method="post" action="/php/contactEsp.php">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="form-group">
                                <input id="form_name" type="text" name="nombre" placeholder="Nombre * "
                                    required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_email" type="email" name="mail" placeholder="Correo *"
                                    required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_name" type="text" name="tel" placeholder="Teléfono *"
                                    required="required">
                            </div>

                            <div class="form-group">
                                <textarea id="form_message" name="msj" placeholder="Mensaje * " rows="4"
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