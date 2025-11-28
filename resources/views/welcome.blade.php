<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="keywords" content="Persianas, Estudios de diseño de interiores, Cortinas, " />
        <meta name="description" content="En Bosques del Paraíso somos un desarrollo inmobiliario en la ciudad de Morelia, con diferentes amenidades, donde tu y tu familia podrán tener una vida en conexión con la naturaleza. " />
        <meta name="author" content="gauri.mx" />
        <meta name="robots" content="index, follow" />
        <title>Kai Studio</title>
        @include('components.head')
    </head>
    <body>
        <header>
            @include('components.navbar')
            <!-- Carousel --->
            <section class="splide" aria-label="Slide Container Example">
                <div class="splide__track">
                    <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <img src="{{ asset('assets/images/carousel-provicional-1.jpg') }}" className="imagen-carrousel"/>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <img src="{{ asset('assets/images/carousel-provicional-1.jpg') }}" className="imagen-carrousel"/>
                        </div>
                    </li>
                    </ul>
                </div>
            </section>
        </header>
        <!-- Quiénes somos -->

        <div class="container py-5" id="somos">
            <div class="row">
                <div class="col-sm-12 col-md-2 col-lg-2 col-12"></div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-12">
                    <div class="welcome-text text-center">
                        <h3 class="mBold">Bienvenidos a Kai</h3>
                        <h4>
                            tu espacio de confort, estilo y decoración para el
                            hogar
                        </h4>
                        <p class="">
                            En Kai transformamos tus ambientes con
                            <b class="mBold"> persianas</b> a medida,
                            <b class="mBold">cortinas</b> modernas,
                            <b class="mBold">pisos SPC </b>
                            de alta durabilidad y
                            <b class="mBold"> pasto sintético </b> de
                            calidad premium, diseñados para crea
                            <b class="mBold">
                                hogares más cómodos, uncionales y llenos de
                                armonía.
                            </b>
                            <b> </b>
                            Nuestro compromiso es ofrecerte soluciones para
                            interiores con
                            <b> </b>
                            <b class="mBold">
                                materiales confiables, instalación precisa y
                                tiempos de entrega rápidos
                            </b>
                            , para que personalizar tus espacios sea una
                            experiencia sencilla y agradable. En Kai cuidamos
                            cada detalle para que tu hogar se sienta auténtico,
                            práctico y tan especial como tú.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2 col-12"></div>
            </div>
        </div>

        <!-- Lo que vendemos -->
        <div class="container py-5" id="servicios">
            <div class="row py-5">
                <div class="mb-5 text-center">
                    <h3 class="mBold tit-products">Nuestros productos</h3>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-12 mb-5">
                    <div class="mx-4">
                        <div class="card-product py-5">
                            <p class="">Papel Tapiz</p>
                            <img
                                src="{{ asset('assets/images/wallpaper-icon.png') }}"
                                alt="Icono de papel tapiz de color blanco"
                                class="img-fluid icon-card"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-12 mb-5">
                    <div class="mx-4">
                        <div class="card-product py-5">
                            <p class="">Cortinas</p>
                            <img
                                src="{{asset('assets/images/curtains-icon.png')}}"
                                alt="Icono de cortinas de color blanco"
                                class="img-fluid icon-card"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-12 mb-5">
                    <div class="mx-4">
                        <div class="card-product py-5">
                            <p class="">Persianas</p>
                            <img
                                src="{{ asset('assets/images/blinds-icon.png')}}"
                                alt="Icono de una persiana de color blanco"
                                class="img-fluid icon-card"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-12 mb-5">
                    <div class="mx-4">
                        <div class="card-product py-5">
                            <p class="">
                                Piso SPC, Vinílico y Autoadherible
                            </p>
                            <img
                                src="{{ asset('assets/images/floor-icon.png') }}"
                                alt="Icono de piso en color blanco"
                                class="img-fluid icon-card"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-12 mb-5">
                    <div class="mx-4">
                        <div class="card-product py-5">
                            <p class="">Pasto Sintético</p>
                            <img
                                src="{{ asset('assets/images/grass-icon.png') }}"
                                alt="Icono de pasto sintético de color blanco"
                                class="img-fluid icon-card"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-12 mb-5">
                    <div class="mx-4">
                        <div class="card-product py-5">
                            <p class="">Lamina de marmól</p>
                            <img
                                src="{{ asset('assets/images/marble-icon.png') }}"
                                alt="Icono de una lamina de marmól de color blanco"
                                class="img-fluid icon-card"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <a class="btn btn-primary btn-quote" href="#cotiza">
                        COTIZA AHORA
                    </a>
                </div>
            </div>
        </div>
        <!-- Los más vendidos-->
        <div class="container py-5">
            <div class="row tit-section-price-product mb-5">
                <h3 class="mBold">Los más vendidos</h3>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 col-12 mb-4">
                    <div class="card width-card">
                        <img
                            src="{{ asset('assets/images/sheer.jpeg') }}"
                            class="card-img-top heigth-image-card"
                            alt="Imagen representativa del producto estrella"
                        />
                        <div class="card-body">
                            <div class="card-product-content">
                                <h1>Persianas Sheer Elegance</h1>
                                <p class="price-card">
                                    $600
                                    <b>
                                        m<sup>2</sup>
                                    </b>
                                </p>
                                <p>Sheer Elegance básica</p>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-primary btn-quote-card" href="#cotiza">
                                    Cotizar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-12 mb-4">
                    <div class="card width-card">
                        <img
                            src="{{ asset('assets/images/enrollable.jpeg') }}"
                            class="card-img-top heigth-image-card"
                            alt="Imagen representativa del producto estrella"
                        />
                        <div class="card-body">
                            <div class="card-product-content">
                                <h1>Persianas Enrollables</h1>
                                <p class="price-card">
                                    $600
                                    <b>
                                        m<sup>2</sup>
                                    </b>
                                </p>
                                <p>Enrollable Screen</p>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-primary btn-quote-card" href="#cotiza">
                                    Cotizar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-12 mb-4">
                    <div class="card width-card">
                        <img
                            src="{{ asset('assets/images/cortinas.jpeg') }}"
                            class="card-img-top heigth-image-card"
                            alt="Imagen representativa del producto estrella"
                        />
                        <div class="card-body">
                            <div class="card-product-content">
                                <h1>Cortinas</h1>
                                <p class="price-card">
                                    $800
                                    <b>m</b>
                                </p>
                                <p>Tela básica</p>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-primary btn-quote-card" href="#cotiza">
                                    Cotizar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--- Descanso visual 1 -->
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-12 mb-5">
                    <img
                        src="{{asset('assets/images/descanso-visual-izquierdo.jpg')}}"
                        alt=""
                        class="img-fluid rounded"
                    />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-12 mb-5">
                    <div class="visual-rest-title">
                        <h2>Detalles que importan</h2>
                        <p>
                            Te mostramos resultados reales de instalaciones
                            donde combinamos calidad, funcionalidad y estilo. En
                            Kai utilizamos materiales resistentes y técnicas
                            profesionales que aseguran persianas y cortinas elegantes y
                            duraderas, perfectas para hogares, oficinas o
                            proyectos de decoración interior.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--- Descanso Viusal 2 -->
        <div class="bg-green py-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-12 mb-5">
                        <div class="visual-rest-title">
                            <h2>Luz a tu medida</h2>
                            <p>
                                En Kai creemos que cada detalle transforma un
                                espacio. Por eso cuidamos cada instalación de
                                persianas y cortinas, desde la elección del
                                material hasta el acabado final. Nuestro equipo
                                experto garantiza resultados limpios, precisos y
                                estéticos que mejoran la atmósfera de cualquier
                                habitación.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-12 mb-5">
                        <div>
                            <img
                                src="{{ asset('assets/images/descanso-visual-derecho.jpg') }}"
                                alt=""
                                class="img-fluid rounded"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulario -->

        <div class="container-fluid" id="cotiza">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-12">
                    <div class="row contact-form">
                        <div class="col-sm-1 col-md-1 col-lg-1 col-1"></div>
                        <div class="col-sm-10 col-md-10 col-lg-10 col-10">
                            <div class="mb-5">
                                <div class="mb-5 text-center">
                                    <h3 class="contact-tit">
                                        ¡Cotiza aquí!
                                    </h3>
                                </div>
                                <form  method="POST" action="{{ route('mail') }}" class="p-3">

                                    @csrf
                                    <div class="row mb-4">
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-12 mb-2">
                                            <label>
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="tengoMedidas"
                                                />
                                                Tengo mis medidas
                                            </label>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 col-12 mb-2">
                                            <label>
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="noTengoMedidas"
                                                />
                                                No tengo mis medidas
                                            </label>
                                        </div>
                                    </div>
                                    <div class=""  >
                                        <div class="row" >
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6" id="tipoProductoDiv" style="display:none;">
                                                <label>¿Qué quieres cotizar?</label>
                                                <select class="form-select"  id="tipoProducto" name="tipoProducto" data-req>
                                                    <option value=""> Selecciona </option>
                                                    <option value="persiana">Persiana</option>
                                                    <option value="cortina">Cortina</option>
                                                    <option value="piso">Piso</option>
                                                    <option value="pasto">Pasto sintético</option>
                                                    <option value="papel">Papel tapiz</option>
                                                </select>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6" id="cantidadDiv" style="display:none;">
                                                <div class="mb-3">
                                                    <label>¿Cuántos quieres cotizar? </label>
                                                   <select id="cantidad" class="form-select"name="cantidad" data-req></select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CAMPOS DINÁMICOS -->
                                    <div id="contenedorCampos"></div>
                                    <!-- CAMPOS SI NO TIENE MEDIDAS -->
                                    <div class="" id="datosCliente"  style="display:none; margin-top:20px;">
                                        <div class="row" >
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-12 mb-3">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control" required id="nombre" name="nombre"/>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-12 mb-3">
                                                <label>Teléfono</label>
                                                <input type="text" class="form-control" required id="telefono" name="telefono"/>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <textarea class="form-control"  id="comentarios" name="comentarios" required></textarea>
                                                    <label>Comentarios</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center" id="btnEnviar" style="display:none; margin-top:20px;">
                                        <button class="btn btn-primary btn-contact" type="submit">Enviar cotización</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-1 col-lg-1 col-1"></div>
                    </div>
                </div>
                @include('components.modalGracias')
                <div class="col-sm-12 col-md-6 col-lg-6 col-12 p-0">
                    <img src="{{ asset('assets/images/cortinas.jpeg') }}" alt="" class="img-fluid" />
                </div>
            </div>
        </div>

        @include('components.footer')
        @include('components.scripts')



    </body>
</html>
