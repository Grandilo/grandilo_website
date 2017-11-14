@extends('layouts.default')
@section('content')


    <div class="container">
        <div id="fh5co-work-section" class="fh5co-light-grey-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                        <b><h1 class="grandilo-color">Portfolio/Clients</h1></b>
                        <p>Here are some of our clients and works</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.grandilo.stanthony" class="item-grid text-center">
                            <div class="image" style="background-image: url(images/portfolio/stanthony.jpg)"></div>
                            <div class="v-align">
                                <div class="v-align-middle">
                                    <h3 class="title">Guild of St. Anthony</h3>
                                    <h5 class="category">Mobile Application for the Guild of St. Anthony</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 animate-box">
                        <a target="_blank" href="http://www.myfotobook.com.ng" class="item-grid text-center">
                            <div class="image" style="background-image: url(images/portfolio/myfotobook.jpg)"></div>
                            <div class="v-align">
                                <div class="v-align-middle">
                                    <h3 class="title">Myfotobook</h3>
                                    <h5 class="category">App for printing cherished memories</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 animate-box">
                        <a href="#"
                           onclick="swal('Request via Email', 'This app is not currently available for public use ');"
                           class="item-grid text-center">
                            <div class="image" style="background-image: url(images/portfolio/physio.jpg)"></div>
                            <div class="v-align">
                                <div class="v-align-middle">
                                    <h3 class="title">Call-A-Physio</h3>
                                    <h5 class="category">A medical mobile App for Physiotherapists</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 animate-box">
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=org.kilimotrust.kilimo" class="item-grid text-center">
                            <div class="image" style="background-image: url(images/kilimo.png)"></div>
                            <div class="v-align">
                                <div class="v-align-middle">
                                    <h3 class="title">Uza EAC</h3>
                                    <h5 class="category">Agriculture app for East African community</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 animate-box">
                        <a target="_blank" href="http://engineering.usgprofessionals.nl/" class="item-grid text-center">
                            <div class="image" style="background-image: url(images/usglogo.png)"></div>
                            <div class="v-align">
                                <div class="v-align-middle">
                                    <h3 class="title">USG Engineering</h3>
                                    <h5 class="category">Engineering Department of USG</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 animate-box">
                        <a target="_blank" href="http://yoohcan.tv" class="item-grid text-center">
                            <div class="image" style="background-image: url(images/yoohcan.png)"></div>
                            <div class="v-align">
                                <div class="v-align-middle">
                                    <h3 class="title">Yoohcan</h3>
                                    <h5 class="category">yoohcan.tv</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 text-center animate-box">
                        <p><a href="#"
                              onclick="swal('Request via Email', 'Send us an email at info@grandilo.com');"
                              class="btn btn-primary with-arrow">Schedule call <i class="icon-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop