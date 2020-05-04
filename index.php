<!DOCTYPE html>
<html>

<head>
    <?php include('includes/head_index.php'); ?>
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Menu principal-->
        <header class="main-header">
            <?php include("includes/header_index.php"); ?>
        </header>
        <!--/ Menu principal-->

        <!-- Menú Desplegable para mobiles Inicio -->
        <section class="hidden-bar right-align">

            <div class="hidden-bar-closer">
                <button class="btn"><i class="fa fa-close"></i></button>
            </div>

            <!-- Hidden Bar Wrapper -->
            <div class="hidden-bar-wrapper">

                <!-- .logo -->
                <div class="logo text-center">
                    <a href="index.html"><img src="images/logo-bea.jpg" alt=""></a>
                </div><!-- /.logo -->

                <!-- .Side-menu -->
                <div class="side-menu">
                    <!-- .navigation -->
                    <ul class="navigation">
                        <li><a href="#">Inicio</a>
                        </li>
                        <li><a href="about-us.html">Nosotros</a></li>
                        <li class="dropdown"><a href="#productos">Productos</a>
                            <ul>
                                <li><a href="gallery-three-column.html">Gallery Three Column</a></li>
                                <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                <li><a href="gallery-fullwidth.html">Gallery Fullwidth</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Blog</a>
                            <ul>
                                <li><a href="blog.html">Our Blog</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html">Contactanos</a></li>
                    </ul>
                </div><!-- /.Side-menu -->

                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- / Hidden Bar Wrapper -->
        </section>
        <!-- / Menú Desplegable para mobiles Fin -->

        <!--Slider - Principal-->
        <section class="main-slider" id="scroll-section-one" data-start-height="900" data-slide-overlay="yes">

            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>

                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/banner-1.png" data-saveperformance="off" data-title="Alimentos-BEA">
                            <img src="images/main-slider/banner-1.png" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <div class="tp-caption sfl sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-150" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <h3 class="text-center fuente-title"><strong>Conoce nuestros alimentos <br> 100% funcionales.</strong></h3>
                            </div>

                            <div class="tp-caption sfr sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-70" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <div class="big-text"></div>
                            </div>

                            <div class="tp-caption sfl sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="0" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="#productos" class="theme-btn btn-style-one">Click Aquí!</a></div>

                        </li>
                        <!-- Slider - Principal-->
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/banner-2.png" data-saveperformance="off" data-title="Alimentos-BEA">
                            <img src="images/main-slider/banner-2.png" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-140" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <!-- <figure class="content-image"><img src="images/icons/mexico.png" alt=""></figure> -->
                            </div>

                            <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="-10" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <h3 class="centro fuente-title"><strong>Alimentos BEA preocupados <br>por mejorar tu salud.</strong></h3>
                            </div>

                            <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center" data-voffset="110" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <!-- <a href="shop.html" class="theme-btn btn-style-one">Shop Now</a> &ensp;&ensp; <a href="shop.html" class="theme-btn btn-style-three">Buy Now</a> -->
                            </div>

                        </li>

                        <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/banner-3.png  data-saveperformance=" off" data-title="Alimentos-BEA">
                            <img src="images/main-slider/banner-3.png" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <div class="tp-caption sft sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-140" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <figure class="content-image"><img src="images/icons/mexico.png" alt=""></figure>
                            </div>

                            <div class="tp-caption sft sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-10" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <h3 class="text-center fuente-title"><strong>Conoce los beneficios naturales de la fibra de agave.</strong></h3>
                            </div>

                            <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="110" data-speed="1500" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <!-- <a href="shop.html" class="theme-btn btn-style-one">Shop Now</a> --> &ensp;&ensp;
                                <!-- <a href="shop.html" class="theme-btn btn-style-three">Buy Now</a> -->
                            </div>

                        </li>

                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </section>
        <!--/ Slider - Principal-->

        <!--Seccion-Bienvenidos-->
        <section class="intro-section">
            <div class="inner-part">
                <div class="auto-container">
                    <div class="content-box">
                        <div class="inner-box">
                            <!--Section Title-->
                            <div class="sec-title-one">
                                <h2 class="fuente-title"><strong>Bienvenido a Alimentos Funcionales BEA.</strong></h2>
                            </div>

                            <div class="row clearfix">
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner text-left wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="text">Somos una empresa mexicana enfocada a diseñar, producir y comercializar productos alimenticios de base científico-tecnológico, generando calidad de vida en nuestros consumidores.
                                        </div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner text-right wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="text">Creamos alimentos de base científico-tecnológico, aportando calidad de vida a nuestros consumidores y confianza en nuestros grupos de interés. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Seccion-Bienvenidos-->

        <!--LOGROS 2019 - 2018 -2017 -->
        <section class="about-farm" id="logros">
            <div class="auto-container">
                <!--Section Title-->
                <div class="sec-title-two">
                    <h2 class="fuente-title"><strong>Nuestros Logros</strong></h2>
                </div>

                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-lg-5 col-md-4 col-sm-12 col-xs-12">
                        <figure class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/circle-2.png" alt=""></figure>
                    </div>
                    <!--Column-->
                    <div class="column col-lg-7 col-md-8 col-sm-12 col-xs-12">
                        <div class="tabs-box tabs-style-one">
                            <div class="row clearfix">

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <!--Tab Buttons-->
                                    <ul class="tab-buttons clearfix">
                                        <li class="tab-btn active-btn" data-tab="#tab-two"><span class="txt">2014</span></li>
                                        <li class="tab-btn" data-tab="#tab-three"><span class="txt">2017</span></li>
                                        <li class="tab-btn" data-tab="#tab-four"><span class="txt">2018</span></li>
                                        <li class="tab-btn" data-tab="#tab-five"><span class="txt">2019</span></li>
                                    </ul>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <!--Tabs Content-->
                                    <div class="tabs-content">

                                        <!--Tab / Active Tab-->
                                        <div class="tab active-tab" id="tab-two">
                                            <h3>2014 </h3>
                                            <div class="content">
                                                <p>En 2014, Alimentos BEA se celebró el Convenio de Confidencialidad con la Unidad Politécnica de Desarrollo y la Competitividad Empresarial del Instituto Politécnico Nacional (UPDCE-IPN).</p>
                                                <p>En 2014, Alimentos BEA, participó en el protocolo clínico “Uso de Fructanos de agave para pacientes con síndrome de intestino irritable” en el Instituto de Ciencias Médicas y Nutrición Salvador Zubirán.</p>
                                            </div>

                                        </div>

                                        <!--Tab-->
                                        <div class="tab" id="tab-three">
                                            <h3>2017 </h3>
                                            <div class="content">
                                                <p>En 2017, el proyecto fue candidato para el “Premio Nacional del Emprendedor”, del Instituto Nacional del emprendedor (INADEM) de la Secretaría de Economía (SE).</p>
                                                <p>En 2017, se concluyó el proceso de incubación del proyecto Alimentos BEA, con apoyo del Instituto de Capacitación para el Trabajo del Estado de Morelos (ICATMOR), incubadora acreditada ante el Instituto Nacional del Emprendedor (INADEM) de la Secretaria de Economía (SE)</p>
                                            </div>

                                        </div>

                                        <div class="tab" id="tab-four">
                                            <h3>2018</h3>
                                            <div class="content">
                                                <p>En 2018, obtuvo el primer lugar en la Muestra Nacional de Creatividad Saludable, en la categoría de productos, alimentos y bebidas, durante el evento Food Tech Summit and Expo.</p>

                                            </div>

                                        </div>

                                        <div class="tab" id="tab-five">
                                            <h3>2019</h3>
                                            <div class="content">
                                                <p>En 2019, se firmó el Convenio de Colaboración Académica por el Centro de Desarrollo de Productos Bióticos del Instituto Politécnico Nacional (CeProBi-IPN) y Alimentos Funcionales BEA, S de R L de C V.</p>
                                                <p>En 2019, el IMPI otorgó el título de patente del producto Gelyfun®</p>
                                                <p>En 2019, Alimentos BEA, participó en el proyecto vinculado con el CeProBi -IPN y la Facultad de Nutrición de la UAEM, con el uso de Gelyfun® en población de adultos mayores residentes de asilo en Cuernavaca, Morelos.</p>
                                            </div>
                                            <h5 class="author-name">Alimentos Funcionales BEA</h5>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- / LOGROS 2019 - 2018 -2017 -->

        <!--Seccion agavien y gelyfun-->
        <section class="fluid-section-one">
            <div class="oval-cut"></div>
            <div class="outer-box clearfix">
                <!--Left Column-->
                <div class="left-column">
                    <div class="clearfix">
                        <div class="inner-box">
                            <img src="images/Gelyfun-blanco.png" alt="Gelyfun-blanco.png" width="200px" height="230px">
                            <!-- <h3>Gelyfun</h3> -->
                            <p class="fuente text-g">Gelyfun® es una gelatina patentada adicionada con mezclas de fibra solubles y prebióticas de origen natural.</p>
                            <a href="shop-single.html" class="theme-btn btn-style-three">Producto</a>
                        </div>
                    </div>
                </div>

                <!--Right Column-->
                <div class="right-column">
                    <div class="clearfix">
                        <div class="inner-box">
                            <img src="images/Aga-blanco.png" alt="Aga-blanco.png" width="200px" height="230px">
                            <!-- <h3>Agavien</h3> -->
                            <p class="fuente text-g">Agávien® es una mezcla en polvo de fibras solubles y probióticas, con el beneficio exclusivo de los fructanos (agavinas) de agave.</p>
                            <a href="shop-single.html" class="theme-btn btn-style-three">Producto</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Seccion en balnco -->
        <section class="blanch">
            <div>

            </div>
        </section>
        <!-- / Seccion en blanco -->

        <!--Productos Agavien y Gelyfun-->
        <section class="deal-of-day" id="productos">
            <div class="auto-container">

                <!--Title Box-->
                <div class="title-box">
                    <!-- <h3>Save up to 50 %</h3> -->
                    <!-- <h2>Gelyfun®</h2> -->
                </div>

                <!--Carousel Outer-->
                <div class="carousel-outer">
                    <div class="single-item-carousel">
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="row clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-8 col-sm-7 col-xs-12">
                                    <figure class="image-box"><a href="images/products/geli-2.png" class="lightbox-image"><img src="images/products/geli-2.png" alt=""></a></figure>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-4 col-sm-5 col-xs-12">
                                    <div class="inner title-box">
                                        <h2>Gelyfun</h2>
                                        <div class="price">MXN: $680</div>
                                        <div class="text">Es una gelatina en polvo que se comercializa en cajas con 6 bolsas (2 meses de consumo) de varios sabores: Limón, Piña, Fresa, Uva y Arándano</div>
                                        <div class="options clearfix">
                                            <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="product-gelyfun.html" class="theme-btn shop-btn">Saber Más</a>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%2FGelyfun%2F%23productos%26src%3Dsdkpreparse&amp;src=sdkpreparse"" class=" theme-btn normal-btn"><span class="flaticon-connection"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="row clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-8 col-sm-7 col-xs-12">
                                    <figure class="image-box"><a href="images/products/aga-2.png" class="lightbox-image"><img src="images/products/aga-2.png" alt=""></a></figure>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-4 col-sm-5 col-xs-12">
                                    <div class="inner title-box">
                                        <h2>Agavien</h2>
                                        <!-- <div class="prod-title">Orancic Soup Mix 5004</div> -->
                                        <div class="price">Price: $680</div>
                                        <div class="text">Agávien® es una mezcla de fibras solubles en polvo que se comercializa en frascos de 320 gramos. </div>
                                        <div class="options clearfix">
                                            <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="product-agavien.html" class="theme-btn shop-btn">Saber Más</a>
                                            <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-connection"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- / Productos Agavien y Gelyfun-->

        <!--Nuestro Equipo-->
        <section class="team-section">
            <div class="auto-container">
                <!--Section Title-->
                <div class="sec-title-one">
                    <h2 class="fuente-title"><strong>Nosotros</strong></h2>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <!--Default Team Member-->
                        <div class="default-team-member">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column">
                                    <figure class="image"><a href="#"><img src="images/resource/Brenda.png" alt=""></a></figure>
                                </div>
                                <!--Content Column-->
                                <div class="content-column">
                                    <div class="inner">
                                        <h3>Dr. Brenda Camacho</h3>
                                        <div class="text">Las personas que consumen Gelyfun® y Agávien® mejoraron sus evacuaciones y pasan de tener una por semana hasta tres evacuaciones por día.</div>
                                        <div class="social-links">
                                            <a href="#"><span class="fa fa-facebook-official"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-instagram"></span></a>
                                            <a href="#"><span class="fa fa-skype"></span></a>
                                            <a href="#"><span class="fa fa-vimeo-square"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Default Team Member-->
                        <div class="default-team-member alternate">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column">
                                    <figure class="image"><a href="#"><img src="images/resource/Investigadores.png" alt=""></a></figure>
                                </div>
                                <!--Content Column-->
                                <div class="content-column">
                                    <div class="inner">
                                        <h3>Investigadores</h3>
                                        <div class="text">El extracto probiótico del agave ayuda en el tratamiento del síndrome de colon irritable mejor conocido como colitis ayudando a los pacientes a mejorar su calidad de vida.</div>
                                        <div class="social-links">
                                            <a href="#"><span class="fa fa-facebook-official"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-instagram"></span></a>
                                            <a href="#"><span class="fa fa-skype"></span></a>
                                            <a href="#"><span class="fa fa-vimeo-square"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <!--Default Team Member / Vertical-->
                        <div class="default-team-member vertical">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column">
                                    <figure class="image"><a href="#"><img src="images/resource/Eden.png" alt=""></a></figure>
                                </div>
                                <!--Content Column-->
                                <div class="content-column">
                                    <div class="inner">
                                        <h3>DR. Eden Saavedra</h3>
                                        <div class="text">Los productos de Alimentos Funcionales BEA han ayudado a muchas personas a resolver y aliviar los malestares provocados por padecimientos digestivos mejorando notablemente estos síntomas.</div>
                                        <div class="social-links">
                                            <a href="#"><span class="fa fa-facebook-official"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-instagram"></span></a>
                                            <a href="#"><span class="fa fa-skype"></span></a>
                                            <a href="#"><span class="fa fa-vimeo-square"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- / Nuestro Equipo-->

        <!--Testimoniales-->
        <section class="testimonial-section">

            <div class="oval-cut"></div>

            <div class="auto-container">
                <div class="carousel-outer">

                    <!-- <h3>Save up to 50 %</h3> -->
                    <h4 class="known">¿Sabias Qué?</h4>
                    <!-- <div class="icon-box"><span class="flaticon-blocks-with-angled-cuts"></span></div> -->

                    <div class="single-item-carousel">
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="quote-info">
                                <figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/img01.1.png" alt=""></figure>
                                <h5 class="fuente">Asociación Mexicana de Gastroenterología</h5>
                                <div class="designation">CEO / Founder</div>
                            </div>
                            <div class="text-content">
                                <p class="fuente">El síndrome del intestino irritable, mejor conocido como colitis y el estreñimiento son dos de los trastornos funcionales intestinales más comunes en la población mexicana.</p>
                            </div>

                        </div>

                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="quote-info">
                                <figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/img01.1.png" alt=""></figure>
                                <h5 class="fuente">Asociación Mexicana de Gastroenterología</h5>
                                <div class="designation">CEO / Founder</div>
                            </div>
                            <div class="text-content">
                                <p class="fuente">En 2016, la colitis en México, llegó a afectar hasta el 35 % de la población, mientras que el estreñimiento afecto hasta el 22% de la población según datos de la Asociación Mexicana de Gastroenterología, en 2018.</p>
                            </div>
                        </div>
                        <!--Slide Item-->
                        <div class="slide-item">

                            <div class="quote-info">
                                <figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/B1.png" alt=""></figure>
                                <h5 class="fuente">Bea Alimentos</h5>
                                <div class="designation">CEO / Founder</div>
                            </div>
                            <div class="text-content">
                                <p class="fuente">Gelyfun® y Agávien® están incluidas en las medidas higiénico-dietética, sin los efectos secundarios del tratamiento farmacológico de acuerdo con lo informado por la Secretaría de Salud (SSA) la recomendación diaria de ingesta de fibra es de 30 gramos, sin embargo, también reportó que los adultos en México</p>
                            </div>
                        </div>
                        <div class="slide-item">

                            <div class="quote-info">
                                <figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/OMS-2.png" alt=""></figure>
                                <h5 class="fuente">OMS</h5>
                                <div class="designation">CEO / Founder</div>
                            </div>
                            <div class="text-content">
                                <p class="fuente">El tratamiento inicial recomendada tanto para Colitis como para estreñimiento, es mediante las medidas higiénico dietéticas (no farmacológicas), de no tener resultados positivos, se incluyen los tratamientos farmacológicos entre otros.</p>
                            </div>
                        </div>
                        <div class="slide-item">

                            <div class="quote-info">
                                <figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/sec-1.png" alt=""></figure>
                                <h5 class="fuente">Secretaría de Salud</h5>
                                <div class="designation">CEO / Founder</div>
                            </div>
                            <div class="text-content">
                                <p class="fuente">De acuerdo con lo informado por la Secretaría de Salud (SSA) la recomendación diaria de ingesta de fibra es de 30 gramos, sin embargo, también reportó que los adultos en México</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- / Testimoniales-->

        <!--MARCAS-->
        <section class="sponsors-style-one">
            <div class="auto-container">
                <!--Section Title-->
                <div class="sec-title-one">
                    <h2 class="fuente-title"><strong>Nos Respaldan</strong></h2>
                </div>

                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel">
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/sponsors/COMECYT.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/sponsors/IMPI.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/sponsors/INADEM.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/sponsors/IPN.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/sponsors/SECRETARIA-ECONOMIA .png" alt=""></a></figure>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
        <!-- / MARCAS-->

        <!--Footer-->
        <footer class="main-footer footer-style-one">
            <?php include("includes/footer_index.php"); ?>
        </footer>
        <!-- / Footer-->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

    <?php include("includes/scripts_index.php"); ?>

</body>

</html>