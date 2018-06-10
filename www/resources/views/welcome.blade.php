
@extends('layout') 
@section('content')
<!--Header-area-->
<header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2>It’s all about Deep Ion Channel Prediction</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ex inventore vel error quibusdam animi
                        fugiat, doloribus dolores consectetur nulla deleniti sint blanditiis quod debitis quis vitae officiis
                        tempora numquam.</p>
                    <a href="{{ url('/submission') }}" class="button white">Submit Protein</a>
                </div>
                <div class="hidden-xs hidden-sm col-md-5 text-right">
                    <div class="screen-box screen-slider">
                        <div class="item">
                            <img src={{URL::asset('images/screen-1.jpg')}} alt="">
                        </div>
                        <div class="item">
                            <img src={{URL::asset('images/screen-2.jpg')}} alt="">
                        </div>
                        <div class="item">
                            <img src={{URL::asset('images/screen-3.jpg')}} alt="">
                        </div>
                        <div class="item">
                            <img src={{URL::asset('images/screen-4.jpg')}} alt="">
                        </div>
                        <div class="item">
                            <img src={{URL::asset('images/screen-5.jpg')}} alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->


    <section class="section-padding gray-bg" id="team-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Special team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere
                            harum fugiat!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src={{URL::asset('images/team-section-1.png')}} alt="">
                        </div>
                        <h4>Yu-Yen Ou</h4>
                        <h6>Advisor</h6>
                        <ul class="social-menu">
                            <li>
                                <a href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src={{URL::asset('images/team-section-2.png')}} alt="">
                        </div>
                        <h4>Semmy Taju</h4>
                        <h6>Student</h6>
                        <ul class="social-menu">
                            <li>
                                <a href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src={{URL::asset('images/team-section-3.png')}} alt="">
                        </div>
                        <h4>Khanh</h4>
                        <h6>Student</h6>
                        <ul class="social-menu">
                            <li>
                                <a href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src={{URL::asset('images/team-section-4.png')}} alt="">
                        </div>
                        <h4>Rosdyana Kusuma</h4>
                        <h6>Student</h6>
                        <ul class="social-menu">
                            <li>
                                <a href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="gray-bg section-padding" id="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Frequently Asked Questions</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere
                            harum fugiat!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">Sedeiusmod tempor inccsetetur aliquatraiy?</a>
                            </h4>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco
                                    laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</p>
                            </div>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Tempor inccsetetur aliquatraiy?</a>
                            </h4>
                            <div id="collapse2" class="panel-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco
                                    laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</p>
                            </div>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Lorem ipsum dolor amet, consectetur adipisicing ?</a>
                            </h4>
                            <div id="collapse3" class="panel-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco
                                    laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</p>
                            </div>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Lorem ipsum dolor amet, consectetur adipisicing ?</a>
                            </h4>
                            <div id="collapse4" class="panel-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco
                                    laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




   

    

@endsection



    