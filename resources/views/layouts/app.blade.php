<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  --}}
</head>
<body>
    @include('inc.topbar')
    <div class="row">
        @include('inc.messages')
        @yield('content')
    </div>
</body>
</html>