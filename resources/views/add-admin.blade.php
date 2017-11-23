@extends('layouts.default')
@section("content")

        <form action="" method="_POST">
            <h2 class="text-center">SIGN UP</h2>

            <div class="col-md-8">
                <label>Offical Email:</label>
                <input type="email" name="offical_email" class="form-control">
            </div>
            <div class="col-md-4">
                <label>Password:</label>
                <input type="password" name="admin_password" class="form-control">
            </div>
            <div class="col-md-4">
                <label>Confirm Password:</label>
                <input type="password" name="admin_password" class="form-control">
            </div><br/>
            <div>
                <input type="submit" name="submits" class="btn btn-info" value="Send">
            </div>
        </form>
@stop