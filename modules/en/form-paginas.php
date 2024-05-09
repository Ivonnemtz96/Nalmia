<section class="contact" id="contact">
    <div class="info bg-gray pt-80 pb-80" style="background:#fff;">
        <div class="container">
            <h6 class="sub-title">Contact Us</h6>
            <h2 class="mb-20 playfont">Download the Nalmia Brochure</h2>
            <p>
                Are you ready to learn more about NALMIA Villas?
                Please complete the form below to download our brochure
                with floor plans, price, and much more. <br>
                A NALMIA teammember will be in touch with you shortly.
            </p>
            <div class="row contacto-index" style="margin-bottom: -2rem;">
                <div class="col-md-6">
                    <img src="/img/50.jpg" alt="" style="margin-bottom: 2rem;">
                </div>
                <div class="col-lg-6 form" style="padding: 0;">
                    <form method="post" action="/php/archivo-contacto.php" id="prefijo">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="form-group">
                                <input id="form_name" type="text" name="nombre" placeholder="Name * "
                                    required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="Email *"
                                    required="required">
                            </div>

                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-4 align-content-center">
                                    <label for="" style="margin-right: 1rem;">Phone Number</label>
                                </div>
                                <div class="col-md-8 align-content-center">
                                    <div class="form-group" style="background: #f7f7f7;">
                                        <div hidden class="result">Type a phone number</div>
                                        <input type="tel" name="tel" class="phone" required="required"/>
                                        <input type="hidden" class="full_tel" id="full_tel" name="full_tel" required="required"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea id="form_message" name="msj" placeholder="Message * " rows="4"
                                    required="required"></textarea>
                            </div>
                            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                            <button type="submit" name="submit" class="btn-curve btn-color"><span>Send</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>