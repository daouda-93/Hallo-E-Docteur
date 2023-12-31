<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- Site Metas -->
<title>Life Care - Responsive HTML5 Multi Page Template</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>
<!-- [if lt IE 9] -->
</head>

<body class="clinic_version">
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
    </div>
    <!-- END LOADER -->
    <header>
        <div class="header-top wow fadeIn">
            <div class="container row">
                <div class="col-lg-2">
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('asset/img/clinique.jpg') }}"
                        alt="image" style="width: 75%"></a>
                </div>
                <div class="right-header col-lg-10">
                    <div class="header-info">
                        <div class="info-inner">
                            <span class="icontop"><img src="images/phone-icon.png" alt="#"></span>
                            <span class="iconcont"><a href="tel:25 123 456">25 123 456</a></span>
                        </div>
                        <div class="info-inner">
                            <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <span class="iconcont"><a data-scroll
                                    href="mailto:info@yoursite.com">Helloedocteurs24@gmail.com</a></span>
                        </div>
                        <div class="info-inner">
                            <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                            <span class="iconcont"><a data-scroll href="#">Tous les jours: 24h/24h</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom wow fadeIn">
            <div class="container">
                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars"
                                aria-hidden="true"></i></button>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a class="active" href="{{ route('welcome') }}">acueil</a></li>
                            <li><a data-scroll href="#about">a propos</a></li>
                            <li><a data-scroll href="#service">nos service</a></li>
                            <li><a data-scroll href="#doctors">nos medecins</a></li>
                            <li><a data-scroll href="#getintouch">contact</a></li>
                            <li><a data-scroll href="{{ route('rendezvous.create') }}">Prendre un rendez-vous</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="serch-bar">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn btn-primary font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="btn btn-primary ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>

                    @endif
                </div>
            </div>
        </div>
        </div>
    </header>
    <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4"
        style="background-image:url('images/slider-bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-contant">
                        <h2>
                            <span class="center"><span class="icon"><img src="images/icon-logo.png"
                                        alt="#" /></span></span>
                            <a href="" class="typewrite" data-period="2000"
                                data-type='[ "Bienvenue sur E-Docteur", "Nous prenons soin de votre santé", "Nous sommes experts !" ]'>
                                <span class="wrap"></span>
                            </a>
                        </h2>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section -->
    <div id="time-table" class="time-table-section">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="service-time one" style="background:#2895f1;">
                        <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                        <h3>Questionnaire Médical</h3>
                        <p>Après avoir précisé la nature de vos symptômes lors d’un questionnaire précédant
                            le diagnostic, Feeli vous oriente immédiatement vers un spécialiste de santé.
                            Sans RDV et en quelques minutes, la téléconsultation débute via une messagerie instantanée,
                            le tout offrant une expérience entièrement digitalisée.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="service-time middle" style="background:#0071d1;">
                        <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <h3>Heures d'ouverture</h3>
                        <div class="time-table-section">
                            <ul>
                                <li><span class="left">Lundi - Vendredi</span><span class="right">8.00 –
                                        18.00</span></li>
                                <li><span class="left">Samedi</span><span class="right">8.00 – 16.00</span></li>
                                <li><span class="left">Dimanche</span><span class="right">8.00 – 13.00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="service-time three" style="background:#0060b1;">
                        <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                        <h3>Consultation et diagnostic</h3>
                        <p>À l’aide des réponses au questionnaire, le médecin peut débuter la téléconsultation
                            par messagerie instantanée. Si nécessaire un traitement pourra vous être proposé.
                            Le montant de la téléconsultation est supporté entièrement par le patient.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="section wow fadeIn">
        <div class="container">
            <div class="heading">
                <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
                <h2>La Clinique Spécialisée</h2>
            </div>
            <!-- end title -->
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>CE QUE NOUS FAISONS</h4>
                        <h2>Clinic Service</h2>
                        <p class="lead">En fonction du diagnostic et si un remède est nécessaire,
                            le médecin pourra établir un document médical valable en pharmacie,
                            directement accessible depuis votre espace personnel. Si besoin,
                            n le médecin pourra compléter votre document médical par des examens complémentaires. </p>
                        <a href="#services" data-scroll
                            class="btn btn-light btn-radius btn-brd grd1 effect-1">Apprendre encore plus</a>
                    </div>
                    <!-- end messagebox -->
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_03.jpg" alt="" class="img-responsive">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                            class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div>
                    <!-- end media -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <hr class="hr1">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]"
                                class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="images/clinic_01.jpg" alt="" class="img-responsive">
                        </div>
                        <h3>Centre de contrôle numérique</h3>
                    </div>
                    <!-- end service -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="images/clinic_02.jpg" data-rel="prettyPhoto[gal]"
                                class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="images/clinic_02.jpg" alt="" class="img-responsive">
                        </div>
                        <h3>Salle d'opération hygiénique</h3>
                    </div>
                    <!-- end service -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="images/clinic_03.jpg" data-rel="prettyPhoto[gal]"
                                class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="images/clinic_03.jpg" alt="" class="img-responsive">
                        </div>
                        <h3>Médecins spécialistes</h3>
                    </div>
                    <!-- end service -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]"
                                class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="images/clinic_01.jpg" alt="" class="img-responsive">
                        </div>
                        <h3>Centre de contrôle numérique</h3>
                    </div>
                    <!-- end service -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <div id="service" class="services wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="inner-services">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/service-icon1.png"
                                        alt="#" /></span>
                                <h4>INSTALLATIONS PREMIUM</h4>
                                <p>Lorem Ipsum est simplement un texte factice de l'impression.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/service-icon2.png"
                                        alt="#" /></span>
                                <h4>GRAND LABORATOIRE</h4>
                                <p>Lorem Ipsum est simplement un texte factice de l'impression.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/service-icon3.png"
                                        alt="#" /></span>
                                <h4>SPÉCIALISTE DÉTAILLÉ</h4>
                                <p>Lorem Ipsum est simplement un texte factice de l'impression.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/service-icon4.png"
                                        alt="#" /></span>
                                <h4>CENTRE DE GARDE D'ENFANTS</h4>
                                <p>Lorem Ipsum est simplement un texte factice de l'impression.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/service-icon5.png"
                                        alt="#" /></span>
                                <h4>INFRASTRUCTURES FINES</h4>
                                <p>Lorem Ipsum est simplement un texte factice de l'impression.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/service-icon6.png"
                                        alt="#" /></span>
                                <h4>BANQUE DE SANG À TOUT MOMENT</h4>
                                <p>Lorem Ipsum est simplement un texte factice de l'impression.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="appointment-form">
                        <h3><span>+</span> Prendre rendez-vous</h3>
                        <div class="form">
                            <form action="index.html">
                                <fieldset>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input type="text" id="name" espace réservé="Your Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input type="email" espace réservé="Email Address"
                                                    id="email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                        <div class="row">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>Jour</option>
                                                    <option>Dimanche</option>
                                                    <option>Lundi</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>Temps</option>
                                                    <option>AM</option>
                                                    <option>PM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>Nom du médecin</option>
                                                    <option>M. XYZ</option>
                                                    <option>M. ABC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <textarea Lignes="4" id="textarea_message" class="form-control" espace réservé="Your Message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="center"><button type="submit">Soumettre</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- doctor -->

    <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;"
        data-scroll-id="doctors" tabindex="-1">
        <div class="container">

            <div class="heading">
                <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
                <h2>La Clinique Spécialisee</h2>
            </div>

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s"
                    data-wow-delay="0.2s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>DAOUDA_B_ULRICH</h3>
                            <small>Propriétaire de la clinique</small>
                        </div>
                        <!-- end title -->
                        <p>Bonjour les gars, je suis Soren de Sirbistana. Je suis directeur artistique senior et
                            fondateur de Violetta.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s"
                    data-wow-delay="0.4s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="images/doctor_02.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Bryan DELLA</h3>
                            <small>Maladies internes</small>
                        </div>
                        <!-- end title -->
                        <p>Bonjour les gars, je suis Soren de Sirbistana. Je suis directeur artistique senior et
                            fondateur de Violetta.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="widget clearfix">
                        <img src="images/doctor_03.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>FLORA Beliss</h3>
                            <small>Orthopedics Expert</small>
                        </div>
                        <!-- end title -->
                        <p>Bonjour les gars, je suis Soren de Sirbistana. Je suis directeur artistique senior et
                            fondateur de Violetta.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div>



    <!-- end doctor section -->

    <!-- end section -->
    <div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
        <div class="container">
            <div class="heading">
                <span class="icon-logo"><img src="{{ asset('asset/img/clinique.jpg') }}" alt="#"></span>
                <h2>Entrer en contact</h2>
            </div>
        </div>
        <div class="contact-section">
            <div class="form-contant">
                <form id="ajax-contact" action="assets/mailer.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group in_name">
                                <input type="text" class="form-control" placeholder="Name" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group in_email">
                                <input type="email" class="form-control" placeholder="E-mail" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group in_email">
                                <input type="tel" class="form-control" id="phone" placeholder="Phone"
                                    required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group in_email">
                                <input type="text" class="form-control" id="subject" placeholder="Subject"
                                    required="required">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group in_message">
                                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required"></textarea>
                            </div>
                            <div class="actions">
                                <input type="submit" value="Send Message" name="submit" id="submitButton"
                                    class="btn small" title="Submit Your Message!">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="googleMap" style="width:100%;height:450px;"></div>
        </div>
    </div>
    <footer id="footer" class="footer-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo padding">
                        <a href=""><img src={{ asset('asset/img/clinique.jpg') }} alt=""></a>
                        <p>Votre santé est notre priorité – Notre mission votre confort.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-info padding">
                        <h3>CONTACTEZ-NOUS</h3>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> PO Box 16122 medicin en ligne Burkina-Faso
                        Ouag2000@</p>
                        <p><i class="fa fa-paper-plane" aria-hidden="true"></i> info@gmail.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> (+226) 25 123 456</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="subcriber-info">
                        <h3>S'ABONNER</h3>
                        <p>Recevez des nouvelles saines, des conseils et des solutions à vos problèmes auprès de nos experts.</p>
                        <div class="subcriber-box">
                            <form id="mc-form" class="mc-form">
                                <div class="newsletter-form">
                                    <input type="email" autocomplete="off" id="mc-email"
                                        placeholder="Email address" class="form-control" name="EMAIL">
                                    <button class="mc-submit" type="submit"><i
                                            class="fa fa-paper-plane"></i></button>
                                    <div class="clearfix"></div>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts">
                                        <div class="mailchimp-submitting"></div>
                                        <!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div>
                                        <!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div>
                                        <!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="footer-text">
                        <p>© 2023Votre santé est notre priorité – Notre mission votre confort.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social">
                        <ul class="social-links">
                            <li><a href=""><i class="fa fa-rss"></i></a></li>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyrights -->
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <!-- all js files -->
    <script src="js/all.js"></script>
    <!-- all plugins -->
    <script src="js/custom.js"></script>
    <!-- map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap">
    </script>
</body>

</html>
