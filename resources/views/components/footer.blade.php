<footer class="bg-matcha pt-5">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <img
                            src="{{ asset('assets/images/Logo-bco.png') }}"
                            alt=""
                            class="img-fluid logo-footer"
                        />
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                            <div class="menu-footer text-center">
                                <h4>Menú</h4>
                                <a href="" class="a_none_style">
                                    <p>Inicio</p>
                                </a>
                                <a href="" class="a_none_style">
                                    <p>Quiénes somos</p>
                                </a>
                                <a href="" class="a_none_style">
                                    <p>Nuestros Servicios</p>
                                </a>
                                <a href="" class="a_none_style">
                                    <p>Cotiza</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                            <div class="text-center ">
                                <a
                                    href="https://api.whatsapp.com/send?phone=523343376587"
                                    class="a_none_style"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <p class="mb-4">
                                        <img src="{{ asset('assets/images/icon-whatsapp.svg') }}" alt="" class="img-fluid social-media-color"/>
                                        (33) 4337 6587
                                    </p>
                                </a>

                                <a
                                    href="https://maps.app.goo.gl/gt6c1qUPSzMrvTMF7"
                                    class="a_none_style"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <p class="mb-4">
                                        <img src="{{ asset('assets/images/icon-location.svg') }}" alt="" class="img-fluid location-img"/>
                                        Juan Kepler #4047 Col. Arboledas
                                    </p>
                                </a>
                                <a
                                    href="mailto:kai.studio.gdl@gmail.com"
                                    class="a_none_style"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <p>
                                        <img src="{{ asset('assets/images/icon-mail.svg') }}" alt="" class="img-fluid social-media-color"/>
                                        kai.studio.gdl@gmail.com
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                            <div class=" py-5 text-center">
                                <a
                                    href="https://www.facebook.com/profile.php?id=61582345722944"
                                    class="a_none_style"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                <img src="{{ asset('assets/images/icon-facebook.svg') }}" alt="" class="img-fluid social-media-color me-3"/>
                                </a>
                                <a
                                    href="https://www.instagram.com/kai.studio.gdl?igsh=NXZjY3pmNDRkZ2ph"
                                    class="a_none_style"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <img src="{{ asset('assets/images/icon-instagram.svg') }}" alt="" class="img-fluid social-media-color me-3"/>
                                </a>
                                <a
                                    href="https://maps.app.goo.gl/gt6c1qUPSzMrvTMF7"
                                    class="a_none_style"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <img src="{{ asset('assets/images/icon-location.svg') }}" alt="" class="img-fluid location-img"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3 text-center legal">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="">
                                <a href="{{ route('aviso-privacidad') }}" class="a_none_style"><p>Términos y Condiciones</p></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4"><a href="{{ route('politicas-cookies') }}" class="a_none_style"><p>Cookies</p></a></div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4"><a href="{{ route('terminos-condiciones') }}" class="a_none_style"><p>Aviso de Privacidad</p></a></div>
                    </div>
                    <div class="text-center">
                        <p>©<?php echo date("Y"); ?> Kai. Todos los derechos reservados.</p>
                    </div>
                </div>

            </div>
             <a href="https://api.whatsapp.com/send?phone=523343376587"
                class="whatsapp-float" target="_blank" rel="noopener">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png"
                        alt="WhatsApp" id="whatsapp-logo"/>
                <div class="notification">3</div>
            </a>
        </footer>
