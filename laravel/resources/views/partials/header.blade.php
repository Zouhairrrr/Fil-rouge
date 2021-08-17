
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{ 'You-In' }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    
<body class="antialiased">

    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        <a class="navbar-brand" href="{{'/'}}"><i class="font-italic font-weight-lighter text-light">You-In</i></a>
        <div class="collapse navbar-collapse ml-4" id="collapsibleNavId">
        </div>
        
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <!--  -->

            <li class="nav-item active">
             <div class="input-group">
                <button type="button" class="font-italic font-weight-bold text-dark btn  btn-info dropdown-toggle"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    S'incrire
                </button>
                <div class="dropdown-menu bg-soft-info">
                    <a class="dropdown-item text-dark" href="{{route('provider.register')}}">Job Provider</a>
                    <a class="dropdown-item text-dark" href="{{route('seeker.register')}}">Job Seeker</a>
                </div>
            </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link font-italic font-weight-bold text-dark" href="{{ route('seeker.login')}}">S'identifer</a>
            </li>
        </ul>
    </nav>