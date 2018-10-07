<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Fundis
                </div>

                <div class="links">
                    <form action="/submit/new" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="order_id" name="order_id" placeholder="Order ID" value="{{ old('title') }}">
                </div>
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="order_category" name="order_category" placeholder="Order category" value="{{ old('url') }}">
                </div>
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="order_description" name="order_description" placeholder="Order description" value="{{ old('title') }}">
                </div>
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="order_extra_description" name="order_extra_description" placeholder="order_extra_description" value="{{ old('url') }}">
                </div>
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="torder_location_area" name="order_location_area" placeholder="order_location_area" value="{{ old('title') }}">
                </div>
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="order_location_street" name="order_location_street" placeholder="order_location_street" value="{{ old('url') }}">
                </div>
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="order_location_house" name="order_location_house" placeholder="order_location_house" value="{{ old('title') }}">
                </div>
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="order_phonenumber" name="order_phonenumber" placeholder="order_phonenumber" value="{{ old('url') }}">
                </div>
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="order_time" name="order_time" placeholder="order_time" value="{{ old('title') }}">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
                </div>
            </div>
        </div>
    </body>
</html>
