<?php

session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <title>Alexandre ADOOLPHE - Developpeur Web Ile de la Réunion</title>
    <meta name="description" content="Developpeur web junior à l'île de la Réunion, je vous présentes mes differents projets ainsi que le moyen de me contacter">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <!-- Font awesomme css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body role="main" data-spy="scroll" data-target="#navbarPc" data-offset="120">

    <!-- debut loader -->
    <div id="loader">
        <div class="col-md-6 offset-md-3 text-center loader_container">
            <h3 class="text-uppercase yellow">alexandreadolphe.com</h3>
            <p class="text-muted">Loading</p>
            <img src="img/loader_icon.svg" alt="loader_icon">
        </div>
    </div>
    <!-- fin loader -->

    <!-- debut header -->
    <header id="header" role="banner">
        <div class="overlay"></div>
        <div class="container text-center mx-auto d-flex flex-column header_content justify-content-center position-relative">
            <h1 class="text-white text-uppercase">Welcome !</h1>
            <div class="d-flex align-items-center justify-content-center flex-wrap">
                <h3 class="text-white text-uppercase">Alexandre ADOLPHE /</h3>
                <h3 class="text-white text-uppercase pl-2">Junior Web - Developer</h3>
            </div>
        </div>
        <div class="container-fluid position-relative slider_content">
            <div id="carouselId" class="carousel slide slider pt-3 pb-3" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active text-center">
                        <h1 class="text-white text-uppercase">I'm <span class="yellow">a passionate</span> coder</h1>
                    </div>
                    <div class="carousel-item text-center">
                        <h1 class="text-white text-uppercase">I'm <span class="yellow">a web</span> developer</h1>
                    </div>
                    <div class="carousel-item text-center">
                        <h1 class="text-white text-uppercase">Thanks to <span class="yellow">simplon</span> reunion</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid scroll_down_container d-flex align-items-center justify-content-center">
            <a id="scrollDown"><i class="fas fa-chevron-down fa-3x text-white"></i></a>
        </div>
    </header>
    <!-- fin header -->
    <main >
        <!-- debut navbar pc -->
        <div class="container-fluid p-0 sticky-top navbar_pc d-none d-sm-none d-md-block d-lg-block d-xl-block">
            <nav class="navbar navbar-expand-md bg-light" id="navbarPc" role="navigation">
                <div class="container">
                    <a class="navbar-brand brand">
                        <img src="img/logo_1.png" alt="logo" width="70" height="50">
                    </a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a id="navHeader" class="nav-link font-weight-bold text-uppercase nav_link_color">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="navAbout" href="#about" class="nav-link font-weight-bold text-uppercase nav_link_color">About</a>
                        </li>
                        <li class="nav-item">
                            <a id="navPortfolio" href="#portfolio" class="nav-link font-weight-bold text-uppercase nav_link_color">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a id="navCourse" href="#parcour" class="nav-link font-weight-bold text-uppercase nav_link_color">Education</a>
                        </li>
                        <li class="nav-item">
                            <a id="navContact" href="#contact" class="nav-link font-weight-bold text-uppercase nav_link_color">Contact</a>
                        </li>
                        <li class="nav-item pl-2 pt-1">
                           <a href="index.php" data-toggle="tooltip" data-placement="bottom" title="French version / Version Française"><img src="img/fr-flag.png" alt="drapeau français" class="img-fluid" width="20" height="20">  </a>          
                        </li>
                        <li class="nav-item pl-2 pt-1">
                            <a href="index-EN.php" data-toggle="tooltip" data-placement="bottom" title="English version / Version Anglaise"><img src="img/us-flag.png" alt="drapeau américain" class="img-fluid" width="20" height="20"></a>        
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- fin navbar-pc -->
        
        <!-- button retour debut -->
        <a href="#home"><div id="go-top" class="text-center fixed-bottom ml-auto my-5 mx-5"><i class="fas fa-caret-up fa-3x text-white"></i></div></a>
        <!-- button retour debut -->

        <!-- debut menu mobile -->
        <div class="container-fluid d-block d-sm-block d-md-none d-lg-none d-xl none sticky-top p-0 navbar-mobile">
            <nav class="navbar navbar-expand-sm bg-light">
                <div id='menuIcon' class="pb-3 pt-3" onclick="transformIconMenu()" data-toggle="collapse" data-target="#menu_mobile_collapse" aria-controls="menu_mobile_collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="bar_1 mt-2 bg-yellow"></div>
                    <div class="bar_2 mt-2 bg-yellow"></div>
                    <div class="bar_3 mt-2 bg-yellow"></div>
                </div>
                <div class="mr-auto pt-2 pl-4">
                    <h1>MENU</h1>
                </div>
                <!-- <a class="navbar-brand brand">
                    <img src="img/logo_1.png" alt="logo" width="70" height="50">
                </a> -->
                <div class="collapse navbar-collapse" id="menu_mobile_collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a id="navHeaderMobile" class="nav-link font-weight-bold text-uppercase nav_link_color">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="navAboutMobile" class="nav-link font-weight-bold text-uppercase nav_link_color">About</a>
                        </li>
                        <li class="nav-item">
                            <a id="navPortfolioMobile" class="nav-link font-weight-bold text-uppercase nav_link_color">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a id="navCoursetMobile" class="nav-link font-weight-bold text-uppercase nav_link_color">Education</a>
                        </li>
                        <li class="nav-item">
                            <a id="navContactMobile" class="nav-link font-weight-bold text-uppercase nav_link_color">Contact</a>
                        </li>
                        <li class="nav-item pl-2 pt-1">
                            <a href="index.php"><img src="img/fr-flag.png" alt="drapeau français" class="img-fluid" width="30" height="30"><span class="nav_link_color pl-2 font-weight-bold ">FR</span></a>          
                        </li>
                        <li class="nav-item pl-2 pt-1">
                            <a href="index-EN.php"><img src="img/us-flag.png" alt="drapeau américain" class="img-fluid" width="30" height="30"><span class="nav_link_color pl-2 font-weight-bold">US</span></a>        
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- fin mobile a faire -->
    
        <!-- debut about -->
        <section id="about">
            <div class="container">
                <div class="col-md-4 offset-md-4 text-center">
                    <h1 id="titleAbout" class="text-uppercase yellow pb-4 pt-4 pl-2 pr-2 font-weight-bold about_title"><i class="fas fa-user"></i> about</h1>
                </div>
                <div class="col-md-6 text-center mx-auto pt-2">
                    <p class="text-muted">
                        I am a 22-year-old man fond of computing and new technologies. 
                        I am currently studying to hopefully become a certified web developer.
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="row pt-5">
                    <article class="col-md-6">
                        <div class="text-center pb-4">
                            <h2 class="text-uppercase yellow font-weight-bold"><i class="fas fa-sync fa-spin mr-2"></i> skills</h2>
                        </div>
                        <div class="row justify-content-around pt-5">
                            <div class="col-12 col-md-3 text-center icon_about">
                                <i class="fab fa-html5 fa-5x yellow"></i>
                                <p class="text-muted pt-3 text-uppercase">
                                    html5
                                </p>  
                            </div>
                            <div class="col-12 col-md-3 text-center icon_about">
                                <i class="fab fa-css3-alt fa-5x yellow"></i>
                                <p class="text-muted pt-3 text-uppercase">
                                    css3
                                    <br>
                                    <span class="yellow"><\></span>
                                    <br>
                                    bootstrap 4
                                </p>
                            </div>
                            <div class="col-12 col-md-3 text-center icon_about">
                                    <i class="fab fa-js yellow fa-5x"></i>
                                    <p class="text-muted pt-3 text-uppercase">
                                        JavaScript
                                        <br>
                                        <span class="yellow"><\></span>
                                        <br>
                                        jquery
                                    </p>  
                                </div>
                                <div class="col-12 col-md-3 text-center icon_about">
                                    <i class="fas fa-database yellow fa-5x"></i>
                                    <p class="text-muted pt-3 text-uppercase">
                                        mysql
                                    </p>
                            </div>
                        </div>
                        <div class="row justify-content-center pt-5 pb-5">
                            <a href="#" class="w-100 text-center">
                                <button class="btn w-25 text-white bg-yellow">Resume</button>
                            </a>
                        </div>
                    </article>
                    <article class=" col-sm-12 offset-sm-0 col-md-5 offset-md-1 text-center">
                        <h2 class="text-uppercase yellow font-weight-bold"><i class="fas fa-list mr-2"></i> experiences</h2>
                        <!-- <div class="d-flex justify-content-around pt-5">
                            <h4 class="font-weight-bold">2018 - ****</h4>
                            <h4 class="font-weight-bold"><span>/*/</span></h4>
                            <h4 class="font-weight-bold">Entreprise</h4>
                        </div>
                        <hr>
                        <p class="text-muted">Contrat Professionalisation - Developpeur Web / Logiciel</p>
                        <hr> -->
                        <div class="d-flex justify-content-around pt-5">
                            <h4 class="font-weight-bold">2015 - 2017</h4>
                            <h4 class="font-weight-bold"><span>/*/</span></h4c>
                            <h4 class="font-weight-bold">AtoutPc's</h4>
                        </div>
                        <hr>
                        <p class="text-muted">Work-linked training Contract - After-Sales Services Technician / Networks Technician</p>
                        <hr>
                    </article>
                </div>
            </div>
        </section>
        <!-- fin about -->
        <!-- debut portfolio -->
        <section id="portfolio">
            <div class="container pt-3 pl-0 pr-0">
                <div class="col-md-4 offset-md-4 text-center pt-5 pb-5 portfolio_title">
                    <h1 class="yellow text-uppercase"><i class="fas fa-clipboard-check"></i> portfolio</h1>
                </div>
                <article class="row m-0">
                    <div class="col-md-4 mt-4">
                        <div class="overlay-img">
                            <img src="img/portfolio_1.jpg" alt="organic web" class="img-fluid">
                            <div class="d-flex align-items-center justify-content-center overlay-text" data-toggle="modal" data-target="#modal_portfolio1">
                                <p class="m-0 mb-2 mr-2">
                                    <i class="text-white fas fa-search-plus fa-lg pt-1"></i>
                                </p>
                                <h3 class="text-white">See More</h3>
                            </div>
                        </div>
                    </div>
                    <!-- debut modal portfolio 1  -->
                    <div class="modal fade" id="modal_portfolio1" tabindex="-1" role="dialog" aria-labelledby="modal_portfolio1_title" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal_portfolio1_title">Organic. Web</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="img/portfolio_1.jpg" alt=" organic web" class="img-fluid">
                                    <div class="pt-4 text-center">
                                        <a class="btn btn-light btn-lg" href="website/OrganicWebBootstrap_Alexandre/index.html" target="_blank" role="button">See The Website</a>
                                        <!-- <a class="btn btn-dark" href="#" role="button">J'aime <i class="far fa-thumbs-up"></i></a> -->
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin modal portfolio 1 -->
                    <div class="col-md-4 mt-4">
                        <div class="overlay-img">
                            <img src="img/portfolio_2.jpg" alt="anne-esthetik.com" class="img-fluid">
                            <div class="d-flex align-items-center justify-content-center overlay-text"data-toggle="modal" data-target="#modal_portfolio2">
                                <p class="m-0 mb-2 mr-2">
                                    <i class="text-white fas fa-search-plus fa-lg"></i>
                                </p>
                                <h3 class="text-white">See More</h3>
                            </div>
                        </div>
                        <!-- debut modal portfolio 2  -->
                        <div class="modal fade" id="modal_portfolio2" tabindex="-1" role="dialog" aria-labelledby="modal_portfolio2_title" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content myModal-content">
                                    <div class="modal-header myModal-header">
                                    <h5 class="text-secondary" id="modal_portfolio2_title">Anne-esthetik.com</h5>
                                    <button type="button" class="close yellow" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/portfolio_2.jpg" alt="anne-esthetik.com" class="img-fluid">
                                        <div class="pt-4 text-center">
                                            <a class="btn btn-light btn-lg" href="https://www.anne-esthetik.com/" target="_blank" role="button">See The Website</a>
                                            <!-- <a class="btn btn-dark" href="#" role="button">J'aime <i class="far fa-thumbs-up"></i></a> -->
                                        </div>
                                    </div>
                                    <div class="modal-footer myModal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin modal portfolio 2 -->
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="overlay-img">
                            <img src="img/portfolio_4.jpg" alt="portfolio_1" class="img-fluid">
                            <div class="d-flex align-items-center justify-content-center overlay-text" data-toggle="modal" data-target="#modal_portfolio3">
                                <p class="m-0 mb-2 mr-2">
                                    <i class="text-white fas fa-search-plus fa-lg"></i>
                                </p>
                                <h3 class="text-white">See More</h3>
                            </div>
                        </div>
                        <!-- debut modal portfolio 3  -->
                        <div class="modal fade" id="modal_portfolio3" tabindex="-1" role="dialog" aria-labelledby="modal_portfolio3_title" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="modal_portfolio3_title">Reveal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/portfolio_4.jpg" alt="portfolio" class="img-fluid">
                                        <div class="pt-4 text-center">
                                            <a class="btn btn-light btn-lg" href="website/reveal/index.html" target="_blank" role="button">See The Website</a>
                                            <!-- <a class="btn btn-dark" href="#" role="button">J'aime <i class="far fa-thumbs-up"></i></a> -->
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin modal portfolio 3 -->
                    </div>
                </article>
                <!-- <article class="row m-0">
                    <div class="col-md-4 p-0">
                        <img src="img/portfolio_1.png" alt="portfolio" class="img-fluid">
                                        <div class="pt-4 text-center">
                                            <a class="btn btn-light btn-lg" href="#" role="button">See The Website</a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article> -->
                <!-- collapse portfolio -->
                <div class="collapse pl-0 pr-0" id="collapse_portfolio">
                    <article class="row m-0">
                        <div class="col-md-4 mt-4">
                            <img src="img/portfolio_3.jpg" alt="portfolio_1" class="img-fluid">
                            <div class="overlay-img">
                                <div class="d-flex align-items-center justify-content-center overlay-text" data-toggle="modal" data-target="#modal_portfolio7">
                                    <p class="m-0 mb-2 mr-2">
                                        <i class="text-white fas fa-search-plus fa-lg"></i>
                                    </p>
                                    <h3 class="text-white">See More</h3>
                                </div>
                            </div>
                            <!-- debut modal portfolio 7 -->
                            <div class="modal fade" id="modal_portfolio7" tabindex="-1" role="dialog" aria-labelledby="modal_portfolio7_title" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="modal_portfolio7_title">Start Boostrap</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="img/portfolio_3.jpg" alt="portfolio" class="img-fluid">
                                            <div class="pt-4 text-center">
                                                <a class="btn btn-light btn-lg" href="website/landing-page/index.html" target="_blank" role="button">See The Website</a>
                                                <!-- <a class="btn btn-dark" href="#" role="button">J'aime <i class="far fa-thumbs-up"></i></a> -->
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin modal portfolio 7 -->
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="overlay-img">
                                <img src="img/portfolio_1.jpg" alt="portfolio_1" class="img-fluid">
                                <div class="d-flex align-items-center justify-content-center overlay-text" data-toggle="modal" data-target="#modal_portfolio8">
                                    <p class="m-0 mb-2 mr-2">
                                        <i class="text-white fas fa-search-plus fa-lg"></i>
                                    </p>
                                    <h3 class="text-white">See More</h3>
                                </div>
                            </div>
                            <!-- debut modal portfolio 8 -->
                            <div class="modal fade" id="modal_portfolio8" tabindex="-1" role="dialog" aria-labelledby="modal_portfolio8_title" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="modal_portfolio8_title">Organic. Web</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="img/portfolio_1.jpg" alt="portfolio" class="img-fluid">
                                            <div class="pt-4 text-center">
                                                <a class="btn btn-light btn-lg" href="website/OrganicWebBootstrap_Alexandre/index.html" target="_blank" role="button">See The Website</a>
                                                <!-- <a class="btn btn-dark" href="#" role="button">J'aime <i class="far fa-thumbs-up"></i></a> -->
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin modal portfolio 8 -->
                        </div>    
                        <div class="col-md-4 mt-4">
                            <div class="overlay-img">
                                <img src="img/portfolio_1.jpg" alt="portfolio_1" class="img-fluid">
                                <div class="d-flex align-items-center justify-content-center overlay-text" data-toggle="modal" data-target="#modal_portfolio9">
                                    <p class="m-0 mb-2 mr-2">
                                        <i class="text-white fas fa-search-plus fa-lg"></i>
                                    </p>
                                    <h3 class="text-white">See More</h3>
                                </div>
                            </div>
                            <!-- debut modal portfolio 9 -->
                            <div class="modal fade" id="modal_portfolio9" tabindex="-1" role="dialog" aria-labelledby="modal_portfolio9_title" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="modal_portfolio9_title">Organic. Web</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="img/portfolio_1.jpg" alt="portfolio" class="img-fluid">
                                            <div class="pt-4 text-center">
                                                <a class="btn btn-light btn-lg" href="website/OrganicWebBootstrap_Alexandre/index.html" target="_blank" role="button">See The Website</a>
                                                <!-- <a class="btn btn-dark" href="#" role="button">J'aime <i class="far fa-thumbs-up"></i></a> -->
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--fint modal portfolio 9 -->
                        </div>
                        <!--fin collapse portfolio  -->    
                    </article>
                </div>    
                <!-- button collapse -->
                <div class="container bg-yellow text-center pl-0 pr-0 mt-5 mb-5 button_portfolio_expand">
                    <a data-toggle="collapse" href="#collapse_portfolio" role="button" aria-expanded="false" aria-controls="collapseExample"><h1 class="text-white pt-2 pb-2 m-0" id="buttonCollapse">See More</h1></a>
                </div>
                <!-- fin button collapse -->
            </div>
        </section>
        <!-- fin portfolio -->
        <!-- debut parcours -->
        <section id="parcour">
            <div class="overlay_parcour">
                <div class="container-fluid pt-5 pb-5">
                    <div class="col-md-6 offset-md-3 text-center pb-5 pt-3 parcour_title">
                        <h1 class="yellow text-uppercase font-weight-bold pt-3 pb-3"><i class="fas fa-graduation-cap"></i> Education</h1>
                    </div>
                    <article class="row text-center p-0">
                        <div id="test" class="img_formation col-sm-2 offset-sm-1  col-md-2 offset-md-1">
                            <a href="https://simplonreunion.co/" target="_blank"><img src="img/simplon.png" alt="simplon" class="img-fluid myImg-fluid"></a>
                            <p class="text-white">
                                <span class="text-uppercase">simplon reunion</span> <br> 2018 / <span class="yellow">POEC</span> Web Developer
                            </p>
                        </div>
                        <div class="img_formation col-sm-2 col-md-2">
                            <a href="https://www.reunion.cci.fr/" target="_blank"><img src="img/cci.png" alt="simplon" class="img-fluid myImg-fluid"></a>
                            <p class="text-white">
                                <span class="text-uppercase">CCI - Reunion island</span> <br>
                                2015 - 2017 / <span class="yellow">RNTE</span> - Responsible Of Networks And Telecoms Exploitation 
                            </p>
                        </div>
                        <div class="img_formation col-sm-2 col-md-2">
                            <a href="http://www.univ-reunion.fr/" target="_blank"><img src="img/fac.png" alt="simplon" class="img-fluid myImg-fluid"></a>
                            <p class="text-white">
                                <span class="text-uppercase">Reunion island college</span> <br>
                                2014 - 2015 / <span class="yellow">L1 MIP</span> Maths Computing and Physics
                            </p>
                        </div>
                        <div class="img_formation col-sm-2 col-md-2">
                            <a href="http://lycee-belair.ac-reunion.fr/" target="_blank"><img src="img/lyc.png" alt="simplon" class="img-fluid myImg-fluid"></a>
                            <p class="text-white">
                                <span class="text-uppercase">Bel Air High School - St Suzanne</span> <br>
                                2013 - 2014 / <span class="yellow">BAC STI2D - ITEC</span> Technological Innovation and Sustainable Creation 
                            </p>
                        </div>
                        <div class="img_formation col-sm-2 col-md-2 text-center">
                            <a href="http://college-quartierfrancais.ac-reunion.fr/" target="_blank"><img src="img/clg.png" alt="simplon" class="img-fluid myImg-fluid"></a>
                            <p class="text-white">
                                <span class="text-uppercase">Lucet Langenier Middle School - St Suzanne</span> <br>
                                2019 - 2010 / <span class="yellow">Brevet des collèges</span>
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- fin parcours -->
        <!-- debut contact -->
        <section id="contact" class="pb-5">
            <div class="container-fluid pt-5">
                <div class="col-md-4 offset-md-4 text-center contact_title pt-5 pb-5">
                    <h1 class="yellow text-uppercase"><i class="fas fa-paper-plane"></i> Contact</h1>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 offset-md-1">
                        <?php if (array_key_exists('errors', $_SESSION)) : ?>
                        <div class="col-md-12 pr-0 pl-0">
                            <div class="alert alert-danger">
                                <button type="button"class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?= implode('<br>', $_SESSION['errors']); ?>
                            </div>
                        </div>
                        <?php unset($_SESSION['errors']);
                        endif; ?>
                        <?php if (array_key_exists('success', $_SESSION)) : ?>
                        <div class="col-md-12 pl-0 pr-0">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                Your email has been sent
                            </div>
                        </div>
                        <?php unset($_SESSION['success']);
                        endif;?>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 offset-md-1">
                        <form action="app/mail-EN.php" method="post" id="contactForm">
                            <div class="form-group">
                                <label for="name" class="yellow">Name Surname</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Name Surname*" required>
                            </div>
                            <div class="form-group">
                                <label for="mail" class="yellow">Email Adress</label>
                                <input class="form-control" type="email" name="mail" id="mail" placeholder="Email Adress*" required>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="yellow">Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject*" required>
                            </div>
                            <div class="form-group">
                                <label for="message" class="yellow">Message</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg btn-block bg-yellow text-white" id="submitForm">Send</button>
                        </form>
                    </div>
                    <div class="col-md-6 d-flex align-items-center text-center contact_content ">
                        <p>
                            You can <a href="mailto:contact@alexandreadolphe.com" class="yellow">contact</a> me for any further information <i class="fas fa-paper-plane yellow"></i>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- fin contact -->
    </main>
    <!-- fin main  -->

    <!-- debut footer -->
    <section id="footer">
        <div class="container-fluid overlay_footer">
            <div class="col-md-6 offset-md-3 text-center footer_title">
                <h1 class="yellow text-uppercase"><i class="fab fa-connectdevelop"></i> Social Networks</h1>
            </div>
            <div class="row footer_content">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="row  justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2 pb-3">
                            <a href="https://github.com/alexreu" target="_blank">
                                <div class="icon_footer py-2">
                                    <i class="fab fa-github text-white fa-2x"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-md-3 col-lg-2 pb-3">
                            <a href="https://www.linkedin.com/in/alexandre-adolphe-817059146/" target="_blank">
                                <div class="icon_footer py-2">
                                    <i class="fab fa-linkedin-in text-white fa-2x"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_copyright">
                <div class="col-md-6 offset-md-3 text-center copyright">
                    <p class="text-white">
                        Copyright Alex Development 2018 <i class="far fa-copyright"></i> | 
                        Design by Alex Development |
                        All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- fin footer -->

    <!-- button retour debut -->
    <a href="#header"><div id="go-top" class="text-center fixed-bottom ml-auto my-5 mx-5"><i class="fas fa-caret-up fa-3x text-white"></i></div></a>
    <!-- button retour debut -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="js/main-EN.js"></script>
</body>

</html>