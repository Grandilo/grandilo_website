<div id="fh5co-page">
    <header id="fh5co-header" role="banner">
        <div class="container">
            <div class="header-inner">
                <img src="images/GRANDILO.png">
                <nav role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::segment(1) === 'index' ? 'active' : null }}"><a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">What we do
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ Request::segment(1) === 'services' ? 'active' : null }}"><a
                                            href="#fh5co-services-section">Our Services</a></li>
                                <li class="{{ Request::segment(1) === 'digital-skills-training' ? 'active' : null }}"><a
                                            href="{{ url('digital-skills-training') }}">Trainings</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'portfolio' ? 'active' : null }}"><a
                                    href="{{ url('portfolio') }}">Portfolio/Clients</a></li>
                        <li class="{{ Request::segment(1) === 'about' ? 'active' : null }}"><a
                                    href="{{ url('about') }}">About Us</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Company
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ Request::segment(1) === 'services' ? 'active' : null }}"><a href="#"
                                                                                                          onclick="swal('Want to Join us?', 'Send your Resume to info@grandilo.com ');"
                                            >Career</a></li>
                                <li class="{{ Request::segment(1) === 'digital-skills-training' ? 'active' : null }}"><a
                                            href="#"
                                            onclick="swal('Application closed', 'The first Cycle of Grandilo Volunteer Program is closed. Check back next month');"
                                            >Grandilo Volunteer Program</a>
                                </li>
                                <li class="{{ Request::segment(1) === 'internship' ? 'active' : null }}"><a
                                            href="#">Blog</a></li>
                            </ul>
                        </li>
                        <li class="cta"><a href="#">Hire top talent</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>
