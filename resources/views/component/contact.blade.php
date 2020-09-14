<!-- Begin of contact -->
<section data-id="contact" class="section section-page fp-auto-height-responsive section-contact">
    <div class="cover-bg pos-abs size-full bg-img w-100 h-100"
         data-image-src="{{el_url($contact,'contact-background')}}"
         style="background-repeat: no-repeat;
                 background-position: center center;
                 background-size: cover;"></div>
    <div class="cover-bg pos-abs size-full w-100 h-100 bg-cover-gradientradial opacity-9"></div>
    <div class="section-margin anim">
        <div class="g-recaptcha"
             data-sitekey="{{env('RECAPTCHA')}}"
             data-callback="onSubmit"
             data-size="invisible"
            data-badge="bottomleft"
        >
        </div>
        <div class="section-content align-x-center">
            <div class="c-wrapper width-medium">
                <div class="row">
                    <div class="col col-12 col-lg-6">

                        <div class="h-content width-medium">
                            <h2 class="h-title font-title anim-1">
                                {{ el($contact,'contact-title') }}
                            </h2>
                            <br>
                        </div>
                        <div class="content-text anim-2 mb-5">
                            {!! el($contact,'contact-description') !!}
                            <p>
                                <a class="contact-email normalize-font"
                                   href="mailto:{{conval('email')}}">{{conval('email')}}</a>
                            </p>
                            <p>
                                T.
                                <a class="contact-email normalize-font" href="tel:{{phoneval('phone')}}"><span
                                        class="contact-phone">{{conval('phone')}}</span></a>
                            </p>
                            @if(conval('whatsapp'))
                                <p>
                                    WA.
                                    <a class="contact-email normalize-font"
                                       href="https://wa.me/{{conval('whatsapp')}}"><span
                                            class="contact-phone">{{conval('whatsapp')}}</span></a>
                                </p>
                            @endif
                            <p>
                                <span class="contact-address">
                                    {{conval('address')}}
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col col-12 col-lg-6">
                        <!-- Message form-container -->
                        <div class="form-container form-container-contact anim-4">
                            <form class="send_message_form message form" method="post" id="sendMessageToUs">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group name">
                                            <input id="mes-name" name="name" type="text"
                                                   placeholder="Masukan nama anda"
                                                   class="form-control form-control-outline input-full thick form-success-clean"
                                                   required
                                                   aria-required="true">
                                        </div>
                                        <div class="form-group phone">
                                            <input id="mes-phone" type="text" placeholder="Nomor Handphone / Telepon"
                                                   name="phone"
                                                   class="form-control form-control-outline input-full thick form-success-clean"
                                                   required
                                                   aria-required="true">
                                        </div>
                                        <div class="form-group email">
                                            <input id="mes-email" type="email" placeholder="Email address"
                                                   name="email"
                                                   class="form-control form-control-outline input-full thick form-success-clean"
                                                   required
                                                   aria-required="true">
                                        </div>
                                        <div class="form-group no-border">
                                                  <textarea id="mes-text" placeholder="Masukan pesan anda disini ..."
                                                            name="message"
                                                            class="form-control form-control-outline thick form-success-clean"
                                                            required
                                                            aria-required="true"></textarea>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" id="kirimPesan" class="btn btn-line-b email_b"
                                                name="submit_message">
                                            <span class="text text-uppercase">Kirim sekarang</span>
                                            <span class="icon icon-menu icon-arrow-a icon-anim">
                                                    <span class="arrow-right"></span>
                                                  </span>
                                        </button>
                                    </div>
                                    <div>
                                        <p class="form-text-feedback col-12 form-success-visible"
                                           id="sendMessageResponse">
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End of Message form-container -->
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="section-footer section-footer-a d-none d-lg-block ">

        <div class="section-footer section-footer-a d-none d-lg-block ">
            <div class="footer-right mr-4">
                <a class="btn btn-line-b scroll down px-0 py-0 d-none d-lg-block" href="#">
                    <span class="text">Scroll</span>
                    <span class="icon icon-menu icon-arrow-a icon-anim">
              <span class="arrow-up"></span>
            </span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End of contact -->
