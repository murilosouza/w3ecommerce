<?php if(!class_exists('Rain\Tpl')){exit;}?><body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="/views-src/store/images/loading.gif" alt="#" /></div>
    </div>

    <div class="wrapper">

        <!-- end loader -->
        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="index.html">Início</a>
                    </li>
                    <li>
                        <a href="#brand">Marcas</a>
                    </li>
                    <li>
                        <a href="#clothes">Vestuário</a>
                    </li>
                    <li>
                        <a href="#shoes">Calçados</a>
                    </li>
                    <li>
                    <li>
                        <a href="#jewellery">Acessórios</a>
                    </li>
                    <li>
                        <a href="#jewellery">Perfumes</a>
                    </li>
                    <li>
                        <a href="#kids">Infantil</a>
                    </li>
                </ul>

            </nav>
        </div>

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="head_top">
                    <div class="header">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-3 logo_section">
                                    <div class="full">
                                        <div class="center-desk">
                                            <div class="logo">
                                                <a href="index.html"><img src="/views-src/store/images/logo.png" alt="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="right_header_info">
                                        <ul>
                                            <!--<li class="menu_iconb">
                                                <a href="#"><i class="fa fa-phone"></i>+51 99521-5615</a>
                                            </li> -->
                                            <li class="menu_iconb">
                                                <a href="#">Entrar <i class="fas fa-sign-in-alt"></i></a>
                                            </li>
                                            <!--<li class="menu_iconb">
                                                <a href="#">Criar Conta <i class="fas fa-user-plus"></i></a>
                                            </li>-->
                                            <li class="tytyu">
                                                <a href="#">Carrinho <i class="fas fa-shopping-cart"></i></a>
                                            </li>
                                            <li class="menu_iconb">
                                                <a href="#">Buscar <i class="fas fa-search"></i></a>
                                            </li>

                                            <li>
                                                <button type="button" id="sidebarCollapse">
                                                    Menu <i class="fas fa-bars"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end header inner -->

                    <!-- end header -->
                    <section class="slider_section">
                        <div class="banner_main">
                            <div class="container-fluid padding3">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mapimg">
                                        <div class="text-bg">
                                            <h1>Os <br>
                                        Mel<br>
                                         hor<br>
                                        es</h1>
                                            <span>Produtos & Marcas</span>
                                            <a href="#">Compre agora!</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="container">
                                                        <div class="carousel-caption text">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="img_bg">
                                                                        <figure><img src="/views-src/store/images/cap.png" /></figure>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container">
                                                        <div class="carousel-caption text">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="img_bg">
                                                                        <figure><img src="/views-src/store/images/cap.png" /></figure>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container">
                                                        <div class="carousel-caption text">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="img_bg">
                                                                        <figure><img src="/views-src/store/images/cap.png" /></figure>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </header>
            <!-- Categories -->
            <div class="Categories">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2> Categorias</h2>
                                <ul class="categiri">
                                    <li class="active"><a href="#">Vestuário</a></li>
                                    <li><a href="#shoes">Calçados</a></li>
                                    <li><a href="#jewellery">Acessórios</a></li>
                                    <li><a href="#">Perfumes</a></li>
                                    <li><a href="#kids">Infantil</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- news brand -->
                    <div id="brand"  class="brand-bg">
                        <h3>Novidade em Vestuário</h3>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="brand-box">
                                    <h5>Novidade</h5>
                                    <i><img src="/views-src/store/icon/p1.png"/>
                                </i>
                                    <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                                <a class="buynow" href="#">Compre agora</a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="brand-box">
                                    <i><img src="/views-src/store/icon/p2.png"/></i>
                                    <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                                <a class="buynow" href="#">Compre agora</a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="brand-box">
                                    <i><img src="/views-src/store/icon/p1.png"/></i>
                                    <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                                <a class="buynow" href="#">Compre agora</a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="brand-box">
                                    <i><img src="/views-src/store/icon/p4.png"/></i>
                                    <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                                <a class="buynow" href="#">Compre agora!</a>
                            </div>
                        </div>
                    </div>
                    <a class="seemore" href="#">Informações</a>
                    <!-- end news brand -->

                    <!-- news shoes -->
                    <div id="shoes" class="shoes-bg">
                        <h3>Novidades em Calçados</h3>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="shoes-box">
                                    <h5>Lançamento</h5>
                                    <i><img src="/views-src/store/icon/s1.png"/>
                                </i>
                                    <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                                <a class="buynow" href="#">Compre agora</a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="shoes-box">
                                    <i><img src="/views-src/store/icon/s2.png"/></i>
                                    <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                                <a class="buynow" href="#">Compre agora!</a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="shoes-box">
                                    <i><img src="/views-src/store/icon/s3.png"/></i>
                                    <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                                <a class="buynow" href="#">Compre agora</a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="shoes-box">
                                    <i><img src="/views-src/store/icon/s4.png"/></i>
                                    <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                                <a class="buynow" href="#">Compre agora</a>
                            </div>
                        </div>
                    </div>
                    <a class="seemore" href="#">Informações</a>
                </div>

            </div>
        </div>
        <!-- end news shoes -->
 
    <!-- end Categories -->
    
    <section>
        <!--  save -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="save">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="save_box">
                                <h3>Descontos de até 50%</h3>
                                <a href="#">Compre agora!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end save -->
    </section>

    <!-- news Jewellery -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="jewellery" class="Jewellery-bg">
                    <h3>Novidades em Acessórios</h3>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="Jewellery-box">
                                <h5>Sale</h5>
                                <i><img src="/views-src/store/icon/j1.png"/>
                                </i>
                                <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                                <a class="buynow" href="#">Compre agora</a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="Jewellery-box">
                                <i><img src="/views-src/store/icon/j2.png"/></i>
                                <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                                <a class="buynow" href="#">Compre agora</a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="Jewellery-box">
                                <i><img src="/views-src/store/icon/j3.png"/></i>
                                <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                                <a class="buynow" href="#">Compre agora</a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="Jewellery-box">
                                <i><img src="/views-src/store/icon/j4.png"/></i>
                                <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                                <a class="buynow" href="#">Compre agora</a>
                        </div>
                    </div>
                </div>
                <a class="seemore" href="#">Informações</a>
            </div>
        </div>
    </div>
    <!-- end news Jewellery -->

    <!-- news Kids -->
    <div id="kids" class="Kids_background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="Kids-bg">
                        <h3>Infantil</h3>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="Kids-box">

                                    <i><img src="/views-src/store/icon/k1.png"/>
                                </i>
                                    <h4>R$<span class="nolmal">100,00</span></h4>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="Kids-box">
                                    <i><img src="/views-src/store/icon/k1.png"/></i>
                                    <h4>R$<span class="nolmal">100,00</span></h4>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="Kids-box">
                                    <i><img src="/views-src/store/icon/k1.png"/></i>
                                    <h4>R$<span class="nolmal">100,00</span></h4>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="Kids-box">
                                    <i><img src="/views-src/store/icon/k1.png"/></i>
                                    <h4>R$<span class="nolmal">100,00</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end news Kids -->
