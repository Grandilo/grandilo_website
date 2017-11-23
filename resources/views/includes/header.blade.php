<div id="fh5co-page">
    <header id="fh5co-header" role="banner">
        <div class="container">
            <div class="header-inner">
                <img src="images/GRANDILO.png">
                <nav role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::segment(1) === 'index' ? 'active' : null }}"><a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="{{ Request::segment(1) === 'services' ? 'active' : null }}"><a href="{{ url('services') }}">What we do</a>
                        </li>
                        <li class="{{ Request::segment(1) === 'clients' ? 'active' : null }}"><a
                                    href="{{ url('clients') }}">Clients</a>
                        </li>
                        <li class="{{ Request::segment(1) === 'about' ? 'active' : null }}"><a
                                    href="{{ url('about') }}">About Us</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="">Company
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ Request::segment(1) === 'services' ? 'active' : null }}"><a href=""
                                                                                                          onclick="swal('Want to Join us?', 'Send your Resume to info@grandilo.com ');"
                                            >Career</a>
                                </li>
                                <br>
                                <li class="{{ Request::segment(1) === 'internship' ? 'active' : null }}"><a
                                            href="{{ url('blog') }}">Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li class="cta"><a href="{{ url('hire_form') }}">Hire top talent</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>
