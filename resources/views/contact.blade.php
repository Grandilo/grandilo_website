@extends('layouts.default')
@section('content')


    <div id="breadcrumb">
        <div class="container">
            <div class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Contact </li>
            </div>
        </div>
    </div>


    <div class="map">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="642" height="443" src="https://maps.google.com/maps?hl=en&q=ccHub, Herbert Macaulay Road, Lagos Mainland, Lagos&ie=UTF8&t=roadmap&z=15&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="https://ultimatewebtraffic.com/">buy websit traffic Ultimatewebtraffic</a></small></div></iframe>
    </div>


    <div id="contact">
        <div class="container">
            <div class="text-center">
                <h3>Drop us a message</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
                    <h2>Contact us any time</h2>
                    <p>Our customer service is available from 8:00am to 9:00pm (GMT+1)
                    </p>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
                    <h2>Contact Info</h2>
                    <ul>
                        <li><i class="fa fa-home fa-2x"></i> No 32, Barikisu Iyede Street, off Unilag road, Yaba,</br>
                            Lagos, Nigeria </li><hr>
                        <li><i class="fa fa-phone fa-2x"></i> +2347039056183 </li><hr>
                        <li><i class="fa fa-envelope fa-2x"></i> info@grandilo.com</li>
                    </ul>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                    <?php
                    if (isset($msg)) {
                        redirect_to('index.php');
                    }else {
                    ?>
                    <form class="form-inline" role="form" name="theform" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="myname" id="myname" required autofocus placeholder="Name" value="<?php if (isset($myname)) { echo $myname; } ?>">
                            <?php if (isset($err_myname)) { echo $err_myname; } ?>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="myemail" id="myemail" placeholder="email" autofocus  value="<?php if (isset($myemail)) { echo $myemail; } ?>" >
                            <?php if (isset($err_myemail)) { echo $err_myemail; } ?>
                        </div>

                    </form>

                    <form>

                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="subject" title="Please enter your subject" autofocus value="<?php if (isset($subject)) { echo $subject; } ?>" >
                            <?php if (isset($err_subject)) { echo $err_subject; } ?>
                        </div>
                        <textarea class="form-control" name="mycomments" id="mycomments" placeholder="message" rows="5"></textarea>
                        <?php if (isset($mycomments)) { echo $mycomments; } ?>
                        <div class="form-group">
                            <button class="btn btn-primary btn-default  " type="submit" name="action" value="submit" >Submit Message </button>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div><!--/#contact-->

@stop