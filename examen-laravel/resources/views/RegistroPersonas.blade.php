<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Personas</h1>
                        <table class="table">
                            <th>Tipo Documento</th>
                            <th>Documento</th>
                            <th>Primer Nombre</th>
                            <th>Segundo Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            @isset($personas)
                                @foreach($personas as $persona)
                                    <tr>
                                        <td>{{$persona->tipo_documento}}</td>
                                        <td>{{$persona->numero_documento}}</td>
                                        <td>{{$persona->primer_nombre}}</td>
                                        <td>{{$persona->segundo_nombre}}</td>
                                        <td>{{$persona->primer_apellido}}</td>
                                        <td>{{$persona->segundo_apellido}}</td>
                                    </tr>
                                @endforeach
                            @endisset
                        </table>
                        @isset($mensaje)
                            <h4>{{$mensaje}}</h4>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
