@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LecturerLounge</title>

    </head>
    <body class="antialiased">
        @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4" style="padding-top: 100px">
                    <div style="text-align:center"><h1>Welcome to LecturerLounge</h1></div>
                    <div class="row">
                        <div class="col">
                            <div class="card w-150 text-center">
                                <div class="card-body justify-content-center">
                                    <p>
                                    <p>
                                    <p class="card-text">Join LecturerLounge now to simplify and ease your college life!</p>
                                    <p>
                                    <a href="{{ route('register') }}" class="btn btn-primary justify content-center">Register here</a>
                                    <p>
                                    <p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card w-100 text-center">
                                <div class="card-body justify-content-center">
                                    <p>
                                    <p>
                                    <p class="card-text">Curious about the advantage of using LecturerLounge? Click below to find out more</p>
                                    <p>
                                    <a href="#" class="btn btn-primary justify content-center">Learn more</a>
                                    <p>
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>
