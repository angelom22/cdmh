@extends('layouts.app')

@section('content')

<!-- Header-->
@include('layouts.menu-2')
<!-- End Header-->

<!-- Section Title -->
<div class="section-title-team">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{asset('img/logo.png')}}" alt="logo del club">
                    </div>

                    <div class="col-md-9">
                        <h1>Club Deportivo Municipal de Hatillo</h1>
                        <ul class="general-info">
                            <li>
                                <h6><strong>Fundación:</strong> 2015</h6>
                            </li>
                            <li>
                                <h6><strong>Presidente:</strong> Jesus Ortiz.</h6>
                            </li>
                            <li>
                                <h6><strong>Dt:</strong> Jesus Ortiz</h6>
                            </li>
                            <!-- <li><h6><strong>Total Titles:</strong> 100+</h6></li> -->
                            <li>
                                <h6><strong>Locación:</strong> El Hatillo</h6>
                            </li>
                            <!-- <li>
                                            <h6>
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                <a href="#" target="_blank">www.site.com</a>
                                            </h6>
                                        </li> -->
                        </ul>

                        <ul class="social-teams">
                            <li>
                                <div>
                                    <a href="https://www.facebook.com/cdmhfvf/" target="_blank" class="facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="https://twitter.com/cdmhfvf" target="_blank"  class="twitter-icon">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="https://www.instagram.com/cdmhfvf/" target="_blank"  class="instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-image-team" style="background:url(img/clubs-teams/team.jpg);"></div>
</div>
<!-- End Section Title -->

<!-- Section Area - Content Central -->
<section class="content-info">

    <!-- Single Team Tabs -->
    <div class="single-team-tabs">
        <div class="container">
            <div class="row">
                <!-- Left Content - Tabs and Carousel -->
                <div class="col-xl-12 col-md-12">
                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#overview" data-toggle="tab">General</a></li>
                        <!-- <li><a href="#squad" data-toggle="tab">Squad</a></li> -->
                        <!-- <li><a href="#fixtures" data-toggle="tab">FIXTURES</a></li> -->
                        <!-- <li><a href="#results" data-toggle="tab">RESULTS</a></li> -->
                        <!-- <li><a href="#stats" data-toggle="tab">Estadísticas</a></li> -->
                    </ul>
                    <!-- End Nav Tabs -->
                </div>

                <div class="col-lg-9 padding-top-mini">
                    <!-- Content Tabs -->
                    <div class="tab-content">
                        <!-- Tab One - overview -->
                        <div class="tab-pane active" id="overview">

                            <div class="panel-box padding-b">
                                <div class="titles">
                                    <h4>CDMH</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-xl-4">
                                        <img src="img/clubs-teams/team-02.jpg" alt="">
                                    </div>

                                    <div class="col-lg-12 col-xl-8">
                                        <p>Somos el Club de futbol en representación del municipio del Hatillo, contamos con el apoyo de nuestros socios y diregente principales del hatillo.</p>

                                        <p>Estamos comprometidos con la formación de atletas, para que estos compitan al mas alto redimiento en los torneos nacionales.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Items Club News -->
                            <!-- <div class="row">
                                          <div class="col-md-12">
                                              <h3 class="clear-title">Noticial del Primer Equipo</h3>
                                          </div>


                                          <div class="col-lg-6 col-xl-4">

                                                <div class="panel-box">
                                                    <div class="titles no-margin">
                                                        <h4><a href="#">World football's dates.</a></h4>
                                                    </div>
                                                    <a href="#"><img src="img/blog/1.jpg" alt=""></a>
                                                    <div class="row">
                                                       <div class="info-panel">
                                                            <p>Fans from all around the world can apply for 2018 FIFA World Cup™ tickets as the first window of sales.</p>
                                                       </div>
                                                    </div>
                                                </div>

                                           </div>



                                          <div class="col-lg-6 col-xl-4">

                                                <div class="panel-box">
                                                    <div class="titles no-margin">
                                                        <h4><a href="#">Mbappe’s year to remember</a></h4>
                                                    </div>
                                                    <a href="#"><img src="img/blog/2.jpg" alt=""></a>
                                                    <div class="row">
                                                       <div class="info-panel">
                                                            <p>Tickets may be purchased online by using Visa payment cards or Visa Checkout. Visa is the official.</p>
                                                       </div>
                                                    </div>
                                                </div>

                                           </div>



                                          <div class="col-lg-6 col-xl-4">

                                                <div class="panel-box">
                                                    <div class="titles no-margin">
                                                        <h4><a href="#">Egypt are one family</a></h4>
                                                    </div>
                                                    <a href="#"><img src="img/blog/3.jpg" alt=""></a>
                                                    <div class="row">
                                                       <div class="info-panel">
                                                            <p>Successful applicants who have applied for supporter tickets and conditional supporter tickets will.</p>
                                                       </div>
                                                    </div>
                                                </div>

                                           </div>

                                       </div> -->



                            <!--Items Club video -->
                            <!-- <div class="row no-line-height">
                                          <div class="col-md-12">
                                              <h3 class="clear-title">Videos del Primer Equipo</h3>
                                          </div>


                                          <div class="col-lg-6 col-xl-4">

                                                <div class="panel-box">
                                                    <div class="titles no-margin">
                                                        <h4><a href="#">Torneo</a></h4>
                                                    </div>
                                                    <iframe class="video" src="https://www.youtube.com/embed/Ln8rXkeeyP0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                                </div>

                                           </div>

                                       </div> -->
                            <!--End Items Club video -->

                            <!--Sponsors CLub -->
                            <div class="row no-line-height">
                                <div class="col-md-12">
                                    <h3 class="clear-title">Patroinantes Del Club</h3>
                                </div>
                            </div>
                            <!--End Sponsors CLub -->

                            <ul class="sponsors-carousel">
                                <li><a href="#"><img src="img/sponsors/AlcaldiaHatillo.png" alt="alcaldia del hatillo"></a></li>
                                <li><a href="#"><img src="img/sponsors/LogoTipografiaOlympia.png" alt="colaborador"></a></li>
                                <li><a href="#"><img src="img/sponsors/sponsor01.png" alt=""></a></li>
                                <li><a href="#"><img src="img/sponsors/sponsor03.png" alt=""></a></li>
                                <li><a href="#"><img src="img/sponsors/sponsor02.png" alt=""></a></li>
                                <li><a href="#"><img src="img/sponsors/sponsor04.png" alt=""></a></li>
                            </ul>

                        </div>
                        <!-- Tab One - overview -->

                        <!-- Tab Two - squad -->
                        <!-- <div class="tab-pane" id="squad">
                                        <div class="row">

                                             Item Player
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="item-player">
                                                    <div class="head-player">
                                                        <img src="img/players/1.jpg" alt="location-team">
                                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                                    </div>
                                                    <div class="info-player">
                                                        <span class="number-player">
                                                            13
                                                        </span>
                                                        <h4>
                                                            Cristiano Ronaldo
                                                            <span>Forward</span>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                                            </li>
                                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                                            <li><strong>AGE:</strong> <span>28</span></li>
                                                        </ul>
                                                    </div>
                                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                             End Item Player


                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="item-player">
                                                    <div class="head-player">
                                                        <img src="img/players/2.jpg" alt="location-team">
                                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                                    </div>
                                                    <div class="info-player">
                                                        <span class="number-player">
                                                            10
                                                        </span>
                                                        <h4>
                                                            Lionel Messi
                                                            <span>Defender</span>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                                            </li>
                                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                                            <li><strong>AGE:</strong> <span>28</span></li>
                                                        </ul>
                                                    </div>
                                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>



                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="item-player">
                                                    <div class="head-player">
                                                        <img src="img/players/3.jpg" alt="location-team">
                                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                                    </div>
                                                    <div class="info-player">
                                                        <span class="number-player">
                                                            2
                                                        </span>
                                                        <h4>
                                                            Neymar
                                                            <span>Midfielder</span>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                                            </li>
                                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                                            <li><strong>AGE:</strong> <span>28</span></li>
                                                        </ul>
                                                    </div>
                                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="item-player">
                                                    <div class="head-player">
                                                        <img src="img/players/4.jpg" alt="location-team">
                                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                                    </div>
                                                    <div class="info-player">
                                                        <span class="number-player">
                                                            2
                                                        </span>
                                                        <h4>
                                                            Luis Suárez
                                                            <span>Goalkeeper</span>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                                            </li>
                                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                                            <li><strong>AGE:</strong> <span>28</span></li>
                                                        </ul>
                                                    </div>
                                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="item-player">
                                                    <div class="head-player">
                                                        <img src="img/players/5.jpg" alt="location-team">
                                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                                    </div>
                                                    <div class="info-player">
                                                        <span class="number-player">
                                                            2
                                                        </span>
                                                        <h4>
                                                            Gareth Bale
                                                            <span>Midfielder</span>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                                            </li>
                                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                                            <li><strong>AGE:</strong> <span>28</span></li>
                                                        </ul>
                                                    </div>
                                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="item-player">
                                                    <div class="head-player">
                                                        <img src="img/players/6.jpg" alt="location-team">
                                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                                    </div>
                                                    <div class="info-player">
                                                        <span class="number-player">
                                                            2
                                                        </span>
                                                        <h4>
                                                            Sergio Agüero
                                                            <span>Goalkeeper</span>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                                            </li>
                                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                                            <li><strong>AGE:</strong> <span>28</span></li>
                                                        </ul>
                                                    </div>
                                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="item-player">
                                                    <div class="head-player">
                                                        <img src="img/players/1.jpg" alt="location-team">
                                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                                    </div>
                                                    <div class="info-player">
                                                        <span class="number-player">
                                                            13
                                                        </span>
                                                        <h4>
                                                            Cristiano Ronaldo
                                                            <span>Forward</span>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                                            </li>
                                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                                            <li><strong>AGE:</strong> <span>28</span></li>
                                                        </ul>
                                                    </div>
                                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="item-player">
                                                    <div class="head-player">
                                                        <img src="img/players/2.jpg" alt="location-team">
                                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                                    </div>
                                                    <div class="info-player">
                                                        <span class="number-player">
                                                            10
                                                        </span>
                                                        <h4>
                                                            Lionel Messi
                                                            <span>Defender</span>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                                            </li>
                                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                                            <li><strong>AGE:</strong> <span>28</span></li>
                                                        </ul>
                                                    </div>
                                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="item-player">
                                                    <div class="head-player">
                                                        <img src="img/players/3.jpg" alt="location-team">
                                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                                    </div>
                                                    <div class="info-player">
                                                        <span class="number-player">
                                                            2
                                                        </span>
                                                        <h4>
                                                            Neymar
                                                            <span>Midfielder</span>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                                            </li>
                                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                                            <li><strong>AGE:</strong> <span>28</span></li>
                                                        </ul>
                                                    </div>
                                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="item-player">
                                                    <div class="head-player">
                                                        <img src="img/players/4.jpg" alt="location-team">
                                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                                    </div>
                                                    <div class="info-player">
                                                        <span class="number-player">
                                                            2
                                                        </span>
                                                        <h4>
                                                            Luis Suárez
                                                            <span>Goalkeeper</span>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                                            </li>
                                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                                            <li><strong>AGE:</strong> <span>28</span></li>
                                                        </ul>
                                                    </div>
                                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="item-player">
                                                    <div class="head-player">
                                                        <img src="img/players/5.jpg" alt="location-team">
                                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                                    </div>
                                                    <div class="info-player">
                                                        <span class="number-player">
                                                            2
                                                        </span>
                                                        <h4>
                                                            Gareth Bale
                                                            <span>Midfielder</span>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                                            </li>
                                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                                            <li><strong>AGE:</strong> <span>28</span></li>
                                                        </ul>
                                                    </div>
                                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="item-player">
                                                    <div class="head-player">
                                                        <img src="img/players/6.jpg" alt="location-team">
                                                        <div class="overlay"><a href="single-player.html">+</a></div>
                                                    </div>
                                                    <div class="info-player">
                                                        <span class="number-player">
                                                            2
                                                        </span>
                                                        <h4>
                                                            Sergio Agüero
                                                            <span>Goalkeeper</span>
                                                        </h4>
                                                        <ul>
                                                            <li>
                                                                <strong>NATIONALITY</strong> <span><img src="img/clubs-logos/colombia.png" alt=""> Colombia </span
                                                            </li>
                                                            <li><strong>MATCHES:</strong> <span>90</span></li>
                                                            <li><strong>AGE:</strong> <span>28</span></li>
                                                        </ul>
                                                    </div>
                                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>


                                        </div>
                                    </div> -->
                        <!-- End Tab Two - squad -->

                        <!-- Tab Theree - fixtures -->
                        <!-- <div class="tab-pane" id="fixtures">

                                        <table class="table-striped table-responsive table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Team A</th>
                                                    <th class="text-center">VS</th>
                                                    <th>Team B</th>
                                                    <th>Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="img/clubs-logos/colombia.png" alt="icon">
                                                        <strong>Colombia</strong><br>
                                                        <small class="meta-text">GROUP H.</small>
                                                    </td>
                                                    <td class="text-center">Vs</td>
                                                    <td>
                                                        <img src="img/clubs-logos/japan.png" alt="icon1">
                                                        <strong>Japan</strong><br>
                                                        <small class="meta-text">GROUP H.</small>
                                                    </td>
                                                    <td>
                                                        Jun 19,  07:00<br>
                                                        <small class="meta-text">Mordovia Arena,Saransk</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                        <img src="img/clubs-logos/pol.png" alt="icon1">
                                                        <strong>Poland</strong><br>
                                                        <small class="meta-text">GROUP H.</small>
                                                    </td>
                                                    <td class="text-center">Vs</td>
                                                    <td>
                                                        <img src="img/clubs-logos/colombia.png" alt="icon">
                                                        <strong>Colombia</strong><br>
                                                        <small class="meta-text">GROUP H.</small>
                                                    </td>
                                                    <td>
                                                        Jun 24,  13:00<br>
                                                        <small class="meta-text">Kazan Arena,Kazan</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                        <img src="img/clubs-logos/sen.png" alt="icon1">
                                                        <strong>Senegal</strong><br>
                                                        <small class="meta-text">GROUP H.</small>
                                                    </td>
                                                    <td class="text-center">Vs</td>
                                                    <td>
                                                        <img src="img/clubs-logos/colombia.png" alt="icon">
                                                        <strong>Colombia</strong><br>
                                                        <small class="meta-text">GROUP H.</small>
                                                    </td>
                                                    <td>
                                                        Jun 28, 09:00<br>
                                                        <small class="meta-text">Samara Arena,Samara</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                        <img src="img/clubs-logos/colombia.png" alt="icon">
                                                        <strong>Colombia</strong><br>
                                                        <small class="meta-text">GROUP H.</small>
                                                   </td>
                                                   <td class="text-center">Vs</td>
                                                   <td>
                                                        <img src="img/clubs-logos/pol.png" alt="icon1">
                                                        <strong>Poland</strong><br>
                                                        <small class="meta-text">GROUP H.</small>
                                                    </td>
                                                    <td>
                                                        Jun 24,  13:00<br>
                                                        <small class="meta-text">Kazan Arena,Kazan</small>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div> -->
                        <!-- End Tab Theree - fixtures -->

                        <!-- Tab Theree - results -->
                        <!-- <div class="tab-pane" id="results">
                                        <div class="recent-results results-page">
                                            <div class="info-results">
                                                <ul>
                                                    <li>
                                                        <span class="head">
                                                            Portugal Vs Spain <span class="date">27 Jun 2017</span>
                                                        </span>

                                                        <div class="goals-result">
                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/por.png" alt="">
                                                                Portugal
                                                            </a>

                                                            <span class="goals">
                                                                <b>2</b> - <b>3</b>
                                                                <a href="single-result.html" class="btn theme">View More</a>
                                                            </span>

                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/esp.png" alt="">
                                                                Spain
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <span class="head">
                                                            Rusia Vs Colombia <span class="date">30 Jun 2017</span>
                                                        </span>

                                                        <div class="goals-result">
                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/rusia.png" alt="">
                                                                Rusia
                                                            </a>

                                                            <span class="goals">
                                                                <b>2</b> - <b>3</b>
                                                                <a href="single-result.html" class="btn theme">View More</a>
                                                            </span>

                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/colombia.png" alt="">
                                                                 Colombia
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <span class="head">
                                                            Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                                        </span>

                                                        <div class="goals-result">
                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/uru.png" alt="">
                                                                Uruguay
                                                            </a>

                                                            <span class="goals">
                                                                <b>2</b> - <b>3</b>
                                                                <a href="single-result.html" class="btn theme">View More</a>
                                                            </span>

                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/por.png" alt="">
                                                                 Portugal
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <span class="head">
                                                            Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                                        </span>

                                                        <div class="goals-result">
                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/uru.png" alt="">
                                                                Uruguay
                                                            </a>

                                                            <span class="goals">
                                                                <b>2</b> - <b>3</b>
                                                                <a href="single-result.html" class="btn theme">View More</a>
                                                            </span>

                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/por.png" alt="">
                                                                 Portugal
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <span class="head">
                                                            Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                                        </span>

                                                        <div class="goals-result">
                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/uru.png" alt="">
                                                                Uruguay
                                                            </a>

                                                            <span class="goals">
                                                                <b>2</b> - <b>3</b>
                                                                <a href="single-result.html" class="btn theme">View More</a>
                                                            </span>

                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/por.png" alt="">
                                                                 Portugal
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <span class="head">
                                                            Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                                        </span>

                                                        <div class="goals-result">
                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/uru.png" alt="">
                                                                Uruguay
                                                            </a>

                                                            <span class="goals">
                                                                <b>2</b> - <b>3</b>
                                                                <a href="single-result.html" class="btn theme">View More</a>
                                                            </span>

                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/por.png" alt="">
                                                                 Portugal
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <span class="head">
                                                            Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                                        </span>

                                                        <div class="goals-result">
                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/uru.png" alt="">
                                                                Uruguay
                                                            </a>

                                                            <span class="goals">
                                                                <b>2</b> - <b>3</b>
                                                                <a href="single-result.html" class="btn theme">View More</a>
                                                            </span>

                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/por.png" alt="">
                                                                 Portugal
                                                            </a>
                                                        </div>
                                                    </li>

                                                     <li>
                                                        <span class="head">
                                                            Portugal Vs Spain <span class="date">27 Jun 2017</span>
                                                        </span>

                                                        <div class="goals-result">
                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/por.png" alt="">
                                                                Portugal
                                                            </a>

                                                            <span class="goals">
                                                                <b>2</b> - <b>3</b>
                                                                <a href="single-result.html" class="btn theme">View More</a>
                                                            </span>

                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/esp.png" alt="">
                                                                Spain
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <span class="head">
                                                            Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                                        </span>

                                                        <div class="goals-result">
                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/uru.png" alt="">
                                                                Uruguay
                                                            </a>

                                                            <span class="goals">
                                                                <b>2</b> - <b>3</b>
                                                                <a href="single-result.html" class="btn theme">View More</a>
                                                            </span>

                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/por.png" alt="">
                                                                 Portugal
                                                            </a>
                                                        </div>
                                                    </li>

                                                     <li>
                                                        <span class="head">
                                                            Portugal Vs Spain <span class="date">27 Jun 2017</span>
                                                        </span>

                                                        <div class="goals-result">
                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/por.png" alt="">
                                                                Portugal
                                                            </a>

                                                            <span class="goals">
                                                                <b>2</b> - <b>3</b>
                                                                <a href="single-result.html" class="btn theme">View More</a>
                                                            </span>

                                                            <a href="single-team.html">
                                                                <img src="img/clubs-logos/esp.png" alt="">
                                                                Spain
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                       </div>
                                    </div> -->
                        <!-- End Tab Theree - results -->

                        <!-- Tab Theree - stats -->
                        <div class="tab-pane" id="stats">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="stats-info">
                                        <ul>
                                            <li>
                                                Matches Played
                                                <h3>866</h3>
                                            </li>

                                            <li>
                                                Wins
                                                <h3>328</h3>
                                            </li>

                                            <li>
                                                Losses
                                                <h3>317</h3>
                                            </li>

                                            <li>
                                                Goals
                                                <h3>1,188</h3>
                                            </li>

                                            <li>
                                                Goals Conceded
                                                <h3>1,170</h3>
                                            </li>

                                            <li>
                                                Clean Sheets
                                                <h3>226</h3>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-xl-4">
                                    <!-- Attack -->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><i class="fa fa-calendar"></i>Attack</h4>
                                        </div>
                                        <ul class="list-panel">
                                            <li>
                                                <p>Goals <span>1,188</span></p>
                                            </li>
                                            <li>
                                                <p>Goals Per Match <span>1.37</span></p>
                                            </li>
                                            <li>
                                                <p>Shots <span>4,621</span></p>
                                            </li>
                                            <li>
                                                <p>Shooting Accuracy % <span>32%</span></p>
                                            </li>
                                            <li>
                                                <p>Penalties Scored <span>30</span></p>
                                            </li>
                                            <li>
                                                <p>Big Chances Created <span>293</span></p>
                                            </li>
                                            <li>
                                                <p>Hit Woodwork <span>107</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Attack -->
                                </div>

                                <div class="col-lg-6 col-xl-4">
                                    <!-- Attack -->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><i class="fa fa-calendar"></i>Team Play</h4>
                                        </div>
                                        <ul class="list-panel">
                                            <li>
                                                <p>Passes <span>140,417</span></p>
                                            </li>
                                            <li>
                                                <p>Passes Per Match <span>162.14</span></p>
                                            </li>
                                            <li>
                                                <p>Pass Accuracy % <span>76%</span></p>
                                            </li>
                                            <li>
                                                <p>Crosses <span>8,148</span></p>
                                            </li>
                                            <li>
                                                <p>Cross Accuracy % <span>22%</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Attack -->
                                </div>

                                <div class="col-lg-6 col-xl-4">
                                    <!-- Attack -->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><i class="fa fa-calendar"></i>Defence</h4>
                                        </div>
                                        <ul class="list-panel">
                                            <li>
                                                <p>Clean Sheets <span>226</span></p>
                                            </li>
                                            <li>
                                                <p>Goals Conceded <span>1,170</span></p>
                                            </li>
                                            <li>
                                                <p>Goals Conceded Per Match <span>1.35</span></p>
                                            </li>
                                            <li>
                                                <p>Saves <span>392</span></p>
                                            </li>
                                            <li>
                                                <p>Tackles <span>7,438</span></p>
                                            </li>
                                            <li>
                                                <p>Tackle Success % <span>75%</span></p>
                                            </li>
                                            <li>
                                                <p>Blocked Shots <span>1,208</span></p>
                                            </li>
                                            <li>
                                                <p>Interceptions <span>5,334</span></p>
                                            </li>
                                            <li>
                                                <p>Clearances <span>11,436</span></p>
                                            </li>
                                            <li>
                                                <p>Headed Clearance <span>3,710</span></p>
                                            </li>
                                            <li>
                                                <p>Aerial Battles/Duels Won <span>25,401</span></p>
                                            </li>
                                            <li>
                                                <p>Errors Leading To Goal <span>59</span></p>
                                            </li>
                                            <li>
                                                <p>Own Goals <span>27</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Attack -->
                                </div>
                            </div>

                        </div>
                        <!-- End Tab Theree - stats -->
                    </div>
                    <!-- Content Tabs -->
                </div>

                <!-- Side info single team-->
                <div class="col-lg-3 padding-top-mini">

                    <!-- <div class="panel-box">
                                    <div class="titles">
                                        <h4><i class="fa fa-calendar"></i>Calendario</h4>
                                    </div>


                                    <ul class="list-diary">

                                        <li>
                                            <h6>GROUP A <span>14 JUN 2018 - 18:00</span></h6>
                                            <ul class="club-logo">
                                                <li>
                                                    <img src="img/clubs-logos/rusia.png" alt="">
                                                    <span>RUSSIA</span>
                                                </li>
                                                <li>
                                                    <img src="img/clubs-logos/arabia.png" alt="">
                                                    <span>SAUDI ARABIA</span>
                                                </li>
                                            </ul>
                                        </li>


                                    </ul>

                                </div> -->
                    <!-- End Diary -->

                    <!-- Video presentation -->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Video Presentación</h4>
                        </div>
                        <!-- Locations Video -->
                        <div class="row">
                            <iframe src="https://www.youtube.com/embed/yjQPw-fPb4A" class="video"></iframe>
                            <div class="info-panel">
                                <h4>Nuestro Lema</h4>
                                <p>Más que un club, una familia</p>
                            </div>
                        </div>
                        <!-- End Locations Video -->
                    </div>
                    <!-- End Video presentation-->

                    <!-- Widget Text-->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Widget</h4>
                        </div>
                        <img src="img/hero.jpg" alt="widget del club del hatillo">
                        <div class="row">
                            <!-- <div class="info-panel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,  ut sit amet, consectetur adipisicing elit, labore et dolore.</p>
                                       </div> -->
                        </div>
                    </div>
                    <!-- End Widget Text-->
                </div>
                <!-- end Side info single team-->

            </div>
        </div>
    </div>
    <!-- Single Team Tabs -->

    <!-- Newsletter -->

    @include ('secciones.suscripcion')

    <!-- End Newsletter -->
</section>
<!-- End Section Area -  Content Central -->

<div class="instagram-btn">
    <div class="btn-instagram">
        <i class="fa fa-instagram"></i>
        SIGUENOS
        <a href="https://www.instagram.com/cdmhfvf/" target="_blank">&#64;CDMH</a>
    </div>
</div>

<div class="content-instagram">
    <div id="instafeed"></div>
</div>


@endsection
