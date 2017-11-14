@extends('layouts.default')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <form action="" method="_POST">
                <div>
                    <label class="blog_title">Title</label>
                    <input type="text" name="" class="form-control">
                </div>
                <div>
                    <label class="blog_title">Picture</label>
                    <input type="image" name="" class="form-control">
                </div>
                <div>
                    <label class="blog_title">Message</label>
                    <input type="text-area" name="" class="form-control">
                </div>
                <div>
                    <input type="submit" name="" class="form-control" value="Send">
                </div>

            </form>
        </div>
    </div>

@stop
