<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fundis</title>

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
        <div>
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
                <div class="title" style="font-size:50px">
                    Fundis Portal
                </div>

                
                <table class="table table-hover" style="width:100%">
                    <tr class="warning">
                        <th>Order ID</th>
                        <th>Order Category</th>
                        <th>Order Description</th>
                        <th>Order Extra</th>
                        <th>Location</th>
                        <th>Street</th>
                        <th>House No</th>
                        <th>Phone No</th>
                        <th>Time</th>
                    </tr>

                    @foreach($orders as $order)
                    <tr class="info">
                        <td>{{$order->order_id}}</td>
                        <td>{{$order->order_category}}</td>
                        <td>{{$order->order_description}}</td>
                        <td>{{$order->order_extra_description}}</td>
                        <td>{{$order->order_location_area}}</td>
                        <td>{{$order->order_location_street}}</td>
                        <td>{{$order->order_location_house}}</td>
                        <td>{{$order->order_phonenumber}}</td>
                        <td>{{$order->order_time}}</td>
                    </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </body>
</html>
