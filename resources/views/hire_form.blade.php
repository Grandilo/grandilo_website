@extends('layouts.default')
@section('content')

    <?php
    if (isset($msg)) {
        echo '</br></br></br></br></br><div id="formmessage"><p>', $msg , '<a href="index.php"> Back to home page</a></p></div>';
    }else {
    ?>
    </br></br></br></br></br></br>
    <div class="form-group container" >
        <form id="myform" name="theform" class="group" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <span id="formerror" class="error"></span>

            <label for="myname">Name *</label>
            <input type="text" class="form-control" name="myname" id="myname" required title="Please enter your name" autofocus placeholder="" value="<?php if (isset($myname)) { echo $myname; } ?>" />
            <?php if (isset($err_myname)) { echo $err_myname; } ?>

            <label for="myemail">Email Address *</label>
            <input type="email" class="form-control" name="myemail" id="myemail" title="Please enter your Email" autofocus  value="<?php if (isset($myemail)) { echo $myemail; } ?>" />
            <?php if (isset($err_myemail)) { echo $err_myemail; } ?>

            <label for="myphone_number">Phone Number *</label>
            <input type="tel" class="form-control" name="myphone_number" id="myphone_number" title="Please enter your phone number" autofocus value="<?php if (isset($myphone_number)) { echo $myphone_number; } ?>" />
            <?php if (isset($err_myphone_number)) { echo $err_myphone_number; } ?>

            <label for="mycountry">Country *</label>
            <input type="text" class="form-control" name="mycountry" id="mycountry" title="Please enter your country" autofocus value="<?php if (isset($mycountry)) { echo $mycountry; } ?>" />
            <?php if (isset($err_mycountry)) { echo $err_mycountry; } ?>

            <label for="mycompanysite">Your company's website</label>
            <input type="url" class="form-control" name="mycompanysite" id="mycompanysite" title="Please enter your name"  value="<?php if (isset($mycompanysite)) { echo $mycompanysite; } ?>" />
            <?php if (isset($err_mycompanysite)) { echo $err_mycompanysite; } ?>

            <label for="reference">How did you hear about us?</label>
            <select name="reference" id="reference" class="form-control">
                <option value="">Choose...</option>
                <option value="friend"
                <?php if ((isset($reference)) && ($reference === 'friend')) { echo "selected"; } ?>>A friend</option>
                <option value="facebook"
                <?php if ((isset($reference)) && ($reference === 'facebook')) { echo "selected"; } ?>>Facebook</option>
                <option value="twitter"
                <?php if ((isset($reference)) && ($reference === 'twitter')) { echo "selected"; } ?>>Twitter</option>
            </select>

            <label for="mycomments">Technical Need: * <br/> Tell us what you want our staff to do for you</label>
            <textarea class="form-control" name="mycomments" id="mycomments" rows="10" ><?php if (isset($mycomments)) { echo $mycomments; } ?></textarea>

            <button class="btn btn-primary btn-lg " type="submit" name="action" value="submit">send</button>
        </form>
    </div>

    <?php } ?>

@stop