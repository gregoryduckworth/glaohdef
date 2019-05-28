<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jack and Aisling's Wedding</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        @include('style')
    </head>
    <body>
        <div class="@if (\Request::is('upload')) full-height-dropzone @else full-height @endif">
            <div class="content">
                <div class="title m-b-md">
                    <a href="/" class="title-link">Jack and Aisling's Wedding</a>

                    <div class="links">
                        <a href="{{ route('upload') }}">Upload</a>
                        <a href="{{ route('gallery') }}">Gallery</a>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
        @yield('scripts')
    </body>
</html>